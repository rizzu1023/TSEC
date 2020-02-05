<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="{{ asset('Admin/image/PClogo.png') }}" width="65" height="35" alt="Admin">
        <img class="navbar-brand-minimized" src="img/brand/sygnet.svg" width="30" height="30" alt="Admin">
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav d-md-down-none">

        @yield('header-icon')


    </ul>
    <ul class="nav navbar-nav ml-auto">

        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img class="img-avatar" src="{{ asset('Admin/image/profile.png') }}" alt="profile">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    @auth
                        <strong>{{ Auth::User()->name }}</strong>
                    @endauth
                </div>
                <a class="dropdown-item" href="#">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn-sm btn btn-danger">Logout</button>
                    </form>
                </a>
            </div>
        </li>
    </ul>
    <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>

</header>
