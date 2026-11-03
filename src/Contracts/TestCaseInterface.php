<?php

declare(strict_types=1);

namespace Tavaan\Testing\Contracts;

/**
 * قرارداد TestCase.
 *
 * @see \Tavaan\Testing\TestCase
 * @api 1.0
 */
interface TestCaseInterface
{
    /**
     * متد assertTrue.
     *
     * @return mixed
     */
    public function assertTrue(/* ... */): mixed;

    /**
     * متد assertSame.
     *
     * @return mixed
     */
    public function assertSame(/* ... */): mixed;

    /**
     * متد assertEquals.
     *
     * @return mixed
     */
    public function assertEquals(/* ... */): mixed;

    /**
     * متد expectException.
     *
     * @return mixed
     */
    public function expectException(/* ... */): mixed;

    /**
     * متد get.
     *
     * @return mixed
     */
    public function get(/* ... */): mixed;

    /**
     * متد post.
     *
     * @return mixed
     */
    public function post(/* ... */): mixed;

    /**
     * متد postJson.
     *
     * @return mixed
     */
    public function postJson(/* ... */): mixed;

    /**
     * متد actingAs.
     *
     * @return mixed
     */
    public function actingAs(/* ... */): mixed;

    /**
     * متد ....
     *
     * @return mixed
     */
    public function ...(/* ... */): mixed;
}