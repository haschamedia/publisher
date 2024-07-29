<?php

namespace Publisher\Fundamentals\Release;

use Illuminate\Database\Eloquent\Model;
use Publisher\Configurations\DBConnect;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceFeature extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'service_version_id',
        'feature_id',
        'feature_model_id',
        'service_feature_code',
        'priority',
        'type'
    ];

    protected $connection = DBConnect::RELEASE->value;
    protected $table = 'service_features';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;
}
