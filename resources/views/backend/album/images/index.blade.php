@extends ('backend.layouts.app')

@section('title')  @endsection

@section('breadcrumbs')
    <x-backend-breadcrumbs>
        <x-backend-breadcrumb-item type="active" icon=''></x-backend-breadcrumb-item>
    </x-backend-breadcrumbs>
@endsection

@section('content')
<div class="card">
<div class="card-body">
        <div class="row">
            <div class="col-8">
                <h4 class="card-title mb-0">
                    <i class="c-icon cil-people"></i> Images <small class="text-muted">Data Images</small>
                </h4>
                <div class="small text-muted">
                    {{ Str::title('Images') }} Management Dashboard
                </div>
            </div>
            <div class="col-4">

                <div class="float-right">
                    <a href='{{ route("vendor.album.create")}}'
                       class='btn btn-success btn-sm'
                       data-toggle="tooltip"
                       title="{{__('Create')}}">
                        <i class="fas fa-plus-circle"></i>
                    </a>
                </div>
            </div>
        </div>
    <div class="row">
        {{ Form::open(array('url' => route("vendor.image.store"), 'files' => true,'id' => 'profileForm')) }}
        {{ Form::hidden('album_id', $album->id) }}
        <div class="col-8">
            <div class="form-group">
                {{ Form::label('image', 'Image') }}
                <div class="custom-file">
                    <input type="file" class="custom-file-input"  name="file[]" multiple>
                    <label class="custom-file-label">Choose file</label>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                {{ html()->submit($text = icon('fas fa-save')." Save")->class('btn btn-success') }}
            </div>
        </div>
        {{ Form::close() }}
    </div>
        <!--/.row-->

            <div class="grid">
                @foreach ($images as $image)
                    <div class="grid-item">
                        <img src="{{ $image->url }}" alt="image">
                    </div>
                @endforeach
                <div class="grid-item">
                    <img src="https://i.imgur.com/EpYbuG7.jpg" alt="image">
                </div>
                <div class="grid-item">
                    <img src="https://i.imgur.com/kXUHDn5.jpg" alt="image">
                </div>
                <div class="grid-item">
                    <img src="https://i.imgur.com/Qmz61wo.jpg" alt="image">
                </div>
                <div class="grid-item">
                    <img src="https://i.imgur.com/aPia86B.jpg" alt="image">
                </div>
                <div class="grid-item">
                    <img src="https://i.imgur.com/iQRKg2a.jpg" alt="image">
                </div>
                <div class="grid-item">
                    <img src="https://i.imgur.com/XREWwIc.jpg" alt="image">
                </div>
                <div class="grid-item">
                    <img src="https://i.imgur.com/MV9SvaP.jpg" alt="image">
                </div>
                <div class="grid-item">
                    <img src="https://i.imgur.com/qjQ9XWl.jpg" alt="image">
                </div>
                <div class="grid-item">
                    <img src="https://i.imgur.com/ZJ088Tk.jpg" alt="image">
                </div>
                <div class="grid-item">
                    <img src="https://i.imgur.com/SuZLV2U.jpg" alt="image">
                </div>
                <div class="grid-item">
                    <img src="https://i.imgur.com/71H2B0k.jpg" alt="image">
                </div>
                <div class="grid-item">
                    <img src="https://i.imgur.com/vxOA4hg.jpg" alt="image">
                </div>
                <div class="grid-item">
                    <img src="https://i.imgur.com/8kLXqdP.jpg" alt="image">
                </div>
            </div> <!-- end grid -->

            <div class="page-load-status">
                <div class="loader-ellips infinite-scroll-request">
                    <span class="loader-ellips__dot"></span>
                    <span class="loader-ellips__dot"></span>
                    <span class="loader-ellips__dot"></span>
                    <span class="loader-ellips__dot"></span>
                </div>
                <p class="infinite-scroll-last">End of content</p>
                <p class="infinite-scroll-error">No more pages to load</p>
            </div>

    </div>
</div>
@endsection


@push ('after-styles')

@endpush
@push ('after-scripts')

    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
    <script>
        var elem = document.querySelector('.grid');
        var msnry = new Masonry( elem, {
            itemSelector: '.grid-item',
            gutter: 10,
        });

        var elem2 = document.querySelector('.grid');
        var infScroll = new InfiniteScroll( '.grid', {
            path: '?page=@{{#}}',
            append: '.grid-item',
            outlayer: msnry,
            history: false,
            status: '.page-load-status',
        });
    </script>
@endpush

