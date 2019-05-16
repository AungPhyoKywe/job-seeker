<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
class jobownerlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


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


    $company=DB::table('users')->select('company.company_name'
,'users.name','users.email','users.address','users.nrc','users.phno',
'company.no_employee','company.company_logo','users.status','users.user_id')->join('company','company.company_id','=','users.company_id')->get();


   
    return view('jobOwner.jobownerlist',['company'=>$company]);
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
        $users=User::find($id);
        $users->status=0;
        $users->save();
        $users=User::where('role_id',2)->get();

        return redirect('/jobownerlist');
    }

    public function update2(Request $request, $id)
    {
        $users=User::find($id);
        $users->status=1;
        $users->save();
        $users=User::where('role_id',2)->get();

        return redirect('/jobownerlist');
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
