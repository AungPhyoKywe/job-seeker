<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\job;
use App\User;
use App\jobAplied;
use App\company;
use Auth;
class applylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=Auth::user()->company_id;
       $applylist= DB::table('job_aplied')->select('users.name','job.job_name','users.pic_path','job_aplied.cv','job.status','job.job_id','job_aplied.created_at','job_aplied.jobapp_id')->join('users','users.user_id','=','job_aplied.user_id')->join('job','job.job_id','=','job_aplied.job_id')->where('job_aplied.status',1)
       ->where('job.company_id',$users)


       ->get();

      return view('jobapply.applylist',["applylist"=>$applylist]);
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
    public function show()
    {
       //$users=Auth::user()->company_id;
       $applylist= DB::table('job_aplied')->select('users.name','job.job_name','users.pic_path','job_aplied.cv','job.status','job.job_id','job_aplied.created_at','job_aplied.jobapp_id')->join('users','users.user_id','=','job_aplied.user_id')->join('job','job.job_id','=','job_aplied.job_id')->where('job_aplied.status',1)
      


       ->get();

      return view('jobapply.applylist',["applylist"=>$applylist]);
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
         $applylist=jobAplied::find($id);
         $applylist->status=0;
         $applylist->save();
         return redirect('/applylist');
    }

    public function export_pdf()
  {
    $users=Auth::user()->user_id;
    $applylist= DB::table('job_aplied')->select('users.name','job.job_name','users.pic_path','job_aplied.cv','job.status','job.job_id','job_aplied.created_at','job_aplied.jobapp_id')->join('users','users.user_id','=','job_aplied.user_id')->join('job','job.job_id','=','job_aplied.job_id')->where('job_aplied.status',1)->
where('users.user_id',$users)->
    get();

    $data = ['applylist' => $applylist];
     $pdf = PDF::loadView('font-end.mypdf', $data);
  
        return $pdf->download('report.pdf');

        
  }

}
