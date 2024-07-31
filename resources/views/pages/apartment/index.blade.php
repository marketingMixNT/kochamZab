<x-layouts.app title="Apartamenty w Zębie | Kocham Ząb" description="Znajdź komfortowe apartamenty w Zębie. Wybierz idealne miejsce na nocleg i ciesz się wygodnym wypoczynkiem z Kocham Ząb.">
    

    <x-banner>Noclegi</x-banner>

    <section class="max-w-screen-2xl mx-auto py-20 px-6 sm:px-12 2xl:px-0 ">
        <x-home.loop-grid>

            @foreach ($apartments as $post)
                <x-home.post-card :post="$post" />
            @endforeach
        </x-home.loop-grid>

        {{ $apartments->links('vendor.pagination.tailwind') }}

    </section>

    <!--HERO-BOTTOM-->
    <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />





</x-layouts.app>
