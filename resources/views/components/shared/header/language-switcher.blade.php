@props(['class' => ''])

<ul class="language-switcher flex items-center gap-4 text-fontLight {{$class}}">
    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{ $localeCode }}"
                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="md:text-xl lg:text-sm hover:text-secondary-400 duration-500">
                {{ strtoupper($localeCode) }}
            </a>
        </li>
    @endforeach
</ul>
