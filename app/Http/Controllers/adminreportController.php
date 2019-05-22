<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class adminreportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company=DB::select('select  company_name from company');

        $report=DB::table('company')->select('company.company_name','users.name','users.email','users.phno','users.nrc','users.created_at','job.job_name')->join('users','users.company_id','=','company.company_id')
        ->join('job','job.company_id','=','company.company_id')
        ->get();

         return view('back-end.adminreport',["company"=>$company],["report"=>$report]);
        // dd($company);
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

        $company=DB::table('company')->select('company_name')->get();
        $companyname=$request->input('industry');

        $todate=$request->input('todate');

        $report=DB::table('company')->select('company.company_name','users.name','users.email','users.phno','users.nrc','users.created_at','job.job_name')->join('users','users.company_id','=','company.company_id')->join('job','job.company_id','=','company.company_id')->where('company.company_name',$companyname)->get();

        return view('back-end.adminreport',["company"=>$company],["report"=>$report]);
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
