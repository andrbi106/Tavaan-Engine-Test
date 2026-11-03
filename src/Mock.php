<?php

declare(strict_types=1);

namespace Tavaan\Testing;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Mock — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Testing\Contracts\MockInterface
 */
final class Mock implements Contracts\MockInterface
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
    public function of(/* ... */): mixed
    {
        // TODO: پیاده‌سازی of مطابق مستندات (سند §3 API).
        return null;
    }
}