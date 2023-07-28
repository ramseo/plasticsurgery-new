<?php
$categories = getDataArray('types');
$city = getData('cities');
?>

<header id="header">
    <div class="xg">
        <div class="bar">
            <a href="mailto:<?= Setting('email') ?>">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                Mail us
            </a>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg desk kc" style="background-color:#F88379;">
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
                    <a class="nav-link text-white" href="mailto:<?= Setting('email') ?>">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <?= Setting('email') ?>
                    </a>
                </li>
                <li class="verticle-line-cls">|</li>
                <li class="nav-item">
                    <button type="button" class="btn mt-1 kl btn-sm">
                        <a href="<?= url('/') . '/' ?>book-an-appointment" style="color:#fff">
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
            <button class="navbar-toggler padd-null" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i id="fa-bars" class="fa fa-bars" aria-hidden="true"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto" id="desktop-header-menu">
                    <?php
                    $header_menu = dynamic_menu('menutype', 'url', 'header');
                    if ($header_menu) {
                        foreach ($header_menu as $item) {
                            $child_item = dynamicMenuChildItem($item->id);
                    ?>
                            <li class="nav-item <?= ($child_item) ? "dropdown" : "" ?>">
                                <a class="nav-link <?= ($item->title == "Home") ? "home-item-active-cls" : "" ?>  <?= ($child_item) ? "dropdown-toggle" : "" ?> " href="<?= ($child_item) ? "#" : url("/") . "/" . $item->url ?>" <?= ($child_item) ? 'role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : '' ?>>
                                    <?= $item->title ?>
                                </a>
                                <?php if ($child_item) { ?>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php foreach ($child_item as $c_item) { ?>
                                            <a class="dropdown-item" href="<?= url("/") . "/" . $c_item['url'] ?>">
                                                <?= $c_item['title'] ?>
                                            </a>
                                        <?php } ?>
                                        <?php if ($item->title == "Clinics") { ?>
                                            <a class="dropdown-item" href="<?= url("/") . "/clinics" ?>">
                                                View All Clinics
                                            </a>
                                        <?php } elseif ($item->title == "Face" || $item->title == "Breast" || $item->title == "Body") { ?>
                                            <a class="dropdown-item" href="<?= url("/") . "/procedures" ?>">
                                                View All Procedures
                                            </a>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            </li>
                    <?php
                        }
                    }
                    ?>
                    @auth
                    @if(auth()->user()->getRoleNames()->first() == 'super admin')
                    <li class="nav-item">
                        <a target="_blank" class="nav-link" href="{{ route('backend.dashboard') }}">
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
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('account-logout-form').submit();">
                            Logout
                        </a>
                    </li>
                    <form id="account-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form> -->
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
</header>
<div style="clear:both"></div>