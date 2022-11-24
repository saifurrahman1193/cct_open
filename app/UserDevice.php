<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDevice extends Model
{
    protected $table = 'userdevice';

    protected $primaryKey  = 'userDeviceId';

    protected $fillable = [
            'userId' ,
            'deviceId' ,

			'created_at',
			'updated_at',
    ];

    protected $casts = [
        'userDeviceId'=> 'integer',
        'userId'=> 'integer',
        'deviceId'=> 'integer',
    ];

}

