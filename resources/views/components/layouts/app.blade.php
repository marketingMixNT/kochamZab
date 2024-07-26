@props(['title', 'description', 'noFollow' => false])


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    {{-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> --}}
     <!-- meta -->
     @include('partials.meta')
    <!-- favicon -->
    @include('partials.favicon')
    {{-- assets --}}
    @include('partials.assets')
    <!-- google fonts -->
    @include('partials.fonts')
   

    @vite(["resources/css/style.css", "resources/js/app.js"])
</head>

<body class="home">

    <x-preloader />

    <div id="page" class="full-page">

        <x-header />

        <main id="content" class="site-main">
            {{ $slot }}
        </main>

        <x-footer />

    </div>
    
    <x-back-to-top />
    @include('partials.scripts')
</body>

</html>
