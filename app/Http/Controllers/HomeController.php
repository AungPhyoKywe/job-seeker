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
 

$wordCount = $joblist->count();
$seekerCount=$users->count();


        return view('back-end.dashboard',


            ["wordCount"=>$wordCount],

            ["seekerCount"=>$seekerCount]

        );
    }

    
}
