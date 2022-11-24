<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $table = 'device';

    protected $primaryKey  = 'deviceId';

    protected $fillable = [
		'deviceName', 'deviceCustomizedName','deviceIP', 'port', 'lastDeviceTime', 'pinWidth', 'created_at', 'updated_at'

    ];

    protected $casts = [
        'deviceId'=> 'integer',
    ];
}
