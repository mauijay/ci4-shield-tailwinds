<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Controllers\BaseController;

class TestController extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Test Page',
            'version' => config('app')->version ?? '0.3.5',
        ];

        return view('test_page', $data, ['layout' => 'layouts/test']);
    }

    public function layout(): string
    {
        $data = [
            'title' => 'Layout Test',
            'description' => 'Testing the layout components',
        ];

        return view('test_page', $data, ['layout' => 'layouts/test']);
    }
}