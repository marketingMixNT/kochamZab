<x-layouts.app title="{{ $apartment->getMetaTitle() }}" description="{{ $apartment->getMetaDesc() }}">

    <x-slot:header>

        <header
            class="relative w-full h-[calc(100vh-190px)] bg-blend-multiply bg-fixed bg-no-repeat bg-cover bg-center  bg-gray-400  text-center"
            style="background-image: url({{ asset($apartment->getThumbnailUrl()) }})">



            <x-ui.header-heading class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2">
                {{ $apartment->title }}</x-ui.header-heading>
        </header>
    </x-slot:header>


    <x-slot:main>

        {{-- info --}}
        <x-base.section class="max-w-screen-2xl mx-auto">
            {{-- CONTAINER --}}


            <div
                class="w-full flex flex-col lg:flex-row flex-wrap justify-center items-center lg:items-start h-full gap-y-10 gap-x-32">
                {{-- ADDRESS --}}
                <div class="flex flex-col justify-center items-center gap-3">
                    <h2 class=" text-xl font-bold">Adres</h2>
                    <a href="{{ $apartment->google_maps_link }}" target="_blank"
                        class="link-hover">{{ $apartment->address }}</a>
                </div>

                {{-- SOCIALS --}}
                @if ($apartment->socials->count() > 0)
                    <div class="flex flex-col justify-center items-center gap-3 ">
                        <h2 class=" text-xl font-bold">Social Media</h2>
                        <div class="flex justify-center items-center gap-4">
                            @foreach ($apartment->socials as $social)
                                <x-ui.social :social="$social" />
                            @endforeach
                        </div>
                    </div>
                @endif
                {{-- SITE --}}
                <div class="flex flex-col justify-center items-center gap-3">
                    <h2 class=" text-xl font-bold">Strona</h2>
                    <a href="{{ $apartment->site_link }}" target="_blank"
                        class="link-hover">{{ $apartment->site_link }}</a>
                </div>
            </div>


        </x-base.section>


        {{-- description --}}
        <x-base.section narrow class="max-w-screen-xl mx-auto ">

            <div class="flex flex-col lg:flex-row gap-y-12">

                <div class="w-full lg:w-[55%] flex flex-col gap-y-12 relative lg:px-12">


                    @foreach (collect($apartment->gallery)->slice(0, 3) as $img)
                        <img src="{{ asset('storage/' . $img) }}" alt="zdjęcie przedstawiające  {{ $apartment->title }}"
                            class="w-full sticky top-12 aspect-square max-h-[500px] object-cover" loading="lazy">
                    @endforeach

                </div>
                <div class="w-full lg:w-[45%] lg:pl-12  relative">

                    <div class="prose">

                        {!! $apartment->desc !!}
                    </div>
                </div>
            </div>


        </x-base.section>

        {{-- gallery --}}
        <section class="py-5">

            {{-- heading --}}
            <div class="max-w-screen-xl mx-auto  px-6 md:px-12 2xl:px-0 text-center">
                <x-ui.heading>Galeria</x-ui.heading>

            </div>

            {{-- swiper --}}
            <div class="swiper attraction-gallery-swiper">
                <div class="py-10  swiper-wrapper">

                    @foreach ($apartment->gallery as $img)
                        <a data-fslightbox href="{{ asset('storage/' . $img) }}" class=" swiper-slide">

                            <img src="{{ asset('storage/' . $img) }}"
                                alt="zdjęcie przedstawiające  {{ $apartment->title }}"
                                class=" h-full w-full object-cover aspect-square" loading="lazy">
                        </a>
                    @endforeach
                </div>


            </div>
        </section>


        {{-- posts --}}
        @if ($apartment->posts->count() > 0)
            <x-base.section narrow class="max-w-screen-xl mx-auto py-24">

                <x-ui.heading>Artykuły</x-ui.heading>

                <x-base.loop-grid>

                    @foreach ($apartment->posts as $post)
                        <x-post-card :post="$post" />
                    @endforeach
                </x-base.loop-grid>
            </x-base.section>
        @endif
        {{-- contact --}}

        <x-base.section narrow class="max-w-screen-xl mx-auto py-24">
            <x-ui.heading>Kontakt</x-ui.heading>
            <div class="flex flex-col lg:flex-row justify-center items-center gap-y-12">

                {{-- text --}}
                <div class="w-full lg:w-[40%] flex flex-col justify-end items-start lg:p-12 gap-4">


                    <div
                        class="w-full flex flex-col justify-center items-center text-center lg:justify-start lg:items-start gap-2 ">
                        <h2 class=" text-xl font-bold">Adres</h2>
                        <div class="flex justify-center lg:justify-start items-center gap-2 ml-2">

                            <a href="{{ $apartment->google_maps_link }}"
                                class="link-hover">{{ $apartment->address }}</a>
                        </div>

                    </div>

                    <div
                        class="w-full flex flex-col justify-center items-center text-center lg:justify-start lg:items-start gap-2 ">
                        <h2 class=" text-xl font-bold">Kontakt</h2>
                        <div class="flex justify-start items-center gap-2 ml-2">
                            <x-iconpark-phonetelephone-o class="w-5 mt-[2px]" />
                            <a href="tel:+48{{ $apartment->phone }}" class="link-hover">+48{{ $apartment->phone }}</a>
                        </div>
                        <div class="flex justify-start items-center gap-2 ml-2">
                            <x-iconpark-mail-o class="w-5 mt-[2px]" />
                            <a href="mailto:{{ $apartment->mail }}" class="link-hover">{{ $apartment->email }}</a>
                        </div>
                    </div>
                    @if ($apartment->socials)
                        <div
                            class="w-full flex flex-col justify-center items-center text-center lg:justify-start lg:items-start gap-2 ">
                            <h2 class=" text-xl font-bold">Social Media</h2>
                            <div class="flex justify-center items-center gap-4">
                                @foreach ($apartment->socials as $social)
                                    <x-ui.social :social="$social" />
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <div
                        class="w-full flex flex-col justify-center items-center  lg:justify-start lg:items-start gap-2 ">
                        <h2 class=" text-xl font-bold">Strona Internetowa</h2>
                        <div class="flex justify-start items-center gap-2 ml-2">

                            <a href="{{ $apartment->site_link }}" class="link-hover">{{ $apartment->site_link }}</a>
                        </div>

                    </div>




                </div>
                {{-- google maps iframe --}}
                <div class="w-full lg:w-[60%] h-[500px]">
                    {!! $apartment->google_maps_frame !!}
                </div>
            </div>
        </x-base.section>

        {{-- other attractions --}}
        <x-base.section narrow class="max-w-screen-xl mx-auto pb-20">

            <x-ui.heading>Podobne apartamenty</x-ui.heading>

            <x-base.loop-grid>

                @foreach ($filteredApartments as $apartment)
                    <x-apartment-card :apartment="$apartment" />
                @endforeach
            </x-base.loop-grid>


        </x-base.section>
    </x-slot:main>
</x-layouts.app>
