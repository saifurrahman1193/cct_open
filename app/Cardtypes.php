<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cardtypes extends Model
{
    protected $table = 'cardtypes';

    protected $primaryKey  = 'cardtypeId';

    protected $fillable = [
            'cardtype' ,
            'color' ,

			'created_at',
			'updated_at',
    ];

    protected $casts = [
        'cardtypeId'=> 'integer',
    ];

}

