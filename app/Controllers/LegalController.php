<?php

declare(strict_types=1);

namespace App\Controllers;

class LegalController extends BaseController
{
    public function privacy()
    {
        return $this->render('privacy');
    }

    public function terms()
    {
        return $this->render('terms');
    }
}
