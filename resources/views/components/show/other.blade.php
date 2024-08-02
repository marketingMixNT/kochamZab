<x-base.section narrow class="max-w-screen-xl mx-auto pb-20">

    <x-ui.heading> {{ $title }}</x-ui.heading>

    <x-base.loop-grid class="md:opacity-0 fade-in">

        {{ $slot }}
    </x-base.loop-grid>


</x-base.section>
