<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

// class Employee extends Model
// {
//     protected $guarded = ['password'];
//     protected $casts = [];
// }

class Employee extends Authenticatable
{
  use HasApiTokens, Notifiable;
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
    'username', 'password',
    ];
    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $hidden = [
    'password',
    ];
}