@php
$latestBlogs = getLatestBlogs();
@endphp
@if(isset($latestBlogs) && count($latestBlogs))
<section id="latest-blogs">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 common-heading text-center with-lines" data-aos="slide-down">
                <p class="shadow-text">Latest Blogs</p>
                <p class="head">Latest Blogs</p>
            </div>
            <div class="col-xs-12 col-sm-12 card-listing-col">
                <div id="blogsSlider" class="owl-carousel owl-theme common-slider">
                    @php
                    $count = 0;
                    @endphp
                    @foreach ($latestBlogs as $latestBlog)
                    @php
                    $count++;

                    if($count == 1){
                    $aos_animate = "data-aos='fade-right'";
                    }elseif($count == 3){
                    $aos_animate = "data-aos='fade-left'";
                    }else{
                    $aos_animate = "data-aos='zoom-in'";
                    }

                    $details_url = route("frontend.posts.show",[$latestBlog->slug]);
                    @endphp
                    <div <?= $aos_animate ?>>
                        <div class="common-card">
                            <div class="img-col">
                                <a href="{{$details_url}}"><img src="{{$latestBlog->featured_image}}" class="img-fluid" alt=""></a>
                            </div>
                            <div class="text-col">
                                <p class="title">{{$latestBlog->name}}</p>
                                <p class="text">{{Str::words($latestBlog->intro, '15')}}</p>
                                <!-- <p class="date">09 June 2021</p> -->
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@push('after-scripts')
<script>
    $(document).ready(function() {
        $('#blogsSlider').owlCarousel({
            loop: false,
            margin: 20,
            nav: true,
            items: 3,
            dots: false,
            autoplay: 2000,
            responsive: {
                0: {
                    items: 1
                },
                767: {
                    items: 2
                },
                991: {
                    items: 3
                }
            }
        });
    })
</script>
@endpush