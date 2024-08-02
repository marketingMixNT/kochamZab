<header class="h-[calc(100vh-90px)] md:h-[calc(100vh-90px)]  lg:h-[calc(100vh-140px)]  ">
    {{-- SLIDES --}}
    <div class=" swiper home-slides-swiper h-full w-full">
        <div class=" swiper-wrapper w-full h-full">


            @foreach ($slides as $slide)
                <div class="swiper-slide">

                    <div class="w-full h-full flex justify-center items-center bg-cover bg-center bg-no-repeat bg-fixed bg-blend-multiply bg-gray-400 hover:bg-gray-500 duration-500"
                        style="background-image: url({{ $slide->getImageUrl() }});">
                        <div
                            class="max-w-screen-lg mx-auto text-center flex flex-col justify-center items-center gap-12 px-6 2xl:px-0">

                            <x-ui.header-heading>{{ $slide->title }}</x-ui.header-heading>

                            <p class="text-fontLight text-base lg:text-lg lg:font-normal">{{ $slide->content }}</p>

                            @if ($slide->link)
                                <x-ui.link-btn class="mt-6 2xl:mt-12" href="{{ $slide->link }}">Więcej
                                    informacji</x-ui.link-btn>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</header>
