<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SEODefault extends Model
{
    protected $table = 'seodefault';

    protected $primaryKey  = 'seodefaultId';

    protected $fillable = [
            'meta_title' ,
            'meta_keywords' ,
            'meta_description' ,
            'meta_author' ,

			'created_at',
			'updated_at',
    ];

    protected $casts = [
        'seodefaultId'=> 'integer',
    ];

}

