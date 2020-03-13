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
                        <i class="fa fa-align-justify"></i>Offers
                        <a class="btn btn-sm btn-primary" href="/admin/cashier/create" style="float: right">Add Cashier</a>
                    </div>
                    <div class="car-body">
                        <table class="table table-responsive-sm table-hover table-outline mb-0">
                            <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Email</th>
{{--                                <th>Admin Permission</th>--}}
{{--                                <th>Judge Permission</th>--}}
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cashiers as $cashier)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        <div>{{ $cashier->name }}</div>
                                        <div class="small text-muted">
                                            {{--                            <span>New</span> | Registered: Jan 1, 2015--}}
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            {{ $cashier->email }}
                                        </div>
                                    </td>

{{--                                    <td>--}}
{{--                                        <form action="/admin/register/isadmin" method="post"--}}
{{--                                              onchange="submit()">--}}
{{--                                            @csrf--}}
{{--                                            @if($user->isAdmin == '1')--}}
{{--                                                <div class="">--}}
{{--                                                    <label--}}
{{--                                                        class="switch switch-label switch-pill switch-outline-success-alt">--}}
{{--                                                        <input class="switch-input" type="checkbox" name="status"--}}
{{--                                                               checked>--}}
{{--                                                        <span class="switch-slider" data-checked="&#x2713;"--}}
{{--                                                              data-unchecked="&#x2715;"></span>--}}
{{--                                                    </label>--}}
{{--                                                    --}}{{--                                    <span class="badge badge-success">Active</span>--}}
{{--                                                </div>--}}
{{--                                            @else--}}
{{--                                                <div class="">--}}
{{--                                                    <label--}}
{{--                                                        class="switch switch-label switch-pill switch-outline-success-alt">--}}
{{--                                                        <input class="switch-input" type="checkbox" name="status">--}}
{{--                                                        <span class="switch-slider" data-checked="&#x2713;"--}}
{{--                                                              data-unchecked="&#x2715;"></span>--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                            @endif--}}
{{--                                            <input type="hidden" name="user_id" value="{{$user->id}}"/>--}}

{{--                                        </form>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <form action="/admin/register/isjudge" method="post"--}}
{{--                                              onchange="submit()">--}}
{{--                                            @csrf--}}
{{--                                            @if($user->isAdmin == '3')--}}
{{--                                                <div class="">--}}
{{--                                                    <label--}}
{{--                                                        class="switch switch-label switch-pill switch-outline-success-alt">--}}
{{--                                                        <input class="switch-input" type="checkbox" name="judge"--}}
{{--                                                               checked>--}}
{{--                                                        <span class="switch-slider" data-checked="&#x2713;"--}}
{{--                                                              data-unchecked="&#x2715;"></span>--}}
{{--                                                    </label>--}}
{{--                                                    --}}{{--                                    <span class="badge badge-success">Active</span>--}}
{{--                                                </div>--}}
{{--                                            @else--}}
{{--                                                <div class="">--}}
{{--                                                    <label--}}
{{--                                                        class="switch switch-label switch-pill switch-outline-success-alt">--}}
{{--                                                        <input class="switch-input" type="checkbox" name="judge">--}}
{{--                                                        <span class="switch-slider" data-checked="&#x2713;"--}}
{{--                                                              data-unchecked="&#x2715;"></span>--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                            @endif--}}
{{--                                            <input type="hidden" name="user_id" value="{{$user->id}}"/>--}}

{{--                                        </form>--}}
{{--                                    </td>--}}
                                    <td>
                                        <form method="post" action="/admin/cashier/{{ $cashier->id }}">
                                            @csrf
                                            @method('DELETE')
{{--                                            <input type="hidden" name="cashier_id" value="{{$cashier->id}}"/>--}}
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this user?');" class="btn btn-danger btn-sm" >Delete</button>
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
