@props(['slide'])

<div class="home-banner-items hero-container" >
    <div class="banner-inner-wrap" style="background-image: url({{asset($slide->getImageUrl())}});;background-size: cover; background-position: center; background-repeat: no-repeat;"></div>
       <div class="banner-content-wrap">
          <div class="container">
             <div class="banner-content text-center">
                <h2 class="banner-title" style="text-align: center;margin-top:100px">{{$slide->title}}</h2>
                <p style="font-size: 19px">{{$slide->content}}</p>
              
             </div>
          </div>
       </div>
    <div class="overlay"></div>
 </div>