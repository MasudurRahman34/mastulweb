  @extends('backend.layouts.master')

  @section('content')
  <link rel="shortcut icon" hreadmin/images/favicon.html" /></head>

  <!-- partial -->
  <!--  <input class="mdl-textfield__input" type="text" id="sample3">
   <label class="mdl-textfield__label" for="sample3">Text...</label> -->

   <div class="col-sm-8 col-sm-offset-2">
    <!--      Wizard container        -->
    <div class="wizard-container">
      <div class="card wizard-card" data-color="green" id="wizardProfile">
        <form action="" method="">
          <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
          <div class="wizard-header">
            <h3 class="wizard-title">
             Build Your Profile
           </h3>
           <h5>This information will let us know more about you.</h5>
         </div>
         <div class="wizard-navigation">
          <ul>
            <li><a href="#more" data-toggle="tab">More</a></li>
            <li><a href="#about" data-toggle="tab">About</a></li>
            <li><a href="#account" data-toggle="tab">Account</a></li>
            <li><a href="#address" data-toggle="tab">Address</a></li>
            <li><a href="#fuck" data-toggle="tab">fuck</a></li>
          </ul>
        </div>

        <div class="tab-content">
          <div class="tab-pane" id="address">
            <div class="row">
              <div class="col-sm-12">
                <h4 class="info-text"> Are you living in a nice area? </h4>
              </div>
              <div class="col-sm-7 col-sm-offset-1">
                <div class="form-group label-floating">
                  <label class="control-label">Street Name <small>(required)</small></label>
                  <input type="text" class="form-control" required>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group label-floating">
                  <label class="control-label">Street Number</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-sm-5 col-sm-offset-1">
                <div class="form-group label-floating">
                  <label class="control-label">City</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-sm-5">
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
              </div>
            </div>
          </div>
          <div class="tab-pane" id="about">
            <div class="row">
              
              <div class="col-sm-4 col-sm-offset-1">
                <div class="picture-container">
                  <div class="picture">
                    <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                    <input type="file" id="wizard-picture">
                  </div>
                  <h6>Choose Picture</h6>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">face</i>
                  </span>
                  <div class="form-group label-floating">
                    <label class="control-label">First Name <small>(required)</small></label>
                    <input name="firstname" type="text" class="form-control">
                  </div>
                </div>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">face</i>
                  </span>
                  <div class="form-group label-floating">
                    <label class="control-label">second Name <small>(required)</small></label>
                    <input name="secondname" type="text" class="form-control" required>
                  </div>
                </div>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">face</i>
                  </span>
                  <div class="form-group label-floating">
                    <label class="control-label">fourth name Name <small>(required)</small></label>
                    <input name="fourthtname" type="text" class="form-control">
                  </div>
                </div>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">face</i>
                  </span>
                  <div class="form-group label-floating">
                    <label class="control-label">Third name Name <small>(required)</small></label>
                    <input name="thirdname" type="text" class="form-control">
                  </div>
                </div>


                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">record_voice_over</i>
                  </span>
                  <div class="form-group label-floating">
                    <label class="control-label">Last Name <small>(required)</small></label>
                    <input name="lastname" type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="col-sm-10 col-sm-offset-1">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">email</i>
                  </span>
                  <div class="form-group label-floating">
                    <label class="control-label">Email <small>(required)</small></label>
                    <input name="email" type="email" class="form-control">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="account">
            <h4 class="info-text"> What are you doing? (checkboxes) </h4>
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1">
                <div class="col-sm-4">
                  <div class="choice" data-toggle="wizard-checkbox">
                    <input type="checkbox" name="jobb" value="Design">
                    <div class="icon">
                      <i class="fa fa-pencil"></i>
                    </div>
                    <h6>Design</h6>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="choice" data-toggle="wizard-checkbox">
                    <input type="checkbox" name="jobb" value="Code">
                    <div class="icon">
                      <i class="fa fa-terminal"></i>
                    </div>
                    <h6>Code</h6>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="choice" data-toggle="wizard-checkbox">
                    <input type="checkbox" name="jobb" value="Develop">
                    <div class="icon">
                      <i class="fa fa-laptop"></i>
                    </div>
                    <h6>Develop</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="address">
            <div class="row">
              <div class="col-sm-12">
                <h4 class="info-text"> Are you living in a nice area? </h4>
              </div>
              <div class="col-sm-7 col-sm-offset-1">
                <div class="form-group label-floating">
                  <label class="control-label">Street Name <small>(required)</small></label>
                  <input type="text" class="form-control" required>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group label-floating">
                  <label class="control-label">Street Number</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-sm-5 col-sm-offset-1">
                <div class="form-group label-floating">
                  <label class="control-label">City</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-sm-5">
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

