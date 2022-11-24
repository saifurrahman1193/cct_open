<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = 'wishlist';

    protected $primaryKey  = 'wishlistId';

    protected $fillable = [
            'userId' ,
            'productId' ,

			'created_at',
			'updated_at',
    ];

    protected $casts = [
        'wishlistId'=> 'integer',
        'userId'=> 'integer',
        'productId'=> 'integer',
    ];

}
