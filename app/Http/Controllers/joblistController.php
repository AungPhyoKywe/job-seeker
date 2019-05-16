<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\job;
use App\company;
use App\industry;
class joblistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $id=Auth::user()->company_id;
         $jo=industry::where('status',1)->get();
         $joblist=job::where('company_id',$id)->where('status',1)->paginate(5);

            return view('PostJob.joblist',["joblist"=>$joblist,"jo"=>$jo]);
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $joblist=job::where('job_id',$id)->get();
        //dd($jobid);

        return view('PostJob.joblist',["joblist"=>$joblist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       $id=$request->input('jobID');
        $job=job::find($id);
        $job->type_name=$request->input('comtype');
        $job->job_name=$request->input('jname');
        $job->location=$request->input('location');
        $job->description=$request->input('req');
        $job->salary=$request->input('salary');
         $job->to_date=$request->input('todate');
        $job->work_type=$request->input('worktype');
        $job->save();
        return redirect('/joblist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //$id=$request->input('jobID');
       $job=job::find($id);
       $job->status=0;
       $job->save();
    return redirect('/joblist');
    }
}
