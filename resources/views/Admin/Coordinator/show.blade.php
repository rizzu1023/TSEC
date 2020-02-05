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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i>{{ $team['team_name']}} ({{ $team['team_state']}})
                        <span style="float: right">{{ $team->Event->title }}</span>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Gmail</th>
                                <th>Mobile</th>
                                <th>College</th>
                                <th>Dept</th>
                                <th>Github</th>

                            </tr>
                            </thead>
                            <tbody>
                                @foreach($team->Participant as $p)
                            <tr>
                                    <td>1</td>
                                    <td>{{$p->name}}</td>
                                    <td>{{ $p->email }}</td>
                                    <td>{{ $p->mobile_no }}</td>
                                    <td>{{ $p->college }}</td>
                                    <td>{{ $p->department }}</td>
                                    <td>{{ $p->github }}</td>
                            </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{--                        <ul class="pagination">--}}
                        {{--                            <li class="page-item">--}}
                        {{--                                <a class="page-link" href="#">Prev</a>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="page-item active">--}}
                        {{--                                <a class="page-link" href="#">1</a>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="page-item">--}}
                        {{--                                <a class="page-link" href="#">2</a>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="page-item">--}}
                        {{--                                <a class="page-link" href="#">3</a>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="page-item">--}}
                        {{--                                <a class="page-link" href="#">4</a>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="page-item">--}}
                        {{--                                <a class="page-link" href="#">Next</a>--}}
                        {{--                            </li>--}}
                        {{--                        </ul>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
