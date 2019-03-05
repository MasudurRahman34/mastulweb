  @extends('backend.layouts.master')

  @section('content')
  <link rel="shortcut icon" hreadmin/images/favicon.html" /></head>
  <!-- partial -->
  <!--  <input class="mdl-textfield__input" type="text" id="sample3">
   <label class="mdl-textfield__label" for="sample3">Text...</label> -->
   <div class="row">
     <div class="col-sm-9 col-sm-offset-1">
      <!--      Wizard container        -->
      <div class="wizard-container">
        <div class="card wizard-card" data-color="green" id="wizardProfile">
          <form action="" method="" enctype="multipart/form-data">
            <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
            <div class="wizard-header">
              <h3 class="wizard-title">
               Build Your Child Profile
             </h3>
             <h5>This information will let us know more about you.</h5>
           </div>
           <div class="wizard-navigation">
            <ul>
              <li><a href="#image" data-toggle="tab">Image</a></li>
              <li><a href="#aboutChild" data-toggle="tab">Child Info</a></li>
              <li><a href="#aboutParent" data-toggle="tab">Parent Info</a></li>
              <li><a href="#dreamLike" data-toggle="tab">Dream-Likes</a></li>
              <li><a href="#gardianSurvey" data-toggle="tab">Survey</a></li>
              <li><a href="#contact" data-toggle="tab">Contact</a></li>
              <li><a href="#verify" data-toggle="tab">Verify</a></li>
            </ul>
          </div>      
          <div class="tab-content">
            <!-- about Image-->
            <div class="tab-pane" id="image">
              <div class="row"> 
                <div class="col-sm-4">
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
                      <img src="assets/img/default-avatar.png" class="picture-src" title="" id="wizardPicturePreview1" />
                      <input type="file" id="wizard-picture1" name="image[]" multiple>
                    </div>
                    <h6>Choose Picture</h6>
                  </div>
                </div> 
                <div class="col-sm-4">
                  <div class="picture-container">
                    <div class="picture">
                      <img src="assets/img/default-avatar.png" class="picture-src" title="" id="wizardPicturePreview2" />
                      <input type="file" id="wizard-picture2" name="image[]" multiple>
                    </div>
                    <h6>Choose Picture</h6>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group label-floating">
                    <label class="control-label">Video Link</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group label-floating">
                    <label class="control-label">Sponser Status</label>
                    <select name="country" class="form-control">
                      <option disabled="" selected=""></option>
                      <option value="0" > Sponsered</option>
                      <option value="1" selected> Not Sponsered</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <!-- About Child -->
            <div class="tab-pane" id="aboutChild">
              <div class="row">
                <div class="col-sm-12">
                  <h4 class="info-text" style="color: blue"> Personal Details Of Child </h4>
                </div>
                <div class="col-sm-5 col-sm-offset-1">
                  <div class="form-group label-floating">
                    <label class="control-label">Full Name <small>(required)</small></label>
                    <input type="text" class="form-control" >
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label class=""> Select Gender</label>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group label-floating">
                    <input type="checkbox" class="" id="wizard-checkbox" value="male">Male
                    <input type="checkbox" class="" id="wizard-checkbox" value="Female">Female
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <div class="form-group label-floating">
                    <label class="control-label">Age</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <div class="form-group label-floating">
                    <label class="control-label">Class</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <div class="form-group label-floating">
                    <label class="control-label">School</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <div class="form-group label-floating">
                    <label class="control-label">Height</label>
                    <input type="text" class="form-control">
                  </div>
                </div>

                <div class="col-sm-4 ">
                  <div class="form-group label-floating">
                    <label class="control-label">Religious</label>
                    <select name="country" class="form-control">
                      <option disabled="" selected=""></option>
                      <option value="Islam"> Islam </option>
                      <option value="Hindu"> Hindu </option>
                      <option value="Christian"> Christian </option>
                      <option value="Christian"> Christian </option>
                    </select>
                  </div>
                </div>
                
                <div class="col-sm-4 ">
                  <div class="form-group label-floating">
                    <label class="control-label">Blood Group</label>
                    <select name="country" class="form-control">
                      <option disabled="" selected=""></option>
                      <option value="A+"> A+ </option>
                      <option value="O+"> O+ </option>
                      <option value="B+"> B+ </option>
                      <option value="AB+"> AB+ </option>
                      <option value="A-"> A- </option>
                      <option value="O-"> O- </option>
                      <option value="B-"> B- </option>
                      <option value="AB-"> AB- </option>
                    </select>
                  </div>
                </div>

                <div class="col-sm-5 ">
                  <div class="form-group label-floating">
                    <input type="date" class="form-control">Date Of Birth
                    <label class="control-label"></label>
                  </div>
                </div>
                
                <div class="col-sm-7 ">
                  <div class="form-group label-floating">
                    <label class="control-label" style="color: pink">Does Child Have Any Birth Cirtificate?</label>
                    <select name="country" class="form-control">
                      <option disabled="" selected=""></option>
                      <option value="Afghanistan"> No </option>
                      <option value="Afghanistan"> Yes </option>
                    </select>
                  </div>
                </div>
              <!-- <div class="col-sm-5">
                <div class="form-group label-floating">
                  <label class="control-label">Country</label>
                  <select name="country" class="form-control">
                    <option disabled="" selected=""></option>
                    <option value="Afghanistan"> Afghanistan </option>
                    <option value="Albania"> Albania </option>
                    <option value="Algeria"> Algeria </option>
                    <option value="American Samoa"> American Samoa </option>
                    <option value="Andorra"> Andorra </option>
                    <option value="Angola"> Angola </option>
                    <option value="Anguilla"> Anguilla </option>
                    <option value="Antarctica"> Antarctica </option>
                    <option value="...">...</option>
                  </select>
                </div>
              </div> -->
              <div class="col-sm-12 ">
                <div class="form-group label-floating">
                  <label class="control-label">Present Address</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group label-floating">
                  <label class="control-label">Permanent Address</label>
                </div>
              </div>

              <div class="col-sm-3 ">
                <div class="form-group label-floating">
                  <label class="control-label">Village</label>
                  <input type="text" class="form-control" placeholder="">
                </div>
              </div>
              <div class="col-sm-3 ">
                <div class="form-group label-floating">
                  <label class="control-label">Home District</label>
                  <select name="country" class="form-control">
                    <option disabled="" selected=""></option>
                    <option value="Dhaka"> Dhaka </option>
                    <option value="Barishal"> Barishal </option>
                  </select>
                </div>
              </div>
              <div class="col-sm-3 ">
                <div class="form-group label-floating">
                  <label class="control-label">Upazilla</label>
                  <select name="country" class="form-control">
                    <option disabled="" selected=""></option>
                    <option value="A+"> A+ </option>
                    <option value="O+"> O+ </option>
                    <option value="B+"> B+ </option>
                    <option value="AB+"> AB+ </option>
                    <option value="A-"> A- </option>
                    <option value="O-"> O- </option>
                    <option value="B-"> B- </option>
                    <option value="AB-"> AB- </option>
                  </select>
                </div>
              </div> <div class="col-sm-3 ">
                <div class="form-group label-floating">
                  <label class="control-label">Union</label>
                  <select name="country" class="form-control">
                    <option disabled="" selected=""></option>
                    <option value="A+"> A+ </option>
                    <option value="O+"> O+ </option>
                    <option value="B+"> B+ </option>
                    <option value="AB+"> AB+ </option>
                    <option value="A-"> A- </option>
                    <option value="O-"> O- </option>
                    <option value="B-"> B- </option>
                    <option value="AB-"> AB- </option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <!-- parent information -->
          <div class="tab-pane" id="aboutParent">
            <div class="row">
              <div class="col-sm-12">
                <h4 class="info-text"  style="color: blue"> Father Information</h4>
              </div>
              <div class="col-sm-6 col-sm-offset-1">
                <div class="form-group label-floating">
                  <label class="control-label">Fathers Name <small>(required)</small></label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-sm-4 ">
                <div class="form-group label-floating">
                  <label class="control-label">Occupation</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-sm-6 ">
                <div class="form-group label-floating">
                  <label class="control-label">Mobile</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-sm-6 ">
                <div class="form-group label-floating">
                  <label class="control-label">Income</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              
              <div class="col-sm-12">
                <h4 class="info-text"  style="color: blue"> Mother Information</h4>
                
              </div>

              <div class="col-sm-6 col-sm-offset-1 ">
                <div class="form-group label-floating">
                  <label class="control-label">Mothers Name <small>(required)</small></label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group label-floating">
                 <label class="control-label">Occupation</label>
                 <input type="text" class="form-control">
                 <input type="radio" class="">Housewife
               </div>
             </div>
             <div class="col-sm-6   col-sm-offset-1">
              <div class="form-group label-floating ">
                <label class="control-label">Mobile</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-sm-6 ">
              <div class="form-group label-floating">
                <label class="control-label">Income</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-sm-12">
              <h4 class="info-text" style="color: blue"> Details Child's Brother and Sister</h4>
              
            </div>
            <div class="col-sm-4 ">
              <div class="form-group label-floating">
                <label class="control-label"><span style="color: pink">01.</span> Name</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-sm-4 ">
              <div class="form-group label-floating">
                <label class="control-label">Age</label>
                <input type="text" class="form-control">
              </div>
            </div>

            <div class="col-sm-4 ">
              <div class="form-group label-floating">
                <label class="control-label">Class</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-sm-4 ">
              <div class="form-group label-floating">
                <label class="control-label"><span style="color: pink">02.</span> Name</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-sm-4 ">
              <div class="form-group label-floating">
                <label class="control-label">Age</label>
                <input type="text" class="form-control">
              </div>
            </div>

            <div class="col-sm-4 ">
              <div class="form-group label-floating">
                <label class="control-label">Class</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-sm-4 ">
              <div class="form-group label-floating">
                <label class="control-label"><span style="color: pink">03.</span> Name</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-sm-4 ">
              <div class="form-group label-floating">
                <label class="control-label">Age</label>
                <input type="text" class="form-control">
              </div>
            </div>

            <div class="col-sm-4 ">
              <div class="form-group label-floating">
                <label class="control-label">Class</label>
                <input type="text" class="form-control">
              </div>
            </div>
          </div>
        </div>

        <!-- dream and Like -->
        <div class="tab-pane" id="dreamLike">
          <div class="row">
            <div class="col-sm-12">
              <h4 class="info-text"  style="color: blue">Dream</h4>
            </div>
            <div class="col-sm-12">
              <div class="form-group label-floating">
                <label class="control-label">Child Say <small>(required)</small></label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-sm-12">
              <h4 class="info-text"  style="color: blue"> Likes And favorites</h4>
            </div>
            <div class="col-sm-4">
              <div class="form-group label-floating">
                <label class="control-label">Color</label>
                <select name="country" class="form-control">
                  <option disabled="" selected=""></option>
                  <option value="Red"> Red </option>
                  <option value="Yellow"> Yellow </option>
                  <option value="Blue"> Blue </option>
                  <option value="Pink"> Pink </option>
                  <option value="Green">Green </option>
                  <option value="White"> White</option>
                </select>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group label-floating">
               <label class="control-label">Foods</label>
               <input type="text" class="form-control">
             </div>
           </div>
           <div class="col-sm-4">
            <div class="form-group label-floating ">
              <label class="control-label">Favorite Place</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group label-floating">
              <label class="control-label">Sports</label>
              <select name="country" class="form-control">
                <option disabled="" selected=""></option>
                <option value="Cricket"> Cricket </option>
                <option value="Football"> Football </option>
                <option value="Badminton"> Badminton </option>
                <option value="Kanamachi"> Kanamachi </option>
                <option value="Borofpani">Borofpani </option>
                <option value="Kutkut"> Kutkut</option>
              </select>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group label-floating ">
              <label class="control-label">Favorite Personality</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group label-floating ">
              <label class="control-label">Favorite Teacher</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group label-floating ">
              <label class="control-label">Hobby</label>
              <select name="country" class="form-control">
                <option disabled="" selected=""></option>
                <option value="Singing"> Singing </option>
                <option value="Art"> Art </option>
                <option value="Dancing"> Dancing </option>
                <option value="Gossiping"> Gossiping </option>
                <option value="Playing">Playing</option>
                <option value="Travelling"> Travelling</option>
                <option value="Reading"> Reading</option>
              </select>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group label-floating ">
              <label class="control-label">Child's Skills</label>
              <select name="country" class="form-control">
                <option disabled="" selected=""></option>
                <option value="Singing"> Singing </option>
                <option value="Art"> Art </option>
                <option value="Dancing"> Dancing </option>
                <option value="Reciting"> Reciting </option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <!-- Gardian's survey -->
      <div class="tab-pane" id="gardianSurvey">
        <div class="row">
          <div class="col-sm-12">
            <h4 class="info-text" style="color: blue">Child's Parents Or Guardians Information And Survey Questionnares  CSDP</h4>
          </div>
          <div class="col-sm-6 ">
            <div class="form-group label-floating">
              <label class="control-label">Informar Name <small>(required)</small></label>
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="col-sm-4 ">
            <div class="form-group label-floating">
              <label class="control-label">Age</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-sm-6 ">
            <div class="form-group label-floating">
              <label class="control-label">Education Level Of <span style="color: Maroon">Father</span></label>
              <select name="country" class="form-control">
                <option disabled="" selected=""></option>
                <option value="None"> None </option>
                <option value="Below-Five">Below-Five</option>
                <option value="Below-SSC"> Below-SSC </option>
                <option value="Five">SSC </option>
                <option value="Five">Five </option>
                <option value="HSC"> HSC</option>
                <option value="Honours">Honours</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6 ">
            <div class="form-group label-floating">
              <label class="control-label">Education Level Of <span style="color: Maroon">Mother</span></label>
              <select name="country" class="form-control">
                <option disabled="" selected=""></option>
                <option value="None"> None </option>
                <option value="Below-Five">Below-Five</option>
                <option value="Below-SSC"> Below-SSC </option>
                <option value="Five">SSC </option>
                <option value="Five">Five </option>
                <option value="HSC"> HSC</option>
                <option value="Honours">Honours</option>
              </select>
            </div>
          </div>
          <div class="col-sm-12 ">
            <div class="form-group label-floating">
              <label class="control-label" style="color: #663300">Reasons Behind Stoping Education ?</label>
              <input type="text" class="form-control">
            </div>
          </div>

          <div class="col-sm-4 ">
            <div class="form-group label-floating">
              <label class="control-label" style="color: #004d00">Period Of Remaining At Present Residence</label>
              <select name="country" class="form-control">
                <option disabled="" selected=""></option>
                <option value="Below-Two-Years"> Below-Two-Years </option>
                <option value="Below-Five-Years">Below-Five-Years</option>
                <option value="Below-Ten-Years"> Below-Ten-Years </option>
                <option value="Above-Five-Years">Above-Five-Years </option>
                <option value="Above-Ten-Years">Above-Ten-Years </option>
                <option value="Above-Two-Years"> Above-Two-Years</option>
                <option value="Recent">Recent</option>
              </select>
            </div>
          </div>
          
          <div class="col-sm-3">
            <div class="form-group label-floating">
              <label class="control-label" style="color: #004d00">Where Was Before ?</label>
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="col-sm-5">
            <div class="form-group label-floating">
              <label class="control-label" style="color: #004d00">Reason Behind Changing Residence ?</label>
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="col-sm-5">
            <div class="form-group label-floating">
              <label class="control-label" style="color: #004d00">Plan of Changing Present Residence ?</label>
              <input type="text" class="form-control" disabled >
            </div>
          </div>
          <div class="col-sm-3 ">
            <div class="form-group label-floating">
              <input type="checkbox" name="No" ><span style="color: #004d00">No</span>
              <input type="checkbox" name="Not Sure" ><span style="color: #004d00">Not Sure</span>
              <input type="checkbox" name="Yes" ><span style="color: #004d00">Yes</span>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group label-floating">
              <label class="control-label" style="color: #004d00">If Yes, Why and Where The Place?</label>
              <input type="text" class="form-control" >
            </div>
          </div>


          <div class="col-sm-4 ">
            <div class="form-group label-floating">
              <label class="control-label" style="color: #9900cc">Type of House</label>
              <select name="country" class="form-control">
                <option disabled="" selected=""></option>
                <option value="Building">Bulding</option>
                <option value="Brick-House">Brick_House</option>
                <option value="Tin-Shed"> Tin-Shed </option>
                <option value="Hut">Hut</option>
                <option value="Other">Other</option>
              </select>
            </div>
          </div>
          <div class="col-sm-4 ">
            <div class="form-group label-floating">
              <label class="control-label" style="color: #9900cc">Period Of Study At This School </label>
              <select name="country" class="form-control">
                <option disabled="" selected=""></option>
                <option value="Below-One-Year">Below-One-Years</option>
                <option value="One-Year">One-Year</option>
                <option value="One-Year"> One-Year </option>
                <option value="Two-Years"> Two-Years </option>
                <option value="Three-Years"> Three-Years </option>
                <option value="Four-Years">Four-Years</option>
                <option value="Five-Years">Five-Years</option>
              </select>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group label-floating">
              <label class="control-label" style="color: #9900cc">Previous School Name ?</label>
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group label-floating">
              <label class="control-label" style="color: #663300">Reasons Behind Changing School ? </label>
              <input type="text" class="form-control" >
            </div>
          </div>

          <div class="col-sm-5 ">
            <div class="form-group label-floating">
              <label class="control-label">Satisfactory Level Of This Education System</label>
              <input type="text" class="form-control" disabled>
            </div>
          </div>
          <div class="col-sm-3 ">
            <div class="form-group label-floating">
              <input type="checkbox" name="Satisfactory" class>Happy
              <input type="checkbox" name="dissatisfactory" class>Dismal
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group label-floating">
              <label class="control-label">Noticable Reason</label>
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="col-sm-12 ">
            <div class="form-group label-floating">
              <label class="control-label" style="color: #663300">Parents Problem During Study Of Children</label>
              <input type="text" class="form-control">
            </div>
          </div>
          
          <div class="col-sm-12 ">
            <div class="form-group label-floating">
              <label class="control-label" style="color: #00cc00">Parents Dream And Plan For Her Child ?</label>
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
      </div>


      <!-- contact information -->
      <div class="tab-pane" id="contact">
        <div class="row">
          <div class="col-sm-12">
            <h4 class="info-text"  style="color: blue">House Owner Information</h4>
          </div>
          <div class="col-sm-4">
            <div class="form-group label-floating">
              <label class="control-label">House Owner's Name <small>(required)</small></label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-sm-4 ">
            <div class="form-group label-floating">
              <label class="control-label">Address</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-sm-4 ">
            <div class="form-group label-floating">
              <label class="control-label">Mobile</label>
              <input type="text" class="form-control">
            </div>
          </div>
          
          <div class="col-sm-12">
            <h4 class="info-text"  style="color: blue">Sibling's Information</h4>
          </div>

          <div class="col-sm-4 ">
            <div class="form-group label-floating">
              <label class="control-label">Name <small></small></label>
              <input type="text" name="sibling" class="form-control">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group label-floating ">
              <label class="control-label">Address</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group label-floating ">
              <label class="control-label">Mobile</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-sm-12">
            <h4 class="info-text" style="color: blue"> Relative's Information</h4>
          </div>
          <div class="col-sm-4 ">
            <div class="form-group label-floating">
              <label class="control-label"> Name</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-sm-4 ">
            <div class="form-group label-floating">
              <label class="control-label">Address</label>
              <input type="text" class="form-control">
            </div>
          </div>

          <div class="col-sm-4 ">
            <div class="form-group label-floating">
              <label class="control-label">Mobile</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-sm-12">
            <h4 class="info-text" style="color: blue">Neighbour's Information</h4>
          </div>
          <div class="col-sm-4 ">
            <div class="form-group label-floating">
              <label class="control-label"> Name</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-sm-4 ">
            <div class="form-group label-floating">
              <label class="control-label">Address</label>
              <input type="text" class="form-control">
            </div>
          </div>

          <div class="col-sm-4 ">
            <div class="form-group label-floating">
              <label class="control-label">Mobile</label>
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
      </div>



      <!-- veryfication -->
      <div class="tab-pane" id="verify">
        <div class="row">
          <div class="col-sm-12">
            <h4 class="info-text" style="color: blue"> Teacher Or Parent's Comment</h4>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label class=""> Brilliancy</label>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="form-group label-floating">
              <input type="checkbox" class="" id="wizard-checkbox" value="male">Satisfactory
              <input type="checkbox" class="" id="wizard-checkbox" value="Female">Very Good
              <input type="checkbox" class="" id="wizard-checkbox" value="Female">Good
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label class=""> Behaviour</label>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="form-group label-floating">
              <input type="checkbox" class="" id="wizard-checkbox" value="male">Satisfactory
              <input type="checkbox" class="" id="wizard-checkbox" value="Female">Very Good
              <input type="checkbox" class="" id="wizard-checkbox" value="Female">Good
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label class=""> Attendence</label>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="form-group label-floating">
              <input type="checkbox" class="" id="wizard-checkbox" value="male">Satisfactory
              <input type="checkbox" class="" id="wizard-checkbox" value="Female">Very Good
              <input type="checkbox" class="" id="wizard-checkbox" value="Female">Good
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group label-floating">
              <label class="control-label">Comment</label>
              <input type="text" class="form-control">
            </div>
          </div>

          <div class="col-sm-4 ">
            <div class="form-group label-floating">
              <label class="control-label">Verify By The Officer</label>
              <select name="country" class="form-control">
                <option disabled="" selected=""></option>
                <option value="Islam"> Reaz </option>
                <option value="Hindu"> Jahid </option>
                <option value="Christian"> Antora </option>
              </select>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <label class=""> Verify Date</label>
            </div>
          </div>
          <div class="col-sm-4 ">
            <div class="form-group label-floating">
              <input type="date" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="wizard-footer">
        <div class="pull-right">
          <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' />
          <input type='button' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Finish' />
        </div>
        <div class="pull-left">
          <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
        </div>
        <div class="clearfix"></div>
      </div>
    </form>
  </div>
</div> <!-- wizard container -->
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<!--vertical wizard-->
</div>
@endsection
<!-- content-wrapper ends -->
<!-- partial:../../partials/_footer.html -->
<!-- container-scroller -->
<!-- plugins:js -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<!-- endinject -->
<!-- Custom js for this page-->
<!-- End custom js for this page-->
<!-- Mirrored from www.bootstrapdash.com/demo/stellar-admin/jquery/pages/forms/wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 11:04:38 GMT -->
