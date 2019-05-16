<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\industry;
class industryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $industry = industry::where('status',1)->paginate(7);        
          //return view('student.index',['students'=>$students]);       
           return view('industry.index')            
           ->with('industry', $industry); 
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('industry.create'); 
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
            'name'=>'required|string'

        ]);
        Session(["k"=>"0"]);

        $industry=new industry;
        $industry->name = $request->input('name');  

        $industry->save();        
         // echo "Record inserted successfully.<br/>";        
         // echo '<a href="/industry/create">Click Here</a> to go back.';
          return redirect()->route('industry'); 
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
            
            "comtype"=>"required|string"

        ]);
           $id=$request->input('id');
           $industry=industry::find($id);
           $industry->name=$request->input('comtype');
           $industry->save();
           return redirect('/industry');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
