@extends('frontend.layouts.master')
        <!--Header banner section start-->
    @section('content')
    <!-- page-title end -->

    <!-- blog-details -->
    <section class="news-section blog-details blog-page">
        <div class="container">
            <div class="row">
                <canvas id="swarm"></canvas>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="blog-details-content">
                        <div class="content-style-one">
                            
                            <div class="sec-title text-primary text-center">Help Bring A Sustainable Social Change.</div>
                            <div class="date">25 Feb, 2018</div>
                            <div class="text">
                                <p>Here at Mastul Foundation, every 60 seconds a family receives the tools to overcome poverty with help from local staff. Sponsorship helps address the specific needs of each community, empowering your child, their family, and community to become self-sufficient</p>
                            </div>
                            <figure class="img-box"><img src="{{ asset('frontend/images/how_child_ponsorship_work_wagon.jpg') }}" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="blog-details-content">
                        <div class="content-style-one">
                            
                            <div class="sec-title text-primary text-center"> We Ensure These Supports For Every Children</div>
                            
                            <div class="text text-justify mt-3">
                                <p class="">We pool monthly sponsorship donations for maximum impact in each community. You'll help your child and other vulnerable children in the community with life-changing things like: clean water, nutrition, healthcare, education, jobs for parents, protection, and sharing God's love</p>
                            </div>
                            
                        </div>
                        <div class="content-style-two">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="text-center"><i class="fa fa-graduation-cap bg-primary rounded-circle text-center text-light" aria-hidden="true" style="font-size: 60px; height:120px; width: 120px; padding-top: 50px;"></i> </div><div class="text text-center"> <h4>Teacher</h4></div> 

                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                     <div class="text-center"><i class="fa fa-briefcase bg-primary rounded-circle text-center text-light" aria-hidden="true" style="font-size: 60px; height:120px; width: 120px; padding-top: 50px;"></i> </div>

                                     <div class="text text-center"> <h4>School Bag</h4></div> 
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                   <div class="text-center">
                                        <i class="fa fa-female bg-primary rounded-circle text-center text-light" aria-hidden="true" style="font-size: 60px; height:120px; width: 120px; padding-top: 50px;">
                                        </i> 
                                   </div>
                                   <div class="text text-center"> <h4>Uniform</h4></div> 
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    
                                    <div class="text-center">
                                        <i class="fa fa-cutlery bg-primary rounded-circle text-center text-light" aria-hidden="true" style="font-size: 60px; height:120px; width: 120px; padding-top: 50px;"></i> 
                                    </div>
                                    <div class="text text-center"> <h4>Food And Nurition</h4></div> 
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    
                                    <div class="text-center">
                                        <i class="fa fa-pencil-square-o bg-primary rounded-circle text-center text-light" aria-hidden="true" style="font-size: 60px; height:120px; width: 120px; padding-top: 50px;"></i> 
                                    </div>
                                    <div class="text text-center"> <h4>Education Material</h4></div> 
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    
                                    <div class="text-center">
                                        <i class="fa fa-user-md bg-primary rounded-circle text-center text-light" aria-hidden="true" style="font-size: 60px; height:120px; width: 120px; padding-top: 50px;"></i> 
                                    </div>
                                    <div class="text text-center"> <h4>Medical Support</h4></div> 
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    
                                    <div class="text-center">
                                        <i class="fa fa-usd bg-primary rounded-circle text-center text-light" aria-hidden="true" style="font-size: 60px; height:120px; width: 120px; padding-top: 50px;">
                                        </i> 
                                    </div>
                                    <div class="text text-center"> <h4>Financial Support</h4></div> 
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    
                                    <div class="text-center">
                                        <i class="fa fa-futbol-o bg-primary rounded-circle text-center text-light" aria-hidden="true" style="font-size: 60px; height:120px; width: 120px; padding-top: 50px;">
                                        </i> 
                                    </div>
                                    <div class="text text-center"> <h4>Curriculam Activities</h4></div> 
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
  

    

<!--Emergency article section end-->
@endsection
<!--Js start-->
