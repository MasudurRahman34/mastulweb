@extends('frontend.layouts.master')
        <!--Header banner section start-->
    @section('content')

         <!-- page-title -->
    <!-- page-title -->
    
    <!-- page-title end -->


    <!-- cause-section -->
    <section class="cause-section cause-style-two causes-grid overlay-style-one sec-pad-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 cause-column">
                    <div class="single-cause-content inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image-box">
                            <img src="{{ asset('frontend/images/resource/child_1.jpg') }}" alt="">
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="{{ route('singleChild') }}" class="link"><i class="icon fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <div class="lower-content">
                            <h4><a href="{{ route('singleChild') }}">MD Abdullah</a></h4>
                            <div class="text">i want to be a police officer</div>
                            {{-- <div class="progress-box">
                                <div class="progress" data-value="75">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="value-holder"><span class="value"></span>%</div>
                                    </div>
                                </div>
                            </div>
                             --}}<ul class="price clearfix">
                                <li>Donate Me: <span>$13</span></li>
                                
                            </ul>
                            <div class="donate-box"><button class="theme-btn-two" data-toggle="modal" data-target="#addMoreChild">Donate Now</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 cause-column">
                    <div class="single-cause-content inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="2000ms">
                        <figure class="image-box">
                            <img src="{{ asset('frontend/images/resource/child_2.jpg') }}" alt="">
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="{{ route('singleChild') }}" class="link"><i class="icon fa fa-link"></i></a>
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
                                
                            </ul>
                            <div class="donate-box"><button class="theme-btn-two" data-toggle="modal" data-target="#addMoreChild">Donate Now</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 cause-column">
                    <div class="single-cause-content inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="2500ms">
                        <figure class="image-box">
                            <img src="{{ asset('frontend/images/resource/child_3.jpg') }}" alt="">
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
                            <h4><a href="causes-details.html">Tamanna</a></h4>
                            <div class="text">i want to be a doctor, thats why i study hard</div>
                            {{-- <div class="progress-box">
                                <div class="progress" data-value="85">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <div class="value-holder"><span class="value"></span>%</div>
                                    </div>
                                </div>
                            </div>
                             --}}<ul class="price clearfix">
                                <li>Donate Me: <span>$13</span></li>
                                
                            </ul>
                            <div class="donate-box"><button class="donate-box-btn theme-btn-two">Donate Now</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 cause-column">
                    <div class="single-cause-content inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="3000ms">
                        <figure class="image-box">
                            <img src="{{ asset('frontend/images/resource/child_4.jpg') }}" alt="">
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
                            <h4><a href="causes-details.html">Samia Akhter</a></h4>
                            <div class="text">my father want me to be an advocate</div>
                            {{-- <div class="progress-box">
                                <div class="progress" data-value="80">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="value-holder"><span class="value"></span>%</div>
                                    </div>
                                </div>
                            </div>
                             --}}<ul class="price clearfix">
                                <li>Donate Me: <span>$13</span></li>
                                
                            </ul>
                            <div class="donate-box"><button class="donate-box-btn theme-btn-two">Donate Now</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 cause-column">
                    <div class="single-cause-content inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="3500ms">
                        <figure class="image-box">
                            <img src="{{ asset('frontend/images/resource/child_5.jpg') }}" alt="">
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
                            <h4><a href="causes-details.html">srabonti akhter</a></h4>
                            <div class="text">My parents wark hard so that my study can not be stopped</div>
                            {{-- <div class="progress-box">
                                <div class="progress" data-value="90">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <div class="value-holder"><span class="value"></span>%</div>
                                    </div>
                                </div>
                            </div>
                             --}}<ul class="price clearfix">
                                <li>Donate Me: <span>$13</span></li>
                                
                            </ul>
                            <div class="donate-box"><button class="donate-box-btn theme-btn-two">Donate Now</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 cause-column">
                    <div class="single-cause-content inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="4000ms">
                        <figure class="image-box">
                            <img src="{{ asset('frontend/images/resource/child_5.jpg') }}" alt="">
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
                            <h4><a href="causes-details.html">Tumpa Akhter Kajol</a></h4>
                            <div class="text">My Father is a tenarry labour</div>
                            {{-- <div class="progress-box">
                                <div class="progress" data-value="70">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                        <div class="value-holder"><span class="value"></span>%</div>
                                    </div>
                                </div>
                            </div>
                             --}}<ul class="price clearfix">
                                <li>Donate Me: <span>$13</span></li>
                                
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
        <a type="submit" href="{{ route('Checkout') }}" class="btn btn-secondary text-light">Checkout</a>
        <button type="submit" class="btn btn-primary  text-light" data-dismiss="modal">Yes</button>
      </div>
    </div>
  </div>
</div>
<!--Emergency article section end-->
@endsection
<!--Js start-->
