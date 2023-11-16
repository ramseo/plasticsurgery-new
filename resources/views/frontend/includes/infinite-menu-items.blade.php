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
                @include("frontend.includes.infinite-menu-items",[])
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