<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
use Auth;
use App\User;
use App\company;
class viewjobOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $id=Auth::user()->company_id;
$users =DB::select('SELECT company.no_employee,company.name
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
    public function showUploadFile(Request $request){
         $this->validate($request,[
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        
    $file = $request->file('image');
    $images=$file->getClientOriginalName();
    //File::delete('upload/'.Auth::user()->pic);
    $destinationPath='upload';
    $id=Auth::user()->user_id;
    $comid=Auth::user()->company_id;
    $emp=User::find($id);
    $emp->pic_path=$images;
    $emp->save();
    $com=company::find($comid);
    $com->company_logo=$images;
    $com->save();
    $file->move($destinationPath,$images);
    session(['upload' => '1']);
    return redirect('/viewjobowner');
}
}
