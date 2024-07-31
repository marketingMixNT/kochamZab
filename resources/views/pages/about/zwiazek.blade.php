


 
 
<x-layouts.app title="Związek Podhalan | Kocham Ząb"
    description="Poznaj Związek Podhalan w Zębie. Dowiedz się o naszej misji, działaniach i wkładzie w rozwój oraz promocję kultury Podhala.">

    <x-slot:header>
        <x-banner>Związek Podhalan</x-banner>

    </x-slot:header>

    <x-slot:main>
        <x-base.section>

            <article class="space-y-20 max-w-screen-lg mx-auto">
                {{-- header --}}
                <header class="space-y-20">
                    <div class="flex flex-col lg:flex-row gap-6 ">
                        <div class="w-full lg:w-1/2 space-y-3">

                            <x-ui.subheading>Kocham Ząb</x-ui.subheading>
                            <x-ui.heading>Góralskie Dziedzictwo</x-ui.heading>

                        </div>
                        <div class="w-full lg:w-1/2">
                            <x-ui.paragraph>Historia Oddziału Związku Podhalan w Zębie sięga lat dwudziestych XX wieku, kiedy to ks. Słonka, aktywny i światły proboszcz z parafii w Poroninie, zainicjował formy społecznej aktywności wykorzystując miejscowe walory kultury regionalnej. Był to czas, gdy po pożarze kościoła w Poroninie w 1915 roku, mieszkańcy Zębu podjęli decyzję o budowie własnego kościoła i starali się o utworzenie parafii, co udało się osiągnąć w 1932 roku za sprawą księcia Metropolity Krakowskiego, kard. Adama Sapiehy</x-ui.paragraph>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/zab.jpg') }}" alt="zdjęcie przedstawiające Ząb"
                            class="aspect-video w-full max-h-[500px]" loading="lazy">
                    </div>
                </header>

                <div class="space-y-6 lg:space-y-12">

                    <div class="space-y-2">
                    <h3 class="font-bold text-lg">Rozwój i działalność</h3>
                    <x-ui.paragraph>Związek Podhalan w Zębie od początku swojego istnienia ściśle wiązał się z życiem parafii. Pierwszy proboszcz, ks. Wiktor Błotko (1932-1941), a po nim ks. Ludwik Mizera (od 1941), byli nie tylko duchowymi przywódcami, ale również aktywnymi organizatorami życia społecznego. Organizowano kursy kroju i szycia, gotowania, a także działalność kół młodzieżowych, co stanowiło ważny element integracji i edukacji lokalnej społeczności. </x-ui.paragraph></div>


                    <div class="space-y-2">
                    <h3 class="font-bold text-lg">Związek w czasach wojny i komunizmu  </h3>
                    <x-ui.paragraph>II wojna światowa oraz późniejsze lata komunistyczne wymusiły na Związku ograniczenie działalności. Związkowy sztandar, jako symbol polskości i góralskiej tożsamości, został ukryty przed okupantem. Mimo trudnych warunków, tradycja uczestnictwa związkowego sztandaru w lokalnych uroczystościach religijnych była nieprzerwanie kontynuowana, co potwierdzają wspomnienia starszych mieszkańców Zębu.</x-ui.paragraph></div>

                    <div class="space-y-2">
                    <h3 class="font-bold text-lg">Przywódcy Związku</h3>
                    <x-ui.paragraph>Przez lata na czele Oddziału stanęło wielu wybitnych liderów. Od Jana Staszela Maciary, poprzez Jana Stocha Gronkowiana i Franciszka Naglaka Pisorza, aż po Andrzeja Lassaka Obornego i Tomasza Słodyczkę. Od 2011 roku funkcję prezesa pełni Anna Stoch, kontynuując misję promowania i ochrony góralskiej kultury i tradycji. </x-ui.paragraph></div>

                    <div class="space-y-2">
                    <h3 class="font-bold text-lg">Współczesność i przyszłość</h3>
                    <x-ui.paragraph>Przez lata na czele Oddziału stanęło wielu wybitnych liderów. Od Jana Staszela Maciary, poprzez Jana Stocha Gronkowiana i Franciszka Naglaka Pisorza, aż po Andrzeja Lassaka Obornego i Tomasza Słodyczkę. Od 2011 roku funkcję prezesa pełni Anna Stoch, kontynuując misję promowania i ochrony góralskiej kultury i tradycji. </x-ui.paragraph></div>

                  <x-ui.paragraph>
                    Związek Podhalan o/Ząb pozostaje wierny swoim korzeniom, będąc jednocześnie otwartym na nowe inicjatywy i wyzwania współczesności. Jego działalność jest dowodem na to, że tradycja i nowoczesność mogą iść w parze, wzbogacając się nawzajem.
                  </x-ui.paragraph>


                 
                </div>

            </article>
        </x-base.section>

        <!--HERO-BOTTOM-->
        <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />

    </x-slot:main>
</x-layouts.app>
 