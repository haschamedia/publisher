<?php

namespace Publisher\Contracts\Application;

use Publisher\Contracts\Application\Resourceable;
use Publisher\Services\Application\Release\Releases;
use Publisher\Services\Application\Resources\ApplicationResource;
use Publisher\Services\Application\Integration\IntegrationService;

abstract class Publisher
{
    // ApplicationResource
    protected ApplicationResource $applicationResource;

    // IntegrationService
    protected IntegrationService $integrationService;

    // Releases
    protected Releases $releases;

    /**
     * constructions
     * 
     */
    public function __construct()
    {
        $this->applicationResource = new ApplicationResource;
        $this->integrationService = new IntegrationService;
        $this->releases = new Releases;
    }

    /**
     * new instance
     * 
     */
    abstract protected function resourceable(): Resourceable;
}