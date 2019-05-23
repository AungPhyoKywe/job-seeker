<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//home page
// Route::get('/', function () {
	
// });

Route::get('/','indexController@index');

//page not found
Route::get('/pagenot','pagenotController@index');

//job owner reg
Route::get('/jobowner-reg','joController@index');
Route::post('/jobowner-reg','joController@store');
//job apply List

//apply
Route::get('/apply','jobapplyController@index');
//newletter
Route::post('/newsletter','newsletterController@store');

//job search
Route::get('/jobsearch','jobsearchController@index');
Route::post('/jobsearch','jobsearchController@index');

//job seeker  registers
Route::get('/jobseeker-reg', 'jsController@index');
Route::post('/jobseeker-reg', 'jsController@store');

//font end user login
Route::group(['middleware'=>['jowner']],function(){


Route::group(['middleware'=>['page']],function(){

Route::get('/applylist','applylistController@index');
Route::get('/adminapplylist','applylistController@show');
Route::get('/export','applylistController@export_pdf');
Route::get('/deleteapplylist/{id}','applylistController@destroy');
Route::get('/download/{cv}','applylistController@download');


//backend admin report
Route::get('/adminreport','adminreportController@index');
Route::post('/adminsearch','adminreportController@show');

//job ownere report

Route::get('/ownerreport','jobownerReportController@index');
Route::post('/reportsearch','jobownerReportController@show');
Route::get('/jobexpire','jobExpController@index');
Route::get('/jobexpire/{id}','jobExpController@destroy');

Route::get('/jobseekerlist','jobseekerlistController@index');
Route::get('/deactive/{id}','jobseekerlistController@update');
Route::get('/active/{id}','jobseekerlistController@update2');

//job owner /back-end admin
Route::get('/postjob','postjobController@index');
Route::post('/postjob','postjobController@store');

Route::get('/viewjobowner','profileController@index');

Route::post('/viewjobowner','profileController@update');

Route::get('/uploadowner','viewjobOwnerController@index');
Route::post('/uploadowner','viewjobOwnerController@showUploadFile');

Route::get('/deactiveonwer/{id}','jobownerlistController@update');
Route::get('/activateowner/{id}','jobownerlistController@update2');

Route::get('/joblist','joblistController@index');
Route::post('/update','joblistController@update');
Route::get('/delete/{id}','joblistController@destroy');

Route::group(['middleware'=>['adminpage']],function(){
	
Route::get('/jobownerlist','jobownerlistController@show');	
Route::post('/industry/update','industryController@update');
Route::post('industry/store',        array('as'=>'industry/store','uses'=>'industryController@store'));
Route::get('industry',        array('as'=>'industry','uses'=>'industryController@index'));
});

Route::get('/back-end', 'HomeController@index')->name('back-end');

});


//job seeker report
Route::get('/jobseekerreport','applylistController@export_pdf');

//Job Apply

Route::get('/congrt','jobapplyController@index2');
Route::post('/cvupload','jobapplyController@cvupload');

Route::get('/uploadfile','userprofileController@index');
Route::post('/uploadfile','userprofileController@showUploadFile');
Route::get('/updateprofile','userprofileController@index2');
Route::post('/updateprofile','userprofileController@update');


});
Auth::routes();
