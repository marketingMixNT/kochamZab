<x-layouts.app title="Archiwum wydarzeń w Zębie | Kocham Ząb"
    description="Zobacz wszystkie wydarzenia w Zębie. Odkryj lokalne imprezy, festiwale i spotkania społeczności z Kocham Ząb.">


<x-slot:header>
    <x-banner img="{{asset('assets/images/attraction.webp')}}" alt="Aktualności" >Archiwum wydarzeń</x-banner>

</x-slot:header>

<x-slot:main>
    <x-base.section >
        <x-base.loop-grid>

            @foreach ($posts as $post)
                <x-post-card :post="$post" />
            @endforeach
        </x-base.loop-grid>

        {{ $posts->links('vendor.pagination.tailwind') }}

    </x-base.section>

    <!--HERO-BOTTOM-->
    <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />
</x-slot:main>
</x-layouts.app>
