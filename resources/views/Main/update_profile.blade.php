@extends('Main.layouts.base')

@section('content')
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Update Profile</h2>
                            <p>Home <span>-</span>Detail</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="checkout_area padding_top">
        <div class="container">


            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>Your Details</h1>
                        <br>
                        <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="first" name="name"/>
                                <span class="placeholder" data-placeholder="First name"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="last" name="name"/>
                                <span class="placeholder" data-placeholder="Last name"></span>
                            </div>

                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="number" name="number"/>
                                <span class="placeholder" data-placeholder="Phone number"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="email" name="compemailany"/>
                                <span class="placeholder" data-placeholder="Email Address"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select class="country_select">
                                    <option value="1">India</option>
                                    <option value="2">USA</option>
                                    <option value="4">Canada</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add1" name="add1"/>
                                <span class="placeholder" data-placeholder="Address line 01"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add2" name="add2"/>
                                <span class="placeholder" data-placeholder="Address line 02"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="city" name="city"/>
                                <span class="placeholder" data-placeholder="Town/City"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select class="country_select">
                                    <option value="1">District</option>
                                    <option value="2">District</option>
                                    <option value="4">District</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <div
                                    class="creat_account">
                                </div>
                            </div>
                            <a class="btn_3" href="#">Update</a>

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
