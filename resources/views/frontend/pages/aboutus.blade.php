@extends('frontend.layouts.master')
        <!--Header banner section start-->
    @section('content')

         <!-- page-title -->
    <section class="page-title centred" style="background-image: url({{ asset('frontend/images/background/page-title.jpg') }});">
        <div class="container">
            <div class="content-box">
                <div class="title">About Us</div>
                <ul class="bread-crumb">
                    <li><a href="index.html">Home</a></li>
                    <li>About</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- about-style-two -->
    <section class="about-style-two sec-pad">
        <div class="container">
            <div class="sec-title centred">We Provide Worldwide <span>Charity<br />Service</span> Since 2012</div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 about-column">
                    <div class="about-content">
                        <div class="top-content">
                            <div class="title">First to AWARENESS - first to SERVE</div>
                            <div class="text">MASTUL Foundation is a nonprofit social development organization. It provides help towards the underprivileged people by leading the youths of Bangladesh. Since the year 2013, the organization is working for the basic rights of underprivileged, destitute and ethnic minority people of Bangladesh.</div>
                            <ul class="list">
                                <li>Convallis ligula ligula gravida tristique.</li>
                                <li>Lobortis massa fringilla odio.</li>
                            </ul>
                            <div class="link"><a href="#" class="theme-btn">Get Started</a></div>
                        </div>
                       {{--  <div class="lower-content">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="single-item">
                                        <div class="number">01</div>
                                        <h4><a href="#">Our Stories</a></h4>
                                        <div class="text">Retro tattooed tousled, disrupt portland synth slow-carb</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="single-item">
                                        <div class="number">02</div>
                                        <h4><a href="#">Our Mission</a></h4>
                                        <div class="text">Retro tattooed tousled, disrupt portland synth slow-carb</div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 img-column">
                    <figure class="img-box"><img src="{{ asset('frontend/images/resource/about.jpg') }}" alt=""></figure>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-two -->
 <section class="cause-style-three overlay-bg" {{-- style="background-image: url({{ asset('frontend/images/resource/slogan.jpg') }});" --}}>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 cause-column">
                    <div class="content-box">
                        <div class="sec-title">About Us</div>
                        <div class="text"><h4 class="text-light">let us break the cycle of poverty through education and rebuild our nation together</h4></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 offset-lg-2 cause-column">

                    <div class="single-cause-content">
                        <nav>
                          <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active btn btn-primary m-1" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Our History</a>
                            <a class="nav-item nav-link btn btn-success m-1" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Our Mission</a>
                            <a class="nav-item nav-link btn btn-warning m-1" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Our Vission</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active m-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">MASTUL Foundation (মাস্তুল ফাউন্ডেশন) is a civil society organization in Bangladesh established in January 2013. It is working for the basic rights of underprivileged, destitute and ethnic minority people.

                            The organization provides support to 5 schools in Dhaka, Bangladesh by providing 519 underprivileged children enrolled there with education, nutrition, hygiene, and recreation facilities.
                            Major Project of the organization are:
                            <ul>
                                <li> a) Child Sponsorship & developmental Program</li>
                                <li> b) Youth Participatory Community development</li>
                                <li>c) Conflict & Disaster management</li>
                                <li>d) Women Right's Advocacy & Empowerment Project</li>
                                <li>e) Environmental Awareness Advocacy</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade m-3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            MASTUL mission is to ensure that every people have their rights fulfilled. Through providing people support to their rights for education, health, pure water, hygiene, entertainment, emotional protection, economic aid, and safety from the injustice of society, we are creating a better living condition for them.
                            Solving society problems and advocating rights for people through innovating effective & efficient intervention by developing youth skills of leadership, creativity, and collaborating with them to implement that intervention
                        </div>
                      <div class="tab-pane fade m-3" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                          An ideal society where every group of people including but not limited to ethnic minority, women, children, refugees has been provided with their proper rights for dignity, justice, and equity for all.
                      </div>
                  </div>
              </div>

          </div>
            </div>
        </div>
    </section>

    <!-- cause-style-three end -->

        <section class="form-section">

        <div class="container-fluid clearfix">
            <div class="sec-title text-primary text-center m-5">Our Founder</div>
           
            <div class="form-content float-left bg-light">

                <div class="content-box">
        
                        <div class="row"">
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <h4 class="letter-spacing p-3">kazi Reaz Rahman Asif</h4>
                                <hr>
                                <label> 
                                    <h5 class=" text-justify lead">
                                        MASTUL mission is to ensure that every people have their rights fulfilled. Through providing people support to their rights for education, health, pure water, hygiene, entertainment, emotional protection, economic aid, and safety from the injustice of society, we are creating a better living condition for them.
                                        Solving society problems and advocating rights for people through innovating effective & efficient intervention by developing youth skills of leadership, creativity, and collaborating with them to implement that intervention
                                    </h5>
                             </label>
                               
                            </div>
                            
                            </div>
                        </div>
                </div>
             <div class="video-gallery float-right" style="background-image: url({{ asset('frontend/images/resource/kazi.jpg')}});">
                <div class="overlay-gallery">
                    <div class="icon-holder">
                        <div class="icon wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <a class="html5lightbox" title="Video" href="https://www.youtube.com/watch?v=DmkyXG8QdfM"><i class="fa fa-play"></i></a> 
                        </div>
                    </div>    
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- fact-counter -->
    <section class="counter-style-two counter-style-three overlay-bg" style="background-image: url({{ asset('frontend/images/background/counter.jpg') }});">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="single-item">
                        <article class="column wow fadeIn" data-wow-duration="0ms">
                        <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="12500">0</span></div>
                        </article>
                        <div class="text">Donations</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="single-item">
                        <article class="column wow fadeIn" data-wow-duration="0ms">
                        <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="640">0</span></div>
                        </article>
                        <div class="text">Volunteers Reached</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="single-item">
                        <article class="column wow fadeIn" data-wow-duration="0ms">
                        <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="320">0</span></div>
                        </article>
                        <div class="text">Success Missions</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="single-item">
                        <article class="column wow fadeIn" data-wow-duration="0ms">
                        <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="970">0</span></div>
                        </article>
                        <div class="text">Projects Done</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fact-counter end -->


    <!-- team-section -->
    <!-- testimonial-style-two -->
    <section class="testimonial-style-two centred bg-primary">
        <div class="container">
            <div class="content-box">
                <h2 class="letter-spacing p-3 text-light">Our People Says</h2>
                                <hr>
                <div class="single-item-carousel">
                    <div class="content">
                        <figure class="thumb-box"><img src="{{ asset('frontend/images/resource/2.png') }}" alt=""></figure>
                        <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt.ut labore etex dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi aliquip commodo consequat.</div>
                        <div class="author">
                            <div class="author-name">Victoria Simpson</div>
                            <div class="title">Co-Founder</div>
                        </div>
                    </div> 
                    <div class="content">
                        <figure class="thumb-box"><img src="{{ asset('frontend/images/resource/2.png') }}" alt=""></figure>
                        <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt.ut labore etex dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi aliquip commodo consequat.</div>
                        <div class="author">
                            <div class="author-name">Victoria Simpson</div>
                            <div class="title">Co-Founder</div>
                        </div>
                    </div>
                    <div class="content">
                        <figure class="thumb-box"><img src="{{ asset('frontend/images/resource/2.png') }}" alt=""></figure>
                        <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt.ut labore etex dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi aliquip commodo consequat.</div>
                        <div class="author">
                            <div class="author-name">Victoria Simpson</div>
                            <div class="title">Co-Founder</div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-style-two end -->
    <!-- team-section end -->


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
