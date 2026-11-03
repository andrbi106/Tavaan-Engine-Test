<?php

declare(strict_types=1);

namespace Tavaan\Testing;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * TestCase — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Testing\Contracts\TestCaseInterface
 */
final class TestCase implements Contracts\TestCaseInterface
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
    public function assertTrue(/* ... */): mixed
    {
        // TODO: پیاده‌سازی assertTrue مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function assertSame(/* ... */): mixed
    {
        // TODO: پیاده‌سازی assertSame مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function assertEquals(/* ... */): mixed
    {
        // TODO: پیاده‌سازی assertEquals مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function expectException(/* ... */): mixed
    {
        // TODO: پیاده‌سازی expectException مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function get(/* ... */): mixed
    {
        // TODO: پیاده‌سازی get مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function post(/* ... */): mixed
    {
        // TODO: پیاده‌سازی post مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function postJson(/* ... */): mixed
    {
        // TODO: پیاده‌سازی postJson مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function actingAs(/* ... */): mixed
    {
        // TODO: پیاده‌سازی actingAs مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function ...(/* ... */): mixed
    {
        // TODO: پیاده‌سازی ... مطابق مستندات (سند §3 API).
        return null;
    }
}