<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>aranaz</title>
  <link rel="icon" href="{{asset('Main/img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('Main/css/themify-icons.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('Main/css/style.css')}}">
</head>

<body>
  <!--::header part start::-->
  <header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                   <a class="logo navbar-brand" href="index.html"> <img style="height:30px;max-width:100%;" src="{{asset('Main/img/logo.svg')}}" alt="logo"> </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="index.html">Home</a>
                            </li> -->
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Shop
                                </a>

                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="shop.html">Add to Cart</a>
                            </li>
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    pages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                    <a class="dropdown-item" href="login.html"> login</a>
                                    <a class="dropdown-item" href="tracking.html">tracking</a>
                                    <a class="dropdown-item" href="checkout.html">product checkout</a>
                                    <a class="dropdown-item" href="cart.html">shopping cart</a>
                                    <a class="dropdown-item" href="confirmation.html">confirmation</a>
                                    <a class="dropdown-item" href="elements.html">elements</a>
                                </div>
                            </li> -->
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    blog
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                    <a class="dropdown-item" href="blog.html"> blog</a>
                                    <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                </div>
                            </li> -->

                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact us</a>
                            </li>

                            <li class="nav-item">
                                <a class="btn-sm vendorbtn" href="login.html">Register Now</a>
                            </li>
                        </ul>
                    </div>

                    <div class="hearer_icon d-flex">

                        <a style="padding-top: 10px;" href="cart.html"><i class="fa fa-cart-plus"></i></a>


                        <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                             role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <i style="padding-top: 5px;" class="fas fa-user-circle"></i>

                         </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                             <a class="dropdown-item" href="login.html"> Account Info</a>
                             <a class="dropdown-item" href="tracking.html">Orders</a>
                             <a class="dropdown-item" href="cart.html">Shopping Cart</a>
                             <a class="dropdown-item" href="elements.html">Sign Out  </a>
                         </div>

                     </li>


                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container ">
            <form class="d-flex justify-content-between search-inner">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
  <!-- Header part end-->


  <!--================Home Banner Area =================-->
  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Scan To Add Products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

<div class="qrbtn">
  <a href="#"  class="btn_2">SCAN QR CODE</a>
</div>
  <!--================Cart Area =================-->
  <section class="cart_area padding_top">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
            @if($assign)

            <div class="cashcounter">
            <h2>Please Collect at Cash Counter</h2>
            <div id="counternumber">
              <h1 class="number">{{$data->cashier_id}}</h1>
            </div>
          </div>
          <div class="otp">
            <h4> Verification OTP : {{$data->otp}} </h4>
          </div>
            @endif
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col">Remove</th>

              </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <td>
                        <div class="media">
                            <div class="d-flex">
                                <img style="height:200px; widows: 200px;" src="/storage/item/images/{{$item->image}}" alt=""/>
                            </div>
                            <div class="media-body">
                                <p>{{$item->name}}</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <h5>{{$item->price}}</h5>
                    </td>
                    <td>
                        <div class="product_count">
                            {{--                                    <span class="input-number-decrement"> <i class="ti-angle-down"></i></span>--}}
                            <input class="input-number" type="text" value="1" min="0" max="10">
                            {{--                                    <span class="input-number-increment"> <i class="ti-angle-up"></i></span>--}}
                        </div>
                    </td>
                    <td>
                        <h5>{{$item->price}}</h5>
                    </td>
                    <td>
                        <form method="post" action="/cart/{{$item->id}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn"><i class="btn_3 small fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
              <tr class="bottom_button">
                <td>
                  <!-- <a class="btn_1" href="#">Update Cart</a> -->
                </td>
                <td></td>
                <td></td>
                <td></td>

                <td>
                  <div class="cupon_text float-right">
                      <form action="/assign/cashier" method="get">
                          @csrf
{{--                         <button type="submit" class="btn_1" href="#">Checkout</button>--}}
                      </form>
                  </div>
                </td>
              </tr>
              <tr class="shipping_area">
                <td></td>
                <td></td>
                <td></td>

                <td>
                  <!-- <h5>Shipping</h5> -->
                </td>
                <td>
                  <div class="shipping_box">

                    <!-- <h6>
                      Calculate Shipping
                      <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </h6>
                    <select class="shipping_select">
                      <option value="1">Bangladesh</option>
                      <option value="2">India</option>
                      <option value="4">Pakistan</option>
                    </select>
                    <select class="shipping_select section_bg">
                      <option value="1">Select a State</option>
                      <option value="2">Select a State</option>
                      <option value="4">Select a State</option>
                    </select>
                    <input type="text" placeholder="Postcode/Zipcode" />
                    <a class="btn_1" href="#">Update Details</a> -->
                  </div>
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>

                <td>
                  <h5>Subtotal</h5>
                </td>
                <td>
                  <h5>{{ $total_price }} &#8377 </h5>
                </td>
              </tr>

            </tbody>
          </table>
          <div class="checkout_btn_inner float-right">
            <a class="btn_1" href="index.html">Continue Shopping</a>
              <button type="submit" class="btn_1 btn checkout_btn_1" data-toggle="modal" data-target="#exampleModal">Proceed to checkout</button>
          </div>
        </div>
      </div>
  </section>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <form method="post" action="{{ url('/pay') }}" name="laravel_instamojo">
                  @csrf
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Order Detail</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">

                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">Buyer Name</span>
                          </div>
                          <input type="text" class="form-control"  name="buyer_name"  value="{{auth()->user()->name}}" readonly=""/>
                          <input type="hidden" name="buyer_id" value="{{auth()->user()->id}}"/>
                      </div>
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">Mobile Number</span>
                          </div>
                                                  <input readonly="" type="text" class="form-control"  name="mobile_no" aria-label="Username" aria-describedby="basic-addon1" value="1234567890"/>
                      </div>
                      {{--                    <div class="input-group mb-3">--}}
                      {{--                        <div class="input-group-prepend">--}}
                      {{--                            <span class="input-group-text" id="basic-addon1">Address</span>--}}
                      {{--                        </div>--}}
                      {{--                        <input readonly="" type="text" class="form-control" name="address" aria-label="Username" aria-describedby="basic-addon1" value="{{auth()->user()->Customer->address}}"/>--}}
                      {{--                    </div>--}}
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">Email</span>
                          </div>
                          <input readonly="" type="text" class="form-control"  name="email" aria-label="Username" aria-describedby="basic-addon1" value="{{auth()->user()->email}}"/>
                      </div>


                      @foreach($items as $item)
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1">Product Name</span>
                              </div>
                              <input readonly="" type="text" class="form-control" name="{{$item->id}}item_name" value="{{$item->name}}" aria-label="Username" aria-describedby="basic-addon1" value="{{$item->name}}"> <p style="display: inline-block;float: right">&nbsp;&nbsp;&#8377 {{$item->price}}</p>
                              <input type="hidden" class="form-control" name="price" value="{{$item->price}}"/>
                              <input type="hidden" class="form-control" name="vendor_id" value="{{$item->vendor_id}}"/>
                              <input type="hidden" class="form-control" name="item_id" value="{{$item->id}}"/>
                          </div>
                      @endforeach

                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">Total</span>
                          </div>
                          <input readonly="" type="text" class="form-control"  name="amount" value="{{$total_price}}" aria-label="Username" aria-describedby="basic-addon1"/>
                      </div>

                  </div>
                  <div class="modal-footer">

                      <button type="button" class="btn_1 btn checkout_btn_1"  data-dismiss="modal">Close</button>
                      <button type="submit" class="btn_1 btn checkout_btn_1">Order Now</button>

                  </div>
              </form>


          </div>
      </div>
  </div>



  <!--================End Cart Area =================-->

  <!--::footer_part start::-->
  <footer class="footer_part">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-sm-6 col-lg-2">
          <div class="single_footer_part">
            <h4>Top Products</h4>
            <ul class="list-unstyled">
              <li><a href="">Managed Website</a></li>
              <li><a href="">Manage Reputation</a></li>
              <li><a href="">Power Tools</a></li>
              <li><a href="">Marketing Service</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-2">
          <div class="single_footer_part">
            <h4>Quick Links</h4>
            <ul class="list-unstyled">
              <li><a href="">Jobs</a></li>
              <li><a href="">Brand Assets</a></li>
              <li><a href="">Investor Relations</a></li>
              <li><a href="">Terms of Service</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-2">
          <div class="single_footer_part">
            <h4>Features</h4>
            <ul class="list-unstyled">
              <li><a href="">Jobs</a></li>
              <li><a href="">Brand Assets</a></li>
              <li><a href="">Investor Relations</a></li>
              <li><a href="">Terms of Service</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-2">
          <div class="single_footer_part">
            <h4>Resources</h4>
            <ul class="list-unstyled">
              <li><a href="">Guides</a></li>
              <li><a href="">Research</a></li>
              <li><a href="">Experts</a></li>
              <li><a href="">Agencies</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="single_footer_part">
            <h4>Newsletter</h4>
            <p>Heaven fruitful doesn't over lesser in days. Appear creeping
            </p>
            <div id="mc_embed_signup">
              <form target="_blank"
                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                method="get" class="subscribe_form relative mail_part">
                <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                  class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                  onblur="this.placeholder = ' Email Address '">
                <button type="submit" name="submit" id="newsletter-submit"
                  class="email_icon newsletter-submit button-contactForm">subscribe</button>
                <div class="mt-10 info"></div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="copyright_part">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="copyright_text">
              <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="footer_icon social_icon">
              <ul class="list-unstyled">
                <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--::footer_part end::-->

  <!-- jquery plugins here-->
  <!-- jquery -->
  <script src="{{asset('Main/js/jquery-1.12.1.min.js')}}" ></script>
  <!-- popper js -->
  <script src="{{asset('Main/js/popper.min.js')}}" ></script>
  <!-- bootstrap js -->
  <script src="{{asset('Main/js/bootstrap.min.js')}}" ></script>
  <!-- easing js -->
  <script src="{{asset('Main/js/jquery.magnific-popup.js')}}" ></script>
  <!-- swiper js -->
  <script src="{{asset('Main/js/swiper.min.js')}}" ></script>
  <!-- swiper js -->
  <script src="{{asset('Main/js/masonry.pkgd.js')}}" ></script>
  <!-- particles js -->
  <script src="{{asset('Main/js/owl.carousel.min.js')}}" ></script>
  <script src="{{asset('Main/js/jquery.nice-select.min.js')}}" ></script>
  <!-- slick js -->
  <script src="{{asset('Main/js/slick.min.js')}}" ></script>
  <script src="{{asset('Main/js/jquery.counterup.min.js')}}" ></script>
  <script src="{{asset('Main/js/waypoints.min.js')}}" ></script>
  <script src="{{asset('Main/js/contact.js')}}" ></script>
  <script src="{{asset('Main/js/jquery.ajaxchimp.min.js')}}" ></script>
  <script src="{{asset('Main/js/jquery.form.js')}}" ></script>
  <script src="{{asset('Main/js/jquery.validate.min.js')}}" ></script>
  <script src="{{asset('Main/js/mail-script.js')}}" ></script>
  <script src="{{asset('Main/js/stellar.js')}}" ></script>
  <script src="{{asset('Main/js/price_rangs.js')}}" ></script>
  <!-- custom js -->
  <script src="{{asset('Main/js/custom.js')}}" ></script>
</body>

</html>
