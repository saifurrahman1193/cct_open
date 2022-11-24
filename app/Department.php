<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'department';

    protected $primaryKey  = 'departmentId';

    protected $fillable = [
            'department' ,

			'created_at',
			'updated_at',
    ];

    protected $casts = [
        'departmentId'=> 'integer',
    ];

}
