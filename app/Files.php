<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    protected $table = 'files';

    protected $primaryKey  = 'fileId';

    protected $fillable = [
            'fileName' ,
            'filePath' ,
            'purpose' ,
            'userId' ,

			'created_at',
			'updated_at',
    ];

    protected $casts = [
        'fileId'=> 'integer',
        'userId'=> 'integer',
    ];

}
