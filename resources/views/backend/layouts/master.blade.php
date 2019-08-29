<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapdash.com/demo/stellar-admin/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 10:54:37 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Mastul Foundation</title>
  @include ('backend.partials.css')

  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include ('backend.partials.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
         @include ('backend.partials.sidebar')
        <!-- partial -->
        <div class="content-wrapper">
          
            @yield('content')
             
            
          
          <!-- ROW ENDS -->
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
         @include ('backend.partials.footer')
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
@include ('backend.partials.script')
@yield('script')

</body>


<!-- Mirrored from www.bootstrapdash.com/demo/stellar-admin/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 10:55:28 GMT -->
</html>
