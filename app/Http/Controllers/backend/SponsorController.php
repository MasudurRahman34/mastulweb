<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\model\sponsor;
use App\model\sponsorImages;
use App\model\socialCommunication;
use App\model\paymentPreferrence;
use App\model\children;
use Illuminate\Http\Request;
use Image;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function sponsorForm()
    {

      return view('backend.pages.sponsor.sponsorForm');
      
    }
    public function sponsorList()
  {
    $sponsors=sponsor::orderBy('id', 'desc')->get();
    return view('backend.pages.sponsor.sponsorList')->with('sponsors',$sponsors);

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
        $spn=new sponsor;
        $spn->sponsorManual_id= $request->sponsorManual_id;
        $spn->type= $request->type;
        $spn->name= $request->name;
        $spn->slug= str_slug($spn->name);
        $spn->gender= $request->gender;
        $spn->date_of_birth= $request->date_of_birth;
        $spn->age= $request->age;
        $spn->nationality= $request->nationality;
        $spn->country_of_residence= $request->country_of_residence;
        $spn->maritul_status= $request->maritul_status;
        $spn->present_address= $request->present_address;
        $spn->permanent_address= $request->permanent_address;
        $spn->organization_name= $request->organization_name;
        $spn->organization_address= $request->organization_address;
        $spn->designation= $request->designation;
        $spn->recieve_communication= $request->recieve_communication;
        $spn->national_id= $request->national_id;
        $spn->passport_id= $request->passport_id;

                    //$spn->slug= str_slug($product->title);
        $spn->Save();

        if(($request->image !=null) && (count($request->image)>0)){
            foreach($request->image as $image){
                    //$image= $request->file('image');
                ini_set('memory_limit','256M');
                $img=time().'.'.$image->getClientOriginalExtension();
                $location= public_path('images/sponsorImage/'.$img);
                Image::make($image)->save($location);

                $spnImage= new sponsorImages;
                $spnImage->sponsor_id= $spn->id;
                $spnImage->image=$img;
                $spnImage->Save();
            }

        }
        /*return redirect()->route('admin.spnForm');*/
        return redirect()->route('admin.socialFormIndex');
    }

    public function sacialFormIndex()
{
    $sponsor=sponsor::orderBy('id', 'desc')->first();
    return view('backend.pages.sponsor.socialFormIndex',  compact('sponsor'));
}

public function sacialFormInsert(Request $request, $id)
{
   $scn = new socialCommunication;
   $scn->type= $request->type;
   $scn->address= $request->address;
   $scn->sponsor_id= $id;
   $scn->save();
     //Session()->flash('success', 'A new catagory has added succesfully');
   return redirect()->route('admin.socialFormIndex');
}

public function paymentPrefference(Request $request, $id)
{
   $pyprnc = new paymentPreferrence;
   $pyprnc->number_of_child= $request->number_of_child;
   $pyprnc->payment_intervel= $request->payment_intervel;
   $pyprnc->payment_month= $request->payment_month;
   $pyprnc->preffered_date= $request->preffered_date;
   $pyprnc->payment_method= $request->payment_method;
   $pyprnc->amount= $request->amount;
   $pyprnc->transaction_id= $request->transaction_id;
   $pyprnc->sponsor_id= $id;
   $pyprnc->save();

     //Session()->flash('success', 'A new catagory has added succesfully');
   return redirect()->route('admin.sponsorChildForm', $id);
}

public function sponsorChildForm($id)
{
    $sponsor=sponsor::find($id);
    return view('backend.pages.sponsor.sponsorChildForm',  compact('sponsor'));
}
public function sponsorChild(Request $request, $id)
{
    
    if(($request->child_id !=null) && (count($request->child_id)>0)){
        foreach($request->child_id as $child_id){
            $child=children::find($child_id);
            $child->sponson_id= $id;
            $child->Save();
        }

    }
    /*return redirect()->route('admin.childForm');*/
    return redirect()->route('admin.sponsor.list');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\model\sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function show(sponsor $sponsor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function edit(sponsor $sponsor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sponsor $sponsor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function destroy(sponsor $sponsor)
    {
        //
    }
}
