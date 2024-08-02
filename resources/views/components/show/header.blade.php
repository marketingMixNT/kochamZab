@props(['item'])

<header
    class="relative w-full h-[calc(100vh-190px)] bg-blend-multiply bg-fixed bg-no-repeat bg-cover bg-center  bg-gray-500  text-center"
    style="background-image: url({{ asset($item->getThumbnailUrl()) }})">



    <x-ui.header-heading class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2">
        {{ $item->title }}</x-ui.header-heading>
</header>
