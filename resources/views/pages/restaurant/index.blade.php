<x-layouts.app title="Restauracje w Zębie | Kocham Ząb" description="Poznaj najlepsze restauracje w Zębie. Odkryj lokalne smaki i delektuj się wyśmienitymi potrawami w urokliwych miejscach z Kocham Ząb.">
  

    <x-slot:header>
    <x-banner img="{{asset('assets/images/restaurant.webp')}}">Gastronomia</x-banner>

</x-slot:header>

<x-slot:main>
    <x-base.section >
        <x-base.loop-grid>

            @foreach ($restaurants as $restaurant)
                <x-restaurant-card :restaurant="$restaurant" />
            @endforeach
        </x-base.loop-grid>

        {{ $restaurants->links('vendor.pagination.tailwind') }}

    </x-base.section>

    <!--HERO-BOTTOM-->
    <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />

</x-slot:main>



</x-layouts.app>
