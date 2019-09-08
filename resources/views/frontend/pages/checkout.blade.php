@extends('frontend.layouts.master')
        <!--Header banner section start-->
    @section('content')

         <!-- page-title -->
    
    <!-- page-title end -->


    <!-- checkout-section -->
    <section class="checkout-section sec-pad-2">
        <div class="container">
            <div class="top-content">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="customer">Returning Customer? <a href="#">Click here to Login</a></div>
                    </div>
                </div>
               <!--  <div class="row">
                   <div class="col-lg-12 col-md-12 col-sm-12">
                       <div class="coupon">Have a Coupon? <a href="#">Click here to enter your code</a></div>
                   </div>
               </div> -->
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 checkout-column">
                    <div class="billing-info">
                        <div class="title">Billing Details</div>
                        <form action="#" method="post" class="billing-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label>First Name*</label>
                                    <div class="field-input">
                                        <input type="text" name="first-name" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label>Last Name*</label>
                                    <div class="field-input">
                                        <input type="text" name="last-name" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <label>Company Name*</label>
                                    <div class="field-input">
                                        <input type="text" name="company" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <label>Email Address*</label>
                                    <div class="field-input">
                                        <input type="email" name="email" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label>Phone Number*</label>
                                    <div class="field-input">
                                        <input type="text" name="phone" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label>Country*</label>
                                    <div class="select-box">
                                        <select>
                                            <option value="0" selected="">United State</option>
                                            <option value="1">111</option>
                                            <option value="2">222</option>
                                            <option value="3">333</option>
                                            <option value="4">444</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <label>Address*</label>
                                    <div class="field-input">
                                        <input type="text" name="address" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-input">
                                        <input type="text" name="address" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <label>Town/City*</label>
                                    <div class="field-input">
                                        <input type="text" name="town-city" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label>State*</label>
                                    <div class="select-box">
                                        <select>
                                            <option value="0" selected="">Select Option</option>
                                            <option value="1">111</option>
                                            <option value="2">222</option>
                                            <option value="3">333</option>
                                            <option value="4">4444</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label>Zip Code*</label>
                                    <div class="field-input">
                                        <input type="text" name="zip" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="create-acc">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="ship-same-address">
                                                <span>Create an Account</span>
                                            </label>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="additional-information">
                        <div class="note-box">
                            <label>Any Query</label>
                            <textarea placeholder="">Notes about your order, e.g. special notes about your donation</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 checkout-column">
                    <div class="order-info">
                        <div class="title">Your Order</div>
                        <div class="order-item">
                            <div class="single-item clearfix">
                                <div class="img-box"><a href="#"><figure><img src="{{ asset('frontend/images/resource/feature-9.jpg') }}" alt=""></figure></a></div>
                                <div class="item-name">Tanjila</div>
                                <div class="price">3000 TK</div>
                            </div>
                            <div class="single-item clearfix">
                                <div class="img-box"><a href="#"><figure><img src="{{ asset('frontend/images/resource/event-16.jpg') }}" alt=""></figure></a></div>
                                <div class="item-name">Nahida</div>
                                <div class="price">3000 Tk </div>
                            </div>
                        </div>
                    </div>
                    <div class="payment-info">
                        <div class="title">Total Amount= 6000 tk</div>
                        <div class="payment-option">
                         
                            <div class="order-btn"><button type="submit" class="theme-btn" data-toggle="modal"  data-target="#paymentModal">Place Your Donation</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!-- checkout-section end -->
    {{-- //payment process --}}
               

            
   
<!--Emergency article section end-->

@endsection
<!--Js start-->
