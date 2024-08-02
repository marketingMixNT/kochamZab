<x-layouts.app title="Wydarzenia w Zębie | Kocham Ząb"
    description="Bądź na bieżąco z najnowszymi wydarzeniami w Zębie. Odkryj lokalne imprezy, festiwale i spotkania społeczności z Kocham Ząb.">


<x-slot:header>
    <x-banner img="{{asset('assets/images/attraction.webp')}}" alt="Aktualności" >Aktualności</x-banner>

</x-slot:header>

<x-slot:main>
    <x-base.section >
        <x-base.loop-grid>

            @foreach ($posts as $post)
                <x-post-card :post="$post" />
            @endforeach
        </x-base.loop-grid>

        {{ $posts->links('vendor.pagination.tailwind') }}

        <x-ui.link-btn href="{{ route('blog.archive') }}" class="mt-8" >zobacz archiwum</x-ui.link-btn>


    </x-base.section>

    <!--HERO-BOTTOM-->
    <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />
</x-slot:main>
</x-layouts.app>
