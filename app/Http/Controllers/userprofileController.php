<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
class userprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         session(['key' => '1']);
         session(['upload' => '1']);
        return view('font-end.userLogin');



    }

    public function index2()
    {
             return view('font-end.userLogin');

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
    public function update(Request $request)
    {
        $this->validate($request,[
    'name'=>'required|string',
    'nrc'=>'required|string',
    'email'=>'required|string|email|max:255',
    'password'=>'required|string|min:8',
    'phone'=>'required|string|max:11',
    // 'company'=>'required|string',
    'address'=>'required|string'

        ]);
    $id=Auth::user()->user_id;
    $users=User::find($id);
    $users->name=$request->input('name');
    $users->nrc=$request->input('nrc');
    $users->email=$request->input('email');
    $users->password=Hash::make($request->input('password'));
    $users->phno=$request->input('phone');
    $users->DOB=$request->input('dob');
    $users->address=$request->input('address');
    $users->cv_path=$request->input('cv_path');
    // $users->role_id=3;
    $users->save();
    session(['u' => 'your profile updated successfully!']);
    return redirect('/uploadfile');
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

     public function showUploadFile(Request $request){
         $this->validate($request,[
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        
    $file = $request->file('image');
    $images=$file->getClientOriginalName();
    //File::delete('upload/'.Auth::user()->pic);
    $destinationPath='upload';
    $id=Auth::user()->user_id;
    $emp=User::find($id);
    $emp->pic_path=$images;
    $emp->save();
    $file->move($destinationPath,$images);
    session(['upload' => '1']);
    return redirect('/uploadfile');
}
}
