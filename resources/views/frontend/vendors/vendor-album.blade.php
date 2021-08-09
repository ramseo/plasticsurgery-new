<div class="photo-album-col">
    <div class="album-header">
        <p><strong>Photo Albums ({{count($albums)}})</strong></p>
    </div>
    <ul class="nav nav-tabs">
        @php $count = 0; @endphp
        @foreach($albums as $albums_item)
            @php
                $count++;
                $album_images = getDataArray('images', 'album_id', $albums_item->id);
            @endphp
            <li class="nav-item">
                <a class="nav-link {{$count == 1 ? 'active' : ''}} grey-text" data-toggle="tab" href="#album_{{$albums_item->id}}">
                    <div class="tab-img-menu">
                        <img src="{{asset('/storage/album/'. $albums_item->id . '/' . $album_images[0]->name)}}" alt="" class="img-fluid">
                        <span class="active-arrow"><i class="fas fa-caret-down"></i></span>
                    </div>
                    {{$albums_item->name}}
                </a>
            </li>
        @endforeach
    </ul>
    <div class="tab-content">
        @php $count = 0; @endphp
        @foreach($albums as $albums_item)
            @php
                $count++;
                $album_images = getDataArray('images', 'album_id', $albums_item->id);
            @endphp
            <div class="tab-pane container {{$count == 1 ? 'active' : ''}}" id="album_{{$albums_item->id}}">
                <div class="containerCollage">
                    @if(count($album_images) > 0)
                        @foreach($album_images as $album_image)
                            @php
                                $image_path = '';
                                if($album_image->name){
                                    if(file_exists(public_path().'/storage/album/'. $albums_item->id . '/' . $album_image->name)){
                                        $image_path = asset('/storage/album/'. $albums_item->id . '/' . $album_image->name);
                                    }
                                }
                            @endphp
                            @if($image_path != '')
                                <div class="item">
                                    <img src="{{$image_path}}" width="320" height="200" alt="" class="img-fluid">
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>