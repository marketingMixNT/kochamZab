<x-layouts.app title="Apartamenty w Zębie | Kocham Ząb"
    description="Znajdź komfortowe apartamenty w Zębie. Wybierz idealne miejsce na nocleg i ciesz się wygodnym wypoczynkiem z Kocham Ząb.">

    <x-slot:header>
        <x-banner img="{{asset('assets/images/apartment.webp')}}">Apartamenty</x-banner>

    </x-slot:header>

    <x-slot:main>
        <x-base.section>
            <x-base.loop-grid>

                @foreach ($apartments as $apartment)
                    <x-apartment-card :apartment="$apartment" />
                @endforeach
            </x-base.loop-grid>

            {{ $apartments->links('vendor.pagination.tailwind') }}

        </x-base.section>

        <!--HERO-BOTTOM-->
        <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />

    </x-slot:main>



</x-layouts.app>
