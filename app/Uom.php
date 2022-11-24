<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uom extends Model
{
    protected $table = 'uom';

    protected $primaryKey  = 'uomId';

    protected $fillable = [
            'uom' ,

			'created_at',
			'updated_at',
    ];

    protected $casts = [
        'uomId'=> 'integer',
    ];

}
