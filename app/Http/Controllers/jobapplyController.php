<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\jobAplied; 
class jobapplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        return redirect('/jobseeker-reg');
      
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

    public function cvupload(Request $request)
    {


    $file = $request->file('cv_path');
    $images=$file->getClientOriginalName();
    $destinationPath='download'; 
    $file->move($destinationPath,$images);
    
    $id=Auth::user()->user_id;
    $cvupload=new jobAplied;
    $cvupload->user_id=$id;
    $cvupload->status=1;
    $cvupload->job_id=$request->input('id');
    $cvupload->cv=$images;
    $cvupload->save();

    return redirect('/congrt');
        
    }

    public function index2()
    {
        

        return view('font-end.con');
      
    }
}
