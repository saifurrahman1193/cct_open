<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'nameBN',
        'email',
        'password',
        'nid',
        'cardNo',
        'phone',
        'areaId',
        'address',
        'addressBN',
        'dob',
        'photoPath',
        'departmentId',
        'designationId',
        'employmentTypeId',
        'joiningDate',
        'genderId',
        'deviceUserName',
        'deviceRoleId',
        'devicePassword',
        'deviceId',
        'shiftingId',
        'issueDate',
        'validDateStart',
        'validDateEnd',
        'cardtypeId',
        'membershipNumber'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'areaId' => 'integer',
        'departmentId' => 'integer',
        'designationId' => 'integer',
        'employmentTypeId' => 'integer',
        'genderId' => 'integer',
        'deviceRoleId' => 'integer',
        'shiftingId' => 'integer',
        'cardtypeId' => 'integer',

    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'userroles', 'userId', 'roleId');
    }

    public function deliveryaddresses()
    {
        return $this->hasMany(DeliveryAddress::class, 'userId', 'id');
    }

    public function  getNameAndEmail()
    {
        return $this->name.' '.$this->email;
    }

    public function getEmailAttribute($value)
    {
        return strtolower($value);
    }

    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }

}
