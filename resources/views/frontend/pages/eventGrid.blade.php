@extends('frontend.layouts.master')
        <!--Header banner section start-->
    @section('content')

         <!-- page-title -->
     <!-- page-title -->
    <section class="page-title centred" style="background-image: url({{ asset('frontend/images/background/page-title.jpg') }})">
        <div class="container">
            <div class="content-box">
                <div class="title">Event List</div>
                <ul class="bread-crumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Page</li>
                    <li>Event</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- event-list -->
    <section class="event-list overlay-style-two sec-pad-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 event-column">
                    <div class="event-content-two single-item wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content-box">
                            <div class="image img-box">
                                <img src="{{ asset('frontend/images/resource/event-1.jpg') }}" alt="">
                                <div class="overlay">
                                    <div class="overlay-content">
                                        <div class="content">
                                            <a class="link-btn" href="{{ asset('singleEvent') }}">
                                                <i class="fa fa-link"></i>
                                            </a> 
                                        </div>
                                    </div>                               
                                </div>
                            </div>
                            <div class="content">
                                <h4><a href="{{ asset('singleEvent') }}">Insure Clean Water To Africa</a></h4>
                                <ul class="info-box">
                                    <li><i class="fa fa-clock-o"></i>9:00am-5:00pm</li>
                                    <li><i class="fa fa-map-marker"></i>Mirpur, Dhaka</li>
                                </ul>
                                <div class="text">
                                    <p>The goal of every tourist website is to turn pot lead into guests by guiding them to the end of the booking process. This event we will discuss about the process of UI/UX.</p>
                                </div>
                                <div class="link"><a href="{{ asset('singleEvent') }}">View Details <i class="fa fa-angle-right"></i></a></div>
                            </div>
                            <div class="date centred"><span>27</span>Jan 2018</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 event-column">
                    <div class="event-content-two single-item wow fadeInUp" data-wow-delay="0ms" data-wow-duration="2000ms">
                        <div class="content-box">
                            <div class="image img-box">
                                <img src="{{ asset('frontend/images/resource/event-6.jpg') }}" alt="">
                                <div class="overlay">
                                    <div class="overlay-content">
                                        <div class="content">
                                            <a class="link-btn" href="{{ asset('singleEvent') }}">
                                                <i class="fa fa-link"></i>
                                            </a> 
                                        </div>
                                    </div>                               
                                </div>
                            </div>
                            <div class="content">
                                <h4><a href="{{ asset('singleEvent') }}">Help For Education</a></h4>
                                <ul class="info-box">
                                    <li><i class="fa fa-clock-o"></i>9:00am-5:00pm</li>
                                    <li><i class="fa fa-map-marker"></i>Mirpur, Dhaka</li>
                                </ul>
                                <div class="text">
                                    <p>The goal of every tourist website is to turn pot lead into guests by guiding them to the end of the booking process. This event we will discuss about the process of UI/UX.</p>
                                </div>
                                <div class="link"><a href="{{ asset('singleEvent') }}">View Details <i class="fa fa-angle-right"></i></a></div>
                            </div>
                            <div class="date centred"><span>25</span>Mar 2018</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 event-column">
                    <div class="event-content-two single-item wow fadeInUp" data-wow-delay="0ms" data-wow-duration="2500ms">
                        <div class="content-box">
                            <div class="image img-box">
                                <img src="{{ asset('frontend/images/resource/event-7.jpg') }}" alt="">
                                <div class="overlay">
                                    <div class="overlay-content">
                                        <div class="content">
                                            <a class="link-btn" href="event-details.html">
                                                <i class="fa fa-link"></i>
                                            </a> 
                                        </div>
                                    </div>                               
                                </div>
                            </div>
                            <div class="content">
                                <h4><a href="{{ asset('singleEvent') }}">Help The Children</a></h4>
                                <ul class="info-box">
                                    <li><i class="fa fa-clock-o"></i>9:00am-5:00pm</li>
                                    <li><i class="fa fa-map-marker"></i>Mirpur, Dhaka</li>
                                </ul>
                                <div class="text">
                                    <p>The goal of every tourist website is to turn pot lead into guests by guiding them to the end of the booking process. This event we will discuss about the process of UI/UX.</p>
                                </div>
                                <div class="link"><a href="event-details.html">View Details <i class="fa fa-angle-right"></i></a></div>
                            </div>
                            <div class="date centred"><span>15</span>May 2018</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 event-column">
                    <div class="event-content-two single-item wow fadeInUp" data-wow-delay="0ms" data-wow-duration="3000ms">
                        <div class="content-box">
                            <div class="image img-box">
                                <img src="{{ asset('frontend/images/resource/event-8.jpg') }}" alt="">
                                <div class="overlay">
                                    <div class="overlay-content">
                                        <div class="content">
                                            <a class="link-btn" href="event-details.html">
                                                <i class="fa fa-link"></i>
                                            </a> 
                                        </div>
                                    </div>                               
                                </div>
                            </div>
                            <div class="content">
                                <h4><a href="event-details.html">Playing For World</a></h4>
                                <ul class="info-box">
                                    <li><i class="fa fa-clock-o"></i>9:00am-5:00pm</li>
                                    <li><i class="fa fa-map-marker"></i>Mirpur, Dhaka</li>
                                </ul>
                                <div class="text">
                                    <p>The goal of every tourist website is to turn pot lead into guests by guiding them to the end of the booking process. This event we will discuss about the process of UI/UX.</p>
                                </div>
                                <div class="link"><a href="event-details.html">View Details <i class="fa fa-angle-right"></i></a></div>
                            </div>
                            <div class="date centred"><span>30</span>June 2018</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 event-column">
                    <div class="event-content-two single-item wow fadeInUp" data-wow-delay="0ms" data-wow-duration="3500ms">
                        <div class="content-box">
                            <div class="image img-box">
                                <img src="{{ asset('frontend/images/resource/event-9.jpg') }}" alt="">
                                <div class="overlay">
                                    <div class="overlay-content">
                                        <div class="content">
                                            <a class="link-btn" href="event-details.html">
                                                <i class="fa fa-link"></i>
                                            </a> 
                                        </div>
                                    </div>                               
                                </div>
                            </div>
                            <div class="content">
                                <h4><a href="event-details.html">Cycle – Choose your own ride</a></h4>
                                <ul class="info-box">
                                    <li><i class="fa fa-clock-o"></i>9:00am-5:00pm</li>
                                    <li><i class="fa fa-map-marker"></i>Mirpur, Dhaka</li>
                                </ul>
                                <div class="text">
                                    <p>The goal of every tourist website is to turn pot lead into guests by guiding them to the end of the booking process. This event we will discuss about the process of UI/UX.</p>
                                </div>
                                <div class="link"><a href="event-details.html">View Details <i class="fa fa-angle-right"></i></a></div>
                            </div>
                            <div class="date centred"><span>27</span>Nov 2018</div>
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
    <!-- event-list end -->


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
