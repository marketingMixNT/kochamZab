<x-layouts.app title="Atrakcje w Zębie | Kocham Ząb"
    description="Odkryj najciekawsze atrakcje w Zębie. Zwiedzaj malownicze szlaki, zabytki i lokalne atrakcje turystyczne z Kocham Ząb.">


    <x-slot:header>
        <x-banner img="{{asset('assets/images/attraction.webp')}}">Atrakcje</x-banner>

    </x-slot:header>

    <x-slot:main>
    <x-base.section >
        <x-base.loop-grid>

            @foreach ($attractions as $attraction)
                <x-attraction-card :attraction="$attraction" />
            @endforeach
        </x-base.loop-grid>

        {{ $attractions->links('vendor.pagination.tailwind') }}

    </x-base.section>

    <!--HERO-BOTTOM-->
    <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />

    </x-slot:main>



</x-layouts.app>
