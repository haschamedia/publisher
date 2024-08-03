<?php

namespace Publisher\Services\Handler;

use Publisher\Fundamentals\Modelable;
use Publisher\Contracts\Services\Produce;
use Publisher\Services\Application\Publishing;
use Publisher\Services\Application\Versioning;
use Publisher\Contracts\Services\Applicationable;

class Publish implements Applicationable
{
    public function __construct(
        private ?string $appId = null,
        private ?Produce $produce = null
    )
    {}

    /**
     * instance new Versioning
     * 
     */
    private function versioning(): Produce
    {
        return new Versioning();
    }

    /**
     * instance new Publishing
     * 
     */
    private function publishing(): Produce
    {
        return new Publishing();
    }

    public static function into(
        ?string $appId = null,
        ?Produce $produce = null
    ): Publish
    {
        // if(empty($appId)) $appId = null;
        // if(! $produce instanceof Produce) $produce = null;
        return new self($appId, $produce);
    }

    public function set(
        ?string $appId = null,
        ?Produce $produce = null
    ): Publish
    {
        if(!empty($appId)) $this->appId = $appId;
        if($produce instanceof Produce) $this->produce = $produce;
        return $this;
    }

    public function compile(): Modelable
    {}

    public function extract(string $vinTag): Modelable
    {}

    public function extractPlans(string $plansId, string $vinTag): Modelable
    {}

    /**
     * check release by appId
     * 
     */
    public function isRelease(): bool
    {
        return $this->versioning()->isRelease($this->appId);
    }

    public function hasPublish(string $appId): Modelable
    {}

    public function hasVersion(string $vinTag): Modelable
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