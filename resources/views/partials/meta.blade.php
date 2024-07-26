<meta charset="utf-8">
<meta name="application-name" content="{{ config('app.name') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

{{-- title & desc --}}
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">

{{-- other --}}
<meta name="keywords" content="atrakcje w Zębie, restauracje w Zębie, hotele w Zębie, aktualności Ząb, turystyka Ząb, wypoczynek Ząb">
<meta name="author" content="Kocham Ząb">

{{-- nofollow --}}
@if ($noFollow)
    <meta name="robots" content="noindex, nofollow">
@else
    <meta name="robots" content="index, follow">
@endif

{{-- cannonical --}}
<link rel="canonical" href="{{ url()->current() }}" />

{{-- og --}}
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:url" content="https://www.kochamzab.pl">
<meta property="og:type" content="website">
<meta property="og:image" content="">