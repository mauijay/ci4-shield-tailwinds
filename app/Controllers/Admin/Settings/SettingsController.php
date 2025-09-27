<?php

namespace App\Controllers\Admin\Settings;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SettingsController extends BaseController
{
    public function index(): void
    {
        echo view('Admin/settings');
    }

    public function systemSettings(): void
    {
        echo view('Admin/system_settings');
    }
}
