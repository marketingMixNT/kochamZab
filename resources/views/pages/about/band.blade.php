<x-layouts.app title="Zespół Regionalny Zbójnicek | Kocham Ząb"
    description="Poznaj Zespół Regionalny Zbójnicek. Odkryj tradycje, muzykę i taniec Podhala, które pielęgnuje i promuje nasza grupa.">

    <x-slot:header>
        <x-banner img="{{asset('assets/images/o-nas-3.webp')}}">ZESPÓŁ REGIONALNY ZBÓJNICEK</x-banner>

    </x-slot:header>

    <x-slot:main>
        <x-base.section>

            <article class="space-y-20 max-w-screen-lg mx-auto">
                {{-- header --}}
                <header class="space-y-20">
                    <div class="flex flex-col lg:flex-row gap-6 ">
                        <div class="w-full lg:w-1/2 space-y-3">

                            <x-ui.subheading>Kocham Ząb</x-ui.subheading>
                            <x-ui.heading>Serce Góralskiej Kultury w Zębie</x-ui.heading>

                        </div>
                        <div class="w-full lg:w-1/2">
                            <x-ui.paragraph>W sercu Skalnego Podhala, w malowniczej wsi Ząb, kryje się skarb kultury
                                góralskiej
                                – zespół regionalny „Zbójnicek”. Założony w 1964 roku przez Marię Stoch, Zbójnicek
                                jest żywą kroniką miłości do tradycji i folkloru góralskiego. Jego powstanie,
                                wynikające z przypadkowego zainspirowania podczas szkolnej akademii, stało się
                                początkiem niezwykłej przygody z kulturą Podhala.</x-ui.paragraph>
                        </div>
                    </div>
                    <div>
                        <img src="{{asset('assets/images/o-nas-3.webp')}}" alt="zdjęcie przedstawiające Ząb"
                            class="aspect-video w-full max-h-[500px] md:opacity-0 fade-in object-cover" loading="lazy">
                    </div>
                </header>

                <div class="space-y-6 lg:space-y-12">

                    <div class="space-y-2">
                        <h3 class="font-bold text-lg">Początki Zbójnickiej Przygody</h3>
                        <x-ui.paragraph>Maria Stoch, założycielka zespołu, zauroczona talentem i entuzjazmem dzieci do
                            recytowania
                            wierszy i śpiewania piosenek, postanowiła utworzyć szkolny zespół regionalny. Przez lata,
                            wykorzystując swój poetycki talent, sama tworzyła programy występów, piosenki i wiersze, a
                            także
                            szyła ubrania i czapki zbójnickie dla członków zespołu. W działalności pomagał jej mąż, Jan
                            Stoch Gronkowion, wybitny prymista podhalański, co dodatkowo wzbogacało artystyczną duszę
                            Zbójnicka. </x-ui.paragraph>
                    </div>


                    <div class="space-y-2">
                        <h3 class="font-bold text-lg">Zbójnicek w Sercu Społeczności</h3>
                        <x-ui.paragraph>Pod kierownictwem Marii Stoch, Zbójnicek szybko stał się integralną częścią
                            lokalnych
                            uroczystości i wydarzeń, uświetniając swoimi występami momenty ważne dla szkoły i całej
                            społeczności, jak otwarcie wodociągu czy nadanie szkole imienia Heleny Marusarzówny. Zespół
                            działał pod patronatem Banku Spółdzielczego w Zakopanem, co świadczy o jego znaczeniu i roli
                            w
                            promowaniu kultury góralskiej.</x-ui.paragraph>
                    </div>

                    <div class="space-y-2">
                        <h3 class="font-bold text-lg">Przerwa i Nowy Początek</h3>
                        <x-ui.paragraph>Po śmierci Marii Stoch w 1985 roku, zespół przeżył trzyletnią przerwę w
                            działalności. W 1988 roku
                            nastąpiła jego reaktywacja pod nowym kierownictwem Andrzeja Lassaka „Obornego”, co
                            zapoczątkowało kolejny rozdział w historii Zbójnicka. Rok później powstał „Mały Zbójnicek”,
                            wzbogacając skład o nowe pokolenia dzieci i młodzieży.</x-ui.paragraph>
                    </div>

                    <div class="space-y-2">
                        <h3 class="font-bold text-lg">Zbójnicek Dziś</h3>
                        <x-ui.paragraph>Obecnie, pod kierownictwem Tomasza i Małgorzaty Słodczyków, Zbójnicek i Mały
                            Zbójnicek liczą
                            około 100 członków, którzy nieustannie przyczyniają się do promocji góralskiej kultury
                            zarówno w
                            Polsce, jak i za granicą. Zespół gościł już w takich krajach jak Anglia, Niemcy, na
                            Węgrzech,
                            Słowacji, w Norwegii, Macedonii i Serbii, zdobywając liczne wyróżnienia i
                            sukcesy.</x-ui.paragraph>
                    </div>
                    <div class="space-y-2">
                        <h3 class="font-bold text-lg">Misja i Dziedzictwo</h3>
                        <x-ui.paragraph>Głównym celem działalności Zbójnicka jest nauka tańca, śpiewu oraz kultywowanie
                            i przekazywanie
                            tradycji góralskich młodszym pokoleniom. Zespół, dzięki swojej działalności, stał się
                            strażnikiem dziedzictwa kulturowego Podhala, jednocześnie rozsławiając je poza granicami
                            kraju.
                            Siedzibą zespołu jest regionalna izba w remizie strażackiej w Zębie, która skrywa dyplomy,
                            nagrody, zdjęcia, kroniki, stroje i rekwizyty – świadectwa bogatej historii i wkładu
                            Zbójnicka w
                            kulturę góralską.</x-ui.paragraph>
                    </div>





                </div>

            </article>
        </x-base.section>

        <!--HERO-BOTTOM-->
        <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />

    </x-slot:main>
</x-layouts.app>
