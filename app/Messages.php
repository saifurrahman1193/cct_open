<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $table = 'messages';

    protected $primaryKey  = 'messageId';

    protected $fillable = [
            'message' ,
            'senderId' ,
            'receiverId' ,
            'read_at' ,

			'created_at',
			'updated_at',
    ];

    protected $casts = [
        'messageId'=> 'integer',
        'senderId'=> 'integer',
        'receiverId'=> 'integer',
    ];

}

