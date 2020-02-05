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
                        Vendor Details
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-8">
                                <p>Open <a href="/storage/vendors/documents/{{$vendor->document}}">Document</a></p>
{{--                                <img src="/storage/vendors/documents/{{$vendor->document}}">--}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="title">Name</label>
                            <div class="col-md-8">
                                <span>{{ $vendor->User->name }}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="tagline">Email</label>
                            <div class="col-md-8">
                                <span>{{ $vendor->User->email }}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="team">Mobile No.</label>
                            <div class="col-md-8">
                                <span>{{ $vendor->mobile_no }}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="duration">Address</label>
                            <div class="col-md-8">
                                <span>{{ $vendor->address }}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="duration">Pincode</label>
                            <div class="col-md-8">
                                <span>{{ $vendor->pincode }}</span>
                            </div>
                        </div>
                        <form action="/admin/user/{{$vendor->id}}/vendor" method="post">
                            @csrf

                            <div class="">
                                <button type="submit" class="btn btn-success btn-md">Verify</button>
                            </div>

                        </form>

                    </div>



                </div>

            </div>

        </div>
    </section>
@endsection
