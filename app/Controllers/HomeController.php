<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\ServiceModel;

class HomeController extends BaseController
{
    protected ServiceModel $serviceModel;

    public function index(): string
    {
        $data = [
            'title'   => 'Home Title',
            'heading' => 'Hawaii Business Development',
            'keyword' => 'business development',
            'desc'    => '808 Business Solutions small business development.',
        ];

        // session()->remove('step');
        return view('home', $data);
    }

    public function about(): string
    {
        $data = [
            'title'   => 'ABOUT US',
            'heading' => 'About Us Hawaii Business Development',
            'keyword' => 'about us',
            'desc'    => 'about us small business development.',
        ];

        // session()->remove('step');
        return view('pages/about', $data);
    }

    public function services(): string
    {
        $this->serviceModel = new ServiceModel();
        $data = [
            'title'   => 'SERVICES',
            'heading' => 'Services for Hawaii Business Development',
            'keyword' => 'products and services',
            'desc'    => 'our services for small business development.',
            'services' => $this->serviceModel->orderBy('created_at', 'DESC')->findAll(),
        ];

        // session()->remove('step');
        return view('pages/service', $data);
    }

    public function contact(): string
    {
        $data = [
            'title'   => 'CONTACT US',
            'heading' => 'CONTACT US Hawaii Business Development',
            'keyword' => 'contact',
            'desc'    => 'CONTACT US ci4 template.',
        ];

        // session()->remove('step');
        return view('pages/contact', $data);
    }

    public function lp(): string
    {
        $data = [
            'title'   => 'Landing Page  Title from Controller',
            'heading' => 'Landing Page  Hawaii Business Development',
            'keyword' => 'Landing Page  Hawaii Business Development',
            'desc'    => 'Landing Page  808 Business Solutions small business development.',
        ];

        // session()->remove('step');
        return view('pages/landing_page', $data);
    }
}
