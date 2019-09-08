@extends('frontend.layouts.master')
        <!--Header banner section start-->
    @section('content')

        <!-- page-title -->
    <section class="page-title centred" style="background-image: url({{ asset('frontend/images/background/page-title.jpg') }});">
        <div class="container">
            <div class="content-box">
                <div class="title"> Our Project</div>
                <ul class="bread-crumb">
                    <li><a href="index.html">Home</a></li>
                    <li>project</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- cause-section -->
    <section class="cause-section cause-style-two causes-grid overlay-style-one sec-pad-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 cause-column">
                    <div class="single-cause-content inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                       <figure class="image-box">
                                <img src="{{ asset('frontend/images/resource/education.jpg') }}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="{{ route('singleProject') }}" class="link"><i class="icon fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        <div class="lower-content">
                                <h4><a href="causes-details.html">Education Program</a></h4>
                                <div class="text"> EDUCATION Support our mission of  children for a smarter future</div>
                                <div class="progress-box">
                                    <div class="progress" data-value="70">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                            <div class="value-holder"><span class="value"></span>%</div>
                                        </div>
                                    </div>
                                </div>
                               {{--  <ul class="price clearfix">
                                    <li>Raised: <span>$6,000</span></li>
                                    <li>Goal: <span>$8,000</span></li>
                                </ul>
                                <div class="donate-box"><button class="donate-box-btn theme-btn-two">Donate Now</button></div> --}}
                            </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 cause-column">
                    <div class="single-cause-content inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="2000ms">
                       <figure class="image-box">
                            <img src="{{ asset('frontend/images/resource/sweing.jpg') }}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="{{ route('singleProject') }}" class="link"><i class="icon fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="lower-content">
                                <h4><a href="causes-details.html">Women Empowerment</a></h4>
                                <div class="text">We are providin sweing Equipment..</div>
                                <div class="progress-box">
                                    <div class="progress" data-value="80">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                            <div class="value-holder"><span class="value"></span>%</div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <ul class="price clearfix">
                                    <li>Raised: <span>$2,000</span></li>
                                    <li>Goal: <span>$4,000</span></li>
                                </ul>
                                <div class="donate-box"><button class="donate-box-btn theme-btn-two">Donate Now</button></div> --}}
                            </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 cause-column">
                    <div class="single-cause-content inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="2500ms">
                        <figure class="image-box">
                                <img src="{{ asset('frontend/images/main-slider/adolences.jpg') }}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="{{ route('singleProject') }}" class="link"><i class="icon fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="lower-content">
                                <h4><a href="causes-details.html">Adolescent Development programme</a></h4>
                                <div class="text">we are always ..........</div>
                                <div class="progress-box">
                                    <div class="progress" data-value="60">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                            <div class="value-holder"><span class="value"></span>%</div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <ul class="price clearfix">
                                    <li>Raised: <span>$1,000</span></li>
                                    <li>Goal: <span>$3,000</span></li>
                                </ul>
                                <div class="donate-box"><button class="donate-box-btn theme-btn-two">Donate Now</button></div> --}}
                            </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 cause-column">
                    <div class="single-cause-content inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="3000ms">
                        <figure class="image-box">
                            <img src="{{ asset('frontend/images/resource/cause-8.jpg') }}" alt="">
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="{{ route('singleProject') }}" class="link"><i class="icon fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <div class="lower-content">
                            <h4><a href="causes-details.html">Water Helps Poor</a></h4>
                            <div class="text">Excepteur sint occaecat cupidatat non proident sunt.</div>
                            <div class="progress-box">
                                <div class="progress" data-value="80">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="value-holder"><span class="value"></span>%</div>
                                    </div>
                                </div>
                            </div>
                            {{-- <ul class="price clearfix">
                                <li>Raised: <span>$5,000</span></li>
                                <li>Goal: <span>$6,000</span></li>
                            </ul>
                            <div class="donate-box"><button class="donate-box-btn theme-btn-two">Donate Now</button></div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 cause-column">
                    <div class="single-cause-content inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="3500ms">
                        <figure class="image-box">
                            <img src="{{ asset('frontend/images/resource/cause-9.jpg') }}" alt="">
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="{{ route('singleProject') }}" class="link"><i class="icon fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <div class="lower-content">
                            <h4><a href="causes-details.html">Children’s Health Fund</a></h4>
                            <div class="text">Excepteur sint occaecat cupidatat non proident sunt.</div>
                            <div class="progress-box">
                                <div class="progress" data-value="90">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <div class="value-holder"><span class="value"></span>%</div>
                                    </div>
                                </div>
                            </div>
                            {{-- <ul class="price clearfix">
                                <li>Raised: <span>$4,000</span></li>
                                <li>Goal: <span>$6,000</span></li>
                            </ul>
                            <div class="donate-box"><button class="donate-box-btn theme-btn-two">Donate Now</button></div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 cause-column">
                    <div class="single-cause-content inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="4000ms">
                        <figure class="image-box">
                            <img src="{{ asset('frontend/images/resource/cause-10.jp') }}g" alt="">
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="{{ route('singleProject') }}" class="link"><i class="icon fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <div class="lower-content">
                            <h4><a href="causes-details.html">Charity For Animal</a></h4>
                            <div class="text">Excepteur sint occaecat cupidatat non proident sunt.</div>
                            <div class="progress-box">
                                <div class="progress" data-value="70">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                        <div class="value-holder"><span class="value"></span>%</div>
                                    </div>
                                </div>
                            </div>
                            {{-- <ul class="price clearfix">
                                <li>Raised: <span>$8,000</span></li>
                                <li>Goal: <span>$9,000</span></li>
                            </ul>
                            <div class="donate-box"><button class="donate-box-btn theme-btn-two">Donate Now</button></div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <ul class="pagination centred clearfix">
                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </div>
    </section>
    <!-- cause-section end -->

    <!-- subscribe-section -->
    <section class="subscribe-section">
        <div class="container">
            <div class="subscribe-content">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                        <div class="subscribe-title">Subscribe To Our Newsletter</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                        <div class="subscribe-form">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your Email" required="">
                                    <button type="submit" class="theme-btn">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--Emergency article section end-->
@endsection
<!--Js start-->
