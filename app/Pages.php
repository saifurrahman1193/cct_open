<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table = 'pages';

    protected $primaryKey  = 'pageId';

    protected $fillable = [
            'pageTitle' ,
            'pageDesc' ,
            'pageSlug' ,

			'created_at',
			'updated_at',
    ];

    protected $casts = [
        'pageId'=> 'integer',
    ];

}
