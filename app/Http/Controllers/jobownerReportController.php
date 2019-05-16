<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class jobownerReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $users=Auth::user()->company_id;
 

         $industrylist= DB::table('job_aplied')->select('users.name','job.job_name','users.phno','users.email','job_aplied.cv','job.status','job.type_name','job.job_id','job_aplied.created_at','job_aplied.jobapp_id')->join('users','users.user_id','=','job_aplied.user_id')->join('job','job.job_id','=','job_aplied.job_id')->where('job_aplied.status',1)->get();

        $applylist= DB::table('job_aplied')->select('users.name','job.job_name','users.phno','users.email','job_aplied.cv','job.status','job.type_name','job.job_id','job_aplied.created_at','job_aplied.jobapp_id')->join('users','users.user_id','=','job_aplied.user_id')->join('job','job.job_id','=','job_aplied.job_id')->where('job_aplied.status',1)->where('job.company_id',$users)->get();

    
       return view('jobOwner.report',["applylist"=>$applylist],
            ["industrylist"=>$industrylist]

   );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
       $industry=$request->input('industry');
       $todate=$request->input('todate');
       $fromdate=$request->input('fromdate');

        $industrylist= DB::table('job_aplied')->select('users.name','job.job_name','users.phno','users.email','job_aplied.cv','job.status','job.type_name','job.job_id','job_aplied.created_at','job_aplied.jobapp_id')->join('users','users.user_id','=','job_aplied.user_id')->join('job','job.job_id','=','job_aplied.job_id')->where('job_aplied.status',1)->get();

       $applylist= DB::table('job_aplied')->select('users.name','job.job_name','users.phno','users.email','job_aplied.cv','job.status','job.type_name','job.job_id','job_aplied.created_at','job_aplied.jobapp_id')->join('users','users.user_id','=','job_aplied.user_id')->join('job','job.job_id','=','job_aplied.job_id')->where('job_aplied.status',1)->where('job.type_name',$industry) ->whereBetween('job.created_at', array($fromdate, $todate))->get();

       return view('jobOwner.report',["applylist"=>$applylist],
            ["industrylist"=>$industrylist]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
