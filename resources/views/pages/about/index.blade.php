<x-layouts.app title="O nas | Kocham Ząb"
    description="Dowiedz się więcej o nas i naszej misji. Odkryj, jak promujemy Ząb i wspieramy lokalną społeczność z Kocham Ząb.">


    <x-slot:header>

        <x-banner>O nas</x-banner>

    </x-slot:header>

    <x-slot:main>
        <x-base.section noFlex>
            <x-base.loop-grid>

                {{-- item --}}
                <x-about-card href="{{ route('about.zab') }}" img="{{ asset('assets/images/zab.jpg') }}">O
                    zębie</x-about-card>
                {{-- item --}}
                <x-about-card href="{{ route('about.history') }}"
                    img="{{ asset('assets/images/zab.jpg') }}">Historia</x-about-card>
                {{-- item --}}
                <x-about-card href="{{ route('about.poronin') }}" img="{{ asset('assets/images/zab.jpg') }}">Gmina
                    Poronin</x-about-card>
                {{-- item --}}
                <x-about-card href="{{ route('about.association') }}"
                    img="{{ asset('assets/images/zab.jpg') }}">Stowarzyszenie</x-about-card>
                {{-- item --}}
                <x-about-card href="{{ route('about.zwiazek') }}" img="{{ asset('assets/images/zab.jpg') }}">Związek
                    Podhalan</x-about-card>
                {{-- item --}}
                <x-about-card href="{{ route('about.band') }}" img="{{ asset('assets/images/zab.jpg') }}">Zespół
                    Regionalny Zbójnicek</x-about-card>


            </x-base.loop-grid>

        </x-base.section>

        <!--HERO-BOTTOM-->
        <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />
    </x-slot:main>
</x-layouts.app>
