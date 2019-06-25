<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //protected $incrementing = false;
    protected $fillable =[
        'video',
        'description',
        'status',
        'police_id',
        'user_id',
        'repy_time',
        'uploaded_at'
    ];
    public function user()
    {
        return $this->belongsTo('App\User','user_id','user_passport_id');
    }

    public function police()
    {
        return $this->belongsTo('App\Police','police_id','police_passport_id');
    }

    public function screens()
    {
        return $this->hasMany('App\Screen','report_id','id');
    }
}
