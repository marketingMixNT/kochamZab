<x-base.section narrow class="max-w-screen-xl mx-auto py-24">
    <x-ui.heading>Kontakt</x-ui.heading>
    <div class="flex flex-col lg:flex-row justify-center items-center gap-y-12">

        {{-- text --}}
        <div class="w-full lg:w-[40%] flex flex-col justify-end items-start lg:p-12 gap-4">

            @if ($item->address)
                <div
                    class="w-full flex flex-col justify-center items-center text-center lg:justify-start lg:items-start gap-2 ">
                    <h2 class=" text-xl font-bold">Adres</h2>
                    <div class="flex justify-center lg:justify-start items-center gap-2 ml-2">

                        <a href="{{ $item->google_maps_link }}" class="link-hover">{{ $item->address }}</a>
                    </div>

                </div>
            @endif

            @if ($item->phone || $item->mail)
                <div
                    class="w-full flex flex-col justify-center items-center text-center lg:justify-start lg:items-start gap-2 ">
                    <h2 class=" text-xl font-bold">Kontakt</h2>
                    @if ($item->phone)
                        <div class="flex justify-start items-center gap-2 ml-2">
                            <x-iconpark-phonetelephone-o class="w-5 mt-[2px]" />
                            <a href="tel:+48{{ $item->phone }}" class="link-hover">+48{{ $item->phone }}</a>
                        </div>
                    @endif
                    @if ($item->mail)
                        <div class="flex justify-start items-center gap-2 ml-2">
                            <x-iconpark-mail-o class="w-5 mt-[2px]" />
                            <a href="mailto:{{ $item->mail }}" class="link-hover">{{ $item->email }}</a>
                        </div>
                    @endif
                </div>
            @endif

            @if ($item->socials->count() > 0)
                <div
                    class="w-full flex flex-col justify-center items-center text-center lg:justify-start lg:items-start gap-2 ">
                    <h2 class=" text-xl font-bold">Social Media</h2>
                    <div class="flex justify-center items-center gap-4">
                        @foreach ($item->socials as $social)
                            <x-ui.social :social="$social" />
                        @endforeach
                    </div>
                </div>
            @endif

            @if ($item->site_link)
                <div class="w-full flex flex-col justify-center items-center  lg:justify-start lg:items-start gap-2 ">
                    <h2 class=" text-xl font-bold">Strona Internetowa</h2>
                    <div class="flex justify-start items-center gap-2 ml-2">

                        <a href="{{ $item->site_link }}" class="link-hover">{{ $item->site_link }}</a>
                    </div>

                </div>
            @endif



        </div>
        {{-- google maps iframe --}}
        <div class="w-full lg:w-[60%] h-[500px] md:opacity-0 fade-in">
            {!! $item->google_maps_frame !!}
        </div>
    </div>
</x-base.section>
