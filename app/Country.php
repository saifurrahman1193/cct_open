<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country';

    protected $primaryKey  = 'countryId';

    protected $fillable = [
            'country',

			'created_at',
			'updated_at',
    ];

    protected $casts = [
        'countryId'=> 'integer',
    ];



}

