<?php

namespace Publisher\Fundamentals\Release;

use Illuminate\Database\Eloquent\Model;
use Publisher\Configurations\DBConnect;
use Illuminate\Database\Eloquent\SoftDeletes;

class Version extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'release_id',
        'major',
        'minor',
        'patch',
        'candidate',
        'beta',
        'alpha',
        'vin_tag'
    ];

    protected $connection = DBConnect::RELEASE->value;
    protected $table = 'versions';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;
}