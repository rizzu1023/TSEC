@extends('Admin.layouts.base')

@section('header-icon')
   @include('Admin.layouts.eventTopbar')
@endsection

@section('content')
    <section id="eventIndex">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i>Events
                        <a class="btn btn-sm btn-primary" href="/admin/event/create" style="float: right">Add Event</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Event Name</th>
                                <th>category</th>
                                <th>Venue</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($events as $event)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $event->name }}</td>
                                    <td>{{ $event->category }}</td>
                                    <td>{{ $event->venue }}</td>
                                    <td>
                                        {{-- <a class="btn btn-sm btn-square btn-primary" href="/admin/event/{{$event->id}}">Detail</a> --}}
{{--                                        <a class="btn btn-sm btn-square btn-warning"--}}
{{--                                           href="/admin/event/{{$event->id}}/edit">Edit</a>--}}
                                        <form method="post" action="/admin/event/{{ $event->id }}"
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
