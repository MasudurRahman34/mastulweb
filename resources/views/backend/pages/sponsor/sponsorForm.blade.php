  @extends('backend.layouts.master')

  @section('content')
  <link rel="shortcut icon" hreadmin/images/favicon.html" /></head>
  <link href="{{asset('admin/childForm/assets/css/material-bootstrap-wizard.css')}}" rel="stylesheet" />
  <!-- partial -->
  <!--  <input class="mdl-textfield__input" type="text" id="sample3">
   <label class="mdl-textfield__label" for="sample3">Text...</label> -->
   <div class="row">
     <div class="col-sm-9 col-sm-offset-1">
      <!--      Wizard container        -->
      <div class="wizard-container">
        <div class="card wizard-card" data-color="green" id="wizardProfile">
         <form action="{{ route('admin.sponsor.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
            <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
            <div class="wizard-header">
              <h3 class="wizard-title">
               Build Your Sponsor Profile
             </h3>
             <h5>This information will let us know more about Sponsor.</h5>
           </div>
           <div class="wizard-navigation">
            <ul>
              <li><a href="#image" data-toggle="tab">Image</a></li>
              <li><a href="#aboutSponsor" data-toggle="tab">sponsor Info</a></li>
              <li><a href="#Address" data-toggle="tab">Address</a></li>
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
            </div>
          </div>
            <!-- About sponsor -->
            <div class="tab-pane" id="aboutSponsor">
              <div class="row">
                <div class="col-sm-12">
                  <h4 class="info-text" style="color: blue"> Personal Details Of Sponsor </h4>
                </div>
                 <div class="col-sm-4">
                  <div class="form-group label-floating">
                    <label class="control-label">Sponsor ID <small>(required)</small></label>
                    <input type="text" name="sponsorManual_id" class="form-control" >
                  </div>
                </div>
                <div class="col-sm-3 ">
                  <div class="form-group label-floating">
                    <label class="control-label">Sponsor Type</label>
                    <select name="type" class="form-control">
                      <option disabled="" selected=""></option>
                      <option value="Individual">Individual</option>
                      <option value="Organizaton">Organization</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-5">
                  <div class="form-group label-floating">
                    <label class="control-label">Full Name <small>(required)</small></label>
                    <input type="text" name="name" class="form-control" >
                  </div>
                </div>
                <div class="col-sm-1">
                  <div class="form-group">
                    <label class=""> Gender</label>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group label-floating">
                    <input type="checkbox" name="gender" class="" id="wizard-checkbox" value="male">Male
                    <input type="checkbox" name="gender" class="" id="wizard-checkbox" value="Female">Female
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <div class="form-group label-floating">
                    <label class="control-label">Maritul Status</label>
                    <select name="maritul_status" class="form-control">
                      <option disabled="" selected=""></option>
                      <option value="Unmarried"> Islam </option>
                      <option value="Married"> Married</option>
                      <option value="Other"> Other </option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <div class="form-group label-floating">
                    <label class="control-label">Age</label>
                    <input type="number" name="age" class="form-control">
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <div class="form-group label-floating">
                    <input type="date" name="date_of_birth" class="form-control">Date Of Birth
                    <label class="control-label"></label>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <div class="form-group label-floating">
                    <label class="control-label">Nationality</label>
                    <input type="text" name="nationality" class="form-control">
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <div class="form-group label-floating">
                    <label class="control-label">Country of Residence</label>
                    <input type="text" name="country_of_residence" class="form-control">
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <div class="form-group label-floating">
                    <label class="control-label">National Id</label>
                    <input type="text" name="national_id" class="form-control">
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <div class="form-group label-floating">
                    <label class="control-label">Passport Id</label>
                    <input type="text" name="passport_id" class="form-control">
                  </div>
                </div>
          </div>
        </div>

      <div class="tab-pane" id="Address">
        <div class="row">
          <div class="col-sm-6 ">
                <div class="form-group label-floating">
                  <label class="control-label">Present Address</label>
                  <input type="text" name="present_address" class="form-control">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group label-floating">
                  <label class="control-label">Permanent Address</label>
                  <input type="text" name="permanent_address" class="form-control">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group label-floating">
                  <label class="control-label">Organization_name</label>
                  <input type="text" name="organization_name" class="form-control">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group label-floating">
                  <label class="control-label">Organization Address</label>
                  <input type="text" name="organization_address" class="form-control">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group label-floating">
                  <label class="control-label">Designation</label>
                  <input type="text" name="designation" class="form-control">
                </div>
              </div>
              <div class="col-sm-8 ">
                  <div class="form-group label-floating">
                    <label class="control-label">where you would like to recieve all communication</label>
                    <select name="recieve_communication" class="form-control">
                      <option disabled="" selected=""></option>
                      <option value="Present Address"> Present Address</option>
                      <option value="Permanent Address">Permanent Address</option>
                      <option value="Office Address"> Office Address </option>
                    </select>
                  </div>
        </div>
      </div>
      </div>
      <div class="wizard-footer">
        <div class="pull-right">
          <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' />
          <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Finish' />
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
