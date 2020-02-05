@extends('Admin.layouts.base')

@section('header-icon')
    @include('Admin.layouts.eventTopbar')
@endsection

@section('css')
    <style>
        #eventShow p {
            display: inline-block;
            font-size: 20px;
        }

        #eventShow h6 {
            display: inline-block;
            font-size: 23px;
        }

        #eventShow div li {
            list-style: none;
        }
    </style>
@endsection

@section('content')

    <section id="eventShow">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Item Detail
                    </div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="title">Image</label>
                            <div class="col-md-8">
                                <img style="width: 200px; height:200px" src="/storage/item/images/{{$item->image}}"></img>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="title">Item Name</label>
                            <div class="col-md-4">
                                <span>{{ $item['name'] }}</span>
                            </div>
                            <label class="col-md-2 col-form-label" for="tagline">Price</label>
                            <div class="col-md-4">
                                <span>{{ $item['price'] }}</span>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="duration">Category</label>
                            <div class="col-md-4">
                                <span>{{ $item['category'] }} Day</span>
                            </div>
                            <label class="col-md-2 col-form-label" for="duration">Size</label>
                            <div class="col-md-4">
                                <span>{{ $item['size'] }}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="start_date">Color</label>
                            <div class="col-md-4">
                                <span>{{ $item['color'] }}</span>
                            </div>
                            <label class="col-md-2 col-form-label" for="prize">Sub Category</label>
                            <div class="col-md-4">
                                <span>{{ $item['sub_category'] }}</span>
                            </div>
                        </div>




                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="location">Brand</label>
                            <div class="col-md-4">
                                <span>{{ $item['brand'] }}</span>
                            </div>
                            <label class="col-md-2 col-form-label" for="email">Model_NO</label>
                            <div class="col-md-4">
                                <span>{{ $item['model_no'] }}</span>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="description">Height</label>
                            <div class="col-md-4">
                                <span>{{ $item['height'] }}</span>
                            </div>

                            <label class="col-md-2 col-form-label" for="description">Weight</label>
                            <div class="col-md-4">
                                <span>{{ $item['weight'] }}</span>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="description">Width</label>
                            <div class="col-md-4">
                                <span>{{ $item['width'] }}</span>
                            </div>

                            <label class="col-md-2 col-form-label" for="description">Warranty</label>
                            <div class="col-md-4">
                                <span>{{ $item['warranty'] }}</span>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="description">Model</label>
                            <div class="col-md-4">
                                <span>{{ $item['model'] }}</span>
                            </div>
                            <label class="col-md-2 col-form-label" for="prize">Available</label>
                            <div class="col-md-4">
                                <span>{{ $item['availabe'] }}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="start_date">Description</label>
                            <div class="col-md-8">
                                <span>{{ $item['description'] }}</span>
                            </div>
                        </div>



                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection
