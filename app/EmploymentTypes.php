<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmploymentTypes extends Model
{
    protected $table = 'employmenttypes';

    protected $primaryKey  = 'employmentTypeId';

    protected $fillable = [
            'employmentType' ,

			'created_at',
			'updated_at',
    ];

    protected $casts = [
        'employmentTypeId'=> 'integer',
    ];

}
