<x-layouts.app title="O nas | Kocham Ząb"
    description="Dowiedz się więcej o nas i naszej misji. Odkryj, jak promujemy Ząb i wspieramy lokalną społeczność z Kocham Ząb.">


    <x-slot:header>

        <x-banner img="{{asset('assets/images/o-nas-1.webp')}}">O nas</x-banner>

    </x-slot:header>

    <x-slot:main>
        <x-base.section noFlex >
            <x-base.loop-grid>

               
                <x-about-card href="{{ route('about.zab') }}" img="{{ asset('assets/images/o-nas-2.webp') }}">O
                    zębie</x-about-card>
               
                <x-about-card href="{{ route('about.history') }}"
                    img="{{ asset('assets/images/o-nas-3.webp') }}">Historia</x-about-card>
                
                <x-about-card href="{{ route('about.poronin') }}" img="{{ asset('assets/images/o-nas-4.webp') }}">Gmina
                    Poronin</x-about-card>
               
                <x-about-card href="{{ route('about.association') }}"
                    img="{{ asset('assets/images/o-nas-5.webp') }}">Stowarzyszenie</x-about-card>
               
                <x-about-card href="{{ route('about.zwiazek') }}" img="{{ asset('assets/images/o-nas-6.webp') }}">Związek
                    Podhalan</x-about-card>
              
                <x-about-card href="{{ route('about.band') }}" img="{{ asset('assets/images/o-nas-7.webp') }}">Zespół
                    Regionalny Zbójnicek</x-about-card>


            </x-base.loop-grid>

        </x-base.section>

      
        <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />
    </x-slot:main>
</x-layouts.app>
