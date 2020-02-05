@extends('Admin.layouts.base')

@section('header-icon')
    @include('Admin.layouts.eventTopbar')
@endsection

@section('content')
    <section id="eventIndex">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Add Item
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="{{ route('item.store') }}"
                              enctype="multipart/form-data" id="eventCreateForm">
                            @csrf

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="title">Item Name</label>
                                <div class="col-md-8">
                                    <input class="form-control" id="title" type="text" name="name"
                                           placeholder="clothes">
                                </div>

                                <label class="col-md-2 col-form-label" for="image">Image</label>
                                <div class="col-md-3">
                                    <input class="form-control" id="email-input" type="file" name="image"
                                           placeholder="upload images..">
                                </div>

                                <label class="col-md-2 col-form-label" for="fees">Price</label>
                                <div class="col-md-3">
                                    <input class="form-control" id="email-input" type="number" name="price"
                                           placeholder="Eg. 450\-">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="duration">Category</label>
                                <div class="col-md-3">
                                    <select class="form-control" id="duration" name="category">
                                        <option selected disabled>select category</option>
                                        <option value="books">Books</option>
                                        <option value="clothing">Clothing</option>
                                        <option value="electronic">Electronic</option>
                                        <option value="furniture">Furniture</option>
                                        <option value="sports">Sports</option>
                                    </select>
                                </div>
                                <label class="col-md-2 col-form-label" for="size">Size</label>
                                <div class="col-md-3">
                                    <input class="form-control" id="email-input" type="text" name="size"
                                           placeholder="Eg:- M, L, XL">
                                </div>

                                <label class="col-md-2 col-form-label" for="color">Color</label>
                                <div class="col-md-3">
                                    <input class="form-control" id="email-input" type="text" name="color"
                                           placeholder="Eg:- red, Green">
                                </div>

                                <label class="col-md-2 col-form-label" for="size">Description</label>
                                <div class="col-md-3">
                                    <input class="form-control" id="email-input" type="text" name="description"
                                           placeholder="Eg:- Describe about the product">
                                </div>

                                <label class="col-md-2 col-form-label" for="size">Model</label>
                                <div class="col-md-3">
                                    <input class="form-control" id="email-input" type="text" name="model"
                                           placeholder="">
                                </div>

                                <label class="col-md-2 col-form-label" for="duration">Vendor</label>
                                <div class="col-md-3">
                                    <select class="form-control" id="duration" name="vendor_id">
                                        <option selected disabled>select Vendor</option>
                                        @foreach($vendors as $vendor)
                                            <option value="{{$vendor->id}}">{{$vendor->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <button id="rizz" class="btn btn-md btn-primary" type="submit" style="float: right">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>

                        </form>
                    </div>

                </div>

            </div>

        </div>
    </section>

@endsection

@section('js')
    <script>
        $('#eventCreateForm').validate({
            rules:{
                // logo:{
                //     required:true
                // },
                title:{
                    required:true,
                },
                tagline:{
                    required:true,
                },
                duration:{
                    required:true,
                },
                fees:{
                    required:true,
                    number:true,

                },
                start_date:{
                    required:true,
                    date:true,
                },
                end_date:{
                    required:true,
                    date:true,
                },
                prize:{
                    required:true,
                },
                mobile_no:{
                    required:true,
                    minlength : 10,
                    maxlength : 10,
                },
                location:{
                    required:true,
                },
                email:{
                    required:true,
                    email:true,
                },
                description:{
                    required:true,
                }

            },
            messages: {
                title: "Please specify title",
                tagline: "Please specify the tagline",
                duration: " Please specify the duration",
                fees: "specify the fees",
                start_date :"Please specify the start_date",
                end_date :"Please specify the end_date",
                prize : "Please specify the prize",
                mobile_no :{
                    required:"We Need Mobile Number to contact you",
                    minlength: "Please Enter 10 Digits Number",
                    maxlength: "Please Enter 10 Digits Number",

                },
                location:"please specufy the location",
                email: {
                required: "We need your email address to contact you",
                email: "Your email address must be in the format of name@domain.com",
                },
                description:"Please specify the description",
            }
        });

    </script>

@endsection
