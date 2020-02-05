<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="logo navbar-brand" href="index.html"> <img style="height:30px;max-width:100%;"
                                                                         src="{{asset('Main/img/logo.svg')}}" alt="logo"> </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Shop
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                    <a class="dropdown-item" href="/product/electronics">Electronics</a>
                                    <a class="dropdown-item" href="/product/fashion">Fashion</a>
                                    <a class="dropdown-item" href="/product/sports">Sports</a>
                                    <a class="dropdown-item" href="/product/furniture">Furnitures</a>
                                    <a class="dropdown-item" href="/product/books">Books</a>

                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="category.html">Recommends</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact us</a>
                            </li>

                            @auth
                            @else
                                <li class="nav-item">
                                    <a class="btn-sm vendorbtn" href="/login/show">Register Now</a>
                                </li>
                            @endauth
                        </ul>
                    </div>

                    <div class="hearer_icon d-flex">
                        <a style="padding-top: 10px;" id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>

                        <a style="padding-top: 10px;" href="/cart"><i class="fa fa-cart-plus"></i></a>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                               role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @auth
                                    <i style="padding-top: 5px;" class="fas fa-user-circle"> {{auth()->user()->name}}</i>
                                @else
                                    <i style="padding-top: 5px;" class="fas fa-user-circle"></i>
                                @endauth
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                <a class="dropdown-item" href="/account"> Account Info</a>
                                <a class="dropdown-item" href="/order">Orders</a>
                                <a class="dropdown-item" href="checkout.html">Your Recommendation</a>
                                <a class="dropdown-item" href="/cart">Shopping Cart</a>
                                <a class="dropdown-item" href="/confirmation">confirmation</a>
                                @auth
                                    <a class="dropdown-item">
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button type="submit" style="color:white" class="btn-sm btn">Logout</button>
                                        </form>
                                    </a>
                                @else
                                    <a class="dropdown-item" href="/login/show">Login</a>
                                @endauth
                            </div>

                        </li>


                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container ">
            <form class="d-flex justify-content-between search-inner">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>


    @if(session()->has('message'))
    <div class="search_input" id="search_input_box">
        <div class="container ">
            <form class="d-flex justify-content-between search-inner">
                <p>{{ session()->get('message') }}</p>
                <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
    @endif
</header>
