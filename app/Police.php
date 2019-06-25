<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Police extends Model
{
	public $incrementing = false;
    protected $primaryKey="police_passport_id";
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
