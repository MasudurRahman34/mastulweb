@extends('backend.layouts.master')
@section('content')
<link rel="stylesheet" href="{{asset('admin/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
<div class="row">
  <div class="card">
    <div class="card-body">
      <div style="margin-bottom:20px;"> 
        <a class="btn btn-info"  href="{{ route('admin.childForm') }}">Add child</a>
        <a class="btn btn-success"  href="{{ route('admin.donatordchild.list') }}">Donar child list</a>
      </div>

      <div class="row">
        <div class="col-12 table-responsive "  style="overflow-x:auto;">
          <table id="order-listing" class="table table-hover" cellspacing="10" style="display: block !important; table-layout: fixed; width: 100%">
            <thead>
              <tr>
                <th>SL#</th>
                <th>sp_id</th>
                <th>January</th>
                <th>February</th>
                <th>March</th>
                <th>April</th>
                <th>May</th>
                <th>June</th>
                <th>July</th>
                <th>August</th>
                <th>September</th>
                <th>October</th>
                <th>November</th>
                <th>December</th>
              </tr>
            </thead>
            <tbody>
              @php
                $i=1
              @endphp

              @foreach($payments as $pay)
              <tr>
                <td> {{$i}}</td>
                @foreach (App\model\sponsor::where('id', $pay->sponsor_id)->get() as $spn)
                  {{-- expr --}}
               
                <td> <a href="{{ route('admin.individualPay', $pay->sponsor_id) }}">{{$spn->sponsorManual_id}}</a></td>
                 @endforeach
                <td><span class="{{$pay->J==0 ? 'badge badge-danger':''}}"> {{$pay->J==0 ? 'Not paid':$pay->J}}</span> </td>
                <td><span class="{{$pay->F==0 ? 'badge badge-danger':''}}"> {{$pay->F==0 ? 'Not paid':$pay->F}}</span> </td>
                <td><span class="{{$pay->M==0 ? 'badge badge-danger':''}}"> {{$pay->M==0 ? 'Not paid':$pay->M}}</span> </td>
                <td><span class="{{$pay->A==0 ? 'badge badge-danger':''}}"> {{$pay->A==0 ? 'Not paid':$pay->A}}</span> </td>
                <td><span class="{{$pay->Ma==0 ? 'badge badge-danger':''}}"> {{$pay->Ma==0 ? 'Not paid':$pay->Ma}}</span> </td>
                <td><span class="{{$pay->Ju==0 ? 'badge badge-danger':''}}"> {{$pay->Ju==0 ? 'Not paid':$pay->Ju}}</span> </td>
                <td><span class="{{$pay->Jl==0 ? 'badge badge-danger':''}}"> {{$pay->Jl==0 ? 'Not paid':$pay->Jl}}</span> </td>
                <td><span class="{{$pay->Au==0 ? 'badge badge-danger':''}}"> {{$pay->Au==0 ? 'Not paid':$pay->Au}}</span> </td>
                <td><span class="{{$pay->S==0 ? 'badge badge-danger':''}}"> {{$pay->S==0 ? 'Not paid':$pay->S}}</span> </td>
                <td><span class="{{$pay->O==0 ? 'badge badge-danger':''}}"> {{$pay->O==0 ? 'Not paid':$pay->O}}</span> </td>
                <td><span class="{{$pay->N==0 ? 'badge badge-danger':''}}"> {{$pay->N==0 ? 'Not paid':$pay->N}}</span> </td>
                <td><span class="{{$pay->D==0 ? 'badge badge-danger':''}}"> {{$pay->D==0 ? 'Not paid':$pay->D}}</span> </td>
              </tr>
              @php
                $i++
              @endphp
              
             
               @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Custom js for Child-List page-->
  
 

  @endsection
