@php
    $weddingStories = getDataArray('posts', 'is_featured', 1);
@endphp
@if(isset($weddingStories) && count($weddingStories))
    <section id="wedding-stries">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 common-heading text-center with-lines">
                    <p class="shadow-text">Stories</p>
                    <p class="head">Real Wedding Stories</p>
                </div>
                <div class="col-xs-12 col-sm-12 card-listing-col">
                    <div id="storySlider" class="owl-carousel owl-theme common-slider">
                        @foreach ($weddingStories as $weddingStory)
                            @php
                                $details_url = route("frontend.posts.show",[encode_id($weddingStory->id), $weddingStory->slug]);
                            @endphp
                            <div>
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
    $(document).ready(function () {
        $('#storySlider').owlCarousel({
            loop: false,
            margin: 20,
            nav: true,
            items: 3,
            dots: false,
            autoplay: 3000,
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