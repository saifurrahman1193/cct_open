<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cardsettings extends Model
{
    protected $table = 'cardsettings';

    protected $primaryKey  = 'cardsettingId';

    protected $fillable = [
            'authority1type' ,
            'authority1typeBN' ,
            'authority1signature' ,
            'authority1title' ,
            'authority1titleBN' ,
            'authority2type' ,
            'authority2typeBN' ,
            'authority2signature' ,
            'authority2title' ,
            'authority2titleBN' ,
            'logo' ,
            'topTitle' ,
            'topTitleBN' ,

			'created_at',
			'updated_at',
    ];

    protected $casts = [
        'cardsettingId'=> 'integer',
    ];

}
