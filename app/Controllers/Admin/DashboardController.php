<?php

declare(strict_types=1);

namespace App\Controllers\Admin;
use App\Controllers\Admin\BaseAdminController;



class DashboardController extends BaseAdminController
{
    public function index(): string
    {
      $data = [
          'title' => 'Admin Dashboard',
      ];

      return $this->render('admin/dashboard', $data);
    }
}
