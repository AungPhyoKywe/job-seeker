<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\job;
use App\User;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    $id=Auth::user()->company_id;
    $joblist=job::where('company_id',$id)->where('status',1)->get();
    $users=User::where('role_id',3)->get();
    $owner=User::where('role_id',2)->get();
    $u=Auth::user()->company_id;
    $applylist= DB::table('job_aplied')->select('users.name','job.job_name','users.pic_path','job_aplied.cv','job.status','job.job_id','job_aplied.created_at','job_aplied.jobapp_id')->join('users','users.user_id','=','job_aplied.user_id')->join('job','job.job_id','=','job_aplied.job_id')->where('job_aplied.status',1)->where('job.company_id',$u)->get();
    $wordCount = $joblist->count();
    $seekerCount=$users->count();
    $applylistCount=$applylist->count();
    $ownerlist=$owner->count();
return view('back-end.dashboard', compact('wordCount', 'seekerCount', 'applylistCount','ownerlist'));
        // return view('',


        //     ["wordCount"=>$wordCount],

        //     ["seekerCount"=>$seekerCount]

        // );
    }

    
}
