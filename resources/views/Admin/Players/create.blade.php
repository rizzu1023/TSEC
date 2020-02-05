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
                        Add Player
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="{{ route('player.store') }}"
                              enctype="multipart/form-data" id="teamCreateForm">
                            @csrf

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="title">Name</label>
                                <div class="col-md-3">
                                    <input class="form-control" id="title" type="text" name="name"
                                           placeholder="e.g WANC">
                                </div>
                                <label class="col-md-2 col-form-label" for="tagline">Mobile No</label>
                                <div class="col-md-3">
                                    <input class="form-control" id="tagline" type="text" name="mobile_no"
                                           placeholder="e.g Maharastra">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="duration">Team</label>
                                <div class="col-md-3">
                                    <select class="form-control" id="duration" name="team_id">
                                        <option selected disabled>select Team</option>
                                        @foreach($teams as $team)
                                            <option value="{{$team->id}}">{{$team->year}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <label class="col-md-2 col-form-label" for="duration">Event</label>
                                <div class="col-md-3">
                                    <select class="form-control" id="duration" name="event_id">
                                        <option selected disabled>select Event</option>
                                        @foreach($events as $event)
                                            <option value="{{$event->id}}">{{$event->name}}</option>
                                        @endforeach
                                    </select>
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


{{-- @section('js')
    <script>
        $(document).ready(function () {
            $('#member').on('change', function () {
                var no_of_member = $('#member').val();
                if (no_of_member == 2) {
                    $('#participant3').hide();
                    $('#participant3').hide();
                }
                if (no_of_member == 3) {
                    $('#participant3').show();
                    $('#participant4').hide();
                }
                if (no_of_member == 4) {
                    $('#participant3').show();
                    $('#participant4').show();
                }
            });
        });
    </script>
    <script>
            $('#teamCreateForm').validate({
                rules:{
                    team_name:{
                        required:true,
                    },
                    team_state:{
                        required:true,
                    },
                    event_id:{
                        required:true,
                    },
                    name1:{
                        required:true,
                    },
                    email1:{
                        required:true,
                        email:true,
                    },
                    mobile_no1:{
                        required:true,
                        minlength:10,
                        maxlength:10,
                    },
                    college1:{
                        required:true,
                    },
                    department1:{
                        required:true,
                    },
                    github1:{
                        required:true,
                    },
                    name2:{
                        required:true,
                    },
                    email2:{
                        required:true,
                        email:true,
                    },
                    mobile_no2:{
                        required:true,
                        minlength:10,
                        maxlength:10,
                    },
                    college2:{
                        required:true,
                    },
                    department2:{
                        required:true,
                    },
                    github2:{
                        required:true,
                    },
                    name3:{
                        required:true,
                    },
                    email3:{
                        required:true,
                        email:true,
                    },
                    mobile_no3:{
                        required:true,
                        minlength:10,
                        maxlength:10,
                    },
                    college3:{
                        required:true,
                    },
                    department3:{
                        required:true,
                    },
                    github3:{
                        required:true,
                    },
                    name4:{
                        required:true,
                    },
                    email4:{
                        required:true,
                        email:true,
                    },
                    mobile_no4:{
                        required:true,
                        minlength:10,
                        maxlength:10,
                    },
                    college4:{
                        required:true,
                    },
                    department4:{
                        required:true,
                    },
                    github4:{
                        required:true,
                    }

                },
                messages:{
                    team_name:"Team Name Required",
                    team_state:"Please Specify Your State",
                    event_id:"Please Select Event Name",
                    name1:"Specify the name of participant 1",
                    email1:{
                        required:"Specify the email of participant 1",
                        email: "Your email address must be in the format of name@domain.com",
                    },
                    mobile_no1:{
                        required:"Eenter valid mobile no. of participant 1",
                        minlength:"Enter valid 10 digits phone nummber",
                        maxlength:"Enter valid 10 digits phone number",
                    },
                    college1:"Specify the College name of participant 1",
                    department1:"Specify the department of participant 1",
                    github1:"provide github_id of participant 1",

                    name2:"Specify the name of participant 2",
                    email2:{
                        required:"Specify the email of participant 2",
                        email: "Your email address must be in the format of name@domain.com",
                    },
                    mobile_no2:{
                        required:"Enter valid mobile no. of participant 2",
                        minlength:"Enter valid 10 digits phone nummber",
                        maxlength:"Enter valid 10 digits phone number",
                    },
                    college2:"Specify the College name of particpant 2",
                    department2:"Specify the department of participant 2",
                    github2:"Provide the github_id of participant 2",

                    name3:"Specify the name of participant 3",
                    email3:{
                        required:"Specify the email of participant 3",
                        email: "Your email address must be in the format of name@domain.com",
                    },
                    mobile_no3:{
                        required:"Enter valid mobile no. of participant 3",
                        minlength:"Enter valid 10 digits phone nummber",
                        maxlength:"Enter valid 10 digits phone number",
                    },
                    college3:"Specify the College name of particpant 3",
                    department3:"Specify the department of participant 3",
                    github3:"Provide the github_id of participant 3",

                    name4:"Specify the name of participant 4",
                    email4:{
                        required:"Specify the email of participant 4",
                        email: "Your email address must be in the format of name@domain.com",
                    },
                    mobile_no4:{
                        required:"Enter valid mobile no. of participant 4",
                        minlength:"Enter valid 10 digits phone nummber",
                        maxlength:"Enter valid 10 digits phone number",
                    },
                    college4:"Specify the College name of particpant 4",
                    department4:"Specify the department of participant 4",
                    github4:"Provide the github_id of participant 4",
                }
            });
    </script>
@endsection --}}
