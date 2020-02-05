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
                        <i class="fa fa-align-justify"></i>Coordinators
                        <a class="btn btn-sm btn-primary" href="/admin/coordinator/create" style="float: right">Add Coordinator</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Number</th>
                                <th>Category</th>
                                <th>Event ID</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($coordinators as $coordinator)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $coordinator->name }}</td>
                                    <td>{{ $coordinator->number }}</td>
                                    <td>{{ $coordinator->Category }}</td>
                                    <td>{{ $coordinator->Event->name }}</td>
                                    <td>
{{--                                        <a class="btn btn-sm btn-square btn-primary" href="/admin/coordinator/{{ $team->id }}">Detail</a>--}}
{{--                                        <a class="btn btn-sm btn-square btn-warning"--}}
{{--                                           href="/admin/coordinator/{{ $coordinator->id }}/edit">Edit</a>--}}
                                        <form method="post" action="/admin/coordinator/{{$coordinator->id}}"
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
