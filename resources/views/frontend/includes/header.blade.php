@php
    $categories = getDataArray('types');
    $city = getData('cities');
@endphp
<header id="header">
    <div class="container-fluid">
        <div class="row header-main-col">
            <div class="col-xs-6 col-sm-3 header-logo-col">
                <span id="menuOpener" style="display: none;"><i class="fa fa-bars"></i></span>
                <a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt="" class="img-fluid"></a>
            </div>
            <div class="col-xs-6 col-sm-9 d-flex header-menu-col">
                @php
                    $header_menu = getDataArray('menus','menu', 'header');
                @endphp
                @if($header_menu)
                    <ul class="list-inline d-flex site-menu site-main-menu">
                        @foreach($header_menu as $menu_item)
                            <li><a href="{{$menu_item->url}}">{{$menu_item->title}}</a></li>
                        @endforeach
                        <!-- <li><a href="{{url('listing')}}">Vendors</a></li>
                        <li><a href="{{url('detail')}}">Bride</a></li>
                        <li><a href="#">Groom</a></li>
                        <li><a href="{{ route('frontend.posts.index') }}">Blog</a></li> -->
                        <li>
                            <div class="dropdown menuDropDown">
                                <button class="dropbtn menuDropBtn">Vendors <i class="fa fa-chevron-down"></i></button>
                                <div class="dropdown-content">
                                    <div class="inner">
                                        @if($categories)
                                            @foreach($categories as $header_type)
                                                <a href="{{url('/') . '/' . $header_type->slug . '/' . $city->slug}}"><img src="{{asset('storage/type/icon/'.$header_type->icon)}}" alt="">{{$header_type->name}}</a>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="inner-footer">
                                        <p class="text-right">Are you a vendor? <a class="btn btn-primary" href="{{ route('register-vendor') }}">Register Now</a></p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <span id="menuCloser" style="display: none;"><i class="fa fa-times"></i></span>
                    </ul>
                @endif
                <ul class="list-inline d-flex site-menu user-menu">
                    <li>
                        <a href="#"><img src="images/search.png" alt=""> Search</a>
                    </li>
                    <!-- <li>
                        <a href="#"><img src="images/login.png" alt=""> Log in</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" aria-expanded="false" data-toggle="dropdown">
                            <img src="images/login.png" alt="">
                            Account
                            <i class="fas fa-angle-down nav-link-arrow"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg">
                            <div class="col-auto px-0" data-dropdown-content>
                                <div class="list-group list-group-flush">
                                    @auth
                                        @can('view_backend')
                                            <a href="{{ route('backend.dashboard') }}"
                                               class="list-group-item list-group-item-action">
                                                <span class="icon icon-sm icon-success"><i class="fas fa-user"></i></span>
                                                <div class="">
                                                    <span class="text-dark d-block">Dashboard</span>
                                                </div>
                                            </a>
                                        @endcan

                                        <a href="{{ route('frontend.users.profileEdit', auth()->user()->id) }}"
                                           class="list-group-item list-group-item-action">
                                            <span class="icon icon-sm icon-success"><i class="fas fa-user"></i></span>
                                            <div class="">
                                            <span class="text-dark d-block">
                                                {{ Auth::user()->name }}
                                            </span>
                                                <span class="small">View profile details!</span>
                                            </div>
                                        </a>
                                        <a href="{{ route('logout') }}"
                                           class="list-group-item list-group-item-action" onclick="event.preventDefault(); document.getElementById('account-logout-form').submit();">
                                        <span class="icon icon-sm icon-secondary">
                                            <i class="fas fa-sign-out-alt"></i>
                                        </span>
                                            <div class="">
                                                <span class="text-dark d-block">
                                                    Logout
                                                </span>
                                            </div>
                                        </a>
                                        <form id="account-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    @else
                                        <a href="{{ route('login') }}"
                                           class="list-group-item list-group-item-action">
                                            <span class="icon icon-sm icon-secondary"><i class="fas fa-key"></i></span>
                                            <div class="">
                                                <span class="text-dark d-block">
                                                    Login
                                                </span>
                                            </div>
                                        </a>
                                        @if(user_registration())
                                            <a href="{{ route('register') }}"
                                               class="list-group-item list-group-item-action">
                                        <span class="icon icon-sm icon-primary">
                                            <i class="fas fa-address-card"></i>
                                        </span>
                                                <div class="">
                                                    <span class="text-dark d-block">Register</span>
                                                </div>
                                            </a>
                                        @endif
                                        <a href="{{ route('register-vendor') }}"
                                           class="list-group-item list-group-item-action">
                                        <span class="icon icon-sm icon-primary">
                                            <i class="fas fa-address-card"></i>
                                        </span>
                                            <div class="">
                                                <span class="text-dark d-block">Register as Vendor</span>
                                            </div>
                                        </a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
