 @extends('backend.layouts.master')
 @section('content')
 <div class="row user-profile">
  <div class="col-lg-4 ">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body avatar">
            <h4 class="card-title">Info</h4>
            <div class="owl-carousel owl-theme full-width">
              <div class="item">
                <img src="{{asset('admin/images/carousel/antara.jpg')}}" height="250" />
              </div>
              <div class="item">
                <img src="{{asset('admin/images/carousel/cpic1.jpg')}}" height="250"/>
              </div>
              <div class="item">
                <img src="{{asset('admin/images/carousel/banner_1.jpg')}}" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 stretch-card side-left">
        <div class="card">
          <div class="card-body overview">
            <ul class="achivements">
              <li><p>34</p><p>Sponsered Material</p></li>
              <li><p>23</p><p>Paid Amount</p></li>
              <li><p>29</p><p>Not Sponsered</p></li>
            </ul>
            <div class="wrapper about-user ">
              <h4 class="card-title mt-4 mb-3" style="color:; background-color: #b9e0e4; padding: 10px; border-radius: 2px;  border: 2px solid #f7a2d9;">Sponser Details</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam consectetur ex quod.</p>
            </div>
            <div class="info-links">
              <a class="website" href="http://urbanui.com/">
                <i class="mdi mdi-earth text-gray"></i>
                <span>http://urbanui.com/</span>
              </a>
              <a class="social-link" href="#">
                <i class="mdi mdi-facebook text-gray"></i>
                <span>https://www.facebook.com/johndoe</span>
              </a>
              <a class="social-link" href="#">
                <i class="mdi mdi-linkedin text-gray"></i>
                <span>https://www.linkedin.com/johndoe</span>
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
              <a class="nav-link" id="gift-tab" data-toggle="tab" href="#gift" role="tab" aria-controls="avatar">Gift</a>
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
          <div class="tab-content" id="myTabContent">
           <!-- Start Info-tab -->
           <div class="tab-pane fade" id="gift" role="tabpanel" aria-labelledby="gift-tab">
            <div class="col-sm-12">
                  <div class="form-group label-floating">
                    <label class="control-label">Add Gift</label>
                    <select name="country" class="form-control">
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
                <div class="col-sm-4 ">
                  <div class="form-group label-floating">
                    <label class="control-label">Age</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <!-- ///if none show additional gift input box, and its cost -->
            <div class="wrapper mb-5 mt-4">
              <span class="badge badge-warning text-white">Note : </span>
              <p class="d-inline ml-3 text-muted">Image size is limited to not greater than 1MB.</p>
            </div>
            <form action="#">
              <input type="file" class="dropify" data-max-file-size="1mb" data-default-file="../../images/faces/face6.jpg"/>
              <div class="form-group mt-5">
                <button type="submit" class="btn btn-success mr-2">Update</button>
                <button class="btn btn-outline-danger">Cancel</button>
              </div>
            </form>
          </div>
          <!-- End Info-tab -->

          <!-- Start Info-tab --> 
          <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info">
            <form action="#">
              <div class="row">
                <div class="col-md-12">
                  <address>
                    <p> <span class="font-weight-bold text-info">Child ID :</span> {{"01734058avcd"}}</p>
                  </address>
                </div>  
                <div class="col-md-3">
                  <p class="font-weight-bold">Name</p>
                </div>
                <div class="col-md-4">
                  <p class="">{{"Antara begum  Khanom "}}</p>
                </div>
                <div class="col-md-2">
                  <p class="font-weight-bold">Female</p>
                </div>
                <div class="col-md-1">
                  <p class="font-weight-bold">Age</p>
                </div>
                <div class="col-md-2">
                  <p class="">13 years</p>
                </div>

                <div class="col-md-3">
                  <p class="font-weight-bold">Birth Date</p>
                </div>
                <div class="col-md-4">
                  <p class="">{{"12 Sep 2005"}}</p>
                </div>
                <div class="col-md-2">
                  <p class="font-weight-bold">Religious</p>
                </div>
                <div class="col-md-2">
                  <p class="">{{"Islam"}}</p>
                </div>      
                <div class="col-md-3">
                  <p class="font-weight-bold ">Father's Name</p>
                </div>
                <div class="col-md-3">
                  <p class="">{{"Kuddus Alom Khanom"}}</p>
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
                  <p class="">{{"Jhaochar, 150, Life Care Hospital, Hajaribag, Mohammadpur, Dhaka"}}</p>
                </div>
                <div class="col-md-3">
                  <p class="font-weight-bold">Permanent Address </p>
                </div>
                <div class="col-md-9">
                  <p class="">{{"Jhaochar, 150, Life Care Hospital, Hajaribag, Mohammadpur, Dhaka"}}</p>
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
                  <p class="">{{"Green, Red"}}</p>
                </div>
                <div class="col-md-2">
                  <p class="font-weight-bold">Food</p>
                </div>
                <div class="col-md-4">
                  <p class="">{{"Icecream, Achar, Frouts"}}</p>
                </div>

                <div class="col-md-2">
                  <p class="font-weight-bold ">Sports</p>
                </div>
                <div class="col-md-4">
                  <p class="">{{"Criket, Football"}}</p>
                </div>
                <div class="col-md-2">
                  <p class="font-weight-bold">Hobby</p>
                </div>
                <div class="col-md-4">
                  <p class="">{{"Singing, Dancing, Reading"}}</p>
                </div>
                <div class="col-md-2">
                  <p class="font-weight-bold ">Skill</p>
                </div>
                <div class="col-md-10">
                  <p class="">{{"Singing, Dancing, Reading"}}</p>
                </div>
                <div class="col-md-3">
                  <p class="font-weight-bold ">Favorite Personality</p>
                </div>
                <div class="col-md-3">
                  <p class="">{{"Father"}}</p>
                </div>
                <div class="col-md-3">
                  <p class="font-weight-bold ">Favorite Teacher</p>
                </div>
                <div class="col-md-3">
                  <p class="">{{"Abdul Shorif"}}</p>
                </div>
                <div class="col-md-3">
                  <p class="font-weight-bold ">Favorite place</p>
                </div>
                <div class="col-md-9">
                  <p class="font-weight-light">{{"Botanical Garden"}}</p>
                </div>
                <div class="col-md-3">
                  <p class="font-weight-bold ">Child Says</p>
                </div>
                <div class="col-md-9">
                 <footer class="blockquote-footer" style="font-size: 130%">"Someone famous in <cite title="Source Title">Source Title</cite>"</footer>
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
              <div class="col-md-4">
                <p class=""><b>Name-</b>{{"Antara begum  Khanom "}}</p>
              </div>
              <div class="col-md-4">
                <p class=""><b>Contact no-</b>{{"01830950697 "}}</p>
              </div>
              <div class="col-md-4">
                <p class=""><b>Address-</b>{{"Jhaochar, 150, Life Care Hospital, Hajaribag, Mohammadpur, Dhaka"}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <address>
                  <p> <span class="font-weight-bold text-info">Siblings Information</span></p>
                </address>
              </div>
              <div class="col-md-4">
                <p class=""><b>Name-</b>{{"Antara begum  Khanom "}}</p>
              </div>
              <div class="col-md-4">
                <p class=""><b>Contact no-</b>{{"01830950697 "}}</p>
              </div>
              <div class="col-md-4">
                <p class=""><b>Address-</b>{{"Jhaochar, 150, Life Care Hospital, Hajaribag, Mohammadpur, Dhaka"}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <address>
                  <p> <span class="font-weight-bold text-info">Relative's Information</span></p>
                </address>
              </div>
              <div class="col-md-4">
                <p class=""><b>Name-</b>{{"Antara begum  Khanom "}}</p>
              </div>
              <div class="col-md-4">
                <p class=""><b>Contact no-</b>{{"01830950697 "}}</p>
              </div>
              <div class="col-md-4">
                <p class=""><b>Address-</b>{{"Jhaochar, 150, Life Care Hospital, Hajaribag, Mohammadpur, Dhaka"}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <address>
                  <p> <span class="font-weight-bold text-info">Neighbour's Information</span></p>
                </address>
              </div>
              <div class="col-md-4">
                <p class=""><b>Name-</b>{{"Antara begum  Khanom "}}</p>
              </div>
              <div class="col-md-4">
                <p class=""><b>Contact no-</b>{{"01830950697 "}}</p>
              </div>
              <div class="col-md-4">
                <p class=""><b>Address-</b>{{"Jhaochar, 150, Life Care Hospital, Hajaribag, Mohammadpur, Dhaka"}}</p>
              </div>
            </div>
            <div class="form-group mt-3">
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
                  <p><span class="font-weight-bold text-info">Informar Name--</span>{{"Antara begum  Khanom "}} <span class="font-weight-bold text-info m-2">Age--</span>{{"40 years"}}</p>
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
                      <p> <span class="font-weight-bold">Below SSC</span></p>
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
                      <p> <span class="font-weight-bold">Below Five</span></p>
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
                      <p> <span class="font-weight-bold">{{"Poverty"}}</span></p>
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
                      <p> <span class="font-weight-bold">Brick Made</span></p>
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
                      <p> <span class="font-weight-bold">{{"Above Two Year"}}</span></p>
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
                    <p> <span class="font-weight-bold">{{"Doing New Business In this Area"}}</span></p>
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
                    <p> <span class="font-weight-bold">{{"Mirpur 12, Cantonment, Kalshi"}} </span></p>
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
                    <p> <span class="font-weight-bold">{{"Shekh Rasel Primary School"}}</span></p>
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
                    <p> <span class="font-weight-bold">{{"Above Two Year"}}</span></p>
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
                  <p> <span class="font-weight-bold">{{"My parent's Doing Business In this Area"}}</span></p>
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
                  <p> <span class="font-weight-bold">{{"Dismal"}}</span></p>
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
                  <p> <span class="font-weight-bold">{{"Null"}}</span></p>
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
                  <p> <span class="font-weight-bold">{{"Financial Crisis, Medical Support, Transport"}}</span></p>
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
                  <p> <span class="font-weight-bold">{{"Become a Ideal peorson"}}</span></p>
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
                  <p> <span class="font-weight-bold">{{"Satisfactory"}}</span></p>
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
                  <p> <span class="font-weight-bold">{{"Very Good"}}</span></p>
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
                  <p> <span class="font-weight-bold">{{"Good"}}</span></p>
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
                  <p> <span class="font-weight-bold">{{"She is Good Student"}}</span></p>
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

@endsection