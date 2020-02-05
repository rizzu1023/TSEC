@extends('Main.layouts.base')

@section('content')
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Your Profile</h2>
                            <p>Home <span>-</span> Profile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================ confirmation part start =================-->
    <section class="confirmation_part padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <div class="confirmation_tittle">
                      <span>Thank you. Your order has been received.</span>
                    </div> -->
                </div>
                <div class="col-lg-12 col-lx-4">
                    <div class="single_confirmation_details">
                        <h4>Basic Details</h4>
                        <ul>
                            <li>
                                <p>Full Name</p><span>{{Auth()->user()->name}}</span>
                            </li>

                            <li>
                                <p>Email</p><span>{{Auth()->user()->email}}</span>
                            </li>
                            <li>
                                <p>Gender</p><span>Male</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12 col-lx-4">
                    <div class="single_confirmation_details">
                        <h4>Address</h4>
                        <ul>
                            <li>
                                <p>Street</p><span> 56/8</span>
                            </li>
                            <li>
                                <p>city</p><span> Los Angeles</span>
                            </li>
                            <li>
                                <p>country</p><span> United States</span>
                            </li>
                            <li>
                                <p>postcode</p><span> 36952</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <br><br>
            <a href="update_profile.html" class="genric-btn primary circle">Edit</a>
        </div>
    </section>

@endsection
