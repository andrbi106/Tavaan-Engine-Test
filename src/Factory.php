<?php

declare(strict_types=1);

namespace Tavaan\Testing;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Factory — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Testing\Contracts\FactoryInterface
 */
final class Factory implements Contracts\FactoryInterface
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
    public function definition(/* ... */): mixed
    {
        // TODO: پیاده‌سازی definition مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function create(/* ... */): mixed
    {
        // TODO: پیاده‌سازی create مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function make(/* ... */): mixed
    {
        // TODO: پیاده‌سازی make مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function count(/* ... */): mixed
    {
        // TODO: پیاده‌سازی count مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function state(/* ... */): mixed
    {
        // TODO: پیاده‌سازی state مطابق مستندات (سند §3 API).
        return null;
    }
}