<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{

	 protected $primaryKey = 'company_id';
    protected $table = 'company';
	protected $fillable = [
	'company_id',
	'company_name',
	'industry_id',
	'address',
	'no_employee',
	'company_profile',
	'company_logo',
	'status'
];

public function Company(){

	return $this->belongTo('App\job','company_id');
}

}
