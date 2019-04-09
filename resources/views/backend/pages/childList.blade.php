 @extends('backend.layouts.master')
  @section('content')
  <!-- <link rel="stylesheet" href="../../node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css" /> -->
          <div class="card">
            <div class="card-body">
              <div class="row">
                <h4 class="card-title" style="margin-bottom: -5.35rem; margin-left: 400px;">Child List </h4>
                <div class="col-12 table-responsive "  style="overflow-x:auto;">
                  <table id="order-listing" class="table table-hover" cellspacing="10" style="display: block !important; table-layout: fixed; width: 100%">
                    <thead>
                      <tr>
                          <th>SL#</th>
                          <th>Code No</th>
                          <th>Image</th>
                          <th>Full Name</th>
                          <th>Age</th>
                          <th>Addrees</th>
                          <th>Status</th>
                          <th>Sponser</th>
                          <th>Online</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td>1</td>
                          <td>2012/08/03</td>
                          <td class="py-1">
                            <img src="{{asset('admin/images/faces/face1.jpg')}}" alt="image" />
                          </td>
                          <td>Edinburgh</td>
                          <td>$3200</td>
                          <td>New York</td> 
                          <td>
                            <label class="badge badge-warning">On hold</label>
                          </td>
                          <td>
                            <a href="On-hold" class="nav-link badge badge-success">On hold</a>
                          </td>
                           <td>
                            <button class="mdl-button mdl-js-button mdl-button--accent" data-toggle="modal" data-target="#exampleModal"> Not Publish</button></td>
                            <td>
                              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Antara Rahman</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      Dou You Want To Publish The Child To The Website ??
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">publish</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">View</button>
                          </td>
                      </tr>
                      <tr>
                          <td>1</td>
                          <td>2012/08/03</td>
                          <td class="py-1">
                            <img src="{{asset('admin/images/faces/face1.jpg')}}" alt="image" />
                          </td>
                          <td>Edinburgh</td>
                          <td>$3200</td>
                          <td>New York/Edinburgh</td>
                          <td>
                            <label class="badge badge-warning">On hold</label>
                          </td>
                          <td>
                            <a href="On-hold" class="nav-link badge badge-success">Asif Reaz</a>
                          </td>
                          <td>
                            <button class="mdl-button mdl-js-button mdl-button--primary">Publish</button></td>
                            <td>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">View</button>
                          </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
  @endsection