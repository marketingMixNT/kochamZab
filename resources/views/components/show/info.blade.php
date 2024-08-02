<x-base.section class="max-w-screen-2xl mx-auto">



    <div
        class="w-full flex flex-col lg:flex-row flex-wrap justify-center items-center lg:items-start h-full gap-y-10 gap-x-32 md:opacity-0 fade-in">
        {{-- ADDRESS --}}
        @if ($item->address)
            <div class="flex flex-col justify-center items-center gap-3">
                <h3 class=" text-xl font-bold">Adres</h3>
                <a href="{{ $item->google_maps_link }}" target="_blank"
                    class="link-hover">{{ $item->address }}</a>
            </div>
        @endif

        {{-- SOCIALS --}}
        @if ($item->socials->count() > 0)
            <div class="flex flex-col justify-center items-center gap-3 ">
                <h3 class=" text-xl font-bold">Social Media</h3>
                <div class="flex justify-center items-center gap-4">
                    @foreach ($item->socials as $social)
                        <x-ui.social :social="$social" />
                    @endforeach
                </div>
            </div>
        @endif
        {{-- SITE --}}
        @if ($item->site_link)
            <div class="flex flex-col justify-center items-center gap-3">
                <h3 class=" text-xl font-bold">Strona</h3>
                <a href="{{ $item->site_link }}" target="_blank" class="link-hover">{{ $item->site_link }}</a>
            </div>
    </div>
    @endif


</x-base.section>
