@extends('backend.layouts.master')
@section('content')
<link rel="stylesheet" href="{{asset('admin/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />

<div class="row">
  <div class="card">
    <div class="card-body">
      <div style="margin-bottom:20px;"> <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">ADD CHILD</a>
      </div>

      <div class="row">
        <div class="col-12 table-responsive "  style="overflow-x:auto;">
          <table id="order-listing" class="table table-hover" cellspacing="10" style="display: block !important; table-layout: fixed; width: 100%">
            <thead>
              <tr>
                <th>SL#</th>
                <th>Code No</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Organization</th>
                <th>Sponser Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($sponsors as $spn)
             <tr>
              <td>1</td>
              <td>{{$spn->sponsorManual_id}}</td>
              <td>{{$spn->name}}</td>
              <td class="py-1">
                @php
                 $i=1;
                 @endphp
                 @foreach ($spn->socialCommunication as $social)
                 @if (($i>0) && ($social->type=='personal_email'))
                 {{$social->address}}
                 @else {{"Null"}}
                 @endif
                 @php  $i--  @endphp
                 @endforeach
              </td>
              <td class="py-1">
                  @php
                   $i=1;
                   @endphp
                   @foreach ($spn->socialCommunication as $social)
                   @if (($i>0) && ($social->type=='mobile'))
                   {{$social->address}}
                    @else {{"Null"}}
                   @endif
                   @php  $i--  @endphp
                   @endforeach
              </td>
             <td>{{$spn->organization_name}}</td>
            <td>
              <!-- <a class="mdl-button mdl-js-button mdl-button--accent" -->
              <a class="{{$spn->active_status == 0 ? 'badge badge-info' : ($spn->active_status == 1 ? 'badge badge-primary' : 'badge badge-danger')}}" data-toggle="modal" data-target="#editModal{{$spn->id}}" style="color: white;">
                  {{$spn->active_status == 0 ? "didn't sponsor" : ($spn->active_status == 1 ? "sponsor" : "disable")}}
              </a>
              <div class="modal fade" id="editModal{{$spn->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                <form class="forms-sample" action="{{ route('admin.sponsor.paymentPrefference', $spn->id) }}"method="post">
                  {{csrf_field()}}
                                    
                    <div class="form-group">
                      <input type="number" name="number_of_child" class="form-control" placeholder="Number Of Child" required>
                    </div>
                    <div class="form-group">
                      <select class="form-control border-primary" name="payment_intervel" id="exampleSelectPrimary">
                      <option value="Monthly">Monthly</option>
                      <option value="Quarterly">Quarterly</option>
                      <option value="Half yearly">Half yearly</option>
                      <option value="Yearly">Yearly</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <select class="form-control border-primary" name="payment_month" id="exampleSelectPrimary">
                      <option selected>payment_month</option>
                      <option value="January">January</option>
                      <option value="February">February</option>
                      <option value="March">March</option>
                      <option value="april">april</option>
                      <option value="May">May</option>
                      <option value="June">June</option>
                      <option value="July">July</option>
                      <option value="August">August</option>
                      <option value="September">September</option>
                      <option value="October">October</option>
                      <option value="November">November</option>
                      <option value="December">December </option>
                    </select>
                    </div> 
                    
                    
                    <div class="form-group">
                      <input type="number" name="preffered_date" class="form-control" placeholder="Preffered Date">
                    </div>
                    <div class="form-group">
                      <select class="form-control border-primary" name="payment_method" id="exampleSelectPrimary">
                      <option selected>Select Payment Method</option>
                      <option value="Bkash">Bkash</option>
                      <option value="Rocket">Rocket</option>
                      <option value="Bank">Bank</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <input type="number" name="amount" class="form-control" placeholder="Amount TK">
                    </div>
                    <div class="form-group">
                      <input type="text" name="transaction_id" class="form-control" placeholder="transaction Id">
                    </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                    </form>
                  </div>

                <!-- </form> -->
                </div>
            </td>
              <td>
                
                <!-- button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">View</button> -->
                <a style="color: white" class="btn btn-info" href="{{ route('admin.sponsorProfile', $spn->slug) }}">View</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Custom js for Child-List page-->
  <script src="{{asset('admin/node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script  src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
  
 <script>
   $(document).ready(function() {
    $('.js-example-basic-multiple').select2();


});
 </script>

  @endsection
