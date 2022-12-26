@php
$weddingStories = getDataArray('posts', 'is_featured', 1);
@endphp
@if(isset($weddingStories) && count($weddingStories))
<section id="wedding-stries">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 common-heading text-center with-lines" data-aos="zoom-in">
                <p class="shadow-text">Stories</p>
                <p class="head">Real Wedding Stories</p>
            </div>
            <div class="col-xs-12 col-sm-12 card-listing-col">
                <div id="storySlider" class="owl-carousel owl-theme common-slider">
                    @foreach ($weddingStories as $weddingStory)
                    @php
                    $details_url = route("frontend.posts.show",[$weddingStory->slug]);
                    @endphp
                    <div data-aos="zoom-in">
                        <div class="common-card">
                            <div class="img-col">
                                <a href="{{$details_url}}"><img src="{{$weddingStory->featured_image}}" class="img-fluid" alt=""></a>
                            </div>
                            <div class="text-col">
                                <p class="title">{{$weddingStory->name}}</p>
                                <p class="text">{{Str::words($weddingStory->intro, '15')}}</p>
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
        $('#storySlider').owlCarousel({
            items: 3,
            loop: <?= (count($weddingStories) > 3) ? true : false ?>,
            margin: 20,
            nav: true,
            dots: false,
            autoplay: 4000,
            responsive: {
                0: {
                    items: 1,
                    loop: <?= (count($weddingStories) > 1) ? true : false ?>,
                },
                767: {
                    items: 2,
                    loop: <?= (count($weddingStories) > 2) ? true : false ?>,
                },
                991: {
                    items: 3,
                    loop: <?= (count($weddingStories) > 3) ? true : false ?>,
                }
            }
        });
    })
</script>
@endpush