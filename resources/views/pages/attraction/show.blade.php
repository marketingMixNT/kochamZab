<x-layouts.app title="{{ $attraction->getMetaTitle() }}" description="{{ $attraction->getMetaDesc() }}">

    <x-slot:header>
        <x-show.header :item="$attraction" />
    </x-slot:header>

    <x-slot:main>

        {{-- info --}}
        <x-show.info :item="$attraction" />

        {{-- description --}}
        <x-show.description :item="$attraction" />

        {{-- gallery --}}
        <x-show.gallery :item="$attraction" />

        {{-- posts --}}
        <x-show.posts :item="$attraction" />

        {{-- contact --}}
        <x-show.contact :item="$attraction" />

        {{-- other attractions --}}
        <x-show.other title="Podobne atrakcje">
            @foreach ($filteredAttractions as $attraction)
                <x-attraction-card :attraction="$attraction" />
            @endforeach
        </x-show.other>

    </x-slot:main>
    
</x-layouts.app>
