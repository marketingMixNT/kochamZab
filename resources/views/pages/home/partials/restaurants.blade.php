<!--GASTRONOMY SECTION-->
<section class="special-section">
    <div class="container">
       <div class="section-heading text-center">
          <div class="row">
             <div class="col-lg-8 offset-lg-2">
                <h5 class="dash-style">Smaki Zębu</h5>
                <h2>Restauracje i Lokalne Specjały</h2>
                <p>Ząb to prawdziwy raj dla miłośników dobrej kuchni. Oferujemy szeroki wybór restauracji, które serwują zarówno tradycyjne, regionalne potrawy, jak i dania kuchni międzynarodowej. Każde miejsce zachwyca nie tylko smakiem, ale także atmosferą i gościnnością. Odkryj lokalne specjały i delektuj się niezapomnianymi posiłkami w sercu tej malowniczej wsi.</p>
             </div>
          </div>
       </div>
       <div class="special-inner">
          <div class="row">
        
            
           @foreach ($restaurants as $restaurant)
              <x-home.restaurant-card :restaurant="$restaurant" />
           @endforeach
       </div>
       <div class="btn-wrap text-center">
        <a href="#" class="button-primary" style="text-transform:uppercase">zobacz wszystkie restauracje</a>
     </div>
    </div>
 </section>