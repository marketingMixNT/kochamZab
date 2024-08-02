<x-base.section>
    {{-- text --}}
    <x-base.section-heading-container>
        <x-ui.subheading>Wydarzenia</x-ui.subheading>
        <x-ui.heading>Sprawdź co słychać w Zębie</x-ui.heading>
        <x-ui.section-description>Ząb to miejsce pełne życia i niezwykłych
            wydarzeń. W naszej sekcji „Co słychać w Zębie” znajdziesz najnowsze informacje o lokalnych imprezach,
            festiwalach, koncertach i spotkaniach społeczności. Niezależnie od pory roku, w Zębie zawsze dzieje się coś
            ciekawego!</x-ui.section-description>
    </x-base.section-heading-container>
    {{-- loop --}}
    <x-base.loop-grid class="md:opacity-0 fade-in">
        @foreach ($posts as $post)
            <x-post-card :post="$post" />
        @endforeach

    </x-base.loop-grid>

    <x-ui.link-btn href="{{ route('blog.index') }}" class="mt-2 md:mt-8">zobacz aktualne wydarzenia</x-ui.link-btn>

</x-base.section>
