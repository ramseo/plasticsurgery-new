<div class="vendor-videos-col">
    <div class="album-header">
        <p><strong>Videos ({{count($vendor_videos)}})</strong></p>
    </div>
    <div class="videos-main-col">
        @foreach($vendor_videos as $vendor_video)
            <div class="videe-item">
                {!! $vendor_video->url !!}
            </div>
        @endforeach
    </div>
</div>
