  @extends('backend.layouts.master')

  @section('content')
  <form  action="{{ route('webmastul.guirdianInsert') }}" method="post">
  <div class="row">
    <div class="col">
      <h1> Father Info</h1>
    </div>
    <div class="col">
      <input type="fname" class="form-control" placeholder="Father name">
    </div>
    <div class="col">
      <input type="faddress" class="form-control" placeholder="father address">
    </div>
    <div class="col">
      <input type="fmobile" class="form-control" placeholder="mobile Number">
    </div>
  </div>
<div class="row">
    <div class="col">
      <h1> Mother Info</h1>
    </div>
    <div class="col">
      <input type="mname" class="form-control" placeholder="Mother name">
    </div>
    <div class="col">
      <input type="maddress" class="form-control" placeholder="Mother address">
    </div>
    <div class="col">
      <input type="mmobile" class="form-control" placeholder="mobile Number">
    </div>
  </div>
   <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
<!-- content-wrapper ends -->
<!-- partial:../../partials/_footer.html -->
<!-- container-scroller -->
<!-- plugins:js -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<!-- endinject -->
<!-- Custom js for this page-->
<!-- End custom js for this page-->
<!-- Mirrored from www.bootstrapdash.com/demo/stellar-admin/jquery/pages/forms/wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 11:04:38 GMT -->
