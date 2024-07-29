<?php

namespace Publisher\Fundamentals\Release;

use Illuminate\Database\Eloquent\Model;
use Publisher\Configurations\DBConnect;
use Illuminate\Database\Eloquent\SoftDeletes;

class Release extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'application_product_id',
        'code',
        'released_at',
        'notes',
    ];

    protected $connection = DBConnect::BASE->value;
    protected $table = 'releases';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;
}