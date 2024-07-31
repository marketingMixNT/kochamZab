<x-layouts.app title="Poznaj Ząb -  O Nas | Kocham Ząb"
    description="Dowiedz się więcej o malowniczej wsi Ząb i naszej misji. Odkryj historię, kulturę i uroki tego wyjątkowego miejsca z Kocham Ząb.">

    <x-slot:header>
        <x-banner>O Zębie</x-banner>

    </x-slot:header>

    <x-slot:main>
        <x-base.section>

            <article class="space-y-20 max-w-screen-lg mx-auto">
                {{-- header --}}
                <header class="space-y-20">
                    <div class="flex flex-col lg:flex-row gap-6 ">
                        <div class="w-full lg:w-1/2 space-y-3">

                            <x-ui.subheading>Kocham Ząb</x-ui.subheading>
                            <x-ui.heading> Poznaj Naszą Historię</x-ui.heading>

                        </div>
                        <div class="w-full lg:w-1/2">
                            <x-ui.paragraph> Najwyżej położona miejscowość w Polsce (1013 m n.p.pm.) Powstała na XVII w.
                                Od czasów autonomii galicyjskiej, aż do połowy lat siedemdziesiątych XX w.
                                był samodzielną gminą. Obszar wynosi 778,79 ha, co stanowi 9,3% całej
                                powierzchni gminy. To najwyżej położone sołectwo w Polsce leży na grzbiecie
                                Pasma Gubałowskiego po stronie północnej i otoczone jest miastem Zakopane od
                                południa, Nowem Bystrem od zachodu i Suchem od wschodu. Według stanu na
                                dzień 31.12.2007 r. w Zębie zamieszkiwało 1553 mieszkańców (14,3% ogółu
                                mieszkańców gminy).</x-ui.paragraph>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/zab.jpg') }}" alt="zdjęcie przedstawiające Ząb"
                            class="aspect-video w-full max-h-[500px]" loading="lazy">
                    </div>
                </header>

                <div class="space-y-6 lg:space-y-12">
                    <x-ui.paragraph>Wieś chlubi się stylowym drewnianym kościołem p.w Świętej Anny z regionalnym
                        wystrojem
                        wnętrz, oraz pięknym cmentarzem-pełnym zieleni, krzewów i drzew, a także wybudowaną w
                        ostatnich latach kaplicą .Parafię erygował w 1932 r. kard. Stefan Sapieha. Obecny
                        proboszcz ks. Kazimierz Sołtysik jest czwartym gospodarzem parafii – po ks. Wiktorze
                        Błotko, ks. Ludwikowi Mizerze i ks. Stanisławowi Pardylowi. Przeprowadzona w 2007 r.
                        modernizacja kościoła (wymiana posadzki, sieci grzewczej i odnowienie ławek) uczyniła
                        naszą świątynię miejscem ze wszechmiar godnym skupienia i modlitwy oraz przedmiotem dumy
                        całej parafii. Przez Ząb przebiega słynny “Szlak Papieski”, którym 7 czerwca 1997 r.
                        przejeżdżał Ojciec Święty Jan Paweł II z Krzeptówek do Ludźmierza. Na pamiątkę tego
                        wydarzenia miejscowe gimnazjum w Zespole Szkół nosi imię papieża Polaka, nadane w 2001
                        r., a na granicy administracyjnej Gminy Poronin wzniesiono wieżyczkę papieską z
                        okolicznościowym napisem “Witaj Gazdo Świata w miejscu skąd najbliżej do
                        nieba”.</x-ui.paragraph>

                    <x-ui.paragraph>Bogate tradycje edukacyjne w Zębie sięgają II połowy XIXw. Szkoła powszechna –
                        funkcjonująca tu od 1886 r. nosi imię Heleny Marusarzówny – dziś w składzie Zespołu
                        Szkół wraz z Gimnazjum im. Jana Pawła II. Przez całe dziesięciolecia – dziś również –
                        jest miejscem, gdzie rodzą się inicjatywy edukacyjne, społeczne i kulturalne. Kadra
                        nauczycielska liczy ponad 30 osób, a kieruje nią mgr Bożena Bobak. W 2007 r. została
                        oddana do użytku sala gimnastyczna, pozostała część (dydaktyczna i administracyjna) mamy
                        nadzieję – będzie budowana w nieodległej przyszłości.</x-ui.paragraph>

                    <x-ui.paragraph>Miejscowa Ochotnicza Straż Pożarna ma za sobą ponad 100 lat dziejów. Mieści się w
                        drewnianej remizie budowanej w 1948 r. – od parunastu lat wchodzi w skład Krajowego
                        Systemu Ratowniczo – Gaśniczego. Prezesem Zębiańskiej OSP jest Roman Ciężadlik,
                        naczelnikiem – Wojciech Graca. Strażacy w Zębie myślą o modernizacji swojej remizy.
                        Wierzymy, że dla tej pięknej idei zdołamy pozyskać wielu sojuszników i sponsorów i nie
                        braknie pieniędzy na jej realizację.</x-ui.paragraph>

                    <x-ui.paragraph>Piękna panorama Tatr, wiele kwater prywatnych, pensjonatów o wysokim standardzie
                        świadczonych usług,(niektóre z basenami), kilka wyciągów narciarskich, karczmy
                        regionalne i punkty gastronomiczne zachęcają do odwiedzenia wsi zarówno latem jak i
                        zimą.</x-ui.paragraph>

                    <x-ui.paragraph>Życie kulturalne Zębu kreuje aktywnie działający Oddział Związku Podhalan wraz z
                        dwoma
                        zespołami regionalnymi: “Zbójnicek i “Mały Zbójnicek”. Wielkie zasługi w tej dziedzinie
                        położyła ŚP Maria Stoch Wilgocka – nauczycielka miejscowej szkoły, wraz z mężem Janem
                        Stoch Gronkowianem założyciele zespołu regionalnego „Zbójnicek” w 1964 r. Przez wiele
                        prezesował oddziałowi ZP i prowadził zespół „Zbójnicek” Andrzej Lassak Oborny. Dziś rolę
                        tę pełni Tomasz Słodyczka wraz z żoną Małgorzatą. Na szczególne podziękowania zasługują
                        teatralne ambicje zębiańskich działaczy ZP. W ich wykonaniu mogliśmy przy różnych
                        okazjach oglądać m.in.„Portki”</x-ui.paragraph>
                </div>

            </article>
        </x-base.section>

        <!--HERO-BOTTOM-->
        <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />

    </x-slot:main>
</x-layouts.app>
