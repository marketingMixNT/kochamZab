<x-layouts.app title="Atrakcje w Zębie | Kocham Ząb"
    description="Odkryj najciekawsze atrakcje w Zębie. Zwiedzaj malownicze szlaki, zabytki i lokalne atrakcje turystyczne z Kocham Ząb.">


    <x-banner>Atrakcje</x-banner>

    <section class="max-w-screen-2xl mx-auto py-20 px-6 sm:px-12 2xl:px-0 ">
        <x-home.loop-grid>

            @foreach ($attractions as $attraction)
                <x-home.attraction-card :attraction="$attraction" />
            @endforeach
        </x-home.loop-grid>

        {{ $attractions->links('vendor.pagination.tailwind') }}

    </section>

    <!--HERO-BOTTOM-->
    <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />





</x-layouts.app>
