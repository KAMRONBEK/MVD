<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Builder;

class Screen extends Model
{
	public $incrementing = false;
   
    protected $fillable =[
    	'screen',
    	'report_id'
 
    ];
    protected $table="screens";

    public function report()
    {
    	return $this->belongsTo("App\Report",'report_id','id');
    }

    protected $primaryKey=['screen','report_id'];

  	public function setKeysForSaveQuery(Builder $query)
    {
        
        $query
            ->where('screen', '=', $this->getAttribute('screen'))
            ->where('report_id', '=', $this->getAttribute('report_id'));
        /*dd($query);*/

        return $query;

        
    }
    
}
