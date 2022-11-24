<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $table = 'designation';

    protected $primaryKey  = 'designationId';

    protected $fillable = [
            'designation' ,
            'designationBN' ,

			'created_at',
			'updated_at',
    ];

    protected $casts = [
        'designationId'=> 'integer',
    ];

}
