<x-layouts.app title="Stowarzyszenie Promocji i Rozwoju Wsi Ząb | Kocham Ząb"
    description="Poznaj działania Stowarzyszenia Promocji i Rozwoju Wsi Ząb. Wspieramy lokalną społeczność, promujemy atrakcje i rozwój regionu.">

    <x-slot:header>
        <x-banner>Stowarzyszenie</x-banner>

    </x-slot:header>

    <x-slot:main>
        <x-base.section>

            <article class="space-y-20 max-w-screen-lg mx-auto">
                {{-- header --}}
                <header class="space-y-20">
                    <div class="flex flex-col lg:flex-row gap-6 ">
                        <div class="w-full lg:w-1/2 space-y-3">

                            <x-ui.subheading>Kocham Ząb</x-ui.subheading>
                            <x-ui.heading>Inicjatywa Zmieniająca Krajobraz Podhala</x-ui.heading>

                        </div>
                        <div class="w-full lg:w-1/2">
                            <x-ui.paragraph>Założone 6 sierpnia 2012 roku, Stowarzyszenie Promocji i Rozwoju Wsi Ząb i
                                Okolicy z
                                KRS 0000428529, podjęło na siebie misję kompleksowego rozwoju jednej z najbardziej
                                charakterystycznych miejscowości na Podhalu. Ząb, będąc najwyżej położoną wsią w
                                Polsce, zasługuje na szczególną uwagę, nie tylko ze względu na swoje położenie, ale
                                i bogatą kulturę, tradycje oraz niewykorzystany jeszcze w pełni potencjał
                                turystyczny i gospodarczy.</x-ui.paragraph>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/zab.jpg') }}" alt="zdjęcie przedstawiające Ząb"
                            class="aspect-video w-full max-h-[500px]" loading="lazy">
                    </div>
                </header>

                <div class="space-y-6 lg:space-y-12">
                    <div class="space-y-2">
                        <h3 class="font-bold">Cele i Misja Stowarzyszenia</h3>
                        <x-ui.paragraph>Głównym celem Stowarzyszenia jest aktywizacja gospodarcza, turystyczna,
                            cywilizacyjna oraz
                            społeczna Wsi Ząb i jej okolic. Wizja ta realizowana jest poprzez szereg działań mających na
                            celu nie tylko promocję regionu, ale także wspieranie lokalnej przedsiębiorczości, innowacji
                            oraz ochronę dziedzictwa kulturowego i przyrodniczego.</x-ui.paragraph>
                    </div>

                    <div class="space-y-2">
                        <h3 class="font-bold"> Strategie Działania</h3>
                        <x-ui.paragraph>Stowarzyszenie aktywnie współpracuje z władzami samorządowymi, administracją
                            państwową, organizacjami pozarządowymi oraz podmiotami gospodarczymi zarówno na poziomie
                            lokalnym, jak i międzynarodowym. Inicjatywy takie jak zgłaszanie propozycji regulacji
                            prawnych, finansowych, organizacyjnych, czy podejmowanie przedsięwzięć gospodarczych, mają
                            na celu nie tylko rozwój Wsi Ząb, ale także jej okolicy. Promocja regionu odbywa się przez
                            udział w krajowych i międzynarodowych targach turystycznych, wydawanie katalogów,
                            informatorów oraz poprzez aktywną obecność w internecie na stronie
                            kochamząb.pl.</x-ui.paragraph>
                    </div>

                    <div class="space-y-2">
                        <h3 class="font-bold text-lg "> Realizacja Celów</h3>
                        <x-ui.paragraph>Stowarzyszenie szczególnie skupia się na:</x-ui.paragraph>
                        <ul class="list-disc list-inside text-lg font-light pt-2">
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

                    <div class="space-y-2">
                        <h3 class="font-bold text-lg"> Zarząd Stowarzyszenia</h3>
                        <x-ui.paragraph>Na czele Stowarzyszenia stoi Zarząd, w którego skład wchodzą:</x-ui.paragraph>
                        <ul class="list-disc list-inside text-lg font-light pt-2">
                            <li>Michał Sobański – Prezes,</li>
                            <li>Czesław Błachuta – Wiceprezes,</li>
                            <li>Stanisław Staszel – Wiceprezes,</li>
                            <li>Agnieszka Rydlewska – Skarbnik.</li>
                        </ul>
                    </div>
                    <x-ui.paragraph>Dzięki ich zaangażowaniu i determinacji, Stowarzyszenie Promocji i Rozwoju Wsi Ząb i
                        Okolicy sukcesywnie wprowadza zmiany, które przekładają się na zwiększenie
                        atrakcyjności regionu, zarówno dla mieszkańców, jak i turystów. Poprzez realizację
                        ambitnych celów, Stowarzyszenie skutecznie przyczynia się do rozwoju lokalnej
                        społeczności, gospodarki, i ochrony dziedzictwa kulturowego oraz naturalnego
                        Podhala.</x-ui.paragraph>



                </div>

            </article>
        </x-base.section>

        <!--HERO-BOTTOM-->
        <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />

    </x-slot:main>
</x-layouts.app>
