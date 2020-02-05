@extends('Admin.layouts.base')

@section('header-icon')
    @include('Admin.layouts.eventTopbar')
@endsection


@section('content')
    <section id="teamIndex">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i>Schedule
                        <a class="btn btn-sm btn-primary" href="/admin/schedule/create" style="float: right">Add Schedele</a>

                    </div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Event</th>
                                <th>Team 1</th>
                                <th>Team 2</th>
                                <th>Status</th>
                                <th>Winner</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($schedules as $schedule)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $schedule->dates }}</td>
                                    <td>{{ $schedule->times }}</td>
                                    <td>{{ $schedule->Event->name }}</td>
                                    <td>{{ $schedule->Team1->year}}-{{ $schedule->Team1->department}}</td>
                                    <td>{{ $schedule->Team2->year}}-{{ $schedule->Team2->department}}</td>
                                    <td>{{ $schedule->status }}</td>
                                    <td>{{ $schedule->winner }}</td>
                                    <td>
                                        {{-- <a class="btn btn-sm btn-square btn-primary" href="/admin/schedule/{{ $schedule->id }}">Detail</a> --}}
                                        
                                        <form method="post" action="/admin/schedule/{{$schedule->id}}"
                                              style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-square btn-danger">Delete
                                            </button>
                                        </form>
                                    </td>
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
            <!-- /.col-->
        </div>
    </section>
@endsection
