<?php

declare(strict_types=1);

namespace Tavaan\Testing\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * test command.
 */
final class TestCommand implements CommandInterface
{
    public function name(): string
    {
        return 'test';
    }

    public function description(): string
    {
        return 'Run test (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
