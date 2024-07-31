<x-layouts.app title="{{ $attraction->getMetaTitle() }}" description="{{ $attraction->getMetaDesc() }}">

   
{{-- thumbnail --}}
<div class="relative w-full h-[calc(100vh-190px)] bg-blend-multiply bg-fixed bg-no-repeat bg-cover bg-center  bg-gray-400  text-center"
    style="background-image: url({{ asset($attraction->getThumbnailUrl()) }})">

    <h1
        class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 text-4xl xs:text-5xl md:text-6xl 2xl:text-7xl font-bold text-fontLight">
        {{ $attraction->title }}</h1>
</div>

{{-- info --}}
<section class="max-w-screen-lg mx-auto py-24">
    {{-- CONTAINER --}}
    
     
        {{-- INFO --}}
        <div
            class="w-full flex h-full gap-y-8 gap-x-24">
            {{-- ADDRESS --}}
            <div>
                <h2 class="font-bold">Adres</h2>
                <a href="{{ $attraction->google_maps_link }}" target="_blank"
                    class="link-hover">{{ $attraction->address }}</a>
            </div>
            {{-- CONTACT --}}
            <div class="flex flex-col justify-start items-start gap-2 ">
                <h2 class="font-bold">Kontakt</h2>
                <div class="flex justify-start items-center gap-2 ml-2">
                    <x-iconpark-phonetelephone-o class="w-5 mt-[2px]" />
                    <a href="tel:+48{{ $attraction->phone }}" class="link-hover">+48{{ $attraction->phone }}</a>
                </div>
                <div class="flex justify-start items-center gap-2 ml-2">
                    <x-iconpark-mail-o class="w-5 mt-[2px]" />
                    <a href="mailto:{{ $attraction->mail }}" class="link-hover">{{ $attraction->email }}</a>
                </div>
            </div>
            {{-- SOCIALS --}}
            @if ($attraction->socials)
                <div class="flex flex-col justify-start items-start gap-2 ">
                    <h2 class="font-bold">Social Media</h2>

                    <x-socials :social="$attraction" />
                </div>
            @endif
            {{-- SITE LINK --}}
            <div class="flex justify-start items-center">
                <x-link-btn  :href="$attraction->site_link" target="_blank">Zobacz stronę</x-link-btn>
            </div>
        </div>
   

</section>


{{-- description --}}
<section class="max-w-screen-xl mx-auto py-24">

    <div class="flex flex-col lg:flex-row">

        <div class="w-full lg:w-[55%] flex flex-col gap-y-12 relative">


            @foreach (collect($attraction->gallery)->slice(0, 3) as $img)
                <img src="{{ asset('storage/' . $img) }}" alt="Gallery image" class="w-full sticky top-12 aspect-square md:aspect-video" width="1920" height="1080" loading="lazy">
            @endforeach

        </div>
        <div class="w-full lg:w-[45%] lg:pl-12 prose relative">

            <div class="sticky top-12  ">

                {!! $attraction->desc !!}
            </div>
        </div>
    </div>


</section>

{{-- gallery --}}

<section class="py-10 sm:py-20">

    {{-- heading --}}
    <div class="max-w-screen-xl mx-auto px-6 md:px-16 2xl:px-0">
        {{-- <x-base.heading-third heading="Galeria"
            subheading="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet tristique massa," /> --}}
            <h2>Galeria</h2>
    </div>

    {{-- swiper --}}
    <div class="swiper attraction-gallery-swiper">
        <div class="py-20  swiper-wrapper">

            @foreach ($attraction->gallery as $img)
                <a data-fslightbox href="{{ asset('storage/' . $img) }}" class=" swiper-slide">

                    <img src="{{ asset('storage/' . $img) }}" alt=""
                        class=" h-full w-full object-cover aspect-square">
                </a>
            @endforeach
        </div>

        {{-- nav --}}
        {{-- <nav class="absolute right-8 bottom-4 flex justify-center items-center gap-2 z-50">

            <x-navigate-button direction="left" indicator="attraction-gallery-prev" />
            <x-navigate-button direction="right" indicator="attraction-gallery-next" />



        </nav> --}}
    </div>
</section>

{{-- posts --}}
<section class="max-w-screen-xl mx-auto py-24">

    <div class="flex flex-col gap-16 justify-start items-start">


      
            {{-- <x-base.heading-third heading="Artykuły "
                subheading="Przeczytaj artykuły dotyczące atrakcji bla bla bla" /> --}}

                <h3>Posty</h3>
 


    <div class="flex flex-col lg:flex-row flex-1 items-start gap-x-12 w-full">

           
        @foreach ($attraction->posts as $post)
               
        <x-home.post-card :post="$post" />
        @endforeach
        {{-- <div class="swiper attraction-posts-swiper">
            <div class="swiper-wrapper">
                


            </div>
            <div class="swiper-pagination"></div>
        </div> --}}
    </div>


        

        </div>
       
    </div>

</section>

{{-- contact --}}

<section class="max-w-screen-xl mx-auto py-24">

    <div class="flex flex-col gap-8 lg:gap-16 ">


        {{-- <x-base.heading-third heading="Kontakt"
            subheading="Dane adresowe itd. bla bla bla" /> --}}
            <h2>Kontakt</h2>

        <div class="flex flex-col lg:flex-row justify-center items-center">

            {{-- text --}}
            <div class="w-full lg:w-[40%] flex flex-col justify-end items-start p-12 gap-4">
                <x-iconpark-mapdraw class="text-fontDark dark:text-fontLight w-8" />

                <div class="flex justify-center items-center gap-1">
                    <a class="text-xl font-semibold link-hover" href="{{ $attraction->link }}">{{ $attraction->name }}</a>
                    <x-iconpark-arrowrightup-o class="w-6 text-fontDark dark:text-fontLight" />


                </div>
                <span class="ml-2">{{ $attraction->address }}</span>
                <div class="flex flex-col justify-start items-start gap-2 ">
                    <h2 class="font-bold">Kontakt</h2>
                    <div class="flex justify-start items-center gap-2 ml-2">
                        <x-iconpark-phonetelephone-o class="w-5 mt-[2px]" />
                        <a href="tel:+48{{ $attraction->phone }}" class="link-hover">+48{{ $attraction->phone }}</a>
                    </div>
                    <div class="flex justify-start items-center gap-2 ml-2">
                        <x-iconpark-mail-o class="w-5 mt-[2px]" />
                        <a href="mailto:{{ $attraction->mail }}" class="link-hover">{{ $attraction->email }}</a>
                    </div>
                </div>
                @if ($attraction->socials)
                    <div class="flex flex-col justify-start items-start gap-2 ">
                        <h2 class="font-bold">Social Media</h2>
                        <x-socials :social="$attraction" />
                    </div>
                @endif
                <div class="flex flex-col justify-start items-start gap-2 ">
                    <h2 class="font-bold">Strona internetowa</h2>
                    <div class="flex justify-start items-center gap-2 ml-2">
                        
                        <a href="{{ $attraction->site_link }}" class="link-hover">{{ $attraction->site_link }}</a>
                    </div>
                   
                </div>

               


            </div>
            {{-- google maps iframe --}}
            <div class="w-full lg:w-[60%] h-[500px]">
                {!! $attraction->google_maps_frame !!}
            </div>
        </div>

    </div>

</section>

{{-- other attractions --}}
<section class="max-w-screen-xl mx-auto py-24">

    <div class="flex flex-col gap-16 justify-start items-start">
        {{-- <x-base.heading-third heading="Podobne atrakcje"
            subheading="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet tristique massa," /> --}}

            <h2>Podobne</h2>

        <div class="flex flex-col lg:flex-row  items-start gap-12  w-full">

            @foreach ($filteredAttractions as $attraction)
            <x-home.attraction-card  :attraction="$attraction" class="flex-1" />
        @endforeach

        </div>

    </div>

   


</section>
 
</x-layouts.app>
