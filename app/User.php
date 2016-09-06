<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'last_name', 'mondayam', 'mondaypm','tuesdaypm' ,'tuesdayam' ,'wednesdaypm','wednesdayam', 'thursdaypm', 'thursdayam', 'fridaypm','fridayam',
        'saturdaypm', 'saturdayam', 'sundaypm', 'sundayam','hours','payrate', 'accounttype',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
