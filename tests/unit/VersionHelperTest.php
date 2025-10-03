<?php

declare(strict_types=1);

namespace Tests\Unit;

use CodeIgniter\Test\CIUnitTestCase;

final class VersionHelperTest extends CIUnitTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        helper('version');
    }

    public function testAppVersionReturnsString(): void
    {
        $version = app_version();

        $this->assertIsString($version);
        $this->assertNotEmpty($version);
    }

    public function testAppVersionMatchesSemanticVersioning(): void
    {
        $version = app_version();

        // Should match semantic versioning pattern (x.y.z)
        $this->assertMatchesRegularExpression('/^\d+\.\d+\.\d+$/', $version);
    }

    public function testCacheBusterReturnsVersionString(): void
    {
        $cacheBuster = cache_buster();

        $this->assertStringStartsWith('?v=', $cacheBuster);
        $this->assertStringContainsString(app_version(), $cacheBuster);
    }
}
