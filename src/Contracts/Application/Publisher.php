<?php

namespace Publisher\Contracts\Application;

use Publisher\Contracts\Application\Resourceable;

abstract class Publisher
{
    // new ApplicationResource
    abstract protected function applicationResource(): Resourceable;

    // new IntegrationService
    abstract protected function integrationService(): Resourceable;

    // new Releases
    abstract protected function releases(): Resourceable;
}