<?php

declare(strict_types=1);

namespace Tests\Feature;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

final class HomePageTest extends CIUnitTestCase
{
    use FeatureTestTrait;

    public function testHomePageLoads(): void
    {
        $response = $this->get('/');

        $response->assertOK();
    }

    public function testPageHasBasicHtmlStructure(): void
    {
        $response = $this->get('/');

        $response->assertOK();

        $body = $response->getBody();

        // Check for basic HTML structure
        $this->assertStringContainsString('<html', $body);
        $this->assertStringContainsString('<head>', $body);
        $this->assertStringContainsString('<body>', $body);
        $this->assertStringContainsString('</html>', $body);
    }

    public function testPageHasTitleTag(): void
    {
        $response = $this->get('/');

        $response->assertOK();

        $body = $response->getBody();
        $this->assertStringContainsString('<title>', $body);
    }

    public function testPageHasMetaOrAssetTags(): void
    {
        $response = $this->get('/');

        $response->assertOK();

        $body = $response->getBody();

        // Look for meta tags, CSS, or JS (at least one should exist)
        $hasMetaOrAssets = (
            str_contains($body, '<meta') ||
            str_contains($body, '<link') ||
            str_contains($body, '<script') ||
            str_contains($body, '.css') ||
            str_contains($body, '.js')
        );

        $this->assertTrue($hasMetaOrAssets, 'Page should have meta tags or asset links');
    }
}
