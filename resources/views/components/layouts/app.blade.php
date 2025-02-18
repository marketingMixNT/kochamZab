@props(['title', 'description', 'header', 'main', 'noFollow' => false])


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

    <x-shared.preloader />
    <x-shared.nav.topbar />
    <x-shared.nav.navbar />


    @if (!empty($header))
        {{ $header }}
    @endif


    <main>
        {{ $main }}
    </main>

    <x-shared.footer />

</body>

</html>
