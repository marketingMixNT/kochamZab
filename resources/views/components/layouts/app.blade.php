@props(['title', 'description', 'noFollow' => false])


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>

    <!-- meta -->
    @include('partials.meta')
    <!-- favicon -->
    @include('partials.favicon')
    <!-- google fonts -->
    @include('partials.fonts')


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="relative bg-bgLight-400 dark:bg-bgDark-400  font-text  text-fontDark dark:text-fontLight  overflow-x-hidden ">

    <x-preloader />
    <x-shared.header.topbar />
    <x-shared.header.navbar />

    <main>
        {{ $slot }}
    </main>

    <x-shared.footer />



</body>

</html>
