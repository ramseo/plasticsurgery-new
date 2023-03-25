<?php
$categories = getDataArray('types');
$city = getData('cities');
?>


<header id="header">
    <!-- code -->
    <div class="xg">
        <div class="bar">
            <a href="mailto:info@cosmeticsurgery.in"><i class="fa fa-envelope-o" aria-hidden="true"></i> Mail us</a>
            <a href="book-an-appointment"><i class="fa fa-calendar" aria-hidden="true"></i> Appointment</a>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg desk kc" style="background-color:#1877F2;">
        <div class="container">
            <ul class="navbar-nav soc">
                <li class="nav-item">
                    <a target="_blank" class="nav-link text-white" href="https://www.facebook.com/CosmeticSurgery.in">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a target="_blank" class="nav-link text-white" href="https://twitter.com/CosmeticSurgIN">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a target="_blank" class="nav-link text-white" href="https://www.linkedin.com/company/cosmeticsurgeryindia/">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a target="_blank" class="nav-link text-white" href="https://www.instagram.com/cosmeticsurgery.in/">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a target="_blank" class="nav-link text-white" href="https://api.whatsapp.com/send?phone=919888550489&text=Hello-CosmeticSurgery.in-Team">
                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="mailto:info@cosmeticsurgery.in"><i class="fa fa-envelope" aria-hidden="true"></i>
                        info@cosmeticsurgery.in |
                    </a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn mt-1 kl btn-sm" style="background-color:#2abfb7">
                        <a href="<?= url('book-an-appointment') ?>" style="color:#fff">
                            Book an Appointment
                        </a>
                    </button>
                </li>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg nv">
        <div class="container">
            <a class="navbar-brand" href="<?= url('/') ?>">
                <img src="<?= asset('img/logo-cosmeticsurgery.png') ?>" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <!-- code -->
                    <?php
                    $header_menu = dynamic_menu('menutype', 'url', 'header');
                    if ($header_menu) {
                        foreach ($header_menu as $item) {
                            $child_item = dynamicMenuChildItem($item->id);
                    ?>
                            <li class="nav-item <?= ($child_item) ? "dropdown" : "" ?>">
                                <a class="nav-link <?= ($child_item) ? "dropdown-toggle" : "" ?> " href="<?= ($child_item) ? "#" : $item->url ?>" <?= ($child_item) ? 'role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : '' ?>>
                                    <?= $item->title ?>
                                </a>
                                <?php if ($child_item) { ?>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php foreach ($child_item as $c_item) { ?>
                                            <a class="dropdown-item" href="<?= $c_item['url'] ?>">
                                                <?= $c_item['title'] ?>
                                            </a>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            </li>
                    <?php
                        }
                    }
                    ?>
                    <!-- code -->
                    @auth
                    @if(auth()->user()->getRoleNames()->first() == 'super admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('backend.dashboard') }}">
                            Dashboard
                        </a>
                    </li>
                    @endif
                    @if(auth()->user()->getRoleNames()->first() == 'vendor')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('vendor.dashboard') }}">
                            Dashboard
                        </a>
                    </li>
                    @endif
                    @if(auth()->user()->getRoleNames()->first() == 'user')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.users.profileEdit') }}">
                            My Profile
                        </a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('account-logout-form').submit();">
                            Logout
                        </a>
                    </li>
                    <form id="account-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            Login
                        </a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- code -->
    <!-- <div class="container-fluid">
        <div class="row header-main-col">
            <div class="col-xs-6 col-sm-3 header-logo-col">
                <a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt="" class="img-fluid"></a>
            </div>
            <div class="col-xs-6 col-sm-9 d-flex header-menu-col">
                <span id="menuOpener" style="display: none;"><i class="fa fa-bars"></i></span>
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

                        <li>
                            <a href="{{ route('login') }}">
                                Login
                            </a>
                        </li>
                    </div>

                    @foreach($header_menu as $menu_item)
                    <?php
                    $getChildItem = dynamicMenuChildItem($menu_item->id);

                    if (request()->segment(1) == $menu_item->url) {
                        $active_desk_cls = "active";
                    } else {
                        $active_desk_cls = "";
                    }
                    ?>
                    <li class="bg-screen">
                        <a class="<?= $active_desk_cls ?>  is-parent-menu-exists" href="<?= url('/') . '/' . $menu_item->url ?>">
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
                    @endauth
                    <span id="menuCloser" style="display: none;"><i class="fa fa-times"></i></span>
                </ul>
                @endif
            </div>
        </div>
    </div> -->
</header>