@extends('frontend.layouts.master')
        <!--Header banner section start-->
    @section('content')

         <!-- page-title -->
             <!-- page-title -->
    <section class="page-title centred" style="background-image: url({{ asset('frontend/images/background/page-title.jpg') }});">
        <div class="container">
            <div class="content-box">
                <div class="title">Cause Details</div>
                <ul class="bread-crumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Causes</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- cause-details -->
    <section class="cause-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div class="cause-details-content">
                        <div class="content-style-one">
                            <div class="title">EDUCATION Support our mission of  children for a smarter future</div>
                            <div class="single-cause-content clearfix">
                                <div class="lower-content">
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
                                </div>
                                <div class="donate-box"><button class="donate-box-btn theme-btn-two">Donate Now</button></div>
                            </div>
                            <figure class="img-box"><img src="{{ asset('frontend/images/resource/education.jpg') }}" alt=""></figure>
                            
                            
                            <div class="top-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum been industry's standard dummy text ever since the 1500s, when an unknown scrambled.</div>
                            <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</div>
                            <div class="text">1500s, when an unknown printer took a galley of type and scrambled it dsu make a type specimen book. It has survived only five centuries, but also the leap into electronic typesetting.remaining essentially un changed. It was popularised in the 1960s with the release sheets containing. Lorem Ipsum passages and more recently with desktop publishing software like Aldus PageMaker includ</div>
                            <div class="bg-text">This tool is here to help you daydream about the lifestyle you might like to have in the future. It gives a light-hearted look at how much the lifestyle you want could cost.</div>
                        </div>
                        <div class="content-style-two">
                            <div class="row">
                                <div class="col-lg-5 col-md-12 col-sm-12 column">
                                    <figure class="img-box"><img src="{{ asset('frontend/images/resource/5.jpg') }}" alt=""></figure>
                                </div>
                                <div class="col-lg-7 col-md-12 col-sm-12 column">
                                    <div class="right-content">
                                        <h3>Our Work Process</h3>
                                        <ul class="list">
                                            <li>Lorem Ipsum is simply printing and typesetting industry.</li>
                                            <li>When unknow printer took gallery something.</li>
                                            <li>Lorem Ipsum is simply printing and typesetting industry.</li>
                                            <li>When unknow printer took gallery something.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text">When an unknown printer took a galley of type and scrambled it dsu make a type specimen book. It has survived only five centuries, but also the leap into electronic typesetting.remaining essentially unchanged. It was popularised in the 1960s with the release sheets containing.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="sidebar default-sidebar-content cause-sidebar-content">
                       <!--  <div class="sidebar-search sidebar-widget">
                           <form action="#" method="post">
                               <div class="form-group">
                                   <input type="search" name="search-field" placeholder="Search Here.." required="">
                                   <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                               </div>
                           </form>
                       </div> -->
                        <div class="sidebar-categories sidebar-widget">
                            <div class="sidebar-title">More Project</div>
                            <ul class="categories-list">
                                <li><a href="#">Women Empowerment</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Education</a></li>
                                <li><a href="#">Childrean</a></li>
                            </ul>
                        </div>
                        <div class="sidebar-post sidebar-widget">
                            <div class="sidebar-title">Recent News and Event</div>
                            <div class="single-post">
                                <figure class="img-box"><a href=""><img src="{{ asset('frontend/images/resource/post-1.jpg') }}" alt=""></a></figure>
                                <h4><a href="blog-details.html">No Hunger in South Africa</a></h4>
                                <div class="link"><a href="blog-details.html">See Details <i class="fa fa-angle-right"></i></a></div>
                            </div>
                            <div class="single-post">
                                <figure class="img-box"><a href=""><img src="{{ asset('frontend/images/resource/post-2.jpg') }}" alt=""></a></figure>
                                <h4><a href="blog-details.html">Clean Water For Every Child</a></h4>
                                <div class="link"><a href="blog-details.html">See Details <i class="fa fa-angle-right"></i></a></div>
                            </div>
                            <div class="single-post">
                                <figure class="img-box"><a href=""><img src="{{ asset('frontend/images/resource/post-3.jpg') }}" alt=""></a></figure>
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
    <!-- cause-details end -->
    
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
