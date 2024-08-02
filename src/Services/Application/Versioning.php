<?php

namespace Publisher\Services\Application;

use Publisher\Traits\ModelableTraits;
use Publisher\Contracts\Services\Produce;
use Publisher\Contracts\Application\Publisher;
use Publisher\Contracts\Application\Resourceable;

class Versioning extends Publisher implements Produce
{
    /**
     * use $modelable as object
     * 
     * includes functionalities that support classconstruction as
     * well as how to call them
     * 
     */
    use ModelableTraits;

    /**
     * implement abstract
     * 
     */
    protected function resourceable(): Resourceable
    {}

    public static function has(): Modelable
    {}

    public function hasVersion(): Modelable
    {}
}