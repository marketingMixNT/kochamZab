<x-layouts.app title="Zespół Regionalny Zbójnicek | Kocham Ząb"
    description="Poznaj Zespół Regionalny Zbójnicek. Odkryj tradycje, muzykę i taniec Podhala, które pielęgnuje i promuje nasza grupa.">


    <header class="inner-banner-wrap">
        <div class="inner-baner-container"
            style="background-image: url({{ asset('assets/images/zab.jpg') }});background-position:center">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title" style="margin-top:100px">ZESPÓŁ REGIONALNY ZBÓJNICEK

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
                            <h2>Serce Góralskiej Kultury w Zębie

                            </h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-disc">
                                <p> W sercu Skalnego Podhala, w malowniczej wsi Ząb, kryje się skarb kultury góralskiej
                                    – zespół regionalny „Zbójnicek”. Założony w 1964 roku przez Marię Stoch, Zbójnicek
                                    jest żywą kroniką miłości do tradycji i folkloru góralskiego. Jego powstanie,
                                    wynikające z przypadkowego zainspirowania podczas szkolnej akademii, stało się
                                    początkiem niezwykłej przygody z kulturą Podhala.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <figure class="single-feature-img">
                    <img src="{{ asset('assets/images/zab.jpg') }}" alt="">
                </figure>
                <div class="page-content">
                    <h3>Początki Zbójnickiej Przygody
                    </h3>
                    <p>Maria Stoch, założycielka zespołu, zauroczona talentem i entuzjazmem dzieci do recytowania
                        wierszy i śpiewania piosenek, postanowiła utworzyć szkolny zespół regionalny. Przez lata,
                        wykorzystując swój poetycki talent, sama tworzyła programy występów, piosenki i wiersze, a także
                        szyła ubrania i czapki zbójnickie dla członków zespołu. W działalności pomagał jej mąż, Jan
                        Stoch Gronkowion, wybitny prymista podhalański, co dodatkowo wzbogacało artystyczną duszę
                        Zbójnicka.

                    </p>



                    <h3>Zbójnicek w Sercu Społeczności
                    </h3>
                    <p>Pod kierownictwem Marii Stoch, Zbójnicek szybko stał się integralną częścią lokalnych
                        uroczystości i wydarzeń, uświetniając swoimi występami momenty ważne dla szkoły i całej
                        społeczności, jak otwarcie wodociągu czy nadanie szkole imienia Heleny Marusarzówny. Zespół
                        działał pod patronatem Banku Spółdzielczego w Zakopanem, co świadczy o jego znaczeniu i roli w
                        promowaniu kultury góralskiej.

                    </p>

                    <h3>Przerwa i Nowy Początek
                    </h3>
                    <p>Po śmierci Marii Stoch w 1985 roku, zespół przeżył trzyletnią przerwę w działalności. W 1988 roku
                        nastąpiła jego reaktywacja pod nowym kierownictwem Andrzeja Lassaka „Obornego”, co
                        zapoczątkowało kolejny rozdział w historii Zbójnicka. Rok później powstał „Mały Zbójnicek”,
                        wzbogacając skład o nowe pokolenia dzieci i młodzieży.

                    </p>

                    <h3>Zbójnicek Dziś
                    </h3>
                    <p>Obecnie, pod kierownictwem Tomasza i Małgorzaty Słodczyków, Zbójnicek i Mały Zbójnicek liczą
                        około 100 członków, którzy nieustannie przyczyniają się do promocji góralskiej kultury zarówno w
                        Polsce, jak i za granicą. Zespół gościł już w takich krajach jak Anglia, Niemcy, na Węgrzech,
                        Słowacji, w Norwegii, Macedonii i Serbii, zdobywając liczne wyróżnienia i sukcesy.

                    </p>
                    <h3>Misja i Dziedzictwo
                    </h3>
                    <p>
                        Głównym celem działalności Zbójnicka jest nauka tańca, śpiewu oraz kultywowanie i przekazywanie
                        tradycji góralskich młodszym pokoleniom. Zespół, dzięki swojej działalności, stał się
                        strażnikiem dziedzictwa kulturowego Podhala, jednocześnie rozsławiając je poza granicami kraju.
                        Siedzibą zespołu jest regionalna izba w remizie strażackiej w Zębie, która skrywa dyplomy,
                        nagrody, zdjęcia, kroniki, stroje i rekwizyty – świadectwa bogatej historii i wkładu Zbójnicka w
                        kulturę góralską.


                    </p>

                </div>

            </div>
        </div>

    </section>



    <!--HERO-BOTTOM-->
    <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />
</x-layouts.app>
