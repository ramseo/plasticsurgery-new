@extends('frontend.layouts.app')
@section('title') {{app_name()}} @endsection


<!-- <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
   <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet"> -->
<style>
   .owl-item {width: 128.906px; margin-right: 10px; background:powderblue; }
</style>
@section('content')

<section id="page-banner" class="page-banner-height">
            <div class="container-fluid">
                <div class="row">
                    <div class="banner-container">
                        <img src="/storage/files/vendor-banner.jpg" alt="" class="img-fluid">
                        <div class="banner-search-col">
                            <div class="search-header">
                                <p class="text">Search By Vendor</p>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Search By Vendor</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<div class="container ol-crsl">
    <div class="thumb-img">
       <img src="http://127.0.0.1:8000/storage/type/icon/camera%201.png" alt="">
    </div>
    <h2>Top Photographers in All Indian Cities</h2>
    <span>To improve these suggestions - <a href="#">Fill Requirements for Photographers</a></span>
<div class="owl-carousel owl-theme owl-loaded common-slider owl-drag ">
   <div class="owl-stage-outer">
      <div class="owl-stage" style="transform: translate3d(-1527px, 0px, 0px); transition: all 0.25s ease 0s; width: 3334px;">
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
              <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div> 

            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">

               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
           
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">

            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
           <a href="#"><div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div></a>
         </div>
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>

            </div>
        </a>
         </div>
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
   
     
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">

               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
             </a>
         </div>
     
   
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
              <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
             </a>
         </div>
    
     
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
    
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
             <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
             </a>
         </div>
    
     
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
            
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
     
     
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
    
        
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     

        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a hrefe="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
             <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
     
     
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
     
     
         <div class="owl-item cloned" style="">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
      </div>
   </div>   

   <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next disabled"><span aria-label="Next">›</span></button></div>
   <div class="owl-nav enable">
   </div>
</div>
</div>

<hr>
<div class="container ol-crsl vndr-crsl">
   <div class="thumb-img">
       <img src="http://127.0.0.1:8000/storage/type/icon/bridal.png" alt="">
    </div>
    <h2>Top Makeup Artists in All Indian Cities</h2>
    <span>To improve these suggestions - <a href="#">Fill Requirements for Makeup Artists</a></span>
<div class="owl-carousel owl-theme owl-loaded common-slider owl-drag ">
   <div class="owl-stage-outer">
      <div class="owl-stage" style="transform: translate3d(-1527px, 0px, 0px); transition: all 0.25s ease 0s; width: 3334px;">
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
              <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div> 

            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">

               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
           
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">

            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
           <a href="#"><div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div></a>
         </div>
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>

            </div>
        </a>
         </div>
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
   
     
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">

               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
             </a>
         </div>
     
   
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
              <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
             </a>
         </div>
    
     
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
    
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
             <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
             </a>
         </div>
    
     
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
            
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
     
     
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
    
        
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     

        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a hrefe="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
             <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
     
     
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
     
     
         <div class="owl-item cloned" style="">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
      </div>
   </div>   

   <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next disabled"><span aria-label="Next">›</span></button></div>
   <div class="owl-nav enable">
   </div>
</div>
</div>

<hr>
<div class="container ol-crsl vndr-crsl">
   <div class="thumb-img">
       <img src="http://127.0.0.1:8000/storage/type/icon/wedding-deco%203.png" alt="">
    </div>

    <h2>Top Decorators in All Indian Cities</h2>
    <span>To improve these suggestions - <a href="#">Fill Requirements for Decorators</a></span>
<div class="owl-carousel owl-theme owl-loaded common-slider owl-drag ">
   <div class="owl-stage-outer">
      <div class="owl-stage" style="transform: translate3d(-1527px, 0px, 0px); transition: all 0.25s ease 0s; width: 3334px;">
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
              <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div> 

            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">

               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
           
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">

            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
           <a href="#"><div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div></a>
         </div>
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>

            </div>
        </a>
         </div>
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
   
     
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">

               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
             </a>
         </div>
     
   
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
              <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
             </a>
         </div>
    
     
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
    
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
             <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
             </a>
         </div>
    
     
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
            
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
     
     
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
    
        
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     

        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a hrefe="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
             <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
     
     
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
     
     
         <div class="owl-item cloned" style="">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
      </div>
   </div>   

   <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next disabled"><span aria-label="Next">›</span></button></div>
   <div class="owl-nav enable">
   </div>
</div>
</div>


<hr>
<div class="container ol-crsl vndr-crsl">
   <div class="thumb-img">
       <img src="http://127.0.0.1:8000/storage/type/icon/Mehndi%20Artists%207.png" alt="">
    </div>
    <h2>Top Mehndi Artists in All Indian Cities</h2>
    <span>To improve these suggestions - <a href="#">Fill Requirements for Mehndi</a></span>
<div class="owl-carousel owl-theme owl-loaded common-slider owl-drag ">
   <div class="owl-stage-outer">
      <div class="owl-stage" style="transform: translate3d(-1527px, 0px, 0px); transition: all 0.25s ease 0s; width: 3334px;">
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
              <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div> 

            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">

               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
           
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">

            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
           <a href="#"><div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div></a>
         </div>
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>

            </div>
        </a>
         </div>
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
   
     
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">

               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
             </a>
         </div>
     
   
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
              <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
             </a>
         </div>
    
     
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
    
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
             <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
             </a>
         </div>
    
     
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
            
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
     
     
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
    
        
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     

        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a hrefe="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
             <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
     
     
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
     
     
         <div class="owl-item cloned" style="">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
      </div>
   </div>   

   <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next disabled"><span aria-label="Next">›</span></button></div>
   <div class="owl-nav enable">
   </div>
</div>
</div>


<hr>
<div class="container ol-crsl vndr-crsl">
       <div class="thumb-img">
       <img src="http://127.0.0.1:8000/storage/type/icon/weeding%20planner.png" alt="">
    </div>
    <h2>Top Planners in All Indian Cities</h2>
    <span>To improve these suggestions - <a href="#">Fill Requirements for Planner</a></span>
<div class="owl-carousel owl-theme owl-loaded common-slider owl-drag ">
   <div class="owl-stage-outer">
      <div class="owl-stage" style="transform: translate3d(-1527px, 0px, 0px); transition: all 0.25s ease 0s; width: 3334px;">
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
              <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div> 

            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">

               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
           
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">

            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
           <a href="#"><div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div></a>
         </div>
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>

            </div>
        </a>
         </div>
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
   
     
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">

               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
             </a>
         </div>
     
   
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
              <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
             </a>
         </div>
    
     
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
    
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
             <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
             </a>
         </div>
    
     
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
            
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
     
     
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
    
        
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     

        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a hrefe="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
             <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
     
     
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
     
     
         <div class="owl-item cloned" style="">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
      </div>
   </div>   

   <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next disabled"><span aria-label="Next">›</span></button></div>
   <div class="owl-nav enable">
   </div>
</div>
</div>

<hr>
<div class="container ol-crsl vndr-crsl">
   <div class="thumb-img">
       <img src="http://127.0.0.1:8000/storage/type/icon/wedding%20venue%204.png" alt="">
    </div>
    <h2>Top Venues in All Indian Cities</h2>
    <span>To improve these suggestions - <a href="#">Fill Requirements for Venues</a></span>
<div class="owl-carousel owl-theme owl-loaded common-slider owl-drag ">
   <div class="owl-stage-outer">
      <div class="owl-stage" style="transform: translate3d(-1527px, 0px, 0px); transition: all 0.25s ease 0s; width: 3334px;">
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
              <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div> 

            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">

               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
           
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">

            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
           <a href="#"><div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div></a>
         </div>
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>

            </div>
        </a>
         </div>
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
   
     
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">

               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
             </a>
         </div>
     
   
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
              <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
             </a>
         </div>
    
     
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
    
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
             <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
             </a>
         </div>
    
     
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
            
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
     
     
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
    
        
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     

        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a hrefe="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
             <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
     
     
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
     
     
         <div class="owl-item cloned" style="">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
      </div>
   </div>   

   <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next disabled"><span aria-label="Next">›</span></button></div>
   <div class="owl-nav enable">
   </div>
</div>
</div>

<hr>
<div class="container ol-crsl vndr-crsl">
   <div class="thumb-img">
       <img src="http://127.0.0.1:8000/storage/type/icon/Bridal-Designers 6.png" alt="">
    </div>
    <h2>Top Wedding Wear in All Indian Cities</h2>
    <span>To improve these suggestions - <a href="#">Fill Wedding Wear</a></span>
<div class="owl-carousel owl-theme owl-loaded common-slider owl-drag ">
   <div class="owl-stage-outer">
      <div class="owl-stage" style="transform: translate3d(-1527px, 0px, 0px); transition: all 0.25s ease 0s; width: 3334px;">
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
              <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div> 

            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">

               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
           
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">

            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
           <a href="#"><div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div></a>
         </div>
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>

            </div>
        </a>
         </div>
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
   
     
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">

               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
             </a>
         </div>
     
   
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
              <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
             </a>
         </div>
    
     
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
    
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
             <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
             </a>
         </div>
    
     
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
            
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
     
     
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
    
        
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     

        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a hrefe="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
             <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
     
     
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
     
     
         <div class="owl-item cloned" style="">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
      </div>
   </div>   

   <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next disabled"><span aria-label="Next">›</span></button></div>
   <div class="owl-nav enable">
   </div>
</div>
</div>

<hr>
<div class="container ol-crsl vndr-crsl">
   <div class="thumb-img">
       <img src="http://127.0.0.1:8000/storage/type/icon/Wedding%20Videographers%207.png" alt="">
    </div>
    <h2>Top Videographer in All Indian Cities</h2>
    <span>To improve these suggestions - <a href="#">Fill Requirements for Videographer</a></span>
<div class="owl-carousel owl-theme owl-loaded common-slider owl-drag ">
   <div class="owl-stage-outer">
      <div class="owl-stage" style="transform: translate3d(-1527px, 0px, 0px); transition: all 0.25s ease 0s; width: 3334px;">
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
              <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div> 

            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">

               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
           
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">

            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
           <a href="#"><div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div></a>
         </div>
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>

            </div>
        </a>
         </div>
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
            
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
         
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
   
     
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">

               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
             </a>
         </div>
     
   
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
              <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
             </a>
         </div>
    
     
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
    
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
             <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
             </a>
         </div>
    
     
         <div class="owl-item active" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
            
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
            <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
     
     
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
    
        
         <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     

        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a hrefe="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
                <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
             <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
        
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
     
     
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/team 1.PNG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
        </a>
         </div>
     
     
         <div class="owl-item cloned" style="">
            <a href="#">
            <div class="item">
               <img src="http://127.0.0.1:8000/storage/vendor/profile/BMPwedding.JPG">
               <div class="carousel-content">
                <h3>Abcd Studio</h3>
                <p><span>₹</span> 33,000</p>
               <span class="days">For 1 Day of Photo + Video</span>
              </div>
            </div>
            </a>
         </div>
     
      </div>
   </div>   

   <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next disabled"><span aria-label="Next">›</span></button></div>
   <div class="owl-nav enable">
   </div>
</div>
</div>

</div>
</div>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
<!-- helping site -->
<!-- https://codepen.io/sheetalsinghwd/pen/JjoZzQr -->
<script>
   $(document).ready(function(){
     var owl = $('.owl-carousel');
   owl.owlCarousel({
       items:4.1, 
     // items change number for slider display on desktop
        dots:false,
        nav:true,
         navText: ["<i class='fas fa-arrow-left'></i>", "<i class='fas fa-arrow-right'></i>"],
       loop:true,
       margin:5,
       // autoplay:true,
       // autoplayTimeout:3000,
       autoplayHoverPause:true
   });


   });
</script>
@endsection