<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\model\children;
use App\model\childImages;
use App\model\guardian;
use App\model\siblings;
use Image;


class ChildrenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
         $child=new children;
                $child->sponson_id= $request->sponson_id;
                $child->childManual_id= $request->childManual_id;
                $child->child_name= $request->child_name;
                $child->gender= $request->gender;
                $child->age= $request->age;
                $child->class= $request->class;
                $child->school= $request->school;
                $child->religious= $request->religious;
                $child->date_of_birth= $request->date_of_birth;
                $child->present_address= $request->present_address;
                $child->permanent_address= $request->permanent_address;
                $child->dream= $request->dream;
                $child->fav_color= $request->fav_color;
                $child->fav_food= $request->fav_food;
                $child->fav_place= $request->fav_place;
                $child->fav_sports= $request->fav_sports;
                $child->fav_personality= $request->fav_personality;
                $child->fav_teacher= $request->fav_teacher;
                $child->hobby= $request->hobby;
                $child->skills= $request->skills;
                $child->informar_name= $request->informar_name;
                $child->informar_age= $request->informar_age;
                $child->father_education= $request->father_education;
                $child->mother_education= $request->mother_education;
                $child->stoppingEdu_reason= $request->stoppingEdu_reason;
                $child->stay_time= $request->stay_time;
                $child->where_before= $request->where_before;
                $child->changing_residence= $request->changing_residence;
                $child->changing_hsePlan= $request->changing_hsePlan;
                $child->next_residence= $request->next_residence;
                $child->house_type= $request->house_type;
                $child->study_time= $request->study_time;
                $child->pre_school= $request->pre_school;
                $child->reason_chgSchool= $request->reason_chgSchool;
                $child->satisfactory_level= $request->satisfactory_level;
                $child->noticable_reason= $request->noticable_reason;
                $child->parents_problem= $request->parents_problem;
                $child->parents_dream= $request->parents_dream;
                $child->behaviour= $request->behaviour;
                $child->brilliancy= $request->brilliancy;
                $child->attendency= $request->attendency;
                $child->merit_score= $request->merit_score;
                $child->comment= $request->comment;
                $child->verify_by= $request->verify_by;
                $child->verify_date= $request->verify_date;

                //$child->slug= str_slug($product->title);
                $child->Save();

                if(count($request->image)>0){
                foreach($request->image as $image){
                //$image= $request->file('image');
                $img=time().'.'.$image->getClientOriginalExtension();
                $location= public_path('images/childImage/'.$img);
                Image::make($image)->save($location);

                $childImage= new childImages;
                $childImage->child_id= $child->id;
                $childImage->image=$img;
                $childImage->Save();
                }
    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\model\children  $children
     * @return \Illuminate\Http\Response
     */
    public function show(children $children)
    {
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\children  $children
     * @return \Illuminate\Http\Response
     */
    public function edit(children $children)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\children  $children
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, children $children)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\children  $children
     * @return \Illuminate\Http\Response
     */
    public function destroy(children $children)
    {
        //
    }
}
