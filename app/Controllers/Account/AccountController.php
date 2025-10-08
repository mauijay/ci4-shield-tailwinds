<?php

declare(strict_types=1);

namespace App\Controllers\Account;

use App\Controllers\BaseController;

class AccountController extends BaseController
{
    public function index(): void
    {
        echo "Account Controller";
    }

    public function profile(): void
    {
        echo "User Profile";
    }

    public function edit(): void
    {
        echo "Edit Profile";
    }

    public function update(): void
    {
        echo "Update Profile";
    }
}
