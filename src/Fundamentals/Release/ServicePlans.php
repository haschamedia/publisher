<?php

namespace Publisher\Fundamentals\Release;

use Illuminate\Database\Eloquent\Model;
use Publisher\Configurations\DBConnect;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServicePlans extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'service_version_id',
        'service_package_id',
        'service_package_code'
    ];

    protected $connection = DBConnect::RELEASE->value;
    protected $table = 'service_plans';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;
}
