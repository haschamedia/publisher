<?php

namespace Publisher\Traits;

use Publisher\Fundamentals\Modelable;

trait ModelableTraits
{
    /**
     * use $modelable as object
     * 
     * includes functionalities that support classconstruction as
     * well as how to call them
     * 
     */
    private ?Modelable $modelable = null;
}