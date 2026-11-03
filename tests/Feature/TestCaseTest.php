<?php

declare(strict_types=1);

namespace Tavaan\Testing\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Testing\TestCase;
use Tavaan\Testing\TestCaseServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور TestCase.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class TestCaseTest extends TestCase
{
    private TestCase $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new TestCase($config);
    }

    public function testEngineInstantiates(): void
    {
        $this->assertInstanceOf(TestCase::class, $this->engine);
    }

}