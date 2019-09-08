<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.tonatheme.com/2019/Hernando/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Sep 2019 08:02:28 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Hernando - HTML 5 Template Preview</title>

<!-- Stylesheets -->
@include('frontend.partials.css')

</head>

<!-- page wrapper -->
<body class="boxed_wrapper">


    <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->


    <!-- Main Header -->
    @include('frontend.partials.header')
    <!-- main body -->
    @yield('content')

<!-- footer -->
@include('frontend.partials.footer')
<!--jquery js -->
@include('frontend.partials.script')

</body><!-- End of .page_wrapper -->

<!-- Mirrored from html.tonatheme.com/2019/Hernando/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Sep 2019 08:04:50 GMT -->
</html>

