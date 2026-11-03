<?php

declare(strict_types=1);

namespace Tavaan\Testing;

/**
 * Factory — پیاده‌سازی مطابق مستندات.
 *
 * @see docs/03-engines/ (YAML machine-readable block)
 */
final class Factory
{
    /**
     * definition
     */
    public function definition(/* ... */): mixed
    {
        return null;
    }
    /**
     * create
     */
    public function create(/* ... */): mixed
    {
        return $this;
    }
    /**
     * make
     */
    public function make(/* ... */): mixed
    {
        return null;
    }
    /**
     * count
     */
    public function count(/* ... */): mixed
    {
        return 0;
    }
    /**
     * state
     */
    public function state(/* ... */): mixed
    {
        return null;
    }
}
