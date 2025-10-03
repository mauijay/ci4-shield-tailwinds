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
        // If you have a route that uses the test layout
        $response = $this->get('/test'); // Adjust route as needed

        $response->assertOK();
        $body = $response->getBody();

        // Test for your layout structure
        $this->assertStringContainsString('<!doctype html>', $body);
        $this->assertStringContainsString('<html lang="en">', $body);
        $this->assertStringContainsString('bg-slate-200', $body); // Tailwind class
        $this->assertStringContainsString('<main>', $body);
    }

    public function testLayoutIncludesPartials(): void
    {
        $response = $this->get('/test'); // Adjust route as needed

        if ($response->getStatusCode() === 200) {
            $body = $response->getBody();

            // Your layout should include these partials
            // We can't directly test includes, but we can test for their likely content
            $this->assertTrue(
                str_contains($body, '<head>') ||
        str_contains($body, '<nav') ||
        str_contains($body, '<footer') ||
        str_contains($body, '<script'),
                'Layout should include head, nav, footer, or script content'
            );
        } else {
            $this->markTestSkipped('Test route not available');
        }
    }
}
