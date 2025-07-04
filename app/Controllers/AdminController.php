<?php

declare(strict_types=1);

namespace App\Controllers;

/**
 * Summary of AdminController
 *
 * provide a base controller for the Admin folder to be extended from
 */
class AdminController extends BaseController
{
    protected ?string $theme = 'admin';
}
