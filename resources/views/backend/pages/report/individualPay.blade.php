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
                <th>Sponsor id</th>
                <th>Month</th>
                <th>Payment Method</th>
                <th>Transaction Id</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tbody>
              @php
                $i=1
              @endphp

             
             
                @foreach($sponsors->monthlyPayment as $pay)
                 <tr>
                <td> {{$i}}</td>
                <td>{{$sponsors->sponsorManual_id}}</td>
                <td>{{$pay->payment_month}} </td>
                <td>{{$pay->payment_method}} </td>
                <td>{{$pay->transaction_id}} </td>
                 <td> {{$pay->amount}}</td>
                 
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
