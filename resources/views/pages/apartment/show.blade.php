<x-layouts.app title="{{ $apartment->getMetaTitle() }}" description="{{ $apartment->getMetaDesc() }}">

    <x-slot:header>
        <x-show.header :item="$apartment" />
    </x-slot:header>

    <x-slot:main>

        {{-- info --}}
        <x-show.info :item="$apartment" />

        {{-- description --}}
        <x-show.description :item="$apartment" />

        {{-- gallery --}}
        <x-show.gallery :item="$apartment" />

        {{-- posts --}}
        <x-show.posts :item="$apartment" />

        {{-- contact --}}
        <x-show.contact :item="$apartment" />

        {{-- other attractions --}}
        <x-show.other title="Podobne restauracje">
            @foreach ($filteredApartments as $apartment)
                <x-apartment-card :apartment="$apartment" />
            @endforeach
        </x-show.other>

    </x-slot:main>

</x-layouts.app>
