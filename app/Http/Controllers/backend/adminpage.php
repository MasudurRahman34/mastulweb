<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\guirdian;


class adminpage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('backend.pages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function childForm()
    {
      return view('backend.pages.childForm');
      
    }

    public function childProfile()
    {
      return view('backend.pages.childProfile');
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */  
    public function childList()
    {
      return view('backend.pages.childList');
      
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
    public function guirdianInsert(Request $request)
    {
        $guardianType = array('father' =>'father' , 'mother' =>'mother' );
        $guirdian= new guirdian;
        if ($guardianType['father']=='father') {
            $guirdian->guardian_name= $request->fname;
            $guirdian->guardian_type= 'father';
            $guirdian->guardian_address= $request->faddress;
            $guirdian->guardian_mobile= $request->fmobile;
            $guirdian->save();
        }
          if ($guardianType['mother']=='mother' && $request->mname!=''){
            $guirdian->guardian_name= $request->mname;
            $guirdian->guardian_type= 'mother';
            $guirdian->guardian_address= $request->maddress;
            $guirdian->guardian_mobile= $request->mmobile;
            $guirdian->save();
        }
         
     //Session()->flash('success', 'A new catagory has added succesfully');
     return redirect()->route('webmastul.guirdianIndex');
    } 
     public function guirdianIndex()
    {
         return view('backend.pages.guirdianForm');
    }

    public function store(Request $request)
    {
        
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
