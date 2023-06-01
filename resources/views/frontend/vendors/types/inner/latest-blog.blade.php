<?php
$getBlogsByVendor = getBlogsByVendor($type->id);
?>

@if(count($getBlogsByVendor) > 0)
<section id="latest-blogs-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 common-heading text-center with-lines">
                <p class="shadow-text">Blogs</p>
                <p class="head">Latest Blogs of {{$type->name}} on <?= $_SERVER['SERVER_NAME'] ?></p>
            </div>
            <div class="col-xs-12 col-sm-12 row reviews-list-col">
                @foreach($getBlogsByVendor as $post)
                <div class="col-xs-12 col-sm-6 vendor-blog-item">
                    <div class="col-xs-12 d-flex vendor-blog-box-shadow">
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
                            <div class="blog-by">
                                By <span><?= $post->author ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif