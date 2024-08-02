<?php

namespace Publisher\Services\Handler;

use Publisher\Fundamentals\Modelable;
use Publisher\Contracts\Services\Produce;
use Publisher\Contracts\Services\Applicationable;

class Publish implements Applicationable
{
    public function __construct(
        ?string $appId = null,
        ?Produce $produce = null
    )
    {}

    public static function into(
        ?string $appId = null,
        ?Produce $produce = null
    ): Publish
    {}

    public function set(
        ?string $appId = null,
        ?Produce $produce = null
    ): Publish
    {}

    public function compile(): Modelable
    {}

    public function extract(string $vinTag): Modelable
    {}

    public function extractPlans(string $plansId, string $vinTag): Modelable
    {}

    public function hasVersion(string $vinTag): Modelable
    {}

    public function hasPublish(string $vinTag): Modelable
    {}

    public function newRelease(): Produce
    {}

    public function newPublish(): Produce
    {}

    public function get(): Produce
    {}

    public static function produce(): Produce
    {}
}