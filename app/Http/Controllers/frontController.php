<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;



class frontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        return view('frontend.pages.index');
    }
//child
    public function childGrid()
    {
        $users = User::get(); 
        return view('frontend.pages.childGrid');
    }

    public function singleChild()
    {
        $users = User::get(); 
        return view('frontend.pages.singleChild');
    }

//project
    public function projectGrid()
    {
        $users = User::get(); 
        return view('frontend.pages.projectGrid');
    }

    public function singleProject()
    {
        $users = User::get(); 
        return view('frontend.pages.singleProject');
    }

//event
    public function eventGrid()
    {
        $users = User::get(); 
        return view('frontend.pages.eventGrid');
    }
    public function singleEvent()
    {
        $users = User::get(); 
        return view('frontend.pages.singleEvent');
    }


    public function contact_us()
    {
        return view('frontend.pages.contact_us');
    }


    public function donation_details()
    {
        return view('frontend.pages.donation_details');
    }

    public function members()
    {
        return view('frontend.pages.members');
    }
    public function aboutus()
    {
        return view('frontend.pages.aboutus');
    }


    //cash process

    public function checkout()
    {
        return view('frontend.pages.checkout');
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
