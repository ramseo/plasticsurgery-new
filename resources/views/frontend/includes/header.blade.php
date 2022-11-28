<?php
$categories = getDataArray('types');
$city = getData('cities');
?>


<header id="header">
    <div class="container-fluid">
        <div class="row header-main-col">
            <div class="col-xs-6 col-sm-3 header-logo-col">
                <span id="menuOpener" style="display: none;"><i class="fa fa-bars"></i></span>
                <a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt="" class="img-fluid"></a>
            </div>
            <div class="col-xs-6 col-sm-9 d-flex header-menu-col">
                @php
                $header_menu = dynamic_menu('menutype','url','header');
                @endphp
                @if($header_menu)
                <ul class="list-inline d-flex site-menu site-main-menu">
                    <li class="bg-screen">
                        <div class="dropdown menuDropDown">
                            <button class="dropbtn menuDropBtn">Vendors <i class="fa fa-chevron-down"></i></button>
                            <div class="dropdown-content">
                                <div class="inner">
                                    @if($categories)
                                    @foreach($categories as $header_type)

                                    @php
                                    $city = Session::get('vendor_city') != "" ? '/'. Session::get('vendor_city') : '';
                                    $bgImg = asset('storage/type/icon/'.$header_type->icon);
                                    if(request()->segment(1) == $header_type->slug){
                                    $active_cls = "active";
                                    }else{
                                    $active_cls = "";
                                    }

                                    @endphp
                                    <a class="<?= $active_cls ?>" href="{{ url('/') . '/' . $header_type->slug }}{{$city}}">
                                        <i style="background-image:url(<?= $bgImg ?>)" class="icon-{{$header_type->slug}}">
                                            {{$header_type->name}}
                                        </i>
                                    </a>
                                    @endforeach
                                    @endif
                                </div>
                                @if(!Auth::check())
                                <div class="inner-footer">
                                    <p class="text-right"><a class="btn btn-primary" href="{{ route('register-vendor') }}">Register as a Vendor</a></p>
                                </div>
                                @endif
                            </div>
                        </div>
                    </li>
                    <div class="mob-screen">
                        <li class="special-list"><a href="/vendors">Vendors</a></li>
                        @if($categories)
                        @foreach($categories as $header_type)
                        <li>
                            <img src="{{asset('storage/type/icon/'.$header_type->icon)}}">
                            <a href="{{url('/') . '/' . $header_type->slug}}">
                                {{$header_type->name}}
                            </a>
                        </li>
                        @endforeach
                        @endif
                        @if(!Auth::check())
                        <div class="inner-footer">
                            <p class="text-right">Are you a vendor? <a class="btn btn-primary" href="{{ route('register-vendor') }}"> Register as a Vendor</a></p>
                        </div>
                        @endif
                        <!-- mob header menu -->
                        @foreach($header_menu as $menu_item)
                        <?php
                        if (request()->segment(1) == $menu_item->url) {
                            $active_mob_cls = "active";
                        } else {
                            $active_mob_cls = "";
                        }

                        $getChildItem_mob = dynamicMenuChildItem($menu_item->id);
                        ?>
                        <li>
                            <a class="<?= $active_mob_cls ?>" href="{{url('/') . '/' .$menu_item->url}}">
                                {{$menu_item->title}}
                                <?php
                                if ($getChildItem_mob) {
                                    echo "<i class='fa fa-chevron-down'></i>";
                                }
                                ?>
                            </a>
                        </li>
                        <?php
                        if ($getChildItem_mob) {
                            $childHtml = "";
                            $childHtml .= "<ul class='menu-child-item-mob'>";
                            foreach ($getChildItem_mob as $childMob) {
                                if (request()->segment(1) == $childMob['url']) {
                                    $active_child_cls_mob = "active";
                                } else {
                                    $active_child_cls_mob = "";
                                }
                                $childHtml .= "<li>";
                                $childHtml .= "<a class='$active_child_cls_mob' href='" . url('/') . '/' . $childMob['url'] . "'>";
                                $childHtml .= $childMob['title'];
                                $childHtml .= "</a>";
                                $childHtml .= "</li>";
                            }
                            $childHtml .= "</ul>";
                            echo $childHtml;
                        }
                        ?>
                        @endforeach
                        <!-- mob header menu -->

                        <li>
                            <a href="{{ route('login') }}">
                                Login
                            </a>
                        </li>
                    </div>
                    <!-- header menu -->
                    @foreach($header_menu as $menu_item)
                    <?php
                    $getChildItem = dynamicMenuChildItem($menu_item->id);
                    $is_child_exists = 0;
                    if ($getChildItem) {
                        $is_child_exists = 1;
                    }

                    if (request()->segment(1) == $menu_item->url) {
                        $active_desk_cls = "active";
                    } else {
                        $active_desk_cls = "";
                    }
                    ?>
                    <li class="bg-screen">
                        <a class="<?= $active_desk_cls . " " . ($is_child_exists == 1) ? "is-parent-menu-exists" : "" ?>" href="{{url('/') . '/' .$menu_item->url}}">
                            {{$menu_item->title}}
                            <?php
                            if ($getChildItem) {
                                echo "<i class='fa fa-chevron-down'></i>";
                            }
                            ?>
                        </a>
                        <?php
                        if ($getChildItem) {
                            $childHtml = "";
                            $childHtml .= "<ul class='menu-child-item'>";
                            foreach ($getChildItem as $child) {
                                if (request()->segment(1) == $child['url']) {
                                    $active_child_cls = "active";
                                } else {
                                    $active_child_cls = "";
                                }
                                $childHtml .= "<li class='bg-screen'>";
                                $childHtml .= "<a class='$active_child_cls' href='" . url('/') . '/' . $child['url'] . "'>";
                                $childHtml .= $child['title'];
                                $childHtml .= "</a>";
                                $childHtml .= "<hr class='hr-cls'>";
                                $childHtml .= "</li>";
                            }
                            $childHtml .= "</ul>";
                            echo $childHtml;
                        }
                        ?>
                    </li>
                    @endforeach
                    <!-- header menu -->
                    @auth
                    @if(auth()->user()->getRoleNames()->first() == 'super admin')
                    <li>
                        <a href="{{ route('backend.dashboard') }}">
                            Dashboard
                        </a>
                    </li>
                    @endif
                    @if(auth()->user()->getRoleNames()->first() == 'vendor')
                    <li>
                        <a href="{{ route('vendor.dashboard') }}">
                            Dashboard
                        </a>
                    </li>
                    @endif

                    {{-- {{dd(auth()->user()->getRoleNames()->first())}}--}}
                    @if(auth()->user()->getRoleNames()->first() == 'user')
                    <li>
                        <a href="{{ route('frontend.users.profileEdit') }}">
                            My Profile
                        </a>
                    </li>
                    @endif
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('account-logout-form').submit();">
                            Logout
                        </a>
                    </li>
                    <form id="account-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @else
                    <li class="bg-screen">
                        <a href="{{ route('login') }}">
                            Login
                        </a>
                    </li>
                    <!--   @if(user_registration())
                                <li>
                                    <a href="{{ route('register') }}">
                                        Register
                                    </a>
                                </li>
                            @endif -->

                    @endauth
                    <span id="menuCloser" style="display: none;"><i class="fa fa-times"></i></span>
                </ul>
                @endif
                <!-- <ul class="list-inline d-flex site-menu user-menu">
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
                                        @if(auth()->user()->getRoleNames()->first() == 'super admin')
                                            <a href="{{ route('backend.dashboard') }}"
                                               class="list-group-item list-group-item-action">
                                                <span class="icon icon-sm icon-success"><i class="fas fa-user"></i></span>
                                                <div class="">
                                                    <span class="text-dark d-block">Dashboard</span>
                                                </div>
                                            </a>
                                        @endif
                                        @if(auth()->user()->getRoleNames()->first() == 'vendor')
                                            <a href="{{ route('vendor.dashboard') }}"
                                               class="list-group-item list-group-item-action">
                                                <span class="icon icon-sm icon-success"><i class="fas fa-user"></i></span>
                                                <div class="">
                                                    <span class="text-dark d-block">Dashboard</span>
                                                </div>
                                            </a>
                                        @endif
                                        @if(auth()->user()->getRoleNames()->first() == 'user')
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
                                        @endif
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

                                    @endauth
                                </div>
                            </div>
                        </div>
                    </li>
                </ul> -->
            </div>
        </div>
    </div>
</header>
<style>
    .mob-screen {
        display: none;
    }

    .footer-col a {
        display: flex;
        /*justify-content: center;*/
    }

    .card-body ol li {
        line-height: 37px !important;
    }



    .footer-col a {
        width: fit-content;
    }

    #newsletterForm {
        max-width: 341px;
    }

    .footer-col a {
        width: auto;
        margin-bottom: 7px;
    }


    #header {
        position: fixed;
        width: 100%;
        top: 0px;
        z-index: 999 !important;
    }

    .footer-col {
        border-bottom: 0px;
    }


    @media screen and (max-width: 767px) {
        .site-main-menu {
            background-color: #fff;
        }

        .d-flex {
            display: block !important;
        }

        .footer-col a {
            display: block;
        }

        .inner-footer {
            border-bottom: 1px solid #ebebeb;
        }

        .special-list a {
            font-size: 19px !important;
            font-weight: 600 !important;
        }



        .mob-screen li:hover {
            filter: invert(27%) sepia(51%) saturate(2878%) hue-rotate(346deg) brightness(104%) contrast(97%);
        }

        .mob-screen li {
            display: flex;
            align-items: center;
        }

        .mob-screen li img {
            height: 20px;
            width: 20px;
            object-fit: cover;
            margin-right: 4px;
        }

        .mob-screen {
            display: block;
            padding-top: 18px;
        }

        ul.list-inline.d-flex.site-menu.site-main-menu.active {
            height: 520px;
            overflow: hidden;
            overflow-y: scroll;
        }

        .bg-screen {
            display: none !important;
        }

        #header ul {
            padding-top: 36px;
        }

        #header li>a,
        #header li button {
            color: #212529;
            line-height: 52px;
        }

        #menuCloser {
            top: 20px;
        }

        .mob-screen>li {
            border-bottom: 1px solid #ebebeb;
        }

        #menuCloser {
            left: 15px;
            color: #212529 !important;
            border-bottom: 1px solid #ebebeb;
            padding-bottom: 13px;
        }

        #header li>a,
        #header li button {
            font-weight: 400;
        }

        .dropdown.menuDropDown {
            margin-bottom: -17px;
        }

        .vendor-card .img-col {
            height: auto;
        }

        .text-col .title {
            font-size: 15px;
        }

        .text-col {
            text-align: center;
        }

        .search-header {
            padding-left: 5px;
            padding-right: 5px;
        }


    }

    @media screen and (max-width: 320px) {
        .input-group.newsletter-group {
            min-width: 260px;
        }

    }
</style>