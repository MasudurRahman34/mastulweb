    <header class="main-header">
        <!-- header-top -->
        <div class="header-top bg-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 column">
                        <div class="top-left">
                            <ul class="social-content">
                                <li>Follow Us:</li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 column">
                        <div class="top-right">
                            <ul class="right-content">
                                <li>
                                    <div class="search-box-area">
                                        <div class="search-toggle"><i class="fa fa-search"></i></div>
                                        <div class="search-box">
                                            <form method="post" action="http://html.tonatheme.com/2019/Hernando/index.html">
                                                <div class="form-group">
                                                    <input type="search" name="search" placeholder="Search Here" required>
                                                    <button type="submit"><i class="fa fa-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-phone"></i>Call:  123 4561 5523</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i>Email:  info@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- header-top end -->

        <!-- header-bottom -->
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 column">
                        <figure class="logo-box"><a href="{{ asset('index11') }}"><img src="{{ asset('frontend/images/Mastul_logo1.png') }}" alt=""></a></figure>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 menu-column">
                        <div class="menu-area">
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->      
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class=""><a href="{{ route('index11') }}">Home</a>
                                            <!-- <ul>
                                                <li><a href="index.html">Home Page One</a></li>
                                                <li><a href="index-2.html">Home Page Two</a></li>
                                                <li><a href="index-3.html">Home Page three</a></li>
                                                <li><a href="index-4.html">Home Page Four</a></li>
                                            </ul> -->
                                        </li>
                                       
                                        <li class><a href="{{ route('childGrid') }}">Sponsor a child</a>
                                            <!-- <ul>
                                                <li><a href="causes-grid.html">Cause Grid</a></li>
                                                <li><a href="causes-list.html">Cause List</a></li>
                                                <li><a href="causes-details.html">Cause Details</a></li>
                                            </ul> -->
                                        </li>
                                        {{-- <li class><a href="#">Causes</a>
                                            <ul>
                                                <li><a href="causes-grid.html">Cause Grid</a></li>
                                                <li><a href="causes-list.html">Cause List</a></li>
                                                <li><a href="causes-details.html">Cause Details</a></li>
                                            </ul>
                                        </li> --}}
                                         <li><a href="{{ route('projectGrid') }}">Project</a></li>

                                         <li><a href="{{ route('eventGrid') }}">Event</a></li>
                                         {{-- <li><a href="{{ route('aboutus') }}">Donate</a></li> --}}
                                          <li><a href="{{ route('aboutus') }}">About</a></li>
                                        <!-- <li class="dropdown"><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="event-list.html">Event List</a></li>
                                                <li><a href="event-grid.html">Event Grid</a></li>
                                                <li><a href="event-details.html">Event Details</a></li>
                                                <li><a href="team.html">Our Volunteer</a></li>
                                                <li><a href="portfolio.html">Our Portfolio</a></li>
                                                <li><a href="shop.html">Shop Page</a></li>
                                                <li><a href="shop-details.html">Product Details</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="donate-page.html">Donation Page</a></li>
                                                <li><a href="error.html">404 Page</a></li>
                                            </ul>
                                        </li>   -->
                                        {{-- <li class="dropdown"><a href="#">Blog</a> --}}
                                            <!-- <ul>
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-classic.html">Blog classic</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul> -->
                                        </li>                              
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 clearfix column">
                        <ul class="nav-right pull-right">
                            <li class="link"><a href="shop.html"><i class="flaticon-bag text-primary font-weight-bold p-4"></i></a></li>
                            {{-- <li class="donate-box"><button class="donate-box-btn">Donate Now</button></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- header-bottom end -->


        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-12 col-sm-12 column">
                        <figure class="logo-box"><a href="index.html"><img src="{{ asset('frontend/images/Mastul_logo1.png') }}"></a></figure>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 menu-column">
                        <div class="menu-area">
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->      
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class=""><a href="{{ route('index11') }}">Home</a>
                                            <!-- <ul>
                                                <li><a href="index.html">Home Page One</a></li>
                                                <li><a href="index-2.html">Home Page Two</a></li>
                                                <li><a href="index-3.html">Home Page three</a></li>
                                                <li><a href="index-4.html">Home Page Four</a></li>
                                            </ul> -->
                                        </li>
                                       
                                        <li class><a href="#">Sponsor a child</a>
                                            <!-- <ul>
                                                <li><a href="causes-grid.html">Cause Grid</a></li>
                                                <li><a href="causes-list.html">Cause List</a></li>
                                                <li><a href="causes-details.html">Cause Details</a></li>
                                            </ul> -->
                                        </li>
                                        {{-- <li class><a href="#">Causes</a>
                                            <ul>
                                                <li><a href="causes-grid.html">Cause Grid</a></li>
                                                <li><a href="causes-list.html">Cause List</a></li>
                                                <li><a href="causes-details.html">Cause Details</a></li>
                                            </ul>
                                        </li> --}}

                                         <li><a href="{{ route('projectGrid') }}">Project</a></li>
                                         <li><a href="{{ route('aboutus') }}">Event</a></li>
                                         {{-- <li><a href="{{ route('aboutus') }}">Donate</a></li> --}}
                                          <li><a href="{{ route('aboutus') }}">About</a></li>
                                        <!-- <li class="dropdown"><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="event-list.html">Event List</a></li>
                                                <li><a href="event-grid.html">Event Grid</a></li>
                                                <li><a href="event-details.html">Event Details</a></li>
                                                <li><a href="team.html">Our Volunteer</a></li>
                                                <li><a href="portfolio.html">Our Portfolio</a></li>
                                                <li><a href="shop.html">Shop Page</a></li>
                                                <li><a href="shop-details.html">Product Details</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="donate-page.html">Donation Page</a></li>
                                                <li><a href="error.html">404 Page</a></li>
                                            </ul>
                                        </li>   -->
                                        {{-- <li class="dropdown"><a href="#">Blog</a> --}}
                                            <!-- <ul>
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-classic.html">Blog classic</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul> -->
                                        </li>                              
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                     <div class="col-lg-2 col-md-12 col-sm-12 clearfix column">
                        <ul class="nav-right pull-right mt-3">
                            <li class="link"><a href="shop.html" class=""><i class="flaticon-bag text-primary font-weight-bold"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- sticky-header end -->
    </header>
    <!-- End Main Header -->

    <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">Please Confirm Your Payment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                        <h5 class="modal-title" id="paymentModalLabel">Total Payable Amount= 6000 TK</h5> <br>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Select Payment Method</label>
                        <select name="payment_method" class="form-control">
                            <option value="Bkash">Bkash</option>
                            <option value="Rocket">Rocket</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">Payment Number</label>
                        <input type="text" name="payment_number" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">Transaction Id</label>
                        <input type="text" name="transaction_id" class="form-control">
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="btnPaymentSubmit" class="btn btn-primary" data-dismiss="modal">Submit</button>
                  </div>
                </div>
              </div>
            </div>


    <div id="donate-popup" class="donate-popup">
        <div class="close-donate"><span class="fa fa-close"></span></div>
        <div class="popup-inner">
            <div class="container">
                <div class="donate-form-area">
                    <h2>Donation Information</h2>
                    <h4>How much would you like to donate:</h4>
                    <form  action="#" class="donate-form default-form">
                        <ul class="chicklet-list clearfix">
                           
                            <li>
                                <input type="radio" id="donate-amount-3" name="donate-amount" />
                                <label for="donate-amount-3" data-amount="3000">3000 tk</label>
                            </li>
                            <li>
                                <input type="radio" id="donate-amount-4" name="donate-amount" />
                                <label for="donate-amount-4" data-amount="4000">4000 tk</label>
                            </li>
                            <li>
                                <input type="radio" id="donate-amount-5" name="donate-amount" />
                                <label for="donate-amount-5" data-amount="5000">5000 tk</label>
                            </li>
                            <li class="other-amount">

                                <div class="input-container" data-message="Every Money you donate helps end hunger.">
                                    <input type="text" id="other-amount" placeholder="Or Other Amount"  />
                                </div>
                            </li>
                        </ul>
                        <h3>Donor Information</h3>
                        <div class="form-bg">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12">           
                                    <div class="form-group">
                                        <p>Your Name*</p>
                                        <input type="text" name="name" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <p>Email*</p>
                                        <input type="text" name="email" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <p>Nationality</p>
                                        <input type="text" name="identity_id" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <p>Country Of residence</p>
                                        <input type="text" name="identity_id" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <p>National Id/passport id</p>
                                        <input type="text" name="identity_id" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <p>Present Address*</p>
                                        <input type="text" name="address" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <p> Permanent Address*</p>
                                        <input type="text" name="address" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <p> Organization name</p>
                                        <input type="text" name="address" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <p> Organization Address</p>
                                        <input type="text" name="address" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <p>Phone number</p>
                                        <input type="text" name="phone" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="payment-option">
                            <li>
                                <h4>Choose your payment method:</h4>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <input name="pay-us" type="checkbox">
                                        <span>Paypal</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                               <div class="checkbox">
                                    <label>
                                        <input name="pay-us" type="checkbox">
                                        <span>Offline Donation</span>
                                    </label>
                                </div> 
                            </li>
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <input name="pay-us" type="checkbox">
                                        <span>Credit Card</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <input name="pay-us" type="checkbox">
                                        <span>Debit Card</span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <div class="center"><button class="theme-btn dismiss-donate" data-toggle="modal" data-target="#paymentModal">Donate Now</button></div>          
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- donate popup -->

    <!-- //payment modal -->
    


            <!-- //thank you swal -->
    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            jQuery(document).ready(function($) {
                $('#btnPaymentSubmit').click(function(event) {
                   swal(
                        'Thank You',
                        'Your Request Has Been Submitted, We will Contact With You Soon !',
                        'success'
                    )
                   window.location = "{{route('index11') }}";
                });
            });
            
        </script>