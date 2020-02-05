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
                        <i class="fa fa-align-justify"></i>Players
                        <a class="btn btn-sm btn-primary" href="/admin/player/create" style="float: right">Add Player</a>

                    </div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Player Name</th>
                                <th>Mobile_no</th>
                                <th>Team </th>
                                <th>Event</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($players as $player)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $player->name }}</td>
                                    <td>{{ $player->mobile_no }}</td>
                                    <td>{{ $player->Team->year }}-{{ $player->Team->department }}</td>
                                    <td>{{ $player->Event->name }}</td>
                                    <td>
{{--                                        <a class="btn btn-sm btn-square btn-primary" href="/admin/player/{{ $player->id }}">Detail</a>--}}
{{--                                        <a class="btn btn-sm btn-square btn-warning"--}}
{{--                                           href="/admin/player/{{ $player->id }}/edit">Edit</a>--}}
                                        <form method="post" action="/admin/player/{{$player->id}}"
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
