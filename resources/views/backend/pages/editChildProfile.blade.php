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
                          <img src="{{asset('admin/images/carousel/cpic1.jpg')}}" height="250"/>
                        </div>
                        <div class="item">
                          <img src="{{asset('admin/images/carousel/banner_2.jpg')}}" />
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
                        <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-expanded="true">Info</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="avatar-tab" data-toggle="tab" href="#avatar" role="tab" aria-controls="avatar">Avatar</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="security-tab" data-toggle="tab" href="#security" role="tab" aria-controls="security">Security</a>
                      </li>
                    </ul>
                  </div>
                  <div class="wrapper">
                    <hr>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info">
                        <form action="#">
                         <div class="form-group label-floating">
                       <p>asdkf</p> 
                        </div>
                          <div class="form-group">
                            <label for="designation">Designation</label>
                            <input type="text" class="form-control" id="designation" placeholder="Change designation">
                          </div>
                          <div class="form-group">
                            <label for="mobile">Mobile Number</label>
                            <input type="text" class="form-control" id="mobile" placeholder="Change mobile number">
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Change email address">
                          </div>
                          <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" rows="6" class="form-control" placeholder="Change address"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="website">Website URL</label>
                            <input type="text" class="form-control" id="website" placeholder="Change website url">
                          </div>
                          <div class="form-group mt-5">
                            <button type="submit" class="btn btn-success mr-2">Update</button>
                            <button class="btn btn-outline-danger">Cancel</button>
                          </div>
                        </form>
                      </div><!-- tab content ends -->
                      <div class="tab-pane fade" id="avatar" role="tabpanel" aria-labelledby="avatar-tab">
                        <div class="wrapper mb-5 mt-4">
                          <span class="badge badge-warning text-white">Note : </span>
                          <p class="d-inline ml-3 text-muted">Image size is limited to not greater than 1MB .</p>
                        </div>
                        <form action="#">
                          <input type="file" class="dropify" data-max-file-size="1mb" data-default-file="../../images/faces/face6.jpg"/>
                          <div class="form-group mt-5">
                            <button type="submit" class="btn btn-success mr-2">Update</button>
                            <button class="btn btn-outline-danger">Cancel</button>
                          </div>
                        </form>
                      </div>
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