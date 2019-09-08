@extends('frontend.layouts.master')
@section('content')
    <section class="main-slider">
        
        <div class="main-slider-carousel owl-carousel owl-theme slide-nav">
            
            <div class="slide" style="background-image:url({{ asset('frontend/images/resource/education.jpg') }})">
                <div class="container">
                    <div class="content">
                        <h1 class="letter-spacing">Support A Children</h1>
                        <div><h3 class="text-light text">Every Child Should Get
                        A Quality Education</h3></div>
                        <div class="donate-box"><button class="donate-box-btn theme-btn">Donate Now</button></div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image:url({{ asset('frontend/images/main-slider/education2.jpg') }})">
                <div class="container">
                    <div class="content">
                        <h1>We Believe in People</h1>
                        <div class="text">Excepteur sint occaecat cupidatat non proident, sunt in culpa<br />qui officia deserunt mollit anim id est laborum. </div>
                        <div class="donate-box"><button class="donate-box-btn theme-btn">Donate Now</button></div>
                    </div>
                </div>
            </div>
            
            <div class="slide" style="background-image:url({{ asset('frontend/images/main-slider/adolences.jpg') }})">
                <div class="container">
                    <div class="content">
                        <h1>You Can<br /><span>Help</span> The Poor</h1>
                        <div class="text">Excepteur sint occaecat cupidatat non proident, sunt in culpa<br />qui officia deserunt mollit anim id est laborum. </div>
                        <div class="donate-box"><button class="donate-box-btn theme-btn">Donate Now</button></div>
                    </div>
                </div>
            </div>

            <div class="slide" style="background-image:url({{ asset('frontend/images/main-slider/1.jpg') }})">
                <div class="container">
                    <div class="content">
                        <h1>You Can<br /><span>Help</span> The Poor</h1>
                        <div class="text">Excepteur sint occaecat cupidatat non proident, sunt in culpa<br />qui officia deserunt mollit anim id est laborum. </div>
                        <div class="donate-box"><button class="donate-box-btn theme-btn">Donate Now</button></div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!--End Main Slider-->


    
    <!-- form-section -->
    <section class="form-section">
        <div class="container-fluid clearfix">
            <div class="video-gallery overlay-bg" style="background-image: url({{ asset('frontend/images/resource/video_image.jpg')}});">
                <div class="overlay-gallery">
                    <div class="icon-holder">
                        <div class="icon wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <a class="html5lightbox" title="Video" href="https://www.youtube.com/watch?v=DmkyXG8QdfM"><i class="fa fa-play"></i></a> 
                        </div>
                    </div>    
                </div>
            </div>
            <div class="form-content">
                <div class="content-box">
                    <div class="title text-center lead display-1" style="letter-spacing: 3px;"><h1 class="text-light">Sponsor A Children</h1></div>
                    <div class="text"> <h4 class="text-primary mb-5">Make a smarter furute for a children</h4></div>
                    
                        <div class="row"">
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label> <h5 class="text-light text-justify lead"> Through our Child Sponsorship program we supports those children’s whose families struggle to pay the tuition fees required for their education. Our direct cost fo sponsoring a child is BDT 1000 or USD 13 per month !!!</h5></label>
                                <!-- <select class="custom-select-box">
                                    <option selected="selected">I Want to Donate for</option>
                                    <option>I Want to Donate 00</option>
                                    <option>I Want to Donate 01</option>
                                    <option>I Want to Donate 02</option>
                                    <option>I Want to Donate 03</option>
                                </select> -->
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-12 form-group">
                                <label class=""></label>

                                <a href="{{ route("donation_details") }}" class="btn btn-outline-primary btn-lg form-control">Details</a>
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-12">
                                <label class=""></label>
                                 <div class="donate-box"><button class="donate-box-btn btn btn-outline-primary btn-lg form-control">Be A Sponsor</button></div>
                             </div>
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label class="form-group"></label>
                                <a  href="{{ route("childGrid") }}" class="btn btn-outline-primary btn-lg form-control ">Sponsor A Child</a>
                                
                            </div>

                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- form-section -->
    <!-- help-section -->
    <section class="feature-style-two centred help-section">
        <div class="container-fluid">
            <div class="sec-title">How Can Help?</div>
            <div class="title-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmo</div>
            <div class="feature-content">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 feature-column">
                        <div class="feature-content-two" style="background-image: url(images/resource/feature-4.jpg);">
                            <div class="icon-box wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms"><i class="flaticon-money-bag"></i></div>
                            <div class="title"><a href="#">Give Donation</a></div>
                            <div class="text">Lorem ipsum dolor sit amet cons adipisicing elit sed.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-column">
                        <div class="feature-content-two" style="background-image: url(images/resource/feature-5.jpg);">
                            <div class="icon-box wow zoomIn" data-wow-delay="600ms" data-wow-duration="1500ms"><i class="flaticon-group"></i></div>
                            <div class="title"><a href="#">Our Volunteer</a></div>
                            <div class="text">Lorem ipsum dolor sit amet cons adipisicing elit sed.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-column">
                        <div class="feature-content-two" style="background-image: url(images/resource/feature-6.jpg);">
                            <div class="icon-box wow zoomIn" data-wow-delay="900ms" data-wow-duration="1500ms"><i class="flaticon-heart"></i></div>
                            <div class="title"><a href="#">Quick Fundraise</a></div>
                            <div class="text">Lorem ipsum dolor sit amet cons adipisicing elit sed.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-column">
                        <div class="feature-content-two" style="background-image: url(images/resource/feature-7.jpg);">
                            <div class="icon-box wow zoomIn" data-wow-delay="1200ms" data-wow-duration="1500ms"><i class="flaticon-money-bag"></i></div>
                            <div class="title"><a href="#">Give Donation</a></div>
                            <div class="text">Lorem ipsum dolor sit amet cons adipisicing elit sed.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- help-section end -->


    <!-- cause-section -->
    <section class="cause-section">
        <div class="cause-top-content overlay-bg centred" style="background-image: url({{ asset('frontend/images/background/feature.jpg') }});">
            <div class="container">
                <div class="top-title">Featured Project</div>
                <div class="top-text">We have run several project for child and women development</div>
            </div>
        </div>
        <div class="cause-bottom-content overlay-style-one">
            <div class="container">
                <div class="cause-content">
                    <div class="three-column-carousel">
                        <div class="single-cause-content inner-box">
                            <figure class="image-box">
                                <img src="{{ asset('frontend/images/resource/education.jpg') }}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="{{ asset('singleProject') }}" class="link"><i class="icon fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="lower-content">
                                <h4><a href="{{ asset('singleProject') }}">Education Program</a></h4>
                                <div class="text"> EDUCATION Support our mission of  children for a smarter future</div>
                                <div class="progress-box">
                                    <div class="progress" data-value="70">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                            <div class="value-holder"><span class="value"></span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="price clearfix">
                                    <li>Raised: <span>$6,000</span></li>
                                    <li>Goal: <span>$8,000</span></li>
                                </ul>
                                <div class="donate-box"><button class="donate-box-btn theme-btn-two">Donate Now</button></div>
                            </div>
                        </div>
                        <div class="single-cause-content inner-box">
                            <figure class="image-box">
                            <img src="{{ asset('frontend/images/resource/sweing.jpg') }}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="{{ asset('singleProject') }}" class="link"><i class="icon fa fa-link"></i></a>
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
                                <ul class="price clearfix">
                                    <li>Raised: <span>$2,000</span></li>
                                    <li>Goal: <span>$4,000</span></li>
                                </ul>
                                <div class="donate-box"><button class="donate-box-btn theme-btn-two">Donate Now</button></div>
                            </div>
                        </div>
                        <div class="single-cause-content inner-box">
                            <figure class="image-box">
                                <img src="{{ asset('frontend/images/main-slider/adolences.jpg') }}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="{{ asset('singleProject') }}" class="link"><i class="icon fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="lower-content">
                                <h4><a href="{{ asset('singleProject') }}">Adolescent Development programme</a></h4>
                                <div class="text">we are always ..........</div>
                                <div class="progress-box">
                                    <div class="progress" data-value="60">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                            <div class="value-holder"><span class="value"></span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="price clearfix">
                                    <li>Raised: <span>$1,000</span></li>
                                    <li>Goal: <span>$3,000</span></li>
                                </ul>
                                <div class="donate-box"><button class="donate-box-btn theme-btn-two">Donate Now</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cause-section end -->


    <!-- event-section -->
    <section class="event-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10 col-sm-12 event-column">
                    <div class="event-content">
                        <div class="top-title">Upcoming Events</div>
                        <div class="top-text">We have undertaken several events</div>
                        <div class="single-event-content wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="date">30<span>Jan</span></div>
                            <h4><a href="event-details.html">Event: Help Flood Affected People</a></h4>
                            <ul class="info-box">
                                <li><i class="fa fa-clock-o"></i>9.00 AM - 11.00 PM</li>
                                <li><i class="fa fa-map-marker"></i>Dhaka</li>
                            </ul>
                            <div class="text">Commodo consequat duis aute irure dolor in repreh enderit in voluptate.</div>
                        </div>
                        <div class="single-event-content wow fadeInUp" data-wow-delay="0ms" data-wow-duration="2000ms">
                            <div class="date">25<span>Apr</span></div>
                            <h4><a href="event-details.html">Event: Charity For Education</a></h4>
                            <ul class="info-box">
                                <li><i class="fa fa-clock-o"></i>9.00 AM - 11.00 PM</li>
                                <li><i class="fa fa-map-marker"></i>29 Newyork City</li>
                            </ul>
                            <div class="text">Commodo consequat duis aute irure dolor in repreh enderit in voluptate.</div>
                        </div>
                        <div class="single-event-content wow fadeInUp" data-wow-delay="0ms" data-wow-duration="2500ms">
                            <div class="date">31<span>Dec</span></div>
                            <h4><a href="event-details.html">Event: Prottoye</a></h4>
                            <ul class="info-box">
                                <li><i class="fa fa-clock-o"></i>9.00 AM - 11.00 PM</li>
                                <li><i class="fa fa-map-marker"></i>Dhaka</li>
                            </ul>
                            <div class="text">Commodo consequat duis aute irure dolor in repreh enderit in voluptate.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 col-sm-12 counter-column">
                    <div class="fact-counter centred">
                        <div class="counter-content clearfix">
                            <div class="single-counter-content">
                                <article class="column wow fadeIn" data-wow-duration="0ms">
                                    <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="12500">0</span></div>
                                </article>
                                <div class="text">Donations</div>
                            </div>
                            <div class="single-counter-content">
                                <article class="column wow fadeIn" data-wow-duration="0ms">
                                    <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="640">0</span></div>
                                </article>
                                <div class="text">Volunteers Reached</div>
                            </div>
                            <div class="single-counter-content">
                                <article class="column wow fadeIn" data-wow-duration="0ms">
                                    <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="320">0</span></div>
                                </article>
                                <div class="text">Success Missions</div>
                            </div>
                            <div class="single-counter-content">
                                <article class="column wow fadeIn" data-wow-duration="0ms">
                                    <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="970">0</span></div>
                                </article>
                                <div class="text">Projects Done</div>
                            </div>
                        </div>
                        <figure class="img-box"><img src="{{ asset('frontend/images/resource/1.jpg') }}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- event-section end -->


    <!-- cta-section -->
    <section class="cta-section overlay-bg centred" style="background-image: url({{ asset('frontend/images/background/cta-bg.jpg') }});">
        <div class="container">
            <div class="title">Become A Volunteer</div>
            <div class="text">Join your hand with us for a better life and beautiful future</div>
            <div class="donate-box"><button class="donate-box-btn theme-btn">Get Started</button></div>
        </div>
    </section>
    <!-- cta-section end -->


    


    <!-- testimonial-section -->
    <section class="testimonial-section">
        <div class="container">
            <div class="testimonial-content">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 testimonial-column">
                        <div class="top-content overlay-bg" style="background-image: url({{ asset('frontend/images/resource/testimonial.jpg') }});">
                            <div class="sec-title">What Our<br />People Says?</div>
                            <div class="title-text">Lorem ipsum dolor sit amet consectetur.</div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 brand-column">
                        <div class="brand-content">
                            <div class="brand-carousel"> 
                                <figure class="img-box"><a href="#"><img src="{{ asset('frontend/images/brand/1.png') }}" alt=""></a></figure>
                                <figure class="img-box"><a href="#"><img src="{{ asset('frontend/images/brand/2.png') }}" alt=""></a></figure>
                                <figure class="img-box"><a href="#"><img src="{{ asset('frontend/images/brand/3.png') }}" alt=""></a></figure>
                                <figure class="img-box"><a href="#"><img src="{{ asset('frontend/images/brand/4.png') }}" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-box">
                    <div class="single-item-carousel">
                        <div class="content">
                            <div class="text">Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia dese runt mollit anim est laborum sed ut perspiciatis unde omnis iste natus sit error voluptatem accusantium dolor emque laudatium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta</div>
                            <div class="author-info">
                                <figure class="author-thumb"><img src="{{ asset('frontend/images/resource/1.png') }}" alt=""></figure>
                                <h5>Victoria Simpson</h5>
                                <div class="title">Co Founder</div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="text">Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia dese runt mollit anim est laborum sed ut perspiciatis unde omnis iste natus sit error voluptatem accusantium dolor emque laudatium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta</div>
                            <div class="author-info">
                                <figure class="author-thumb"><img src="{{ asset('frontend/images/resource/1.png') }}" alt=""></figure>
                                <h5>Victoria Simpson</h5>
                                <div class="title">Co Founder</div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="text">Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia dese runt mollit anim est laborum sed ut perspiciatis unde omnis iste natus sit error voluptatem accusantium dolor emque laudatium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta</div>
                            <div class="author-info">
                                <figure class="author-thumb"><img src="{{ asset('frontend/images/resource/1.png') }}" alt=""></figure>
                                <h5>Victoria Simpson</h5>
                                <div class="title">Co Founder</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-section end -->


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
    <!-- subscribe-section end -->


    
    
    @endsection






