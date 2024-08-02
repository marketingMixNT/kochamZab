@props(['class'=>''])

<h1 class="text-fontLight text-4xl sm:text-5xl  md:text-6xl 2xl:text-7xl font-semibold {{$class}}" >
    {{ $slot }}
</h1>
