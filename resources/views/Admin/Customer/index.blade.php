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


            <h4 class="mt-5 mb-3">Customers</h4>

            <table class="table table-responsive-sm table-hover table-outline mb-0">
                <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>OTP</th>
                    <th>Verify</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $c)
                        <tr>
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                <div>{{$c->user_id}}</div>
                            </td>

                            <td>
                                <div>{{ $c->otp }}</div>
                            </td>
                            <td>
                                <button class="btn btn-success btn-sm">Verify</button>
                            </td>
                        </tr>
                @endforeach

                </tbody>
            </table>



    </section>
@endsection
