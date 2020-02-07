@extends('Admin.layouts.base')

@section('header-icon')
    <li class="nav-item px-3">
        <a class="nav-link" href="/amdind">Dashboard</a>
    </li>
    <li class="nav-item px-3">
        <a class="nav-link" href="#">Users</a>
    </li>
@endsection

@section('content')
    <section id="dashboard">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary">
                    <div class="text-value card-header">1500+</div>
                    <div class="card-body">Customers</div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-danger">
                    <div class="text-value card-header">150+</div>
                    <div class="card-body">Vendors</div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-success">
                    <div class="text-value card-header">5+</div>
                    <div class="card-body">Items</div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-warning">
                    <div class="text-value card-header">50+</div>
                    <div class="card-body">Rating</div>
                </div>
            </div>
        </div>

        @if(Auth()->user()->isAdmin == '1')
            <h4 class="mt-5 mb-3">Request for Vendors</h4>

            <table class="table table-responsive-sm table-hover table-outline mb-0">
                <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Email</th>

                    <th>Document</th>
                </tr>
                </thead>
                <tbody>
                @foreach($vendors as $vendor)
                    @if($vendor->isVendor == '0')
                        <tr>
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                <div>{{$vendor->User->name}}</div>
                                <div class="small text-muted">
                                </div>
                            </td>
                            <td>
                                <div>
                                    {{ $vendor->User->email }}
                                </div>
                            </td>

                            <td>
                                <a href="/admin/vendor/{{$vendor->id}}" class="btn btn-md btn-primary">Show</a>
                            </td>
                        </tr>
                    @endif
                @endforeach

                </tbody>
            </table>


            <h4 class="mt-5 mb-3">Vendors</h4>

            <table class="table table-responsive-sm table-hover table-outline mb-0">
                <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Email</th>
                    <th>Remove</th>
                </tr>
                </thead>
                <tbody>
                @foreach($vendors as $vendor)
                    @if($vendor->isVendor == '1')
                        <tr>
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                <div>{{$vendor->User->name}}</div>
                                <div class="small text-muted">
                                </div>
                            </td>
                            <td>
                                <div>
                                    {{ $vendor->User->email }}
                                </div>
                            </td>
                            <td>
                                <form action="/admin/user/{{$vendor->id}}/vendor/remove" method="post"
                                      onchange="submit()">
                                    @csrf
                                    @if($vendor->isVendor)
                                        <div class="">
                                            <label class="switch switch-label switch-pill switch-outline-success-alt">
                                                <input class="switch-input" type="checkbox" name="status"
                                                       checked>
                                                <span class="switch-slider" data-checked="&#x2713;"
                                                      data-unchecked="&#x2715;"></span>
                                            </label>
                                        </div>
                                    @else
                                        <div class="">
                                            <label
                                                class="switch switch-label switch-pill switch-outline-success-alt">
                                                <input class="switch-input" type="checkbox" name="status">
                                                <span class="switch-slider" data-checked="&#x2713;"
                                                      data-unchecked="&#x2715;"></span>
                                            </label>
                                        </div>
                                    @endif
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach

                </tbody>
            </table>
        @endif


    </section>
@endsection
