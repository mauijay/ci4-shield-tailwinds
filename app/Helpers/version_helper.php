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
    /**
     * Get asset version for cache busting
     */
    function asset_version(): string
    {
        static $assetVersion = null;

        if ($assetVersion === null) {
            $composerFile = ROOTPATH . 'composer.json';
            $baseVersion = app_version();

            if (file_exists($composerFile)) {
                // Convert filemtime() result to string before hashing
                $timestamp = filemtime($composerFile);
                $hash = substr(md5((string)$timestamp), 0, 8);
                $assetVersion = $baseVersion . '.' . $hash;
            } else {
                $assetVersion = $baseVersion;
            }
        }

        return $assetVersion;
    }
}

if (!function_exists('cache_buster')) {
    /**
     * Simple cache buster using app version
     */
    function cache_buster(): string
    {
        return '?v=' . app_version();
    }
}
