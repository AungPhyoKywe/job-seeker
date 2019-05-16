<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class jsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    use RegistersUsers;


 public function __construct()
    {
        $this->middleware('guest');
    }
    public function index()
    {
       // 
         return view('jobSeeker.jobseeker-reg');
    }

    /**ve
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
    // 'company'=>'required|string',
    'address'=>'required|string'

        ]);

    $users=new User;
    $users->name=$request->input('name');
    $users->nrc=$request->input('nrc');
    $users->email=$request->input('email');
    $users->password=Hash::make($request->input('password'));
    $users->phno=$request->input('phone');
    $users->DOB=$request->input('dob');
    $users->address=$request->input('address');
    //$users->cv_path=$request->input('cv_path');
    $users->role_id=3;
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
