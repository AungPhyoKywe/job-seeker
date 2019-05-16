<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class industry extends Model
{
    protected $primaryKey = 'industry_id';
    protected $table = 'industry';
	protected $fillable = [
	'industry_id',	
	'name',	
	'status'
	
	
];


public function industry(){

	return $this->hasMany('App\company');
}

}
