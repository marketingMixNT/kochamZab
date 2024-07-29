<x-layouts.app title="Poronin - O Nas | Kocham Ząb" description="Dowiedz się więcej o malowniczej wsi Poronin i jej wyjątkowych atrakcjach. Odkryj historię, kulturę i uroki tego miejsca z Kocham Ząb.">


    <header class="inner-banner-wrap">
       <div class="inner-baner-container" style="background-image: url({{asset('assets/images/zab.jpg')}});background-position:center">
           <div class="container">
               <div class="inner-banner-content">
                   <h1 class="inner-title" style="margin-top:100px">Gmina Poronin</h1>
               </div>
           </div>
       </div>
       <div class="inner-shape"></div>
   </header>
         <!--CONTENT-->
 
             <section class="about-section about-page-section" style="padding-bottom:100px;margin-top:50px">
                 <div class="about-service-wrap">
                     <div class="container">
                         <div class="section-heading">
                             <div class="row align-items-end">
                                 <div class="col-lg-6">
                                     <span class="dash-style">Kocham Ząb</span>
                                     <h2>Gmina Poronin: Klejnot Podhala</h2>
                                 </div>
                                 <div class="col-lg-6">
                                     <div class="section-disc">
                                         <p>Gmina Poronin, położona w malowniczym regionie Podhala, stanowi prawdziwy klejnot dla miłośników gór, natury, i aktywnego wypoczynku. Rozciągająca się na powierzchni 8355 ha, ta góralska gmina kryje w sobie nie tylko bogactwo kultury, ale również nieskończone możliwości dla poszukiwaczy przygód i spokoju. Leżąc zaledwie 7 km na północny wschód od Zakopanego, przy spływie Zakopianki z Porońcem, Poronin stanowi idealną bazę wypadową do eksploracji Tatr i okolic.</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <figure class="single-feature-img">
                             <img src="{{asset('assets/images/zab.jpg')}}" alt=""
                                 >
                         </figure>
                         <div class="page-content">
                            <h3> Miejscowości pełne życia i tradycji</h3>
                             <p>Gmina składa się z kilku urokliwych miejscowości, które łącznie tworzą wspólnotę liczącą około 10 806 mieszkańców. Poronin, największa z nich, z populacją około 3 500 osób, jest sercem gminy, a Murzasichle, Małe Ciche, Suche, Ząb, Nowe Bystre, Bustryk i Stasikówka dopełniają jej unikatowego charakteru. Każda z miejscowości, z własnymi atrakcjami i osobliwościami, przyczynia się do bogactwa kulturalnego i turystycznego gminy.</p>
 
                             <h3> Turystyka: Serce gospodarki</h3>
                             <p>Podstawowym źródłem dochodu mieszkańców Gminy Poronin jest turystyka. Dzięki łącznej bazie noclegowej liczącej 10 tysięcy miejsc, gmina przyciąga rzesze turystów pragnących odpocząć w sercu polskich gór. Atrakcje takie jak stoki Galicowej Grapy i Pasma Gubałowskiego sprzyjają rozwojowi turystyki pieszej i rowerowej. Zima to czas narciarstwa zjazdowego i śladowego, z 20 wyciągami narciarskimi na terenie gminy, oferującymi łatwe trasy, idealne dla rodzin i początkujących narciarzy.</p>

                             <h3>Przygoda czeka</h3>
                             <p>Bliskość Tatr otwiera przed mieszkańcami i gośćmi Poronina drzwi do świata wysokogórskich przygód. Sezon turystyczny trwa tu cały rok, oferując każdemu coś wyjątkowego - od leniwych spacerów po malowniczych dolinach, po wymagające wędrówki po szlakach górskich. Miłośnicy zimowych sportów znajdą tutaj idealne warunki do szusowania na nartach lub snowboardzie, podczas gdy latem góry zapraszają do zdobywania szczytów, jazdy na rowerze czy po prostu odpoczynku na łonie natury.

                             </p>
                         </div>
 
                     </div>
                 </div>
 
             </section>
 
       
 
         <!--HERO-BOTTOM-->
         <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts"/>
 </x-layouts.app>
         
 
 
 