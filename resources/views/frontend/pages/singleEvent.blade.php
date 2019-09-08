@extends('frontend.layouts.master')
        <!--Header banner section start-->
    @section('content')

         <!-- page-title -->
    <!-- page-title -->
    <section class="page-title centred" style="background-image: url({{ asset('frontend/images/background/page-title.jpg') }});">
        <div class="container">
            <div class="content-box">
                <div class="title">Event Details</div>
                <ul class="bread-crumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Page</li>
                    <li>Event</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- event-details -->
    <section class="event-details sec-pad-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div class="event-details-content">
                        <div class="content-style-one">
                            
                            <div class="top-content">
                                <div class="sec-title">Insure Clean Water in Bangladesh</div>
                                <ul class="info-box">
                                    <li><i class="fa fa-clock-o"></i>9:00am-5:00pm</li>
                                    <li><i class="fa fa-map-marker"></i>Mirpur, Dhaka</li>
                                </ul>
                            </div>
                            <figure class="img-box">
                                <img src="{{ asset('frontend/images/resource/event-details.jpg') }}" alt="">
                                <div class="date"><span>25</span>JUNE</div>
                            </figure>
                            <div class="bold-text">Lorem ipsum dolor sit amet, quo odio atqui tamquam eu, duo ex amet elitr. Ne essent feugiat vim et soluta reprimique instructior mel. Munere tamquam referrentur.</div>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, et electram comprehensam sit. Quo an splendide signiferumque, an vix sententiae insctior, laudem corrumpit disputationi sed ei. Eum malis mucius ancillae in, verear nusquam appetere vis id, scaevol atomorum in sed. Eum denique vulputate ne, in eos alienum corrumpit ullamcorper. Vel ea fabulas instructior, agam falli sit an.Ad cum amet graeco consequat, sed ei veri novum appellantur.</p>
                                <p>Qui in quod ubique euismod, consul noster disputationi eos no, nec te latine repudiare. Te pro dolor volutpat. Quo disu omnis appellantur an.Per ea convenire voluptatum, pro copiosae vituperatoribus ut.</p>
                            </div>
                            <div class="title"><h3>Event Colcusion</h3></div>
                            <ul class="check-list">
                                <li>Lorem ipsum dolor sit amet, usu an quem augue admodum.</li>
                                <li>Lorem ipsum dolor sit amet, duo in atqui omnesque praesent.</li>
                                <li>Lorem ipsum dolor sit amet, iuvaret ancillae id mea sint.</li>
                                <li>Lorem ipsum dolor sit amet, eos corrumpit ullamcorp instruc. tor</li>
                            </ul>
                        </div>
                        <div class="related-event overlay-style-two">
                            <div class="sec-title">Releted Events</div>
                            <div class="related-event-carousel">
                                <div class="single-upcoming-event single-item">
                                    <div class="image img-box">
                                        <figure><img src="{{ asset('frontend/images/resource/6.jpg') }}" alt=""></figure>
                                        <div class="overlay">
                                            <div class="overlay-content">
                                                <div class="content">
                                                    <a class="link-btn" href="event-details.html">
                                                        <i class="fa fa-link"></i>
                                                    </a> 
                                                </div>
                                            </div>                               
                                        </div>
                                        <div class="date"><span>30</span>Jan</div>
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="event-details.html">Charity for Children</a></h4>
                                        <ul class="info-box">
                                            <li><i class="fa fa-clock-o"></i>9.00 AM - 11.00 PM </li>
                                            <li><i class="fa fa-map-marker"></i>29 Newyork City</li>
                                        </ul>
                                        <div class="link"><a href="event-details.html" class="theme-btn-two">Read More</a></div>
                                    </div>
                                </div>
                                <div class="single-upcoming-event single-item">
                                    <div class="image img-box">
                                        <figure><img src="{{ asset('frontend/images/resource/7.jpg') }}" alt=""></figure>
                                        <div class="overlay">
                                            <div class="overlay-content">
                                                <div class="content">
                                                    <a class="link-btn" href="event-details.html">
                                                        <i class="fa fa-link"></i>
                                                    </a> 
                                                </div>
                                            </div>                               
                                        </div>
                                        <div class="date"><span>20</span>Mar</div>
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="event-details.html">Cycling For Senior</a></h4>
                                        <ul class="info-box">
                                            <li><i class="fa fa-clock-o"></i>9.00 AM - 11.00 PM </li>
                                            <li><i class="fa fa-map-marker"></i>29 Newyork City</li>
                                        </ul>
                                        <div class="link"><a href="event-details.html" class="theme-btn-two">Read More</a></div>
                                    </div>
                                </div>
                                <div class="single-upcoming-event single-item">
                                    <div class="image img-box">
                                        <figure><img src="{{ asset('frontend/images/resource/8.jpg') }}" alt=""></figure>
                                        <div class="overlay">
                                            <div class="overlay-content">
                                                <div class="content">
                                                    <a class="link-btn" href="event-details.html">
                                                        <i class="fa fa-link"></i>
                                                    </a> 
                                                </div>
                                            </div>                               
                                        </div>
                                        <div class="date"><span>15</span>Aug</div>
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="event-details.html">Home For Homeless</a></h4>
                                        <ul class="info-box">
                                            <li><i class="fa fa-clock-o"></i>9.00 AM - 11.00 PM </li>
                                            <li><i class="fa fa-map-marker"></i>29 Newyork City</li>
                                        </ul>
                                        <div class="link"><a href="event-details.html" class="theme-btn-two">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="sidebar default-sidebar-content event-sidebar-content">
                        <!-- <div class="sidebar-search sidebar-widget">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="search" name="search-field" placeholder="Search Here.." required="">
                                    <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                                </div>
                            </form>
                        </div> -->
                        <div class="sidebar-categories sidebar-widget">
                            <div class="sidebar-title">Our Project</div>
                            <ul class="categories-list">
                                <li><a href="#">Homeless</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Education</a></li>
                                <li><a href="#">Childrean</a></li>
                            </ul>
                        </div>
                        <div class="sidebar-post sidebar-widget">
                            <div class="sidebar-title">Recent News and Event</div>
                            <div class="single-post">
                                <figure class="img-box"><a href="blog-details.html"><img src="{{ asset('frontend/images/resource/post-1.jpg') }}" alt=""></a></figure>
                                <h4><a href="blog-details.html">No Hunger in South Africa</a></h4>
                                <div class="link"><a href="blog-details.html">See Details <i class="fa fa-angle-right"></i></a></div>
                            </div>
                            <div class="single-post">
                                <figure class="img-box"><a href="blog-details.html"><img src="{{ asset('frontend/images/resource/post-2.jpg') }}" alt=""></a></figure>
                                <h4><a href="blog-details.html">Clean Water For Every Child</a></h4>
                                <div class="link"><a href="blog-details.html">See Details <i class="fa fa-angle-right"></i></a></div>
                            </div>
                            <div class="single-post">
                                <figure class="img-box"><a href="blog-details.html"><img src="{{ asset('frontend/images/resource/post-3.jpg') }}" alt=""></a></figure>
                                <h4><a href="blog-details.html">Collect Winter Cloths For..</a></h4>
                                <div class="link"><a href="blog-details.html">See Details <i class="fa fa-angle-right"></i></a></div>
                            </div>
                        </div>
                        <div class="sidebar-archive sidebar-widget">
                            <div class="sidebar-title">Keyword</div>
                            <ul class="archive-list clearfix">
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Charity</a></li>
                                <li><a href="#">Child</a></li>
                                <li><a href="#">Children</a></li>
                                <li><a href="#">Food</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- event-details end -->


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
