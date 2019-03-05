
@extends('backend.layouts.master')

@section('content')
  <div class="row">
      <div class="col-lg-12 grid-margin">
              <div class="card overflow-hidden dashboard-curved-chart">
                <div class="card-body mx-3">
                  <h2 class="card-title border-bottom-none">Recent Movement</h2>
                  <div class="align-items-center mb-5 justify-content-between d-lg-flex d-xl-flex d-md-block d-block">
                    <div id="chartLegend"></div>
                    <div class="nav-wrapper d-inline-block mt-4 mt-lg-0">
                      <ul class="nav nav-pills">
                        <li class="nav-item">
                          <a class="nav-link" href="#">Week</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" href="#">Month</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Year</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Today</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div id="curved-line-chart" class="float-chart float-chart-mini"></div>
              </div>
            </div>
          </div>
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
                        <p class="text-dark">8954</p>
                        <p>Lifetime total sales</p>
                      </div>
                    </div>
                    <div class="col d-flex flex-row justify-content-center align-items-center">
                      <div class="wrapper icon-circle bg-danger">
                        <i class="icon-briefcase icons"></i>
                      </div>
                      <div class="wrapper text-wrapper">
                        <p class="text-dark">7841</p>
                        <p>Income amounts</p>
                      </div>
                    </div>
                    <div class="col d-flex flex-row justify-content-center align-items-center">
                      <div class="wrapper icon-circle bg-warning">
                        <i class="icon-umbrella icons"></i>
                      </div>
                      <div class="wrapper text-wrapper">
                        <p class="text-dark">6521</p>
                        <p>Total users</p>
                      </div>
                    </div>
                    <div class="col d-flex flex-row justify-content-center align-items-center">
                      <div class="wrapper icon-circle bg-primary">
                        <i class="icon-check icons"></i>
                      </div>
                      <div class="wrapper text-wrapper">
                        <p class="text-dark">325</p>
                        <p>Total visits</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ROW ENDS -->
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 grid-margin stretch-card">
              <div class="card current-progress-card">
                <div class="card-body">
                <h2 class="card-title">Current Progress</h2>
                <div class="row">
                  <div class="col">Bootstrap Admin</div>
                  <div class="col">
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 64%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">Custom Work</div>
                  <div class="col">
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 24%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">Clients Module</div>
                  <div class="col">
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 52%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">Email Templates</div>
                  <div class="col">
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">Plans Module</div>
                  <div class="col">
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 78%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 grid-margin stretch-card">
              <div class="card calender-card">
                <div class="card-body">
                <h2 class="card-title">Calender</h2>
                <div class="datepicker"></div>
              </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 grid-margin stretch-card">
              <div class="card quick-stat">
                <div class="card-body">
                <h2 class="card-title">Quick Status</h2>
                <div class="row mt-3">
                  <div class="col">
                    <div id="YearlyProgress" class="progressbar-js-circle item-relative"></div>
                    <p class="graph-name text-center mt-2">Yearly Income</p>
                  </div>
                  <div class="col">
                    <div id="MonthlyProgress" class="progressbar-js-circle item-relative"></div>
                    <p class="graph-name text-center mt-2">Monthly Income</p>
                  </div>
                </div>
                <div class="pending-amount">
                  <div class="data d-flex justify-content-between">
                    <p class="txt">Pending Amount</p>
                    <p class="pendin-percentage">65%</p>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
          <!-- ROW ENDS -->
          <div class="row">
            <div class="col-12 col-lg-4 col-md-4 grid-margin stretch-card">
              <div class="card px-3">
                <div class="card-body">
                  <h2 class="card-title">Business Grid</h2>
                  <div id="c3-pie-chart" class="mb-4"></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-8 col-md-8 grid-margin stretch-card">
              <div class="card px-3">
                <div class="card-body">
                  <h2 class="card-title">Growth</h2>
                  <div class="ct-chart" id="ct-chart-vartical-stacked-bar"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- ROW ENDS -->
          <div class="row section social-section">
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="social-card w-100 bg-facebook">
                <div class="social-icon">
                  <i class="icon-social-facebook icons"></i>
                </div>
                <div class="content">
                  <p>+ 1500</p>
                  <p>Facebook Likes</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="social-card w-100 bg-twitter">
                <div class="social-icon">
                  <i class="icon-social-twitter icons"></i>
                </div>
                <div class="content">
                  <p>+574</p>
                  <p>Twitter Followers</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="social-card w-100 bg-dribbble">
                <div class="social-icon">
                  <i class="icon-social-dribbble icons"></i>
                </div>
                <div class="content">
                  <p>+450</p>
                  <p>Dribble Shots</p>
                </div>
              </div>
            </div>
          </div>
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