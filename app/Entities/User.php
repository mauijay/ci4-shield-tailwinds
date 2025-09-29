<?php declare(strict_types=1);

// filepath: c:\1.Git\01_ci4\463\02_MyProjects\ci4-shield-tailwinds\app\Entities\User.php

namespace App\Entities;

use CodeIgniter\Shield\Entities\User as ShieldUser;

class User extends ShieldUser
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];

    // Add any custom properties or methods here
}
