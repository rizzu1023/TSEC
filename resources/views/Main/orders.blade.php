@extends('Main.layouts.base')

@section('content')
<section class="breadcrumb order">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Your Orders</h2>
                        <p>Home <span>-</span>Orders</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--================Tracking Box Area =================-->
<section class="tracking_box_area padding_top">
    <div class="container">
        <div class="row align-items-center">
            <!-- <div class="col-lg-6">
                  <div class="reacking_box_text text-center h-100">
                    <h2>New to our Shop?</h2>
                    <p>There are advances being made in science and technology
                      everyday, and a good example of this is the</p>
                      <a href="#" class="btn_2">Create an Account</a>
                  </div>
                </div> -->
            <div class="col-lg-12">
                <div class="tracking_box_inner">
                    <h1>Live Tracking</h1>
                    <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was
                        given
                        to you on your receipt and in the confirmation email you should have received.</p>
                    <form class="row tracking_form" action="#" method="post" novalidate="novalidate">
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="order" name="order" placeholder="Order ID">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="btn_3">Track Order</button>
                        </div>
                    </form>
                </div>

            </div>


        </div>

    </div>


</section>

<section class="confirmation_part padding_top">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>Previous Orders</h1>

                <div class="order_details_iner">

                    <h3>Order ID: 752545</h3>
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th scope="col" colspan="2">Product</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">View</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th colspan="2"><span>Pixelstore fresh Blackberry</span></th>
                            <th>x02</th>
                            <th> <span>$720.00</span></th>
                            <th><i class="genric-btn success-border medium fas fa-eye"></i></th>


                        </tr>
                        <tr>
                            <th colspan="2"><span>Pixelstore fresh Blackberry</span></th>
                            <th>x02</th>
                            <th> <span>$720.00</span></th>
                            <th><i class="genric-btn success-border medium fas fa-eye"></i></th>

                        </tr>
                        <tr>
                            <th colspan="2"><span>Pixelstore fresh Blackberry</span></th>
                            <th>x02</th>
                            <th> <span>$720.00</span></th>
                            <th><i class="genric-btn success-border medium fas fa-eye"></i></th>

                        </tr>
                        <tr>
                            <th colspan="3">Subtotal</th>
                            <th> <span>$2160.00</span></th>
                        </tr>
                        <tr>
                            <th colspan="3">shipping</th>
                            <th><span>flat rate: $50.00</span></th>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th scope="col" colspan="3">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <!-- <h1>Previous Orders</h1> -->

                <div class="order_details_iner">

                    <h3>Order ID: 752545</h3>
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th scope="col" colspan="2">Product</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">View</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th colspan="2"><span>Pixelstore fresh Blackberry</span></th>
                            <th>x02</th>
                            <th> <span>$720.00</span></th>
                            <th><i class="genric-btn success-border medium fas fa-eye"></i></th>

                        </tr>
                        <tr>
                            <th colspan="2"><span>Pixelstore fresh Blackberry</span></th>
                            <th>x02</th>
                            <th> <span>$720.00</span></th>
                            <th><i class="genric-btn success-border medium fas fa-eye"></i></th>

                        </tr>
                        <tr>
                            <th colspan="2"><span>Pixelstore fresh Blackberry</span></th>
                            <th>x02</th>
                            <th> <span>$720.00</span></th>
                            <th><i class="genric-btn success-border medium fas fa-eye"></i></th>

                        </tr>
                        <tr>
                            <th colspan="3">Subtotal</th>
                            <th> <span>$2160.00</span></th>
                        </tr>
                        <tr>
                            <th colspan="3">shipping</th>
                            <th><span>flat rate: $50.00</span></th>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th scope="col" colspan="3">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>

                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
