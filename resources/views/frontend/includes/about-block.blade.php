<?php
$posts = getLatestBlogs();
if ($posts->isNotEmpty()) {
?>
    <section class="home-section paddingtop-80">
        <div class="container">
            <div class="row">
                <div class="section-heading text-center w-100">
                    <h2 class="h-bold">
                        Latest Blog
                    </h2>
                    <hr>
                </div>
            </div>
            <div class="row pt-3 pb-5">
                <?php
                foreach ($posts as $item) {
                    $url = route("frontend.posts.show", [$item->slug]);
                ?>
                    <div class="col-xs-12 col-sm-12 col-md-4 blg-ctg-box">
                        <div class="blg-ctg-img">
                            <a href="<?= $url ?>" title="<?= $item->name ?>">
                                <img width="652" height="324" src="<?= $item->featured_image ?>" class="img-responsive wp-post-image" alt="<?= $item->alt ?>" loading="lazy" />
                            </a>
                        </div>
                        <div class="blg-ctg-cntnt">
                            <h2>
                                <a href="<?= $url ?>" title="<?= $item->name ?>">
                                    <?= $item->name ?>
                                </a>
                            </h2>
                            <div class="blg-cat-btm">
                                <a href="<?= url('/') . '/' . 'blog' ?>" class="author-avtr">
                                    <img alt='admin' src='<?= asset('img/default-avatar.jpg') ?>' class='avatar avatar-40 photo' height='40' width='40' loading='lazy' />
                                </a>
                                <a href="<?= url('/') . '/' . 'blog' ?>">
                                    <span>
                                        admin
                                    </span>
                                </a>
                                <br>
                                <span>
                                    <?= date('F', strtotime($item->published_at)) . " " . date('d', strtotime($item->published_at)) . "," . date('Y', strtotime($item->published_at)) ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>