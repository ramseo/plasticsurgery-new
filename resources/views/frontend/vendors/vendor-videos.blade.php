<div class="vendor-videos-col">
    <div class="album-header">
        <p><strong>Videos ({{count($vendor_videos)}})</strong></p>
    </div>
    <div class="videos-main-col">
        @foreach($vendor_videos as $vendor_video)
            <div class="videe-item">
                <iframe src="{{$vendor_video->url}}" frameborder="0"></iframe>
            </div>
        @endforeach
    </div>
</div>