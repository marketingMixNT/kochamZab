<x-layouts.app title="Związek Podhalan | Kocham Ząb"
    description="Poznaj Związek Podhalan w Zębie. Dowiedz się o naszej misji, działaniach i wkładzie w rozwój oraz promocję kultury Podhala.">


    <header class="inner-banner-wrap">
        <div class="inner-baner-container"
            style="background-image: url({{ asset('assets/images/zab.jpg') }});background-position:center">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title" style="margin-top:100px">Związek Podhalan o/Ząb
                    </h1>
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
                            <h2>Góralskie Dziedzictwo
                            </h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-disc">
                                <p> Historia Oddziału Związku Podhalan w Zębie sięga lat dwudziestych XX wieku, kiedy to ks. Słonka, aktywny i światły proboszcz z parafii w Poroninie, zainicjował formy społecznej aktywności wykorzystując miejscowe walory kultury regionalnej. Był to czas, gdy po pożarze kościoła w Poroninie w 1915 roku, mieszkańcy Zębu podjęli decyzję o budowie własnego kościoła i starali się o utworzenie parafii, co udało się osiągnąć w 1932 roku za sprawą księcia Metropolity Krakowskiego, kard. Adama Sapiehy.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <figure class="single-feature-img">
                    <img src="{{ asset('assets/images/zab.jpg') }}" alt="">
                </figure>
                <div class="page-content">
                    <h3>Rozwój i działalność</h3>
                    <p>Związek Podhalan w Zębie od początku swojego istnienia ściśle wiązał się z życiem parafii. Pierwszy proboszcz, ks. Wiktor Błotko (1932-1941), a po nim ks. Ludwik Mizera (od 1941), byli nie tylko duchowymi przywódcami, ale również aktywnymi organizatorami życia społecznego. Organizowano kursy kroju i szycia, gotowania, a także działalność kół młodzieżowych, co stanowiło ważny element integracji i edukacji lokalnej społeczności. </p>



                    <h3>Związek w czasach wojny i komunizmu  </h3>
                    <p>II wojna światowa oraz późniejsze lata komunistyczne wymusiły na Związku ograniczenie działalności. Związkowy sztandar, jako symbol polskości i góralskiej tożsamości, został ukryty przed okupantem. Mimo trudnych warunków, tradycja uczestnictwa związkowego sztandaru w lokalnych uroczystościach religijnych była nieprzerwanie kontynuowana, co potwierdzają wspomnienia starszych mieszkańców Zębu.</p>

                    <h3>Przywódcy Związku</h3>
                    <p>Przez lata na czele Oddziału stanęło wielu wybitnych liderów. Od Jana Staszela Maciary, poprzez Jana Stocha Gronkowiana i Franciszka Naglaka Pisorza, aż po Andrzeja Lassaka Obornego i Tomasza Słodyczkę. Od 2011 roku funkcję prezesa pełni Anna Stoch, kontynuując misję promowania i ochrony góralskiej kultury i tradycji. </p>

                    <h3>Współczesność i przyszłość</h3>
                    <p>Przez lata na czele Oddziału stanęło wielu wybitnych liderów. Od Jana Staszela Maciary, poprzez Jana Stocha Gronkowiana i Franciszka Naglaka Pisorza, aż po Andrzeja Lassaka Obornego i Tomasza Słodyczkę. Od 2011 roku funkcję prezesa pełni Anna Stoch, kontynuując misję promowania i ochrony góralskiej kultury i tradycji. </p>

                  <p>
                    Związek Podhalan o/Ząb pozostaje wierny swoim korzeniom, będąc jednocześnie otwartym na nowe inicjatywy i wyzwania współczesności. Jego działalność jest dowodem na to, że tradycja i nowoczesność mogą iść w parze, wzbogacając się nawzajem.
                  </p>

                </div>

            </div>
        </div>

    </section>



    <!--HERO-BOTTOM-->
    <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />
</x-layouts.app>
