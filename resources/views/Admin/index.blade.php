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
                    <div class="card-body">Participants</div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-danger">
                    <div class="text-value card-header">150+</div>
                    <div class="card-body">Teams</div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-success">
                    <div class="text-value card-header">5+</div>
                    <div class="card-body">Events</div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-warning">
                    <div class="text-value card-header">50+</div>
                    <div class="card-body">Members</div>
                </div>
            </div>
        </div>


        <table class="table table-responsive-sm table-hover table-outline mb-0">
            <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Email</th>
                <th>Active</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        <div>name</div>
                        <div class="small text-muted">
                            {{--                            <span>New</span> | Registered: Jan 1, 2015--}}
                        </div>
                    </td>
                    <td>
                        <div>
                         email
                        </div>
                    </td>

                    <td>
                                <div class="badge badge-success">Online</div>
                    </td>
                </tr>

            </tbody>
        </table>


    </section>
@endsection
