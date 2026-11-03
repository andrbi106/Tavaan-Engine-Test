<?php

declare(strict_types=1);

namespace Tavaan\Testing\Contracts;

/**
 * قرارداد TestRunner.
 *
 * @see \Tavaan\Testing\TestRunner
 * @api 1.0
 */
interface TestRunnerInterface
{
    /**
     * متد run.
     *
     * @return mixed
     */
    public function run(/* ... */): mixed;

    /**
     * متد suite.
     *
     * @return mixed
     */
    public function suite(/* ... */): mixed;

    /**
     * متد result.
     *
     * @return mixed
     */
    public function result(/* ... */): mixed;
}