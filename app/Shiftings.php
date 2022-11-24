<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shiftings extends Model
{
    protected $table = 'shiftings';

    protected $primaryKey  = 'shiftingId';

    protected $fillable = [
            'shifting' ,
            'inTimeHour' ,
            'inTimeMin' ,
            'lateMin' ,
            'earlyMin' ,
            'outTimeHour' ,
            'outTimeMin' ,
            'breakInTimeHour' ,
            'breakInTimeMin' ,

			'created_at',
			'updated_at',
    ];

    protected $casts = [
        'inTimeHour'=> 'integer',
        'inTimeMin'=> 'integer',
        'lateMin'=> 'integer',
        'earlyMin'=> 'integer',
        'outTimeHour'=> 'integer',
        'outTimeMin'=> 'integer',
        'breakInTimeHour'=> 'integer',
        'breakInTimeMin'=> 'integer',
    ];

}


