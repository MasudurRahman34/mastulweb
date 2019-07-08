
@extends('backend.layouts.master')

@section('content')

          <!-- ROW ENDS -->
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card performance-cards">
                <div class="card-body">
                  <div class="row">
                    <div class="col d-flex flex-row justify-content-center align-items-center">
                      <div class="wrapper icon-circle bg-success">
                        <i class="icon-rocket icons"></i>
                      </div>
                      <div class="wrapper text-wrapper">
                        
                        <p class="text-dark">{{App\model\children::count()}}</p>
                        <p>Total Children</p>
                      </div>
                    </div>
                    <div class="col d-flex flex-row justify-content-center align-items-center">
                      <div class="wrapper icon-circle bg-danger">
                        <i class="icon-briefcase icons"></i>
                      </div>
                      <div class="wrapper text-wrapper">
                        <p class="text-dark">{{App\model\sponsor::count()}}</p>
                        <p>Total Sponsor</p>
                      </div>
                    </div>
                    <div class="col d-flex flex-row justify-content-center align-items-center">
                      <div class="wrapper icon-circle bg-warning">
                        <i class="icon-umbrella icons"></i>
                      </div>
                      <div class="wrapper text-wrapper">
                        <p class="text-dark">{{App\model\children::where('sponsor_id', '!=', 0)->count()}}</p>
                        <p>Total Sponsored Childs</p>
                      </div>
                    </div>
                    <div class="col d-flex flex-row justify-content-center align-items-center">
                      <div class="wrapper icon-circle bg-primary">
                        <i class="icon-check icons"></i>
                      </div>
                      <div class="wrapper text-wrapper">
                        <p class="text-dark">325</p>
                        <p>Total Events</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ROW ENDS -->
          <!-- ROW ENDS -->
          <div class="row">
            <div class="col-12 col-lg-5 col-md-5 grid-margin stretch-card">
              <div class="card px-3 activity-card">
                <div class="card-body">
                  <h2 class="card-title">Latest Activity</h2>
                  <div class="col">
                    <div class="pic pr-3"><img src="images/faces/face1.jpg" alt=""></div>
                    <div class="content">
                      <p class="activity">Create New Page</p>
                      <p class="a-text">Vestibulum lectus nulla, maximus</p>
                    </div>
                    <div class="time">
                      <p>Just Now</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="pic pr-3"><img src="images/faces/face2.jpg" alt=""></div>
                    <div class="content">
                      <p class="activity">Back Up Theme</p>
                      <p class="a-text">Vestibulum lectus nulla, maximus </p>
                    </div>
                    <div class="time">
                      <p>Sept 13, 2018</p>
                      <p>3 mins</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="pic pr-3"><img src="images/faces/face3.jpg" alt=""></div>
                    <div class="content">
                      <p class="activity">Changes In The Structure</p>
                      <p class="a-text">Vestibulum lectus nulla, maximus </p>
                    </div>
                    <div class="time">
                      <p>Sept 07, 2018</p>
                      <p>4 mins</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="pic pr-3"><img src="images/faces/face4.jpg" alt=""></div>
                    <div class="content">
                      <p class="activity">Fix the Sidebar</p>
                      <p class="a-text">Vestibulum lectus nulla, maximus</p>
                    </div>
                    <div class="time">
                      <p>Sept 16, 2018</p>
                      <p>15 mins</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-7 col-md-7 grid-margin stretch-card">
              <div class="card activity-card">
                <div class="card-body">
                  <h2 class="card-title">World Map</h2>
                  <div id="dashboard-vmap" class="vector-map"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- ROW ENDS -->
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card px-3">
                <div class="card-body">
                  <h2 class="card-title">Manage Users</h2>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start Date</th>
                          <th>Assign</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Airi Satou</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>55</td>
                          <td>2009/10/09</td>
                          <td>$162,700</td>
                        </tr>
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>30</td>
                          <td>2009/10/09</td>
                          <td>$190,500</td>
                        </tr>
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Regional Director</td>
                          <td>San Francisco</td>
                          <td>36</td>
                          <td>2004/12/02</td>
                          <td>$62,700</td>
                        </tr>
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>30</td>
                          <td>2011/07/25</td>
                          <td>$190,500</td>
                        </tr>
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Regional Director</td>
                          <td>San Francisco</td>
                          <td>32</td>
                          <td>2004/12/02</td>
                          <td>$62,700</td>
                        </tr>
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>31</td>
                          <td>2011/07/25</td>
                          <td>$190,500</td>
                        </tr>
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Regional Director</td>
                          <td>Tokyo</td>
                          <td>39</td>
                          <td>2004/12/02</td>
                          <td>$62,700</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <p class="mb-0">Showing 1 to 10 of 57 entries</p>
                    <nav>
                      <ul class="pagination rounded-separated pagination-info mt-3">
                        <li class="page-item"><a class="page-link" href="#"><i class="mdi mdi-chevron-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="mdi mdi-chevron-right"></i></a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
    @endsection