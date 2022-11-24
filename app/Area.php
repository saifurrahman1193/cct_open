<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'area';

    protected $primaryKey  = 'areaId';

    protected $fillable = [
            'area' ,

			'created_at',
			'updated_at',
    ];

    protected $casts = [
        'areaId'=> 'integer',
    ];

}