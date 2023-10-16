@extends('frontend.layouts.app')

@section('title') {{$$module_name_singular->meta_title}} @endsection

@section('site-meta-tags')
<meta name="description" content="{{ $$module_name_singular->meta_description ? $$module_name_singular->meta_description : setting('meta_keyword') }}">
@endsection


@section('content')

<div class="header-space"></div>
<div class="cit">
    <div class="container">
        <p>
            <?= $$module_name_singular->name ?>
        </p>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <h3 class="text-capitalize">
            Author Archives: <?= $slug ?>
        </h3>

        <section class="home-section paddingtop-80">
            <div class="row">
                <?php
                foreach ($posts as $item) {
                    $url = route("frontend.posts.show", [$item->slug]);
                    $author_url = str_replace(' ', '-', strtolower($item->author));

                    $author_img = asset("img/default-avatar.jpg");
                    if ($item->author != "Super Admin") {
                        $get_author_img = get_author_img($item->created_by);
                        if (file_exists(public_path() . '/storage/user/profile/' . $get_author_img->avatar)) {
                            $author_img = asset('storage/user/profile/' . $get_author_img->avatar);
                        }
                    }

                ?>
                    <div class="col-xs-12 col-sm-4 blg-ctg-box">
                        <div class="blg-ctg-img">
                            <a href="<?= $url ?>" title="<?= $item->name ?>">
                                <img width="652" height="324" src="<?= $item->featured_image ?>" class="img-responsive wp-post-image" alt="<?= $item->alt ?>" loading="lazy" />
                            </a>
                        </div>
                        <div class="blg-ctg-cntnt">
                            <h2>
                                <a href="<?= $url ?>" title="<?= $item->name ?>">
                                    <?= substr($item->name, 0, 70) ?>
                                </a>
                            </h2>
                            <div class="blg-cat-btm">
                                <a href="<?= url('/') . '/' . 'blog/author/' . $author_url ?>" class="author-avtr">
                                    <img alt='<?= $item->author ?>' src='<?= $author_img ?>' class='avatar avatar-40 photo' height='40' width='40' loading='lazy' />
                                </a>
                                <div>
                                    <span>
                                        <a class="color-black" href="<?= url('/') . '/' . 'blog/author/' . $author_url ?>">
                                            <?= ($author_url == "super-admin") ? $item->author : "Dr." . " " . substr($item->author, 0, 10) ?>
                                        </a>
                                    </span>
                                    <span>
                                        <?= date('F', strtotime($item->published_at)) . " " . date('d', strtotime($item->published_at)) . "," . date('Y', strtotime($item->published_at)) ?>
                                    </span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="blog-read-more">
                                <a href="<?= $url ?>">
                                    <button class="btn find-a-procedure">
                                        read more
                                    </button>
                                </a>
                            </div>

                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="inner text-center">
                <div class="d-flex justify-content-center w-100 mt-3">
                    <?= $posts->links() ?>
                </div>
            </div>
        </section>

    </div>
</div>

<div class="spacer">
    @include('cms::frontend.pages.footer-email')
</div>

@endsection

@push ("after-scripts")

@endpush