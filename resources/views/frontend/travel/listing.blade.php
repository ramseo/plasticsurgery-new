@extends('frontend.layouts.app')
@section('title') {{app_name()}} @endsection

@section('content')
<section id="breadcrumb-section">
   <div class="container-fluid">
      <div class="row">
         <div class="col-xs-12 col-sm-12" >
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Travel</li>
               </ol>
            </nav>
         </div>
      </div>
   </div>
</section>
<section id="vendor-detail-section">
   <div class="container-fluid">
      <div class="row vendor-detail-main-col">

         <div class="col-xs-12 col-sm-7 ">
            <div class="img-col">
               <img src="https://www.weddingsutra.com/images/banners/TR01.jpg" class="img-fluid" alt="">
            </div>
            <div class="row vendor-list-row" id="post-data">
            </div>
            <div class="ajax-load text-center" style="display:none">
              <p><img src="{{asset('img/loader.gif')}}" alt="Loading More... "></p>
            </div>
           
         </div>
         @include('frontend.travel.side')
      </div>
   </div>
</section>
@endsection


@push('after-scripts')


<script type="text/javascript">
     var page = 1;

     let footerOffsetHeight = document.getElementById('footer').offsetHeight;
     let textOnlySectionOffsetHeight = document.getElementById('vendor-detail-section').offsetHeight;
     let totalHeight = footerOffsetHeight+textOnlySectionOffsetHeight;
     loadMoreData(page);
    $(window).scroll(function() {
        if ($(window).scrollTop() >= ($(document).height() - $(window).height() - totalHeight)) {
            page++;
            loadMoreData(page);
        }
    });


    function loadMoreData(page){
        $.ajax(
            {
                url: '{{route("frontend.travel.ajax")}}'+'?page=' + page,
                type: "get",
                beforeSend: function()
                {
                    $('.ajax-load').show();
                }
            })
            .done(function(data)
            {
                if(!data.html){
                    $('.ajax-load').html("No more records found");
                    return;
                }
                $('.ajax-load').hide();
                $("#post-data").append(data.html);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError)
            {
                alert('server not responding...');
            });
    }
</script>
@endpush
