@extends('Admin.layouts.base')

@section('header-icon')
    @include('Admin.layouts.eventTopbar')
@endsection


@section('content')
    <section id="teamEdit">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Team
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="/admin/team/{{$team['id']}}" enctype="multipart/form-data" id="teamEditForm">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="title">Team Name</label>
                                <div class="col-md-8">
                                    <input class="form-control" id="title" type="text" name="team_name"
                                           value="{{$team['team_name']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="tagline">State</label>
                                <div class="col-md-3">
                                    <input class="form-control" id="tagline" type="text" name="team_state"
                                           value="{{ $team['team_state'] }}">
                                </div>
                                <label class="col-md-2 col-form-label" for="duration">Event</label>
                                <div class="col-md-3">
                                    <select class="form-control" id="duration" name="event_id">
                                        <option selected value="{{ $team['event_id'] }}">{{ $team->Event->title}}</option>
                                        @foreach($events as $event)
                                            <option value="{{$event->id}}">{{$event->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <label>Participant 1</label>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="fees">Name</label>
                                <div class="col-md-2">
                                    <input class="form-control" id="name1" type="text" name="name1"
                                           value="{{ $team->Participant['0']->name }}">
                                </div>
                                <label class="col-md-2 col-form-label" for="fees">Email</label>
                                <div class="col-md-2">
                                    <input class="form-control" id="email1" type="text" name="email1"
                                           value="{{ $team->Participant['0']->email }}">
                                </div>
                                <label class="col-md-2 col-form-label" for="fees">Mobile Number</label>
                                <div class="col-md-2">
                                    <input class="form-control" id="mobile_no1" type="text" name="mobile_no1"
                                           value="{{ $team->Participant['0']->mobile_no }}">
                                </div>
                                <label class="col-md-2 col-form-label" for="fees">College</label>
                                <div class="col-md-2">
                                    <input class="form-control" id="college1" type="text" name="college1"
                                           value="{{ $team->Participant['0']->college }}">
                                </div>
                                <label class="col-md-2 col-form-label" for="fees">Department</label>
                                <div class="col-md-2">
                                    <input class="form-control" id="department1" type="text" name="department1"
                                           value="{{ $team->Participant['0']->department }}">
                                </div>
                                <label class="col-md-2 col-form-label" for="fees">Github</label>
                                <div class="col-md-2">
                                    <input class="form-control" id="github1" type="fees" name="github1"
                                           value="{{ $team->Participant['0']->github }}">
                                </div>
                                <input type="hidden" value="{{ $team->Participant['0']->id }}" name="p0_id">

                            </div>

                            <label>Participant 2</label>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="fees">Name</label>
                                <div class="col-md-2">
                                    <input class="form-control" id="name2" type="text" name="name2"
                                           value="{{ $team->Participant['1']->name }}">
                                </div>
                                <label class="col-md-2 col-form-label" for="fees">Email</label>
                                <div class="col-md-2">
                                    <input class="form-control" id="email2" type="text" name="email2"
                                           value="{{ $team->Participant['1']->email }}">
                                </div>
                                <label class="col-md-2 col-form-label" for="fees">Mobile Number</label>
                                <div class="col-md-2">
                                    <input class="form-control" id="mobile_no2" type="text" name="mobile_no2"
                                           value="{{ $team->Participant['1']->mobile_no }}">
                                </div>
                                <label class="col-md-2 col-form-label" for="fees">College</label>
                                <div class="col-md-2">
                                    <input class="form-control" id="college2" type="text" name="college2"
                                           value="{{ $team->Participant['1']->college }}">
                                </div>
                                <label class="col-md-2 col-form-label" for="fees">Department</label>
                                <div class="col-md-2">
                                    <input class="form-control" id="department2" type="text" name="department2"
                                           value="{{ $team->Participant['1']->department }}">
                                </div>
                                <label class="col-md-2 col-form-label" for="fees">Github</label>
                                <div class="col-md-2">
                                    <input class="form-control" id="github1" type="fees" name="github2"
                                           value="{{ $team->Participant['1']->github }}">
                                </div>
                                <input type="hidden" value="{{ $team->Participant['1']->id }}" name="p1_id">
                            </div>

                            @if($no_of_member == 3 || $no_of_member == 4)
                            <label>Participant 3</label>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="fees">Name</label>
                                <div class="col-md-2">
                                    <input class="form-control" id="name3" type="text" name="name3"
                                           value="{{ $team->Participant['2']->name }}">
                                </div>
                                <label class="col-md-2 col-form-label" for="fees">Email</label>
                                <div class="col-md-2">
                                    <input class="form-control" id="email3" type="text" name="email3"
                                           value="{{ $team->Participant['2']->email }}">
                                </div>
                                <label class="col-md-2 col-form-label" for="fees">Mobile Number</label>
                                <div class="col-md-2">
                                    <input class="form-control" id="mobile_no3" type="text" name="mobile_no3"
                                           value="{{ $team->Participant['2']->mobile_no }}">
                                </div>
                                <label class="col-md-2 col-form-label" for="fees">College</label>
                                <div class="col-md-2">
                                    <input class="form-control" id="college3" type="text" name="college3"
                                           value="{{ $team->Participant['2']->college }}">
                                </div>
                                <label class="col-md-2 col-form-label" for="fees">Department</label>
                                <div class="col-md-2">
                                    <input class="form-control" id="department3" type="text" name="department3"
                                           value="{{ $team->Participant['2']->department }}">
                                </div>
                                <label class="col-md-2 col-form-label" for="fees">Github</label>
                                <div class="col-md-2">
                                    <input class="form-control" id="github3" type="fees" name="github3"
                                           value="{{ $team->Participant['2']->github }}">
                                </div>
                                <input type="hidden" value="{{ $team->Participant['2']->id }}" name="p2_id">

                            </div>
                        @endif
                        @if($no_of_member == 4)

                            <label>Participant 4</label>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="fees">Name</label>
                                <div class="col-md-2">
                                    <input class="form-control" id="name4" type="text" name="name4"
                                           value="{{ $team->Participant['3']->name }}">
                                </div>
                                <label class="col-md-2 col-form-label" for="fees">Email</label>
                                <div class="col-md-2">
                                    <input class="form-control" id="email4" type="text" name="email4"
                                           value="{{ $team->Participant['3']->email }}">
                                </div>
                                <label class="col-md-2 col-form-label" for="fees">Mobile Number</label>
                                <div class="col-md-2">
                                    <input class="form-control" id="mobile_no4" type="text" name="mobile_no4"
                                           value="{{ $team->Participant['3']->mobile_no }}">
                                </div>
                                <label class="col-md-2 col-form-label" for="fees">College</label>
                                <div class="col-md-2">
                                    <input class="form-control" id="college4" type="text" name="college4"
                                           value="{{ $team->Participant['3']->college }}">
                                </div>
                                <label class="col-md-2 col-form-label" for="fees">Department</label>
                                <div class="col-md-2">
                                    <input class="form-control" id="department4" type="text" name="department4"
                                           value="{{ $team->Participant['3']->department }}">
                                </div>
                                <label class="col-md-2 col-form-label" for="fees">Github</label>
                                <div class="col-md-2">
                                    <input class="form-control" id="github4" type="fees" name="github4"
                                           value="{{ $team->Participant['3']->github }}">
                                </div>
                                <input type="hidden" value="{{ $team->Participant['3']->id }}" name="p3_id">

                            </div>
                        @endif
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
        $('#teamEditForm').validate({
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
@endsection