<x-layouts.app title="Restauracje w Zębie | Kocham Ząb" description="Poznaj najlepsze restauracje w Zębie. Odkryj lokalne smaki i delektuj się wyśmienitymi potrawami w urokliwych miejscach z Kocham Ząb.">
  

    <x-banner>Gastronomia</x-banner>

    <section class="max-w-screen-2xl mx-auto py-20 px-6 sm:px-12 2xl:px-0 ">
        <x-home.loop-grid>

            @foreach ($restaurants as $post)
                <x-home.post-card :post="$post" />
            @endforeach
        </x-home.loop-grid>

        {{ $restaurants->links('vendor.pagination.tailwind') }}

    </section>

    <!--HERO-BOTTOM-->
    <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />





</x-layouts.app>
