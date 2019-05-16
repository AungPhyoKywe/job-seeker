<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\industry;
use DB;
use Carbon\Carbon;
class jobsearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if (Auth::check()) {

        session(['upload' => '1']);
        }
        $seachname=$request->input('search');

       $industry = industry::where('status',1)->get();        
        $job= DB::table('job')->select('job.job_id','job.job_name','job.location','job.description','job.work_type','job.salary','company.company_name','company.company_logo','job.created_at')->join('company','company.company_id','=','job.company_id')
        ->where(['job.status' => 1,'job.type_name'=>$seachname])->where('job.to_date','>',Carbon::today())
        ->get();
           return view('font-end.jobsearch')            
           ->with('industry', $industry)->with('job', $job);  
       
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
