<?php

declare(strict_types=1);

namespace Tests\Feature;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

final class BasicFeatureTest extends CIUnitTestCase
{
    use FeatureTestTrait;

    public function testHomePageReturns200(): void
    {
        $response = $this->get('/');
        $response->assertOK();
    }

    public function testPageHasHtmlStructure(): void
    {
        $response = $this->get('/');
        $response->assertOK();

        $body = $response->getBody();
        $this->assertStringContainsString('<html', $body);
        $this->assertStringContainsString('</html>', $body);
    }
}
