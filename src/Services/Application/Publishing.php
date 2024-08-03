<?php

namespace Publisher\Services\Application;

use Publisher\Traits\ModelableTraits;
use Publisher\Contracts\Services\Produce;
use Publisher\Contracts\Application\Publisher;

class Publishing extends Publisher implements Produce
{
    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * use $modelable as object
     * 
     * includes functionalities that support classconstruction as
     * well as how to call them
     * 
     */
    use ModelableTraits;
}