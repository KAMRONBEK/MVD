<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Police extends Authenticatable
{
		public $incrementing = false;
    protected $primaryKey="police_passport_id";
		protected $guard='admin';
    protected $fillable =[
    	'name',
    	'surname',
    	'INN',
    	'police_passport_id',
    	'birthdate'
    ];

    public function reports()
    {
    	return $this->hasMany('App\Report','police_id','police_passport_id');
    }
}
