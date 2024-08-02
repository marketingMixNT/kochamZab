
         
 
<x-layouts.app title="Poronin - O Nas | Kocham Ząb" description="Dowiedz się więcej o malowniczej wsi Poronin i jej wyjątkowych atrakcjach. Odkryj historię, kulturę i uroki tego miejsca z Kocham Ząb.">

    <x-slot:header>
        <x-banner img="{{asset('assets/images/o-nas-5.webp')}}">Gmina Poronin</x-banner>

    </x-slot:header>

    <x-slot:main>
        <x-base.section>

            <article class="space-y-20 max-w-screen-lg mx-auto">
                {{-- header --}}
                <header class="space-y-20">
                    <div class="flex flex-col lg:flex-row gap-6 ">
                        <div class="w-full lg:w-1/2 space-y-3">

                            <x-ui.subheading>Kocham Ząb</x-ui.subheading>
                            <x-ui.heading>Gmina Poronin: Klejnot Podhala</x-ui.heading>

                        </div>
                        <div class="w-full lg:w-1/2">
                            <x-ui.paragraph>Gmina Poronin, położona w malowniczym regionie Podhala, stanowi prawdziwy klejnot dla miłośników gór, natury, i aktywnego wypoczynku. Rozciągająca się na powierzchni 8355 ha, ta góralska gmina kryje w sobie nie tylko bogactwo kultury, ale również nieskończone możliwości dla poszukiwaczy przygód i spokoju. Leżąc zaledwie 7 km na północny wschód od Zakopanego, przy spływie Zakopianki z Porońcem, Poronin stanowi idealną bazę wypadową do eksploracji Tatr i okolic.</x-ui.paragraph>
                        </div>
                    </div>
                    <div>
                        <img src="{{asset('assets/images/o-nas-5.webp')}}" alt="zdjęcie przedstawiające Ząb"
                            class="aspect-video w-full max-h-[500px] md:opacity-0 fade-in object-cover" loading="lazy">
                    </div>
                </header>

                <div class="space-y-6 lg:space-y-12">
                    <x-ui.paragraph>Gmina składa się z kilku urokliwych miejscowości, które łącznie tworzą wspólnotę liczącą około 10 806 mieszkańców. Poronin, największa z nich, z populacją około 3 500 osób, jest sercem gminy, a Murzasichle, Małe Ciche, Suche, Ząb, Nowe Bystre, Bustryk i Stasikówka dopełniają jej unikatowego charakteru. Każda z miejscowości, z własnymi atrakcjami i osobliwościami, przyczynia się do bogactwa kulturalnego i turystycznego gminy.</x-ui.paragraph>

                    <x-ui.paragraph>Podstawowym źródłem dochodu mieszkańców Gminy Poronin jest turystyka. Dzięki łącznej bazie noclegowej liczącej 10 tysięcy miejsc, gmina przyciąga rzesze turystów pragnących odpocząć w sercu polskich gór. Atrakcje takie jak stoki Galicowej Grapy i Pasma Gubałowskiego sprzyjają rozwojowi turystyki pieszej i rowerowej. Zima to czas narciarstwa zjazdowego i śladowego, z 20 wyciągami narciarskimi na terenie gminy, oferującymi łatwe trasy, idealne dla rodzin i początkujących narciarzy.</x-ui.paragraph>

                    <x-ui.paragraph>Bliskość Tatr otwiera przed mieszkańcami i gośćmi Poronina drzwi do świata wysokogórskich przygód. Sezon turystyczny trwa tu cały rok, oferując każdemu coś wyjątkowego - od leniwych spacerów po malowniczych dolinach, po wymagające wędrówki po szlakach górskich. Miłośnicy zimowych sportów znajdą tutaj idealne warunki do szusowania na nartach lub snowboardzie, podczas gdy latem góry zapraszają do zdobywania szczytów, jazdy na rowerze czy po prostu odpoczynku na łonie natury.</x-ui.paragraph>

                 
                </div>

            </article>
        </x-base.section>

        <!--HERO-BOTTOM-->
        <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />

    </x-slot:main>
</x-layouts.app>
 