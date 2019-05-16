<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\job;
use App\industry;
use Auth;

class postjobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job=industry::where('status',1)->get();
       return view('PostJob.postjob',["job"=>$job]);
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

         $this->validate($request,[
    'jname'=>'required|string',
    'comtype'=>'required|string',
    'todate'=>'required|string',
    'location'=>'required|string',
    'req'=>'required|string',
    'salary'=>'required|string'
//'pic_path'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        $job=new job;
        $job->job_name=$request->input('jname');
         $job->company_id=Auth::user()->company_id;
        $job->type_name=$request->input('comtype');
        // $industry=new industry;
        // $industry->name=$request->input('comtype');
        // $industry->save();
        $job->to_date=$request->input('todate');
        $job->location=$request->input('location');
        $job->description=$request->input('req');
        $job->work_type=$request->input('worktype');
        $job->salary=$request->input('salary');
        $job->save();
        return redirect('/postjob')->with('j','Successfully Job Created!!!');
        // return view('PostJob.postjob');
      
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
