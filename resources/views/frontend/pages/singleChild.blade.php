@extends('frontend.layouts.master')
        <!--Header banner section start-->
    @section('content')

    <section class="about-section  cause-style-two causes-grid overlay-style-one" style="padding:0px; padding-bottom: 120px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 cause-column" >
                    <div class="" id="childcard">
                    <div class="single-cause-content inner-box wow fadeInUp"  data-wow-delay="0ms" data-wow-duration="1500ms" >
                        <figure class="image-box">
                            <img src="{{ asset('frontend/images/resource/child_2.jpg') }}" alt="">
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="causes-details.html" class="link"><i class="icon fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <div class="lower-content">
                            <h4><a href="causes-details.html">Forhad Islam</a></h4>
                            <div class="text">when we will be doctor, i do operation of sick people</div>
                            {{-- <div class="progress-box">
                                <div class="progress" data-value="75">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="value-holder"><span class="value"></span>%</div>
                                    </div>
                                </div>
                            </div>
                             --}}<ul class="price clearfix">
                                <li>Donate Me: <span>$13</span></li>
                                {{-- <li>Goal: <span>$8,000</span></li> --}}
                            </ul>
                            <div class="donate-box"><button class="theme-btn-two" data-toggle="modal" data-target="#addMoreChild">Donate Now</button></div>
                        </div>
                    </div>
                </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-12 cause-column">
                    <div class="video-gallery wow fadeInRight mt-3" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <img src="{{ asset('frontend/images/resource/video_image.jpg') }}" alt="Awesome Video Gallery">
                        <div class="overlay-gallery">
                            <div class="icon-holder">
                                <div class="icon wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <a class="html5lightbox" title="Video" href="https://youtu.be/DmkyXG8QdfM"><i class="flaticon-play-button"></i></a> 
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-8 col-sm-12 mt-3">

                        <div class="card border-primary" style="background-color: #9054a1;">
                          <div class="card-header text-light">About Name</div>
                          <div class="card-body text-primary border border-light m-3">
                            <h5 class="card-title text-light">Primary card title</h5>
                            <p class="card-text text-light">Abdulla Al lives with his parents and has no brothers or sisters. His parents struggle to provide for the family. His father is unemployed and his mother is unemployed. Despite their efforts, it is difficult to meet the family's needs.

                                Abdulla Al is growing up in a rural farming community in Bangladesh. Homes are mainly constructed of bamboo with metal roofs and dirt floors. Families eat rice, fish and any vegetables they can afford. The climate in this region varies, with temperatures in the 90s and as low as 48 degrees. The rainy season brings large floods, which help the rice crops grow. Rice is the major crop of this country.

                                Abdulla Al is not in school at this time because the child is still too young. He helps at home by being good. He likes to play soccer. He is in satisfactory health.

                            Your sponsorship commitment will help provide Abdulla Al and his community with improved health through better nutrition and disease prevention. Your faithful support will reduce the risk of illness by establishing safe water sources and hygienic latrines. Schools with receive desks and educational materials, and tutoring programs will help children excel academically. And our caring staff will reflect Christ's love to these children through their actions and lives.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12" id="nextdiv"></div>
            </div>
                <div class="col-lg-12" id="nextdiv"></div>
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
                <div class="col-lg-12 col-md-12 col-sm-12 cause-column mt-5">
                    <div id="nextdiv"></div>
                    <h1 class="text-center">Realated Childrens</h1>
                    <hr>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 video-column">
                    <div class="single-cause-content inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="2000ms">
                        <figure class="image-box">
                            <img src="{{ asset('frontend/images/resource/cause-2.jpg') }}" alt="">
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="causes-details.html" class="link"><i class="icon fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <div class="lower-content">
                            <h4><a href="causes-details.html">Raise fund for our Education</a></h4>
                            <div class="text">Excepteur sint occaecat cupidatat non proident sunt.</div>
                            {{-- <div class="progress-box">
                                <div class="progress" data-value="75">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="value-holder"><span class="value"></span>%</div>
                                    </div>
                                </div>
                            </div>
                             --}}<ul class="price clearfix">
                                <li>Raised: <span>$2,000</span></li>
                                <li>Goal: <span>$4,000</span></li>
                            </ul>
                            <div class="donate-box"><button class="theme-btn-two" data-toggle="modal" data-target="#addMoreChild">Donate Now</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 cause-column">
                    <div class="single-cause-content inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="2500ms">
                        <figure class="image-box">
                            <img src="{{ asset('frontend/images/resource/cause-3.jpg') }}" alt="">
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="causes-details.html" class="link"><i class="icon fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <div class="lower-content">
                            <h4><a href="causes-details.html">Feed For Hungry Child</a></h4>
                            <div class="text">Excepteur sint occaecat cupidatat non proident sunt.</div>
                            {{-- <div class="progress-box">
                                <div class="progress" data-value="85">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <div class="value-holder"><span class="value"></span>%</div>
                                    </div>
                                </div>
                            </div>
                             --}}<ul class="price clearfix">
                                <li>Raised: <span>$1,000</span></li>
                                <li>Goal: <span>$3,000</span></li>
                            </ul>
                            <div class="donate-box"><button class="donate-box-btn theme-btn-two">Donate Now</button></div>
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
                                        <a href="causes-details.html" class="link"><i class="icon fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <div class="lower-content">
                            <h4><a href="causes-details.html">Water Helps Poor</a></h4>
                            <div class="text">Excepteur sint occaecat cupidatat non proident sunt.</div>
                            {{-- <div class="progress-box">
                                <div class="progress" data-value="80">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="value-holder"><span class="value"></span>%</div>
                                    </div>
                                </div>
                            </div>
                             --}}<ul class="price clearfix">
                                <li>Raised: <span>$5,000</span></li>
                                <li>Goal: <span>$6,000</span></li>
                            </ul>
                            <div class="donate-box"><button class="donate-box-btn theme-btn-two">Donate Now</button></div>
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
                                        <a href="causes-details.html" class="link"><i class="icon fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <div class="lower-content">
                            <h4><a href="causes-details.html">Children’s Health Fund</a></h4>
                            <div class="text">Excepteur sint occaecat cupidatat non proident sunt.</div>
                            {{-- <div class="progress-box">
                                <div class="progress" data-value="90">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <div class="value-holder"><span class="value"></span>%</div>
                                    </div>
                                </div>
                            </div>
                             --}}<ul class="price clearfix">
                                <li>Raised: <span>$4,000</span></li>
                                <li>Goal: <span>$6,000</span></li>
                            </ul>
                            <div class="donate-box"><button class="donate-box-btn theme-btn-two">Donate Now</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 cause-column">
                    <div class="single-cause-content inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="4000ms">
                        <figure class="image-box">
                            <img src="{{ asset('frontend/images/resource/cause-10.jpg') }}" alt="">
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="causes-details.html" class="link"><i class="icon fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <div class="lower-content">
                            <h4><a href="causes-details.html">Charity For Animal</a></h4>
                            <div class="text">Excepteur sint occaecat cupidatat non proident sunt.</div>
                            {{-- <div class="progress-box">
                                <div class="progress" data-value="70">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                        <div class="value-holder"><span class="value"></span>%</div>
                                    </div>
                                </div>
                            </div>
                             --}}<ul class="price clearfix">
                                <li>Raised: <span>$8,000</span></li>
                                <li>Goal: <span>$9,000</span></li>
                            </ul>
                            <div class="donate-box"><button class="donate-box-btn theme-btn-two">Donate Now</button></div>
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
    <!-- subscribe-section end -->


    <!-- main-footer -->
    
    <!-- team-section end -->


   


<!-- Modal -->
<div class="modal fade" id="addMoreChild" tabindex="-1" role="dialog" aria-labelledby="addMoreCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sponsor Me !!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-primary font-weight-bold" role="alert">
          Do You Want To Sponsor More Child !!!
            </div>
          </div>
          <div class="modal-footer">
        <a  href="{{ route('Checkout') }}" class="btn btn-secondary text-light">Checkout</a>
        <a href="{{ route('childGrid') }}" class="btn btn-primary  text-light">Yes</a>
      </div>
    </div>
  </div>
</div>
 <script src="{{ asset('frontend/js/jquery.js') }}"></script>
<script type="text/javascript">
    var distance = $('#nextdiv').offset().top;
$(window).scroll(function () {
    if ($(window).scrollTop() <= distance) {
         $('#childcard').addClass("position-fixed");
         $('#childcard').css({"height": "90%", "width": "25%"});

     }else{
        $('#childcard').removeClass("position-fixed");
        $('#childcard').removeAttr("style");
     }
});
/*var childcard = document.getElementById("childcard");
var sticky = childcard.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    childcard.addClass("position-fxed");
  } else {
    childcard.removeClass("position-fxed");
  }
}*/
</script>
<!--Emergency article section end-->
@endsection
<!--Js start-->
