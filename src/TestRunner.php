<?php

declare(strict_types=1);

namespace Tavaan\Testing;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * TestRunner — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Testing\Contracts\TestRunnerInterface
 */
final class TestRunner implements Contracts\TestRunnerInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function run(/* ... */): mixed
    {
        // TODO: پیاده‌سازی run مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function suite(/* ... */): mixed
    {
        // TODO: پیاده‌سازی suite مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function result(/* ... */): mixed
    {
        // TODO: پیاده‌سازی result مطابق مستندات (سند §3 API).
        return null;
    }
}