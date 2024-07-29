<x-layouts.app title="Stowarzyszenie Promocji i Rozwoju Wsi Ząb | Kocham Ząb"
    description="Poznaj działania Stowarzyszenia Promocji i Rozwoju Wsi Ząb. Wspieramy lokalną społeczność, promujemy atrakcje i rozwój regionu.">


    <header class="inner-banner-wrap">
        <div class="inner-baner-container"
            style="background-image: url({{ asset('assets/images/zab.jpg') }});background-position:center">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title" style="margin-top:100px">Stowarzyszenie</h1>
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
                            <h2>Inicjatywa Zmieniająca Krajobraz Podhala
                            </h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-disc">
                                <p> Założone 6 sierpnia 2012 roku, Stowarzyszenie Promocji i Rozwoju Wsi Ząb i Okolicy z
                                    KRS 0000428529, podjęło na siebie misję kompleksowego rozwoju jednej z najbardziej
                                    charakterystycznych miejscowości na Podhalu. Ząb, będąc najwyżej położoną wsią w
                                    Polsce, zasługuje na szczególną uwagę, nie tylko ze względu na swoje położenie, ale
                                    i bogatą kulturę, tradycje oraz niewykorzystany jeszcze w pełni potencjał
                                    turystyczny i gospodarczy.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <figure class="single-feature-img">
                    <img src="{{ asset('assets/images/zab.jpg') }}" alt="">
                </figure>
                <div class="page-content">
                    <h3>Cele i Misja Stowarzyszenia</h3>
                    <p>Głównym celem Stowarzyszenia jest aktywizacja gospodarcza, turystyczna, cywilizacyjna oraz
                        społeczna Wsi Ząb i jej okolic. Wizja ta realizowana jest poprzez szereg działań mających na
                        celu nie tylko promocję regionu, ale także wspieranie lokalnej przedsiębiorczości, innowacji
                        oraz ochronę dziedzictwa kulturowego i przyrodniczego. </p>

                    <h3> Strategie Działania</h3>
                    <p>Stowarzyszenie aktywnie współpracuje z władzami samorządowymi, administracją państwową, organizacjami pozarządowymi oraz podmiotami gospodarczymi zarówno na poziomie lokalnym, jak i międzynarodowym. Inicjatywy takie jak zgłaszanie propozycji regulacji prawnych, finansowych, organizacyjnych, czy podejmowanie przedsięwzięć gospodarczych, mają na celu nie tylko rozwój Wsi Ząb, ale także jej okolicy. Promocja regionu odbywa się przez udział w krajowych i międzynarodowych targach turystycznych, wydawanie katalogów, informatorów oraz poprzez aktywną obecność w internecie na stronie kochamząb.pl.</p>

                    <div>
                        <h3>Realizacja Celów</h3>
                        <p>Stowarzyszenie szczególnie skupia się na:</p>
                        <ul>
                            <li>Promocji przedsięwzięć gospodarczych, innowacyjnych i proekologicznych.</li>
                            <li>Rozwoju kultury, rekreacji, i sportu.</li>
                            <li>Wspieraniu edukacji, oświaty i nauki.</li>
                            <li>Ochronie dóbr kultury i tradycji.</li>
                            <li>Upowszechnianiu kultury fizycznej i sportu.</li>
                            <li>Działaniach na rzecz ochrony środowiska i promocji ekologicznego stylu życia.
                            </li>
                            <li>Integracji europejskiej oraz rozwijaniu kontaktów międzynarodowych.</li>
                        </ul>
                    </div>
                    <div>
                        <h3>Zarząd Stowarzyszenia</h3>
                        <p>Na czele Stowarzyszenia stoi Zarząd, w którego skład wchodzą:</p>
                        <ul>
                            <li>Michał Sobański – Prezes,</li>
                            <li>Czesław Błachuta – Wiceprezes,</li>
                            <li>Stanisław Staszel – Wiceprezes,/li>
                            <li>Agnieszka Rydlewska – Skarbnik.</li>
                        </ul>
                        <p>Dzięki ich zaangażowaniu i determinacji, Stowarzyszenie Promocji i Rozwoju Wsi Ząb i
                            Okolicy sukcesywnie wprowadza zmiany, które przekładają się na zwiększenie
                            atrakcyjności regionu, zarówno dla mieszkańców, jak i turystów. Poprzez realizację
                            ambitnych celów, Stowarzyszenie skutecznie przyczynia się do rozwoju lokalnej
                            społeczności, gospodarki, i ochrony dziedzictwa kulturowego oraz naturalnego
                            Podhala.</p>
                    </div>

                </div>

            </div>
        </div>

    </section>



    <!--HERO-BOTTOM-->
    <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />
</x-layouts.app>
