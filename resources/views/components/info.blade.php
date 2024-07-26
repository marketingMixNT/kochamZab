<div class="fullwidth-callback" style="background-image: url({{asset('assets/images/zab.jpg')}});background-position:center">
    <div class="container">
       <div class="section-heading section-heading-white text-center">
          <div class="row">
             <div class="col-lg-8 offset-lg-2">
                <span class="dash-style">Kocham Ząb</span>
                <h2>Miejsce pełne możliwości</h2>
                <p>ąb to nie tylko malownicza wieś, ale również miejsce pełne różnorodnych atrakcji i
                    udogodnień.
                    Niezależnie od tego, czy jesteś miłośnikiem przyrody, smakoszem lokalnej kuchni, czy
                    poszukujesz relaksu i odpoczynku - Ząb ma coś specjalnego dla każdego. Przyjedź i przekonaj
                    się, jak wiele ma do zaoferowania!</p>
             </div>
          </div>
       </div>
       <div class="callback-counter-wrap">
         


          <a href="/atrakcje.html" class="counter-item">
             <div class="counter-item-inner">
                <div class="counter-icon">
                    <img src="{{asset("assets/icons/attractions.png")}}" alt="" >
                </div>
                <div class="counter-content">
                   <span class="counter-no">
                      <span class="counter">{{$totalAttractions}}</span>
                   </span>
                   <span class="counter-text">
                      Atrakcji
                   </span>
                </div>
             </div>
            </a>
          <a href="/gastronomia.html" class="counter-item">
             <div class="counter-item-inner">
                <div class="counter-icon">
                    <img src="{{asset("assets/icons/restaurant.png")}}" alt="" >
                </div>
                <div class="counter-content">
                   <span class="counter-no">
                      <span class="counter">{{$totalRestaurants}}</span>
                   </span>
                   <span class="counter-text">
                      Restauracji
                   </span>
                </div>
             </div>
            </a>
          <a href="/noclegi.html" class="counter-item">
             <div class="counter-item-inner">
                <div class="counter-icon">
                    <img src="{{asset("assets/icons/accomodation.png")}}" alt="" >
                </div>
                <div class="counter-content">
                   <span class="counter-no">
                      <span class="counter">{{$totalApartments}}</span>
                   </span>
                   <span class="counter-text">
                      Apartamentów
                   </span>
                </div>
             </div>
            </a>
          <a href="/wydarzenia.html" class="counter-item">
             <div class="counter-item-inner">
                <div class="counter-icon">
                    <img src="{{asset("assets/icons/events.png")}}" alt="" >
                </div>
                <div class="counter-content">
                   <span class="counter-no">
                      <span class="counter">{{$totalPosts}}</span>
                   </span>
                   <span class="counter-text">
                      Wydarzeń
                   </span>
                </div>
             </div>
            </a>
       </div>
    </div>
 </div>