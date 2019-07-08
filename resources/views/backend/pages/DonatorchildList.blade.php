@extends('backend.layouts.master')
@section('content')
<link rel="stylesheet" href="{{asset('admin/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
<div class="row">
  <div class="card">
    <div class="card-body">
      <div  style="margin-bottom:20px;">
      <a class="btn btn-info" href="{{ route('admin.sponsor.form') }}">Sponsor List</a>
    </div>
      <div class="row">
        <div class="col-12 table-responsive "  style="overflow-x:auto;">
          <table id="order-listing" class="table table-hover" cellspacing="10" style="display: block !important; table-layout: fixed; width: 100%">
            <thead>
              <tr>
                <th>SL#</th>
                <th>Child Code</th>
                <th>Name</th>
                <th>School</th>
                <th>Sponsor Code</th>
                <th>Sponser Name</th>
                <th>Active Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($childrens as $child)
             @if ($child->sponson_id!=0)
               {{-- true expr --}}
               {{-- false expr --}}
             
             <tr>
              <td>1</td>
              <td>{{$child->childManual_id}}</td>
             <td>{{$child->child_name}}</td>
             <td>{{$child->school}}</td>
             <td><a href="{{ route('admin.sponsorProfile', $child->sponsor->slug) }}">{{$child->sponsor->sponsorManual_id}}</a></td>
             <td>{{$child->sponsor->name}}</td>
        

            <td>
              <!-- <a class="mdl-button mdl-js-button mdl-button--accent" -->
              <a class="{{$child->active_status == 0 ? 'badge badge-info' : ($child->active_status == 1 ? 'badge badge-primary' : 'badge badge-danger')}}" data-toggle="modal" data-target="#editModal{{$child->id}}" style="color: white;">
                  {{$child->active_status == 0 ? "inactive" : ($child->active_status == 1 ? "active" : "disable")}}
              </a>
              <div class="modal fade" id="editModal{{$child->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <form action="{{ route('admin.child.editActiveStatus', $child->id) }}" method="post">
                                    {{csrf_field()}}
                                    
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">{{$child->child_name}}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="exampleSelectPrimary" style="font-size: 1rem;">Active Status</label>
                          <select class="form-control border-primary" id="exampleSelectPrimary" name="active_status" style="font-size: 1rem;">
                            <option value="$child->active_status" selected>{{$child->active_status == 0 ? "inactive" : ($child->active_status == 1 ? "Active" : "disable")}}</option>
                            
                            <option value="0">Inactive</option>
                            <option value="1">Active</option>
                            <option value="2">Disable</option>
                          </select>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Publish</button>
                      </div>
                    </div>
                  </div>
                </form>
                </div>
            </td>
              <td>
                
                <!-- button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">View</button> -->
                <a style="color: white" class="btn btn-info" href="{{ route('admin.childProfile', $child->slug) }}">View</a>
              </td>
            </tr>
            @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Custom js for Child-List page-->
  
 

  @endsection
