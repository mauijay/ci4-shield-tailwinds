<?php

declare(strict_types=1);

/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the framework's
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 *
 * @see: https://codeigniter.com/user_guide/extending/common.html
 */
use App\Libraries\Theme;

if (! function_exists('policy')) {
    /**
     * A convenience method for accessing the Policy service.
     */
    function policy(string $permission, mixed ...$arguments): bool
    {
        return service('policy')->can($permission, ...$arguments);
    }
}

if (! function_exists('theme')) {
    /**
     * A convenience method for accessing the Theme service.
     * Especially useful for views.
     */
    function theme(): Theme
    {
        return service('theme');
    }
}

/**
 * Generates the URLs to the vite resources.
 */
function vite(array|string $path): string
{
    $vite = service('vite');

    if (! is_array($path)) {
        $path = [$path];
    }

    return $vite->links($path);
}
