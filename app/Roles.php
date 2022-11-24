<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';

    protected $primaryKey  = 'roleId';

    protected $fillable = [
            'roleName' ,
            'description' ,

			'created_at',
			'updated_at',
    ];

    protected $casts = [
        'roleId'=> 'integer',
    ];

    /**
     * The users that belong to the roles.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'userroles', 'roleId',  'userId');
    }



}
