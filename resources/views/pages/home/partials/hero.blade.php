<section class="home-slider-section">
   <div class="home-slider">
     
      
     @foreach ($slides as $slide)
        <x-home.hero-slide :slide="$slide" />
     @endforeach
      
   </div>
</section>