<?php

namespace Publisher\Fundamentals\Release;

use Illuminate\Database\Eloquent\Model;
use Publisher\Configurations\DBConnect;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceVersion extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'release_id',
        'vin_tag',
        'application_service_code',
        'serviceable'
    ];

    protected $connection = DBConnect::RELEASE->value;
    protected $table = 'service_versions';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;
}
