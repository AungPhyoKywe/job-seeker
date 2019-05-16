<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    
	protected $primaryKey = 'job_id';
    protected $table = 'job';
	protected $fillable = [
	'job_id',
	'type_name',
	'company_id',
	'job_name',
	'to_date',
	'location',
	'description',
	'status',
	'work_type',
	'salary'
	
];

public function Job(){

	return $this->hasMany('App\company','company_id','job_id');
}
}
