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
           <form action="{{ route('childProfile.GuardianAdd', $child->id) }}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
              <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
              <div class="wizard-header">
                <h3 class="wizard-title">
                 
                  <a class='btn btn-info' href="{{ route('admin.childForm') }}"> Add Child</a>
                  <a class='btn btn-warning' href="{{ route('childprofile.siblingAddIndex', $child->id) }}"> Add Siblings</a>
                  <a class='btn btn-success' href="{{ route('admin.childList') }}"> Child List</a>
                
              
               </h3>
               <h5>This information will let us know more about guardian.</h5>
             </div>
             <div class="wizard-navigation">
              <ul>
                <li><a href="#aboutGuardian" data-toggle="tab">Guardian Info</a></li>
            </div>      
            <div class="tab-content">

              <!-- About Child -->
              <div class="tab-pane" id="aboutGuardian">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="info-text" style="color: blue"> Guardian Details </h4>
                  </div>
                   <div class="col-sm-12">
                    
                      <label>Child ID:: {{$child->childManual_id}} </label>
                      
                  </div>
                  <div class="col-sm-4 ">
                    <div class="form-group label-floating">
                      <label class="control-label">Guardian Type</label>
                      <select name="guardian_type" class="form-control">
                        <option disabled="" selected=""></option>
                        <option value="Father"> Father </option>
                        <option value="Mother"> Mother </option>
                        <option value="Relative"> Relative</option>
                        <option value="Owner"> Owner </option>
                        <option value="Neighbour">Neighbour </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group label-floating">
                      <label class="control-label"> Name <small>(required)</small></label>
                      <input type="text" name="name" class="form-control" >
                    </div>
                  </div>
                  
                  
                  <div class="col-sm-4 ">
                    <div class="form-group label-floating">
                      <label class="control-label">Mobile Number</label>
                      <input type="text" name="mobile_num" class="form-control">
                    </div>
                  </div>
                  
                <div class="col-sm-12 ">
                  <div class="form-group label-floating">
                    <label class="control-label">Present Address</label>
                    <input type="text" name="gaddress" class="form-control">
                  </div>
                </div>
                
               
        <div class="wizard-footer">
          <div class="pull-right">
            
            <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Save' />
          </div>
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
