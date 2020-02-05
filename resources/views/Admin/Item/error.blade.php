@extends('Admin.layouts.base')

@section('header-icon')
    @include('Admin.layouts.eventTopbar')
@endsection

@section('content')
    <section id="eventIndex">
        <div class="row">
            <div class="col-md-12">
                    <h3>You are not a vendor!</h3>
            </div>

        </div>
    </section>

@endsection

{{-- @section('js')
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

@endsection --}}
