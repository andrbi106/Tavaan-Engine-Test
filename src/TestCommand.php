<?php

declare(strict_types=1);

namespace Tavaan\Testing;

/**
 * Command `test` — اجرای تمام تست‌ها از مسیر داده‌شده.
 */
final class TestCommand
{
    public function name(): string
    {
        return 'test';
    }

    public function description(): string
    {
        return 'اجرای چارچوب تست Tavaan (Native runner).';
    }

    public function handle(array $args = []): int
    {
        $dir = $args[0] ?? 'tests';
        if (!\is_dir($dir)) {
            echo "Test directory not found: {$dir}\n";
            return 1;
        }
        echo "Running tests in: {$dir}\n";
        $result = TestRunner::runDirectory($dir, verbose: true);
        echo "\n" . $result->summary() . "\n";
        return $result->isPassed() ? 0 : 1;
    }
}
