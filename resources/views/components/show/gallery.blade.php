<section class="py-5">

    {{-- heading --}}
    <div class="max-w-screen-xl mx-auto  px-6 md:px-12 2xl:px-0 text-center">
        <x-ui.heading>Galeria</x-ui.heading>

    </div>

    {{-- swiper --}}
    <div class="swiper attraction-gallery-swiper">
        <div class="py-10  swiper-wrapper">

            @foreach ($item->gallery as $img)
                <a data-fslightbox href="{{ asset('storage/' . $img) }}" class=" swiper-slide">

                    <img src="{{ asset('storage/' . $img) }}"
                        alt="zdjęcie przedstawiające  {{ $item->title }}"
                        class=" h-full w-full object-cover aspect-square" loading="lazy">
                </a>
            @endforeach
        </div>


    </div>
</section>