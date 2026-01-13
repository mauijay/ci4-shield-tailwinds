<?php

declare(strict_types=1);

namespace Tests\Feature;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

final class LayoutTest extends CIUnitTestCase
{
    use FeatureTestTrait;

    public function testTestLayoutLoads(): void
    {
        $response = $this->get('/test');

        $response->assertOK();
        $body = $response->getBody();

        // Test for layout structure (more flexible)
        $this->assertMatchesRegularExpression('/<!doctype\s+html>/i', $body);
        $this->assertStringContainsString('<html lang="en">', $body);
        $this->assertStringContainsString('bg-slate-200', $body);
        $this->assertStringContainsString('<main>', $body);
    }

    public function testLayoutIncludesNavbar(): void
    {
        $response = $this->get('/test');
        $response->assertOK();

        $body = $response->getBody();
        $this->assertStringContainsString('<nav', $body);
        $this->assertStringContainsString('Get started', $body);
    }

    public function testLayoutIncludesFooter(): void
    {
        $response = $this->get('/test');
        $response->assertOK();

        $body = $response->getBody();
        $this->assertStringContainsString('<footer', $body);
        $this->assertMatchesRegularExpression('/Copyright\s+\d{4}/', $body);
    }

    public function testLayoutHasTestPageContent(): void
    {
        $response = $this->get('/test');
        $response->assertOK();

        $body = $response->getBody();
        $this->assertStringContainsString('Test Page', $body);
        $this->assertStringContainsString('This is a test page using the test layout', $body);
    }
}
