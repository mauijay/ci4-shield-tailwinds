<?php declare(strict_types=1);

if (!function_exists('vite_manifest_path')) {
    /**
     * Returns the first existing Vite manifest path.
     */
    function vite_manifest_path(): ?string
    {
        $paths = [
            FCPATH . 'assets/manifest.json',
            FCPATH . 'assets/.vite/manifest.json',
        ];

        foreach ($paths as $path) {
            if (is_file($path)) {
                return $path;
            }
        }

        return null;
    }
}

if (!function_exists('vite_assets')) {
    /**
     * Load assets intelligently based on available files and dev server
     */
    function vite_assets(string $entry = 'app'): string
    {
        // Check if Vite dev server is running
        if (ENVIRONMENT !== 'production' && vite_dev_server_running()) {
            return vite_dev_assets($entry);
        }

        // Check if Vite manifest exists (production build)
        if (vite_manifest_path() !== null) {
            return vite_production_assets($entry);
        }

        // Fallback: try to load hashed build outputs even if manifest wasn't uploaded
        return vite_guess_assets($entry) ?: vite_cli_assets($entry);
    }
}

if (!function_exists('vite_guess_assets')) {
    /**
     * Best-effort fallback for shared hosts where the manifest didn't upload.
     * Tries to locate hashed Vite outputs under assets/css and assets/js.
     */
    function vite_guess_assets(string $entry): string
    {
        $html = '';

        $cssCandidates = array_merge(
            glob(FCPATH . "assets/css/{$entry}-*.css") ?: [],
            glob(FCPATH . "assets/css/{$entry}.css") ?: [],
        );

        $jsCandidates = array_merge(
            glob(FCPATH . "assets/js/{$entry}-*.js") ?: [],
            glob(FCPATH . "assets/js/{$entry}.js") ?: [],
        );

        if ($cssCandidates !== []) {
            $cssFile = basename($cssCandidates[0]);
            $html .= '<link rel="stylesheet" href="' . base_url('assets/css/' . $cssFile) . "\">\n";
        }

        if ($jsCandidates !== []) {
            $jsFile = basename($jsCandidates[0]);
            $html .= '<script type="module" src="' . base_url('assets/js/' . $jsFile) . '"></script>';
        }

        return $html;
    }
}

if (!function_exists('vite_cli_assets')) {
    /**
     * Load assets for CLI build workflow
     */
    function vite_cli_assets(string $entry): string
    {
        $html = "";

        // Map entry names to actual file names
        $cssFiles = [
            'app' => 'styles.css',
            'admin' => 'admin.css',
            'main' => 'styles.css'
        ];

        $jsFiles = [
            'app' => 'app.js',
            'admin' => 'admin.js',
            'main' => 'app.js'
        ];

        // Load CSS
        $cssFile = $cssFiles[$entry] ?? 'styles.css';
        $cssPath = FCPATH . "assets/css/{$cssFile}";
        if (file_exists($cssPath)) {
            $html .= "<link rel=\"stylesheet\" href=\"" . base_url("assets/css/{$cssFile}" . cache_buster()) . "\">\n";
        }

        // Load JS
        $jsFile = $jsFiles[$entry] ?? 'app.js';
        $jsPath = FCPATH . "assets/js/{$jsFile}";
        if (file_exists($jsPath)) {
            $html .= "<script src=\"" . base_url("assets/js/{$jsFile}" . cache_buster()) . "\"></script>";
        }

        return $html;
    }
}

if (!function_exists('vite_dev_assets')) {
    /**
     * Load assets from Vite dev server
     */
    function vite_dev_assets(string $entry): string
    {
        $viteServer = 'http://localhost:5173';

        return "<script type=\"module\" src=\"{$viteServer}/@vite/client\"></script>\n" .
               "<script type=\"module\" src=\"{$viteServer}/src/assets/js/{$entry}.js\"></script>";
    }
}

if (!function_exists('vite_production_assets')) {
    /**
     * Load production assets from manifest
     */
    function vite_production_assets(string $entry): string
    {
        $manifestPath = vite_manifest_path();
        if ($manifestPath === null) {
            return vite_guess_assets($entry) ?: vite_cli_assets($entry);
        }

        $manifest = json_decode(file_get_contents($manifestPath), true);

        if (!$manifest) {
            return vite_guess_assets($entry) ?: vite_cli_assets($entry);
        }

        $entryFile = "src/assets/js/{$entry}.js";

        if (!isset($manifest[$entryFile])) {
            return vite_guess_assets($entry) ?: vite_cli_assets($entry);
        }

        $entryData = $manifest[$entryFile];
        $html = "";

        // Add CSS files
        if (isset($entryData['css'])) {
            foreach ($entryData['css'] as $css) {
                $html .= "<link rel=\"stylesheet\" href=\"" . base_url("assets/{$css}") . "\">\n";
            }
        }

        // Add JS file
        $html .= "<script type=\"module\" src=\"" . base_url("assets/{$entryData['file']}") . "\"></script>";

        return $html;
    }
}

if (!function_exists('vite_dev_server_running')) {
    /**
     * Check if Vite dev server is running
     */
    function vite_dev_server_running(): bool
    {
        static $isRunning = null;

        if ($isRunning === null) {
            $viteServer = 'http://localhost:5173';

            $context = stream_context_create([
                'http' => [
                    'timeout' => 2,
                    'ignore_errors' => true
                ]
            ]);

            $result = @file_get_contents($viteServer, false, $context);
            $isRunning = $result !== false;
        }

        return $isRunning;
    }
}
