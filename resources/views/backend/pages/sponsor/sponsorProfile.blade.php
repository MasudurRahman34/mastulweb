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
                              @foreach ($spn->sponsorImages as $Imageg)
                               <div class="item">

                              <img src="{{asset('images/sponsorImage/'.$Imageg->image)}}" alt="image" />
                              </div>
                            @endforeach
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 stretch-card side-left">
                      <div class="card">
                        <div class="card-body overview" style="width: 100% !important">
                           <ul class="achivements">
                        @if($spn)
                         
                        @foreach(App\model\monthlyPayment::select('sponsor_id', DB::raw('SUM(amount) as total_amount'))->where('sponsor_id',$spn->id)->groupBy('sponsor_id')->get() as $payment)
                        <li><p>0</p><p>Sponsered Material</p></li>
                        <li><p>{{$payment->total_amount}}</p><p>Paid Amount</p></li>
                        
                        
                        @endforeach
                        @endif
                      </ul>
                          <div class="wrapper about-user ">
                            <h4 class="card-title mt-4 mb-3" style="color:; background-color: #b9e0e4; padding: 10px; border-radius: 2px;  border: 2px solid #f7a2d9;">Sponser Details</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam consectetur ex quod.</p>
                          </div>
                          <div class="info-links">
                            @foreach ($spn->children as $child)
                            <a href="{{route('admin.childProfile', $child->slug)}}">
                              <i class="mdi mdi-earth text-gray"></i>
                              <span>{{$child->child_name}}</span><br>
                              @endforeach
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
                        <h4 class="card-title mb-0">Sponsor Profile Information</h4>
                        <ul class="nav nav-tabs tab-solid tab-solid-primary mb-0" id="myTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-expanded="true">Info</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="stipend-tab" data-toggle="tab" href="#stipend" role="tab" aria-controls="stipend">Stipends</a>
                          </li> 
                        </ul>
                      </div>
                      <div class="wrapper">
                        <hr>
                        <div class="tab-content" id="myTabContent" style="padding-top: 1px;">
                         <!-- Start Info-tab -->
                         <div class="tab-pane fade" id="stipend" role="tabpanel" aria-labelledby="stipend-tab">
                          <div class="row">
                            <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal-4" data-whatever="@fat">Add Stidents</button> -->
            <div class="col-12 table-responsive "  style="overflow-x:auto;">
              <table id="order-listing" class="table table-hover" cellspacing="10" style="display: block !important; table-layout: fixed; width: 100%">
                <thead>
                  <tr>
                    <th>SL#</th>
                    <th>Type</th>
                    <th>Address</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($spn->socialCommunication as $social)
                 <tr>
                  <td>1</td>
                  <td>{{$social->type}}</td>
                  <td>{{$social->address}}</td>
                  <td>
                    <a style="color: white" class="btn btn-info" href=" {{$spn->slug}}">Edit</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>



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
              <p> <span class="font-weight-bold text-info">Sponsor ID :</span> {{$spn->sponsorManual_id}}</p>
            </address>
          </div>  
          <div class="col-md-3">
            <p class="font-weight-bold">Name</p>
          </div>
          <div class="col-md-4">
            <p class="">{{$spn->name}}</p>
          </div>
          <div class="col-md-2">
            <p class="font-weight-bold">{{$spn->gender}}</p>
          </div>
          <div class="col-md-1">
            <p class="font-weight-bold">Age</p>
          </div>
          <div class="col-md-2">
            <p class="">{{$spn->age}}</p>
          </div>

          <div class="col-md-3">
            <p class="font-weight-bold"></p>
          </div>
          <div class="col-md-4">
            <p class="">{{$spn->date_of_birth}}</p>
          </div>
          <div class="col-md-2">
                 <p class="font-weight-bold">Type</p>
               </div>
            <div class="col-md-2">
                 <p class="">{{$spn->type}}</p>
            </div>   
          <div class="col-md-3">
            <p class="font-weight-bold ">Nationality</p>
          </div>
          <div class="col-md-3">
            <p class="">{{$spn->nationality}}</p>
          </div>
          <div class="col-md-3">
            <p class="font-weight-bold text-center">Conutry Residence</p>
          </div>
          <div class="col-md-3">
            <p class="">{{$spn->country_of_residence}}</p>
          </div>

          <div class="col-md-3">
            <p class="font-weight-bold">Local Address </p>
          </div>
          <div class="col-md-9">
            <p class="">{{$spn->present_address}}</p>
          </div>
          <div class="col-md-3">
            <p class="font-weight-bold">Permanent Address </p>
          </div>
          <div class="col-md-9">
            <p class="">{{$spn->permanent_address}}</p>
          </div>

        </div>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <address>
              <h4 class="font-weight-bold text-light bg-info" style="padding: 5px">Organization Information </h4>
            </address>
          </div>
          <div class="col-md-6">
            <p class="font-weight-bold ">Organization Name</p>
          </div>
          <div class="col-md-6">
            <p class="">{{$spn->organization_name}}</p>
          </div>
          <div class="col-md-6">
            <p class="">Organization Address</p>
          </div>
          <div class="col-md-6">
            <p class="">{{$spn->organization_address}}</p>
          </div>

          <div class="col-md-6">
            <p class="font-weight-bold ">Designation</p>
          </div>
          <div class="col-md-6">
            <p class="">{{$spn->designation}}</p>
          </div>


       </div>


       <div class="form-group mt-3">
        <button type="submit" class="btn btn-success mr-2">Update</button>
        <button class="btn btn-outline-danger">Cancel</button>
      </div>
    </form>
  </div>

        <!-- end Comment tab -->

       
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