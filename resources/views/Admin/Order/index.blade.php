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
                        <i class="fa fa-align-justify"></i>Sold History
{{--                        <a class="btn btn-sm btn-primary" href="/admin/item/create" style="float: right">Add Item</a>--}}
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Buyer Name</th>
                                <th>Email</th>
                                <th>Mobile No</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $order->product_name }}</td>
                                    <td>{{ $order->buyer_name }}</td>
                                    <td>{{ $order->email }}</td>
                                    <td>{{ $order->mobile_no }}</td>
                                    <td>{{ $order->price }}</td>

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
