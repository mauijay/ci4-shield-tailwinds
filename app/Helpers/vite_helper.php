<?php

if (!function_exists('vite_assets')) {
    function vite_assets(string $entry = 'main'): string
    {
        $isDev = ENVIRONMENT === 'development';
        $viteServer = 'http://localhost:5173';
        
        if ($isDev) {
            // Development mode - load from Vite dev server
            return "<script type=\"module\" src=\"{$viteServer}/@vite/client\"></script>\n" .
                   "<script type=\"module\" src=\"{$viteServer}/src/assets/{$entry}.js\"></script>";
        }
        
        // Production mode - load built assets
        $manifestPath = FCPATH . 'assets/manifest.json';
        
        if (!file_exists($manifestPath)) {
            return "<!-- Vite manifest not found. Run 'npm run build' -->";
        }
        
        $manifest = json_decode(file_get_contents($manifestPath), true);
        $entryFile = "src/assets/{$entry}.js";
        
        if (!isset($manifest[$entryFile])) {
            return "<!-- Entry {$entryFile} not found in manifest -->";
        }
        
         $entry = $manifest[$entryFile];
        $html = "";
        
        // Add CSS files
        if (isset($entry['css'])) {
            foreach ($entry['css'] as $css) {
                $html .= "<link rel=\"stylesheet\" href=\"/assets/{$css}\">\n";
            }
        }
        
        // Add JS file
        $html .= "<script type=\"module\" src=\"/assets/{$entry['file']}\"></script>";
        
        return $html;
    }
}