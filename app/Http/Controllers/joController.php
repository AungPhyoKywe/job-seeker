<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\company;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
 use Illuminate\Foundation\Auth\RegistersUsers;
class joController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

  
 use RegistersUsers;

    // protected $redirectTo = '/back-end';


    public function __construct()
    {
        $this->middleware('guest');
    }


    public function index()
    {

        
         return redirect('/register');
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
    'name'=>'required|string',
    'nrc'=>'required|string',
    'email'=>'required|string|email|max:255|unique:users',
    'password'=>'required|string|min:8',
    'phone'=>'required|string|max:11',
    'company'=>'required|string',
    'address'=>'required|string'
//'pic_path'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

    $users=new User;
    $users->name=$request->input('name');
    $users->nrc=$request->input('nrc');
    $users->email=$request->input('email');
    $users->password=Hash::make($request->input('password'));
    $users->phno=$request->input('phone');
    $company=new company;
    $company->company_name=$request->input('company');
    $company->address=$request->input('address');
    $company->no_employee=$request->input('emp');
    $company->save();
    $users->company_id=$company->company_id;
    $users->address=$request->input('address');
    //$users->pic_path=$request->input('pic_path');
    $users->role_id=2;
    $users->save();
    session(['key' => 'value']);
    return redirect('/login');

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
