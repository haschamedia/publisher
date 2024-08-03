<?php

namespace Publisher\Services\Application\Release;

use Publisher\Fundamentals\Release\Release;
use Publisher\Contracts\Application\Resourceable;

class Releases implements Resourceable
{
    /**
     * check release
     * 
     */
    public function checkRelease(string $appId, bool $isCounter = false): bool|int
    {
        if(empty($appId)) return false;
        $result = Release::where('application_product_id', '=', $appId)->count();

        // is Counter true
        if($isCounter) return (int) $result;
        // is result (bool)
        return $result >= 1 ? true : false;
    }
}