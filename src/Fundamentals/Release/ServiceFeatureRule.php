<?php

namespace Publisher\Fundamentals\Release;

use Illuminate\Database\Eloquent\Model;
use Publisher\Configurations\DBConnect;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceFeatureRule extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'service_plans_id',
        'service_feature_id',
        'feature_rule_id',
        'code',
        'is_public_info',
        'component',
        'component_type',
        'is_public_integration',
        'is_personalized',
        'is_required_authority',
        'content_value',
        'data_type',
        'rule'
    ];

    protected $connection = DBConnect::RELEASE->value;
    protected $table = 'service_feature_rules';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;
}
