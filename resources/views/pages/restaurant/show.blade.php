<x-layouts.app title="{{ $restaurant->getMetaTitle() }}" description="{{ $restaurant->getMetaDesc() }}">

    <x-slot:header>
        <x-show.header :item="$restaurant" />
    </x-slot:header>

    <x-slot:main>

        {{-- info --}}
        <x-show.info :item="$restaurant" />

        {{-- description --}}
        <x-show.description :item="$restaurant" />

        {{-- gallery --}}
        <x-show.gallery :item="$restaurant" />

        {{-- posts --}}
        <x-show.posts :item="$restaurant" />

        {{-- contact --}}
        <x-show.contact :item="$restaurant" />

        {{-- other attractions --}}
        <x-show.other title="Podobne restauracje">
            @foreach ($filteredRestaurants as $restaurant)
                <x-restaurant-card :restaurant="$restaurant" />
            @endforeach
        </x-show.other>

    </x-slot:main>

</x-layouts.app>
