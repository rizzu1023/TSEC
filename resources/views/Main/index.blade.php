@extends('Main.layouts.base')

@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Wood & Cloth
                                                Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="{{asset('Main/img/banner_img.png')}}" alt="">
                                </div>
                            </div>
                        </div><div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Cloth & Wood
                                                Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="{{asset('Main/img/banner_img.png')}}" alt="">
                                </div>
                            </div>
                        </div><div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Wood & Cloth
                                                Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="{{asset('Main/img/banner_img.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    <!-- <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Cloth $ Wood Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="{{asset('Main/img/banner_img.png')}}" alt="">
                                </div>
                            </div>
                        </div> -->
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <section class="product_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Recommended for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_list_slider owl-carousel">
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{asset('Main/img/product/product_1.png')}}" alt="">
                                        <div class="single_product_text">
                                            <h4>Quartz Belt Watch</h4>
                                            <h3>$150.00</h3>
                                            <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @foreach($items as $item)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img style="height:262px ;width: 280px" src="/storage/item/images/{{$item->image}}" alt="">
                                        <div class="single_product_text">
                                            <h4>{{$item->name}}</h4>
                                            <h3>{{$item->price}} &#8377</h3>
                                            <form id="my_form" action="/cart" method="post">
                                                @csrf
                                                <input type="hidden" value="{{$item->id}}" name="item_id">
                                                @auth
                                                    <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                                                @endauth
                                                <button  class="add_cart btn btn-md btn-succes">+ ADD TO CART <i class="ti-heart"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{asset('Main/img/product/product_3.png')}}" alt="">
                                        <div class="single_product_text">
                                            <h4>Quartz Belt Watch</h4>
                                            <h3>$150.00</h3>
                                            <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{asset('Main/img/product/product_4.png')}}" alt="">
                                        <div class="single_product_text">
                                            <h4>Quartz Belt Watch</h4>
                                            <h3>$150.00</h3>
                                            <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{asset('Main/img/product/product_5.png')}}" alt="">
                                        <div class="single_product_text">
                                            <h4>Quartz Belt Watch</h4>
                                            <h3>$150.00</h3>
                                            <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{asset('Main/img/product/product_6.png')}}" alt="">
                                        <div class="single_product_text">
                                            <h4>Quartz Belt Watch</h4>
                                            <h3>$150.00</h3>
                                            <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{asset('Main/img/product/product_7.png')}}" alt="">
                                        <div class="single_product_text">
                                            <h4>Quartz Belt Watch</h4>
                                            <h3>$150.00</h3>
                                            <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{asset('Main/img/product/product_8.png')}}" alt="">
                                        <div class="single_product_text">
                                            <h4>Quartz Belt Watch</h4>
                                            <h3>$150.00</h3>
                                            <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{asset('Main/img/product/product_1.png')}}" alt="">
                                        <div class="single_product_text">
                                            <h4>Quartz Belt Watch</h4>
                                            <h3>$150.00</h3>
                                            <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{asset('Main/img/product/product_2.png')}}" alt="">
                                        <div class="single_product_text">
                                            <h4>Quartz Belt Watch</h4>
                                            <h3>$150.00</h3>
                                            <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{asset('Main/img/product/product_3.png')}}" alt="">
                                        <div class="single_product_text">
                                            <h4>Quartz Belt Watch</h4>
                                            <h3>$150.00</h3>
                                            <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{asset('Main/img/product/product_4.png')}}" alt="">
                                        <div class="single_product_text">
                                            <h4>Quartz Belt Watch</h4>
                                            <h3>$150.00</h3>
                                            <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{asset('Main/img/product/product_5.png')}}" alt="">
                                        <div class="single_product_text">
                                            <h4>Quartz Belt Watch</h4>
                                            <h3>$150.00</h3>
                                            <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{asset('Main/img/product/product_6.png')}}" alt="">
                                        <div class="single_product_text">
                                            <h4>Quartz Belt Watch</h4>
                                            <h3>$150.00</h3>
                                            <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{asset('Main/img/product/product_7.png')}}" alt="">
                                        <div class="single_product_text">
                                            <h4>Quartz Belt Watch</h4>
                                            <h3>$150.00</h3>
                                            <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{asset('Main/img/product/product_8.png')}}" alt="">
                                        <div class="single_product_text">
                                            <h4>Quartz Belt Watch</h4>
                                            <h3>$150.00</h3>
                                            <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- feature_part start-->
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <h2>Featured Category</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7 col-sm-6">
                    <div class="single_feature_post_text">
                        <h3>Electronics</h3>
                        <p>latest Electronics products</p>
                        <a href="#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                        <img src="{{asset('Main/img/feature/feature_1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="single_feature_post_text">
                        <h3>Fashion</p>
                            <p>Latest Fashion</p>
                            <a href="#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                            <img src="{{asset('Main/img/feature/333.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="single_feature_post_text">
                        <h3>Sports</h3>
                        <p>Latest Sports</p>
                        <a href="#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                        <img src="{{asset('Main/img/feature/feature_3.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-sm-6">
                    <div class="single_feature_post_text">
                        <h3>Furnitures</h3>
                        <p></p>Latest in Furnitures</h3>
                        <a href="#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                        <img src="{{asset('Main/img/feature/feature_4.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->


    <!-- awesome_shop start-->
    <section class="our_offer section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <div class="offer_img">
                        <img src="{{asset('Main/img/offer_img.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="offer_text">
                        <h2>Weekly Sale on
                            60% Off All Products</h2>
                        <div class="date_countdown">
                            <div id="timer">
                                <div id="days" class="date"></div>
                                <div id="hours" class="date"></div>
                                <div id="minutes" class="date"></div>
                                <div id="seconds" class="date"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="enter email address"
                                   aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a href="#" class="input-group-text btn_2" id="basic-addon2">book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- awesome_shop part start-->

    <!-- product_list part start-->
    <section class="product_list best_seller section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Best Sellers</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="best_product_slider owl-carousel">
                        <div class="single_product_item">
                            <img src="{{asset('Main/img/product/product_1.png')}}" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                            </div>
                        </div>
                        <div class="single_product_item">
                            <img src="{{asset('Main/img/product/product_2.png')}}" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                            </div>
                        </div>
                        <div class="single_product_item">
                            <img src="{{asset('Main/img/product/product_3.png')}}" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                            </div>
                        </div>
                        <div class="single_product_item">
                            <img src="{{asset('Main/img/product/product_4.png')}}" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                            </div>
                        </div>
                        <div class="single_product_item">
                            <img src="{{asset('Main/img/product/product_5.png')}}" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part end-->

    <!-- subscribe_area part start-->

    <!--::subscribe_area part end::-->

    <!-- subscribe_area part start-->
    <section class="client_logo padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="section_tittle text-center">
                    <h2>Our Brands</h2>
                </div>
                <div class="col-lg-12">

                </div>
                <div class="col-lg-12">
                    <div class="single_client_logo">
                        <img src="{{asset('Main/img/client_logo/client_logo_1.png')}}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{asset('Main/img/client_logo/client_logo_2.png')}}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{asset('Main/img/client_logo/client_logo_3.png')}}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{asset('Main/img/client_logo/client_logo_4.png')}}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{asset('Main/img/client_logo/client_logo_5.png')}}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{asset('Main/img/client_logo/client_logo_3.png')}}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{asset('Main/img/client_logo/client_logo_1.png')}}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{asset('Main/img/client_logo/client_logo_2.png')}}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{asset('Main/img/client_logo/client_logo_3.png')}}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{asset('Main/img/client_logo/client_logo_4.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->
@endsection
