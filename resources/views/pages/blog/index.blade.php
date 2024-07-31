<x-layouts.app title="Wydarzenia w Zębie | Kocham Ząb"
    description="Bądź na bieżąco z najnowszymi wydarzeniami w Zębie. Odkryj lokalne imprezy, festiwale i spotkania społeczności z Kocham Ząb.">




    <x-banner >Aktualności</x-banner>

    <section class="max-w-screen-2xl mx-auto py-20 px-6 sm:px-12 2xl:px-0 ">
        <x-home.loop-grid>

            @foreach ($posts as $post)
                <x-home.post-card :post="$post" />
            @endforeach
        </x-home.loop-grid>

        {{ $posts->links('vendor.pagination.tailwind') }}

    </section>

    <!--HERO-BOTTOM-->
    <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />

</x-layouts.app>
