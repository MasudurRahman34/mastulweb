    @extends('backend.layouts.master')

    @section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />

     <div class="row">
       <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Select Child</h4>
                  <form class="forms-sample" action="{{ route('admin.sponsorChild', $sponsor->id) }}"method="post">
                  {{csrf_field()}}
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Large select {{$sponsor->id}}</label>
                    <select class="form-control form-control-lg js-example-basic-multiple " id="exampleFormControlSelect1" multiple="multiple" name="child_id[]">
                      @foreach(App\model\children::where('sponsor_id', 0)->get() as $child)
                      <option value="{{$child->id}}">{{$child->child_name}}</option>
                      @endforeach
                    </select>

                  </div>
                  <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button> 
                </div>
              </div>
            </div>
  </div>
<script src="{{asset('admin/node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script  src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
  
 <script>
   $(document).ready(function() {
    $('.js-example-basic-multiple').select2();


});
 </script>
  @endsection
  