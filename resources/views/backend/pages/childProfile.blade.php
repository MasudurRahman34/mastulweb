 @extends('backend.layouts.master')
 @section('content')
 <!--Child Profile Page -->
 <link rel="stylesheet" href="{{asset('admin/node_modules/dropify/dist/css/dropify.min.css')}}"/>
 <!-- context menu -->
 <link rel="stylesheet" href="{{asset('admin/node_modules/jquery-contextmenu/dist/jquery.contextMenu.min.css')}}" />
 <!-- End context -->
 <!-- carousel -->
 <link rel="stylesheet" href="{{asset('admin/node_modules/owl-carousel-2/assets/owl.carousel.min.css')}}" />
 <link rel="stylesheet" href="{{asset('admin/node_modules/owl-carousel-2/assets/owl.theme.default.min.css')}}" />
 <!-- end carousel -->
 <!-- End profile page -->
 <style type="text/css">
 .additionalStipend{
  display:none;}
  .picture-container {
    position: relative;
    cursor: pointer;
    text-align: center; }
    .picture {
      width: 106px;
      height: 106px;
      background-color: #999999;
      border: 4px solid #CCCCCC;
      color: #FFFFFF;
      border-radius: 50%;
      margin: 5px auto;
      overflow: hidden;
      transition: all 0.2s;
      -webkit-transition: all 0.2s; }
      .picture:hover {
        border-color: #2ca8ff; }
        .picture input[type="file"] {
          cursor: pointer;
          display: block;
          height: 100%;
          left: 0;
          opacity: 0 !important;
          position: absolute;
          top: 0;
          width: 100%; }
          .wizard-card .picture-src {
            width: 100%; }
          </style>
          <div class="row user-profile">
            <div class="col-lg-4 ">
              <div class="row">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body avatar">
                      <h4 class="card-title">Info</h4>
                      <div class="owl-carousel owl-theme full-width">
                       
                          

                          @foreach ($child->childImages as $Imageg)
                           <div class="item">

                          <img src="{{asset('images/childImage/'.$Imageg->image)}}" alt="image" />
                          </div>
                        @endforeach

                        
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 stretch-card side-left">
                  <div class="card">
                    <div class="card-body overview">
                      <ul class="achivements">
                         
                        @foreach(App\model\paymentPreferrence::select('sponsor_id', DB::raw('SUM(amount) as total_amount'))->where('sponsor_id',$child->sponsor->id)->groupBy('sponsor_id')->get() as $payment)
                        <li><p>0</p><p>Sponsered Material</p></li>
                        <li><p>{{$payment->total_amount}}</p><p>Paid Amount</p></li>
                        
                        
                        @endforeach
                      </ul>
                      <div class="wrapper about-user ">
                        <h4 class="card-title mt-4 mb-3" style="color:; background-color: #b9e0e4; padding: 10px; border-radius: 2px;  border: 2px solid #f7a2d9;">Sponser Details</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam consectetur ex quod.</p>
                      </div>
                      <div class="info-links">

                        <a class="website" href="{{ route('admin.sponsorProfile', $child->sponsor->slug) }}">
                          <i class="mdi mdi-earth text-gray"></i>
                          <span>{{$child->sponsor->name}}</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8 side-right stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-block d-sm-flex align-items-center justify-content-between">
                    <h4 class="card-title mb-0">Child Profile Information</h4>
                    <ul class="nav nav-tabs tab-solid tab-solid-primary mb-0" id="myTab" role="tablist">

                      <li class="nav-item">
                        <a class="nav-link" id="stipend-tab" data-toggle="tab" href="#stipend" role="tab" aria-controls="stipend">Stipends</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-expanded="true">Info</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact">Contact</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="survey-tab" data-toggle="tab" href="#survey" role="tab" aria-controls="security">Survey</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="comment-tab" data-toggle="tab" href="#comment" role="tab" aria-controls="comment">Comment</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="security-tab" data-toggle="tab" href="#security" role="tab" aria-controls="security">Security</a>
                      </li>
                    </ul>
                  </div>
                  <div class="wrapper">
                    <hr>
                    <div class="tab-content" id="myTabContent" style="padding-top: 1px;">
                     <!-- Start Info-tab -->
                     <div class="tab-pane fade" id="stipend" role="tabpanel" aria-labelledby="stipend-tab">
                      <div class="row">
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal-4" data-whatever="@fat">Add Stidents</button>


                        <div class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Stipends</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body" style="padding-top:5px;">

                                <form>
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Select Stipends</label>
                                        <select name="country" class="form-control" id="selectStipend" onclick="noneStiped()">
                                          <option disabled="" selected=""></option>
                                          <option value="3" > None</option>
                                          <option value="0" > Tution Fees</option>
                                          <option value="1" > Uniform</option>
                                          <option value="1" > Shoes And Sock</option>
                                          <option value="1" > Books</option>
                                          <option value="1" > Exercise Books</option>
                                          <option value="1" > Drawing Books</option>
                                          <option value="1" > Hygiene And Training</option>
                                          <option value="1" > Nutriious Food</option>
                                          <option value="1" > Stationeries</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                       <label for="message-text" class="col-form-label">Date</label>
                                       <input type="date" class="form-control">
                                     </div>
                                   </div>
                                   <div class="col-sm-6">
                                    <div class="form-group additionalStipend">
                                      <label for="recipient-name" class="col-form-label">Add Stipend Name:</label>
                                      <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group additionalStipend">
                                      <label for="message-text" class="col-form-label">Price</label>
                                      <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                  </div>
                                  <div class="col-sm-12">
                                   <div class="form-group">
                                    <label for="message-text" class="col-form-label">Comment</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="picture-container">
                                    <div class="picture">
                                      <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                      <input type="file" id="wizard-picture" name="image[]" multiple>
                                    </div>
                                    <h6>Choose Picture</h6>
                                  </div>
                                </div><div class="col-sm-4">
                                  <div class="picture-container">
                                    <div class="picture">
                                      <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                      <input type="file" id="wizard-picture" name="image[]" multiple>
                                    </div>
                                    <h6>Choose Picture</h6>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="picture-container">
                                    <div class="picture">
                                      <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                      <input type="file" id="wizard-picture" name="image[]" multiple>
                                    </div>
                                    <h6>Choose Picture</h6>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                 <div class="form-group">
                                  <label for="message-text" class="col-form-label">Video link</label>
                                  <input type="text" class="form-control" id="recipient-name">
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-success">Submit</button>
                              <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- End Info-tab -->

              <!-- Start Info-tab --> 
              <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info">
                <form action="#">
                  <div class="row">
                    <div class="col-md-12">
                      <address>
                        <p> <span class="font-weight-bold text-info">Child ID :</span> {{$child->childManual_id}}</p>
                      </address>
                    </div>  
                    <div class="col-md-3">
                      <p class="font-weight-bold">Name</p>
                    </div>
                    <div class="col-md-4">
                      <p class="">{{$child->child_name}}</p>
                    </div>
                    <div class="col-md-2">
                      <p class="font-weight-bold">{{$child->gender}}</p>
                    </div>
                    <div class="col-md-1">
                      <p class="font-weight-bold">Age</p>
                    </div>
                    <div class="col-md-2">
                      <p class="">{{$child->age}}</p>
                    </div>

                    <div class="col-md-3">
                      <p class="font-weight-bold"></p>
                    </div>
                    <div class="col-md-4">
                      <p class="">{{$child->date_of_birth}}</p>
                    </div>
                    <div class="col-md-2">
                      <p class="font-weight-bold">Religious</p>
                    </div>
                    <div class="col-md-2">
                      <p class="">{{$child->religious}}</p>
                    </div>      
                    <div class="col-md-3">
                      <p class="font-weight-bold ">Father's Name</p>
                    </div>
                    <div class="col-md-3">
                      <p class="">{{$child->religious}}</p>
                    </div>
                    <div class="col-md-3">
                      <p class="font-weight-bold text-center">Mother's Name</p>
                    </div>
                    <div class="col-md-3">
                      <p class="">{{"Hiramoti Bibi"}}</p>
                    </div>

                    <div class="col-md-3">
                      <p class="font-weight-bold"></p>
                    </div>
                    <div class="col-md-3">
                      <p class="font-weight-bold">{{"Driver"}}</p>
                    </div>
                    <div class="col-md-3">
                      <p class="font-weight-bold"></p>
                    </div>
                    <div class="col-md-3">
                      <p class="font-weight-bold">{{"Housewife"}}</p>
                    </div>
                    <div class="col-md-3">
                      <p class="font-weight-bold">Contact No</p>
                    </div>
                    <div class="col-md-3">
                      <p class="">{{"01750687951"}}</p>
                    </div>
                    <div class="col-md-3">
                      <p class="font-weight-bold"></p>
                    </div>
                    <div class="col-md-3">
                      <p class="">{{"01750687951"}}</p>
                    </div>
                    <div class="col-md-3">
                      <p class="font-weight-bold">Local Address </p>
                    </div>
                    <div class="col-md-9">
                      <p class="">{{$child->present_address}}</p>
                    </div>
                    <div class="col-md-3">
                      <p class="font-weight-bold">Permanent Address </p>
                    </div>
                    <div class="col-md-9">
                      <p class="">{{$child->permanent_address}}</p>
                    </div>

                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-12">
                      <address>
                        <h4 class="font-weight-bold text-light bg-info" style="padding: 5px">Dreams And Likes </h4>
                      </address>
                    </div>
                    <div class="col-md-2">
                      <p class="font-weight-bold ">Color</p>
                    </div>
                    <div class="col-md-4">
                      <p class="">{{$child->fav_color}}</p>
                    </div>
                    <div class="col-md-2">
                      <p class="font-weight-bold">Food</p>
                    </div>
                    <div class="col-md-4">
                      <p class="">{{$child->fav_food}}</p>
                    </div>

                    <div class="col-md-2">
                      <p class="font-weight-bold ">Sports</p>
                    </div>
                    <div class="col-md-4">
                      <p class="">{{$child->fav_sports}}</p>
                    </div>
                    <div class="col-md-2">
                      <p class="font-weight-bold">Hobby</p>
                    </div>
                    <div class="col-md-4">
                      <p class="">{{$child->hobby}}</p>
                    </div>
                    <div class="col-md-2">
                      <p class="font-weight-bold ">Skill</p>
                    </div>
                    <div class="col-md-10">
                      <p class="">{{$child->skills}}</p>
                    </div>
                    <div class="col-md-3">
                      <p class="font-weight-bold ">Favorite Personality</p>
                    </div>
                    <div class="col-md-3">
                      <p class="">{{$child->fav_personality}}</p>
                    </div>
                    <div class="col-md-3">
                      <p class="font-weight-bold ">Favorite Teacher</p>
                    </div>
                    <div class="col-md-3">
                      <p class="">{{$child->fav_teacher}}</p>
                    </div>
                    <div class="col-md-3">
                      <p class="font-weight-bold ">Favorite place</p>
                    </div>
                    <div class="col-md-9">
                      <p class="font-weight-light">{{$child->fav_place}}</p>
                    </div>
                    <div class="col-md-3">
                      <p class="font-weight-bold ">Child Says</p>
                    </div>
                    <div class="col-md-9">
                     <footer class="blockquote-footer" style="font-size: 130%">"{{$child->permanent_address}} <cite title="Source Title">{{$child->permanent_address}}</cite>"</footer>
                   </div>

                 </div>


                 <div class="form-group mt-3">
                  <button type="submit" class="btn btn-success mr-2">Update</button>
                  <button class="btn btn-outline-danger">Cancel</button>
                </div>
              </form>
            </div><!-- tab info ends -->

            <!-- // start contact info -->
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="security-tab">
              <form action="#">
                <div class="row">
                  <div class="col-md-12">
                    <address>
                      <p> <span class="font-weight-bold text-info">House Owner Information</span></p>
                    </address>
                  </div>
                  @foreach ($child->guardians as $grdn)
                  <div class="col-md-2">
                    <p class=""><b>Type-</b>{{$grdn->guardian_type}}</p>
                  </div>
                  <div class="col-md-3">
                    <p class=""><b>Name-</b>{{$grdn->name}}</p>
                  </div>
                  <div class="col-md-3">
                    <p class=""><b>Contact no-</b>{{$grdn->mobile_num}}</p>
                  </div>
                  <div class="col-md-4">
                    <p class=""><b>Address-</b>{{$grdn->gaddress}}</p>
                  </div>
                  @endforeach
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <address>
                      <p> <span class="font-weight-bold text-info">Siblings Information</span></p>
                    </address>  
                  </div>
                  @foreach ($child->siblings as $sbln)
                  <div class="col-md-4">
                    <p class=""><b>Name-</b>{{$sbln->sibling_name}}</p>
                  </div>
                  <div class="col-md-4">
                    <p class=""><b>Class-</b>{{$sbln->sibling_class}}</p>
                  </div>
                  <div class="col-md-4">
                    <p class=""><b>Age-</b>{{$sbln->sibling_age}}</p>
                  </div>
                  @endforeach
                </div>
                
                
                <div class="form-group mt-3">
                  <a class='btn btn-success mr-2' href="{{ route('childprofile.siblingAddIndex', $child->id) }}"> Add Siblings</a>

                  <a class='btn btn-success mr-2' href="{{ route('childProfile.GuardianAddIndex', $child->id) }}"> Add Guardian</a>
                  <button type="submit" class="btn btn-success mr-2">Update</button>
                  <button class="btn btn-outline-danger">Cancel</button>
                </div>
              </form>
            </div>
            <!-- end contact tab -->

            <!-- //survey-tab -->
            <div class="tab-pane fade" id="survey" role="tabpanel" aria-labelledby="survey-tab">
              <form action="#">
                <div class="row">
                  <div class="col-md-12">
                    <address>
                      <p><span class="font-weight-bold text-info">Informar Name--</span>{{$child->informar_name}} <span class="font-weight-bold text-info m-2">Age--</span>{{$child->informar_age}} </p>
                    </address>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7">
                    <div class="row">
                      <div class="col-md-12">
                        <address>
                          <p> <span class="font-weight-bold text-info">Education Level Of Father</span></p>
                        </address>
                      </div>

                      <div class="col-md-12">
                        <address>
                          <p> <span class="font-weight-bold">{{$child->father_education}} </span></p>
                        </address>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="row">
                      <div class="col-md-12">
                        <address>
                          <p> <span class="font-weight-bold text-info">Education Level Of Mother</span></p>
                        </address>
                      </div>

                      <div class="col-md-12">
                        <address>
                          <p> <span class="font-weight-bold">{{$child->mother_education}} </span></p>
                        </address>
                      </div>
                    </div>
                  </div>                           
                </div>
                <div class="row">
                  <div class="col-md-7">
                    <div class="row">
                      <div class="col-md-12">
                        <address>
                          <p> <span class="font-weight-bold text-info">Reason Behind Stopping Education</span></p>
                        </address>
                      </div>

                      <div class="col-md-12">
                        <address>
                          <p> <span class="font-weight-bold">{{$child->stoppingEdu_reason}} </span></p>
                        </address>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="row">
                      <div class="col-md-12">
                        <address>
                          <p> <span class="font-weight-bold text-info">Type Of House</span></p>
                        </address>
                      </div>

                      <div class="col-md-12">
                        <address>
                          <p> <span class="font-weight-bold">{{$child->house_type}} </span></p>
                        </address>
                      </div>
                    </div>
                  </div>                           
                </div>
                <div class="row">
                  <div class="col-md-7">
                    <div class="row">
                      <div class="col-md-12">
                        <address>
                          <p> <span class="font-weight-bold text-info">Period Of Remaining At Present Residence <span class="text-danger">?</span></span></span></p>
                        </address>
                      </div>

                      <div class="col-md-12">
                        <address>
                          <p> <span class="font-weight-bold">{{$child->stay_time}} </span></p>
                        </address>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="row">
                      <div class="col-md-12">
                        <address>
                         <p> <span class="font-weight-bold text-info"> Reason Behind Changing Residence<span class="text-danger">?</span></span></span></p>
                       </address>
                     </div>
                     <div class="col-md-12">
                      <address>
                        <p> <span class="font-weight-bold">{{$child->changing_residence}} </span></p>
                      </address>
                    </div>
                  </div>
                </div>                          
              </div>
              <div class="row">
                <div class="col-md-7">
                  <div class="row">
                    <div class="col-md-12">
                      <address>
                        <p> <span class="font-weight-bold text-info">Where Was Before<span class="text-danger">?</span></span></span></p>
                      </address>
                    </div>

                    <div class="col-md-12">
                      <address>
                        <p> <span class="font-weight-bold">{{$child->where_before}}  </span></p>
                      </address>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="row">
                    <div class="col-md-12">
                      <address>
                        <p> <span class="font-weight-bold text-info">Previous School Name<span class="text-danger">?</span></span></span></p>
                      </address>
                    </div>

                    <div class="col-md-12">
                      <address>
                        <p> <span class="font-weight-bold">{{$child->pre_school}} </span></p>
                      </address>
                    </div>
                  </div>
                </div>                           
              </div>
              <div class="row">
                <div class="col-md-7">
                  <div class="row">
                    <div class="col-md-12">
                      <address>
                        <p> <span class="font-weight-bold text-info">Period Of Study At This School <span class="text-danger">?</span></span></span></p>
                      </address>
                    </div>

                    <div class="col-md-12">
                      <address>
                        <p> <span class="font-weight-bold">{{$child->study_time}} </span></p>
                      </address>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="row">
                    <div class="col-md-12">
                      <address>
                       <p> <span class="font-weight-bold text-info"> Reason Behind Changing School<span class="text-danger">?</span></span></span></p>
                     </address>
                   </div>

                   <div class="col-md-12">
                    <address>
                      <p> <span class="font-weight-bold">{{$child->reason_chgSchool}} </span></p>
                    </address>
                  </div>
                </div>
              </div>                          
            </div>
            <div class="row">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12">
                    <address>
                      <p> <span class="font-weight-bold text-info">Satisfactory Level Of This Education</span></p>
                    </address>
                  </div>

                  <div class="col-md-12">
                    <address>
                      <p> <span class="font-weight-bold">{{$child->reason_chgSchool}}</span></p>
                    </address>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="row">
                  <div class="col-md-12">
                    <address>
                      <p> <span class="font-weight-bold text-info">Noticable Reason</span></p>
                    </address>
                  </div>

                  <div class="col-md-12">
                    <address>
                      <p> <span class="font-weight-bold">{{$child->reason_chgSchool}}</span></p>
                    </address>
                  </div>
                </div>
              </div>                           
            </div>
            <div class="row">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12">
                    <address>
                      <p> <span class="font-weight-bold text-info">Parents Problems During Study Of Children</span></p>
                    </address>
                  </div>

                  <div class="col-md-12">
                    <address>
                      <p> <span class="font-weight-bold">{{$child->parents_problem}}</span></p>
                    </address>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="row">
                  <div class="col-md-12">
                    <address>
                      <p> <span class="font-weight-bold text-info">Prents Dream And Plan For Her Children</span></p>
                    </address>
                  </div>

                  <div class="col-md-12">
                    <address>
                      <p> <span class="font-weight-bold">{{$child->parents_dream}}</span></p>
                    </address>
                  </div>
                </div>
              </div>                           
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="btn btn-success mr-2">Update</button>
              <button class="btn btn-outline-danger">Cancel</button>
            </div>
          </form>
        </div>
        <!-- end Survey tab -->

        <!-- //comment-tab -->
        <div class="tab-pane fade" id="comment" role="tabpanel" aria-labelledby="comment-tab">   
          <div class="row">
            <div class="col-md-4">
              <div class="row">
                <div class="col-md-12">
                  <address>
                    <p> <span class="font-weight-bold text-info">Brilliancy</span></p>
                  </address>
                </div>

                <div class="col-md-12">
                  <address>
                    <p> <span class="font-weight-bold">{{$child->brilliancy}}</span></p>
                  </address>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="row">
                <div class="col-md-12">
                  <address>
                    <p> <span class="font-weight-bold text-info">Behaviour</span></p>
                  </address>
                </div>
                <div class="col-md-12">
                  <address>
                    <p> <span class="font-weight-bold">{{$child->behaviour}}</span></p>
                  </address>
                </div>
              </div>
            </div>  
            <div class="col-md-4">
              <div class="row">
                <div class="col-md-12">
                  <address>
                    <p> <span class="font-weight-bold text-info">Attendance</span></p>
                  </address>
                </div>
                <div class="col-md-12">
                  <address>
                    <p> <span class="font-weight-bold">{{$child->attendency}}</span></p>
                  </address>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-12">
                  <address>
                    <p> <span class="font-weight-bold text-info">Comments</span></p>
                  </address>
                </div>

                <div class="col-md-12">
                  <address>
                    <p> <span class="font-weight-bold">{{$child->comment}}</span></p>
                  </address>
                </div>
              </div>
            </div>

          </div>

          <div class="form-group mt-3">
            <button type="submit" class="btn btn-success mr-2">Update</button>
            <button class="btn btn-outline-danger">Cancel</button>
          </div>
        </form>
      </div>
      <!-- end Comment tab -->

      <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
        <form action="#">
          <div class="form-group">
            <label for="change-password">Change password</label>
            <input type="password" class="form-control" id="change-password" placeholder="Enter you current password">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="new-password" placeholder="Enter you new password">
          </div>
          <div class="form-group mt-5">
            <button type="submit" class="btn btn-success mr-2">Update</button>
            <button class="btn btn-outline-danger">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

<script type="text/javascript">


  function noneStiped() {
    var x = document.getElementById("selectStipend").value;

    if (x==3) {
      var e=document.getElementsByClassName("additionalStipend");
      for (var i=0;i<e.length;i+=1){
        if(e[i].style.display == 'block')
          e[i].style.display = 'none';
        else
          e[i].style.display = 'block';
      }
    }
  /*if (x!==3) {
    var e=document.getElementById("additionalGift");
    if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
      }*/
    }

  </script>

  @endsection