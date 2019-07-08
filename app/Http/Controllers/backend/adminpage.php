<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\guirdian;


class adminpage extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }
    public function index()
    {
      return view('backend.pages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


   

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */  
   

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
         $guirdians = $request->input('guirdian');
         dd($guirdians);
         foreach ($guirdians as $guirdian1)
    {
        $Charges[] = new guirdian(array(
            'guardian_mobile'=>$guirdian1['mobile']

        ));
    }
    guirdian::create($Charges);
          
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
