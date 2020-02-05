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
                        <i class="fa fa-align-justify"></i>Teams
                        <a class="btn btn-sm btn-primary" href="/admin/team/create" style="float: right">Add Team</a>
                        <div class="col-md-3" style="display: inline-block; float: right">
                            <form method="post" action="/admin/team/filter" onchange="submit()">
                                @csrf
                            <select class="form-control" id="event" name="event_id">
                                <option selected disabled>ALL</option>

                            </select>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Year</th>
                                <th>Department</th>
                                <th>Shift</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teams as $team)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $team->year }}</td>
                                    <td>{{ $team->department }}</td>
                                    <td>{{ $team->shift }}</td>
                                    <td>
                                        {{-- <a class="btn btn-sm btn-square btn-primary" href="/admin/team/{{ $team->id }}">Detail</a> --}}
{{--                                        <a class="btn btn-sm btn-square btn-warning"--}}
{{--                                           href="/admin/team/{{ $team->id }}/edit">Edit</a>--}}
                                        <form method="post" action="/admin/team/{{$team->id}}"
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

                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
    </section>
@endsection
