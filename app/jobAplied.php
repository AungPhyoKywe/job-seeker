<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobAplied extends Model
{
     
	protected $primaryKey = 'jobapp_id';
    protected $table = 'job_aplied';
	protected $fillable = [
	'jobapp_id',
	'user_id',
	'job_id',
	'cv',
	'status'
	
];


}
