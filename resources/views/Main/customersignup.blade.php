@extends('Main.layouts.base')

@section('content')
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Customer Registration</h2>
                        <p>Home <span>-</span> Customer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--================Checkout Area =================-->
<section class="checkout_area padding_top">
    <div class="container">


        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Customer Details</h1>
                    <br>
                    <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="first" name="name" placeholder="Full Name"/>
{{--                            <span class="placeholders" ></span>--}}
                        </div>


                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="number" name="mobile_no" placeholder="Phone number"/>
{{--                            <span class="placeholder" ></span>--}}
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email Address"/>
{{--                            <span class="placeholder" ></span>--}}
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <select class="country_select" name="country">
                                <option value="India">India</option>
                                <option value="Usa">USA</option>
                                <option value="Canada">Canada</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add1" name="address" placeholder="Address line"/>
{{--                            <span class="placeholder" ></span>--}}
                        </div>


                        <div class="col-md-12 form-group p_star">
                            <select class="country_select" name="state">
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Maharastra">Maharastra</option>
                                <option value="Delhi">Delhi</option>
                            </select>
                        </div>

                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="city" name="city"  placeholder="Town/City"/>
{{--                            <span class="placeholder"></span>--}}
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP" />
                        </div>
                        <div class="col-md-12 form-group">
                            <div
                                class="creat_account">
                                <input type="checkbox" id="f-option2" name="selector" />
                                <label for="f-option2">I agree to the Terms and Conditionns"
                                </label>
                            </div>
                        </div>
                        <a class="btn_3" href="#">Sign UP</a>

                        <div class="col-md-12 form-group">
                            <!-- <div class="creat_account">
                              <h3>Shipping Details</h3>
                              <input type="checkbox" id="f-option3" name="selector" />
                              <label for="f-option3">Ship to a different address?</label>
                            </div> -->

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
