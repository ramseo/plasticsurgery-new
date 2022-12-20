<?php
$latestBlogs = array();
$latestBlogs = getLatestBlogs();
// dd($latestBlogs);

?>

@if(count($latestBlogs) > 0)
<section id="latest-blogs-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 common-heading text-center with-lines">
                <p class="shadow-text">Blogs</p>
                <p class="head">Latest Blogs of {{$type->name}} on Wed.in</p>
            </div>
            <div class="col-xs-12 col-sm-12 row reviews-list-col">
                @foreach($latestBlogs as $post)
                <div class="col-xs-12 col-sm-6 d-flex">
                    <div class="blog-header">
                        <a href="<?= route("frontend.posts.show", [$post->slug]) ?>">
                            <img old-src="http://127.0.0.1:8000/storage/files/wedding-planner.jpg" src="<?= $post->featured_image ?>" class="img-responsive" alt="blog alt">
                        </a>
                    </div>
                    <div class="blog-body">
                        <div class="blog-title">
                            <a href="<?= route("frontend.posts.show", [$post->slug]) ?>">
                                <?= $post->name ?>
                            </a>
                        </div>
                        <div class="blog-desc">
                            <?= Str::words($post->intro, '7') ?>
                        </div>
                        <div class="blog-by">
                            By <span><?= $post->author ?></span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif