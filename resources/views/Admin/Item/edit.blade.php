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
                        Edit Event
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="/admin/event/{{$event['id']}}" enctype="multipart/form-data" id="eventEditForm">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="file-input">Event Image</label>
                                <div class="col-md-8">
                                    <input id="file-input" type="file" name="logo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="title">Event Name</label>
                                <div class="col-md-8">
                                    <input class="form-control" id="title" type="text" name="title"
                                           value="{{$event['title']}}">
                                    {{--                                    <span class="help-block">This is a help text</span>--}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="tagline">Tagline</label>
                                <div class="col-md-8">
                                    <input class="form-control" id="tagline" type="text" name="tagline"
                                           value="{{$event['tagline']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="duration">Duration</label>
                                <div class="col-md-3">
                                    <select class="form-control" id="duration" name="duration">
                                        <option selected value="{{$event['duration']}}">{{$event['duration']}}</option>
                                        <option value="1 Day">1 Day</option>
                                        <option value="2 Day">2 Day</option>
                                    </select>
                                </div>
                                <label class="col-md-2 col-form-label" for="fees">Fees</label>
                                <div class="col-md-3">
                                    <input class="form-control" id="email-input" type="fees" name="fees"
                                           value="{{$event['fees']}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="start_date">Start Date</label>
                                <div class="col-md-3">
                                    <input class="form-control" id="start_date" type="date" name="start_date"
                                           value="{{$event['start_date']}}">
                                </div>
                                <label class="col-md-2 col-form-label" for="end_date">End Date</label>
                                <div class="col-md-3">
                                    <input class="form-control" id="end_date" type="date" name="end_date"
                                           value="{{$event['end_date']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="prize">Winner Prize</label>
                                <div class="col-md-3">
                                    <input class="form-control" id="prize" type="text" name="prize"
                                           value="{{$event['prize']}}">
                                </div>
                                <label class="col-md-2 col-form-label" for="mobile_no">Mobile Number</label>
                                <div class="col-md-3">
                                    <input class="form-control" id="mobile_no" type="text" name="mobile_no"
                                           value="{{$event['mobile_no']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="location">Location</label>
                                <div class="col-md-8">
                                    <input class="form-control" id="location" type="text" name="location"
                                           value="{{$event['location']}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="email">Email</label>
                                <div class="col-md-8">
                                    <input class="form-control" id="email" type="email" name="email"
                                           value="{{ $event['email'] }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="description">Description</label>
                                <div class="col-md-8">
                                    <input class="form-control" id="description" name="description"
                                              value="{{$event['description']}}">
                                </div>
                            </div>
                            <button class="btn btn-md btn-primary" type="submit" style="float: right">
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
        $('#eventEditForm').validate({
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