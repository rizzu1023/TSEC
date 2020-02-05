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
                        Event Detail
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="title">Event Name</label>
                            <div class="col-md-8">
                                <span>{{ $event['title'] }}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="tagline">Tagline</label>
                            <div class="col-md-8">
                                <span>{{ $event['tagline'] }}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="team">Teams</label>
                            <div class="col-md-8">
                                <span>{{ $event->Team()->count() }}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="duration">Duration</label>
                            <div class="col-md-8">
                                <span>{{ $event['duration'] }} Day</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="duration">Fees</label>
                            <div class="col-md-8">
                                <span>{{ $event['fees'] }}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="start_date">Start Date</label>
                            <div class="col-md-8">
                                <span>{{ $event['start_date'] }}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="start_date">End Date</label>
                            <div class="col-md-8">
                                <span>{{ $event['end_date'] }}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="prize">Winner Prize</label>
                            <div class="col-md-8">
                                <span>{{ $event['prize'] }}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="prize">Mobile Number</label>
                            <div class="col-md-8">
                                <span>{{ $event['mobile_no'] }}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="location">Location</label>
                            <div class="col-md-8">
                                <span>{{ $event['location'] }}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="email">Email</label>
                            <div class="col-md-8">
                                <span>{{ $event['email'] }}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="description">Description</label>
                            <div class="col-md-8">
                                <span>{{ $event['description'] }}</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection
