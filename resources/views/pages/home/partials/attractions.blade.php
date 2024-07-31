<x-base.section narrow >
    {{-- text --}}
    <x-base.section-heading-container>
        <x-ui.subheading>Atrakcje</x-ui.subheading>
        <x-ui.heading>Sprawdź co warto zobaczyć</x-ui.heading>
        <x-ui.section-description>Ząb oferuje wiele wspaniałych atrakcji,
            które zachwycą każdego odwiedzającego. Od malowniczych szlaków turystycznych po historyczne zabytki i
            lokalne
            festiwale - każdy znajdzie tu coś dla siebie.</x-ui.section-description>
    </x-base.section-heading-container>
    {{-- loop --}}
    <x-base.loop-grid>
        @foreach ($attractions as $attraction)
            <x-attraction-card :attraction="$attraction" />
        @endforeach
    </x-base.loop-grid>

    <x-ui.link-btn href="{{ route('attraction.index') }}" class="mt-8">zobacz pozostałe atrakcje</x-ui.link-btn>

</x-base.section>
