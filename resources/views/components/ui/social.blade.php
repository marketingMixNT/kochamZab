@props(['social'])


@if ($social->name == 'facebook')
    <a href="{{ $social->link }}" target="_blank" aria-label="link do facebooka">
        <x-iconpark-facebook-o    class="w-6 text-fontDark dark:text-fontLight hover-scale" />
    </a>
@endif

@if ($social->name == 'instagram')
    <a href="{{ $social->link }}" target="_blank" aria-label="link do instagrama">
        <x-iconpark-instagram-o class="w-6 text-fontDark dark:text-fontLight hover-scale" />
    </a>
@endif

@if ($social->name == 'twitter')
    <a href="{{ $social->link }}" target="_blank" aria-label="link do twittera">
        <x-iconpark-twitter-o class="w-6 text-fontDark dark:text-fontLight hover-scale" />
    </a>
@endif

@if ($social->name == 'tiktok')
    <a href="{{ $social->link }}" target="_blank" aria-label="link do tiktoka">
        <x-iconpark-tiktok-o class="w-6 text-fontDark dark:text-fontLight hover-scale" />
    </a>
@endif

@if ($social->name == 'youtube')
    <a href="{{ $social->link }}" target="_blank" aria-label="link do youtube">
        <x-iconpark-youtube-o class="w-6 text-fontDark dark:text-fontLight hover-scale" />
    </a>
@endif

@if ($social->name == 'tripadvisor')
    <a href="{{ $social->link }}" target="_blank" aria-label="link do tripadvisora">
        <x-lineawesome-tripadvisor class="w-6 text-fontDark dark:text-fontLight hover-scale" />
    </a>
@endif

@if ($social->name == 'linkedin')
    <a href="{{ $social->link }}" target="_blank" aria-label="link do linkedin">
        <x-iconpark-instagramone-o class="w-6 text-fontDark dark:text-fontLight hover-scale" />
    </a>
@endif

@if ($social->name == 'booking')
    <a href="{{ $social->link }}" target="_blank" aria-label="link do booking">
        <x-tabler-brand-booking class="w-6 text-fontDark dark:text-fontLight hover-scale" />
    </a>
@endif
