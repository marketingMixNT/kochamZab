<x-home.section>
    {{-- text --}}
    <x-home.text-box subheading="Wydarzenia" heading="Sprawdź co słychać w Zębie">Ząb to miejsce pełne życia i niezwykłych
        wydarzeń. W naszej sekcji „Co słychać w Zębie” znajdziesz najnowsze informacje o lokalnych imprezach,
        festiwalach, koncertach i spotkaniach społeczności. Niezależnie od pory roku, w Zębie zawsze dzieje się coś
        ciekawego!</x-home.text-box>
    {{-- loop --}}
    <x-home.loop-grid>
        @foreach ($posts as $post)
            <x-home.post-card :post="$post" />
        @endforeach

    </x-home.loop-grid>
    
    <x-link-btn href="{{ route('blog.index') }}" class="mt-8" >zobacz aktualne wydarzenia</x-link-btn>

</x-home.section>
