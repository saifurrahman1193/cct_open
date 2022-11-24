<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersRoles extends Model
{
    protected $table = 'userroles';

    protected $primaryKey  = 'userrolesId';

    protected $fillable = [
            'userId' ,
            'roleId' ,
            'userrolesId' ,

			'created_at',
			'updated_at',
    ];

    protected $casts = [
        'userrolesId'=> 'integer',
    ];

}

