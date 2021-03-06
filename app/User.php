<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $incrementing = false;
    protected $primaryKey="user_passport_id";
    protected $fillable =[
        'name',
        'surname',
        'INN',
        'user_passport_id',
        'birthdate',
        'nationality',
        'email',
        'password'
    ];
    public function reports()
    {
        return $this->hasMany('App\Report','user_id','user_passport_id');
    }
}
