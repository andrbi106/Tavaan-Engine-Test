<?php

declare(strict_types=1);

namespace Tavaan\Testing\Contracts;

/**
 * قرارداد Factory.
 *
 * @see \Tavaan\Testing\Factory
 * @api 1.0
 */
interface FactoryInterface
{
    /**
     * متد definition.
     *
     * @return mixed
     */
    public function definition(/* ... */): mixed;

    /**
     * متد create.
     *
     * @return mixed
     */
    public function create(/* ... */): mixed;

    /**
     * متد make.
     *
     * @return mixed
     */
    public function make(/* ... */): mixed;

    /**
     * متد count.
     *
     * @return mixed
     */
    public function count(/* ... */): mixed;

    /**
     * متد state.
     *
     * @return mixed
     */
    public function state(/* ... */): mixed;
}