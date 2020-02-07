@extends('Main.layouts.base')

@section('content')
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Shop Category</h2>
                            <p>Home <span>-</span> Shop Category</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">

                    <div class="left_sidebar_area">
                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Price Filter</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <li>
                                        <a href="/product/price/500">> 500 Rs</a>
                                    </li>
                                    <li>
                                        <a href="/product/price/1000">> 1000 Rs</a>
                                    </li>
                                    <li >
                                        <a href="/product/price/1500">> 1500 Rs</a>
                                    </li>
                                    <li>
                                        <a href="/product/price/2000">> 2000 Rs</a>
                                    </li>
                                    <li>
                                        <a href="/product/price/5000">< 5000 Rs</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <aside class="left_widgets p_filter_widgets">

                            @if (\Request::is('*/electronics') or \Request::is('*/electronics/*') )
                                <div class="l_w_title">
                                    <h3>Brand filters</h3>
                                </div>
                                <div class="widgets_inner">
                                    <ul class="list">
                                        <li>
                                            <a href="/product/electronics/Samsung">Samung</a>
                                        </li>
                                        <li>
                                            <a href="/product/electronics/Asus">Asus</a>
                                        </li>
                                        <li class="active">
                                            <a href="/product/electronics/Apple">Apple</a>
                                        </li>
                                        <li>
                                            <a href="/product/electronics/Lenovo">Lenovo</a>
                                        </li>
                                        <li>
                                            <a href="/product/electronics/HP">HP</a>
                                        </li>
                                    </ul>
                                </div>
                                    @elseif(\Request::is('*/fashion') or \Request::is('*/fashion/*'))
                                        <div class="l_w_title">
                                            <h3>Brand filters</h3>
                                        </div>
                                        <div class="widgets_inner">
                                            <ul class="list">
                                                <li>
                                                    <a href="/product/fashion/HRX">HRX</a>
                                                </li>
                                                <li>
                                                    <a href="/product/fashion/Roadter">Roadster</a>
                                                </li>
                                                <li >
                                                    <a href="/product/fashion/Wrogn">WROGN</a>
                                                </li>
                                                <li>
                                                    <a href="/product/fashion/Zara">Zara</a>
                                                </li>
                                                <li>
                                                    <a href="/product/fashion/UCB">UCB</a>
                                                </li>
                                            </ul>
                                        </div>
                                            @elseif(\Request::is('*/sports') or \Request::is('*/sports/*'))
                                                <div class="l_w_title">
                                                    <h3>Brand filters</h3>
                                                </div>
                                                <div class="widgets_inner">
                                                    <ul class="list">
                                                        <li>
                                                            <a href="/product/sports/Adidas">Adidas</a>
                                                        </li>
                                                        <li>
                                                            <a href="/product/sports/Nike">Nike</a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="/product/sports/MRF">MRF</a>
                                                        </li>
                                                        <li>
                                                            <a href="/product/sports/Puma">Puma</a>
                                                        </li>
                                                        <li>
                                                            <a href="/product/sports/Yono">YONO</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                    @elseif(\Request::is('*/books') or \Request::is('*/books/*'))
                                                        <div class="l_w_title">
                                                            <h3>Category filters</h3>
                                                        </div>
                                                        <div class="widgets_inner">
                                                            <ul class="list">
                                                                <li>
                                                                    <a href="#">Story</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Romantic</a>
                                                                </li>
                                                                <li class="active">
                                                                    <a href="#">Fiction</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Comic</a>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                            @endif
                                                        <div class="l_w_title">
                                                            <h3>Category filters</h3>
                                                        </div>
                                                        <div class="widgets_inner">
                                                            <ul class="list">
                                                                <li>
                                                                    <a href="#">Story</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Romantic</a>
                                                                </li>
                                                                <li class="active">
                                                                    <a href="#">Fiction</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Comic</a>
                                                                </li>

                                                            </ul>


                                                        </div>
                          </aside>








                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product_top_bar d-flex justify-content-between align-items-center">
                                <div class="single_product_menu">
                                    <p><span>10000 </span> Product Found</p>
                                </div>
                                <div class="single_product_menu d-flex">
                                    <h5>short by : </h5>
                                    <select>
                                        <option data-display="Select">name</option>
                                        <option value="1">price</option>
                                        <option value="2">product</option>
                                    </select>
                                </div>
                                <div class="single_product_menu d-flex">
                                    <h5>show :</h5>
                                    <div class="top_pageniation">
                                        <ul>
                                            <li>1</li>
                                            <li>2</li>
                                            <li>3</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single_product_menu d-flex">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="search"
                                               aria-describedby="inputGroupPrepend">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend"><i
                                                    class="ti-search"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center latest_product_inner">
                        @foreach($items as $item)
                            <div class="col-lg-4 col-sm-6">
                                <div class="single_product_item">
                                    <a href="/product/single/{{$item->id}}">
                                        <img style="height: 262px;width: 280px"
                                             src="/storage/item/images/{{$item->image}}" alt="">
                                    </a>
                                    <div class="single_product_text">
                                        <h4>{{$item->name}}</h4>
                                        <h3>&#8377 {{$item->price}}</h3>
                                        <form id="my_form" action="/cart" method="post">
                                            @csrf
                                            <input type="hidden" value="{{$item->id}}" name="item_id">
                                            @auth
                                                <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                                            @endauth
                                            <button class="add_cart btn btn-md btn-succes">+ ADD TO CART <i
                                                    class="ti-heart"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
{{--                        <div class="col-lg-4 col-sm-6">--}}
{{--                            <div class="single_product_item">--}}
{{--                                <img src="{{asset('Main/img/product/product_2.png')}}" alt="">--}}
{{--                                <div class="single_product_text">--}}
{{--                                    <h4>Quartz Belt Watch</h4>--}}
{{--                                    <h3>$150.00</h3>--}}
{{--                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-sm-6">--}}
{{--                            <div class="single_product_item">--}}
{{--                                <img src="{{asset('Main/img/product/product_3.png')}}" alt="">--}}
{{--                                <div class="single_product_text">--}}
{{--                                    <h4>Quartz Belt Watch</h4>--}}
{{--                                    <h3>$150.00</h3>--}}
{{--                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-sm-6">--}}
{{--                            <div class="single_product_item">--}}
{{--                                <img src="{{asset('Main/img/product/product_4.png')}}" alt="">--}}
{{--                                <div class="single_product_text">--}}
{{--                                    <h4>Quartz Belt Watch</h4>--}}
{{--                                    <h3>$150.00</h3>--}}
{{--                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-sm-6">--}}
{{--                            <div class="single_product_item">--}}
{{--                                <img src="{{asset('Main/img/product/product_5.png')}}" alt="">--}}
{{--                                <div class="single_product_text">--}}
{{--                                    <h4>Quartz Belt Watch</h4>--}}
{{--                                    <h3>$150.00</h3>--}}
{{--                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-sm-6">--}}
{{--                            <div class="single_product_item">--}}
{{--                                <img src="{{asset('Main/img/product/product_6.png')}}" alt="">--}}
{{--                                <div class="single_product_text">--}}
{{--                                    <h4>Quartz Belt Watch</h4>--}}
{{--                                    <h3>$150.00</h3>--}}
{{--                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-sm-6">--}}
{{--                            <div class="single_product_item">--}}
{{--                                <img src="{{asset('Main/img/product/product_7.png')}}" alt="">--}}
{{--                                <div class="single_product_text">--}}
{{--                                    <h4>Quartz Belt Watch</h4>--}}
{{--                                    <h3>$150.00</h3>--}}
{{--                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-sm-6">--}}
{{--                            <div class="single_product_item">--}}
{{--                                <img src="{{asset('Main/img/product/product_8.png')}}" alt="">--}}
{{--                                <div class="single_product_text">--}}
{{--                                    <h4>Quartz Belt Watch</h4>--}}
{{--                                    <h3>$150.00</h3>--}}
{{--                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-sm-6">--}}
{{--                            <div class="single_product_item">--}}
{{--                                <img src="{{asset('Main/img/product/product_2.png')}}" alt="">--}}
{{--                                <div class="single_product_text">--}}
{{--                                    <h4>Quartz Belt Watch</h4>--}}
{{--                                    <h3>$150.00</h3>--}}
{{--                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-12">--}}
{{--                            <div class="pageination">--}}
{{--                                <nav aria-label="Page navigation example">--}}
{{--                                    <ul class="pagination justify-content-center">--}}
{{--                                        <li class="page-item">--}}
{{--                                            <a class="page-link" href="#" aria-label="Previous">--}}
{{--                                                <i class="ti-angle-double-left"></i>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                                        <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                                        <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                                        <li class="page-item"><a class="page-link" href="#">4</a></li>--}}
{{--                                        <li class="page-item"><a class="page-link" href="#">5</a></li>--}}
{{--                                        <li class="page-item"><a class="page-link" href="#">6</a></li>--}}
{{--                                        <li class="page-item">--}}
{{--                                            <a class="page-link" href="#" aria-label="Next">--}}
{{--                                                <i class="ti-angle-double-right"></i>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </nav>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->

    <!-- product_list part start-->
    <section class="product_list best_seller">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Best Sellers <span>shop</span></h2>
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

@endsection
