<?php declare(strict_types=1);

if (!function_exists('app_version')) {
    /**
     * Get application version from composer.json
     */
    function app_version(): string
    {
        static $version = null;

        if ($version === null) {
            $composerFile = ROOTPATH . 'composer.json';

            if (file_exists($composerFile)) {
                $composerData = json_decode(file_get_contents($composerFile), true);
                $version = $composerData['version'] ?? '0.0.0';
            } else {
                $version = '0.0.0';
            }
        }

        return $version;
    }
}

if (!function_exists('asset_version')) {
    function asset_version(): string
    {
        return app_version() . '.' . substr(md5(filemtime(ROOTPATH . 'composer.json')), 0, 8);
    }
}
