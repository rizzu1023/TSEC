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
                        <i class="fa fa-align-justify"></i>Item
                        <a class="btn btn-sm btn-primary" href="/admin/item/create" style="float: right">Add Item</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Item Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Size</th>
                                <th>Color</th>
                                <th>Sub_Category</th>
                                <th>Model</th>
                                <th>Vendor_Id</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->image }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->category }}</td>
                                    <td>{{ $item->size }}</td>
                                    <td>{{ $item->color }}</td>
                                    <td>{{ $item->sub_category }}</td>
                                    <td>{{ $item->model }}</td>
                                    <td>{{ $item->vendor_id }}</td>
                                    <td>
                                        {{-- <a class="btn btn-sm btn-square btn-primary" href="/admin/event/{{$event->id}}">Detail</a> --}}
{{--                                        <a class="btn btn-sm btn-square btn-warning"--}}
{{--                                           href="/admin/event/{{$event->id}}/edit">Edit</a>--}}
                                        <form method="post" action="/admin/item/{{ $item->id }}"
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
