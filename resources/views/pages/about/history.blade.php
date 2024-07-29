<x-layouts.app title="Historia Zębu - O Nas | Kocham Ząb"
    description="Poznaj bogatą historię wsi Ząb. Dowiedz się o wydarzeniach i ludziach, którzy ukształtowali to wyjątkowe miejsce z Kocham Ząb.">


    <header class="inner-banner-wrap">
        <div class="inner-baner-container"
            style="background-image: url({{ asset('assets/images/zab.jpg') }});background-position:center">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title" style="margin-top:100px">Historia </h1>
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
                            <h2>Sołtysi zubscy</h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-disc">
                                <p> Sołtystwo w Zubsuchem zostało utworzone przez Stanisława Witkowskiego, dzierżawcę
                                    nowotarskiego na początku XVII stulecia, które nadał Wiktorowi Zdanowskiemu i jego
                                    małżonce Annie z Dziechtarskich za zasługi wobec Króla i Rzeczpospolitej. Przywilej
                                    dany był w Krakowie 25 kwietnia 1620 roku.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <figure class="single-feature-img">
                    <img src="{{ asset('assets/images/zab.jpg') }}" alt="">
                </figure>
                <div class="page-content">
                    <p>Podobnie jak Walenty Pietrzykowski w Dzisniszu tak Wiktoryn Zdanowski w Zubie otrzymał zgodę na
                        lokowanie nowych wsi które miały się zwać Zub i Jastrzębiec. Jastrzębcem nazwano osadę powstałą
                        nad potokiem Rafaczańskich zwanym a wpadającym do potoku Biały Dunajec w Poroninie. W drugiej
                        połowie XVII stulecia w miejsce nazwy Jastrzębiec przyjęła się nawa Suche (od właścicieli
                        gruntów zwanych Chudymi alias Suskimi). Nazwa Zub jest równie dawna i związana z rodem Zubków
                        licznie osiadłych wzdłuż drogi idącej z Bańskiej przez Furmanową do Zakopanego. Zubek jest
                        zdrobniałą formą Zub. Stąd czasem przyjęła się jedna nazwa wsi, złożonej z rożnych osiedli tj.
                        Zubsuche a nie Zub i Jastrzębiec.</p>

                    <p>Zdanowski Wiktor był jednym z nowotarskim wybrańców. Ożeniony w rodzinie podupadłej szlachty
                        wstydził się swojego pochodzenia. W miejsce sołectwa utworzył folwark zwany Zubskim, którego
                        częścią był także folwark leżący na Ustupie. Nadanie dane Zdanowskiemu przez Stanisława
                        Witkowskiego jest także dowodem na to, że „wieś pańska dawno osadzona, a ciągać się mająca aż do
                        Tatr” nie wymieniona z nazwy, została osadzona przez wielu laty (licząc od 1620). Chodzi tu o
                        wieś Olczę i Zakopane. Potwierdza się więc jeszcze raz, że Zakopane zostało osadzone na mocy
                        Przywileju królewskiego (wieś królewska)danego w drugiej połowie szesnastego stulecia. Przywilej
                        dany Wiktorynowi Zdanowskiemu z 1620 został zatwierdzony w Warszawie 2 lutego 1623 roku przez
                        Zygmunta III. W niespełna 20 lat później Wiktoryn zrzeka sołtystwa w Zubsuchem na rzecz Adama
                        Kazanowskiego, tenutariusza starostwa nowotarskiego. Było to 7 lutego 1942 roku. Rożne były losy
                        i historia folwarku lubskiego. Przetrwał zaledwie 120 lat bo trudno było na tej skalnej i
                        nieurodzajnej ziemi prowadzić gospodarkę. A jeszcze trudniej i prawie było to niemożliwe zaprząc
                        do niej tutejszego włościanina. Rodowity Podhalanin nie znosił poddaństwa. Najwcześniej w
                        Rzeczpospolitej jarzmo pańszczyźniane zrzucił chłop podhalański, dając tym samym przykład innym.
                        Na tej Zieminie ostał się długo żaden folwark czy dwór. Powodem przede wszystkim był hardy i
                        nieugięty charakter tutejszego chłopa, którego trudno było bezkarnie wykorzystywać jako darmową
                        siłę.</p>

                </div>

            </div>
        </div>

    </section>



    <!--HERO-BOTTOM-->
    <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />
</x-layouts.app>
