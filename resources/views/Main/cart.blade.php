@extends('Main.layouts.base')

@section('content')

    <section class="breadcrumb cart">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Cart Products</h2>
                            <p>Home <span>-</span>Cart Products</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Cart Area =================-->
    <section class="cart_area padding_top">
        <div class="container">
            <video id="preview"></video>
            <div class="cart_inner">
                <div class="table-responsive">
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
{{--                        <tr>--}}
{{--                            <td>--}}
{{--                                <div class="media">--}}
{{--                                    <div class="d-flex">--}}
{{--                                        <img src="{{asset('Main/img/product/single-product/cart-1.jpg')}}" alt=""/>--}}
{{--                                    </div>--}}
{{--                                    <div class="media-body">--}}
{{--                                        <p>Minimalistic shop for multipurpose use</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <h5>$360.00</h5>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <div class="product_count">--}}
{{--                                    <!-- <input type="text" value="1" min="0" max="10" title="Quantity:"--}}
{{--                                      class="input-text qty input-number" />--}}
{{--                                    <button--}}
{{--                                      class="increase input-number-increment items-count" type="button">--}}
{{--                                      <i class="ti-angle-up"></i>--}}
{{--                                    </button>--}}
{{--                                    <button--}}
{{--                                      class="reduced input-number-decrement items-count" type="button">--}}
{{--                                      <i class="ti-angle-down"></i>--}}
{{--                                    </button> -->--}}
{{--                                    <span class="input-number-decrement"> <i class="ti-angle-down"></i></span>--}}
{{--                                    <input class="input-number" type="text" value="1" min="0" max="10">--}}
{{--                                    <span class="input-number-increment"> <i class="ti-angle-up"></i></span>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <h5>$720.00</h5>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <i class="btn_3 small fas fa-trash-alt"></i>--}}

{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>--}}
{{--                                <div class="media">--}}
{{--                                    <div class="d-flex">--}}
{{--                                        <img src="{{asset('Main/img/product/single-product/cart-1.jpg')}}" alt=""/>--}}
{{--                                    </div>--}}
{{--                                    <div class="media-body">--}}
{{--                                        <p>Minimalistic shop for multipurpose use</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <h5>$360.00</h5>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <div class="product_count">--}}
{{--                                    <span class="input-number-decrement"> <i class="ti-angle-down"></i></span>--}}
{{--                                    <input class="input-number" type="text" value="1" min="0" max="10">--}}
{{--                                    <span class="input-number-increment"> <i class="ti-angle-up"></i></span>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <h5>$720.00</h5>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <i class="btn_3 small fas fa-trash-alt"></i>--}}

{{--                            </td>--}}
{{--                        </tr>--}}


                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>

                            <td>
                                <h5>Subtotal</h5>
                            </td>
                            <td>
                                <h5>&#8377 {{$total_price}}</h5>
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
{{--                        <input readonly="" type="text" class="form-control"  name="mobile_no" aria-label="Username" aria-describedby="basic-addon1" value="{{auth()->user()->Customer->mobile_no}}"/>--}}
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
                        <input readonly="" type="text" class="form-control" name="item_name" value="{{$item->name}}" aria-label="Username" aria-describedby="basic-addon1" value="{{$item->name}}"> <p style="display: inline-block;float: right">&nbsp;&nbsp;&#8377 {{$item->price}}</p>
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


@endsection

@section('js')
    <script>
        let scanner = new Instascan.Scanner(
            {
                video: document.getElementById('preview'),
                mirror: false
            }
        );

        scanner.addListener('scan', function(content) {
            alert('Escaneou o conteudo: ' + content);
            window.open(content, "_blank");
        });
        Instascan.Camera.getCameras().then(cameras =>
        {
            if(cameras.length > 0){
                scanner.start(cameras[1]);
            } else {
                console.error("Não existe câmera no dispositivo!");
            }
        });
    </script>
    @endsection
