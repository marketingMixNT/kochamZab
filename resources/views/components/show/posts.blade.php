@if ($item->posts->count() > 0)
<x-base.section narrow class="max-w-screen-xl mx-auto py-24">

    <x-ui.heading>Artykuły</x-ui.heading>

    <x-base.loop-grid class="md:opacity-0 fade-in">

        @foreach ($item->posts->take(3) as $post)
            <x-post-card :post="$post" />
        @endforeach
    </x-base.loop-grid>
</x-base.section>
@endif