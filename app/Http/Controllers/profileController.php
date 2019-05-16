<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\company;
use Illuminate\Support\Facades\Hash;
class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $id=Auth::user()->company_id;
      
$users =DB::select('SELECT company.no_employee,company.company_name
FROM company
JOIN users ON company.company_id=?

        ',[$id]);

       return view('jobOwner.jownerProfile',['users'=>$users]);
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
    public function update(Request $request)
    {
      $this->validate($request,[
    'name'=>'required|string',
    'nrc'=>'required|string',
    'email'=>'required|string|email',
    'password'=>'required|string|min:8',
    'phno'=>'required|string|max:11',
    'com'=>'required|string',
    'address'=>'required|string'
//'pic_path'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

      $id=Auth::user()->user_id;
    $update=User::find($id);
    $update->name=$request->input('name');
    $update->nrc=$request->input('nrc');
     $update->email=$request->input('email');
      $update->password=Hash::make($request->input('password'));
      
        $update->phno=$request->input('phno');
         $update->address=$request->input('address');

         $comid=Auth::user()->company_id;
         $company=company::find($comid);
          $company->company_name=$request->input('com');
           $company->no_employee=$request->input('emp');
         
            $company->save();
         
      $update->save();
      Session(["update"=>"v"]);
      return redirect('/viewjobowner');
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
