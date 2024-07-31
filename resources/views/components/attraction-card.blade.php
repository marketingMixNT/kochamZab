@props(['attraction'])

<div class="flex flex-col  h-full  shadow-lg hover:shadow-2xl duration-500 group  ">
    <a href="{{ route('attraction.show', $attraction->slug) }}" class="flex flex-col h-full  rounded-lg overflow-hidden">
        {{-- thumbnail --}}
        <div class="overflow-hidden ">
            <img src="{{ $attraction->getThumbnailUrl() }}" alt="miniaturka postu o tytule {{ $attraction->title }}" loading="lazy"
                class=" w-full h-full object-cover group-hover:scale-110 duration-500 max-h-[400px]">
        </div>
        {{-- text --}}
        <div class="p-6 flex flex-col justify-between flex-grow gap-8 bg-bgLight-200 dark:bg-bgDark-200 ">
            <h2 class="text-2xl text-fontBlue  dark:text-fontLight font-bold ">{{ $attraction->title }}</h2>
            <p class="flex-grow inline-block lg:hidden 2xl:inline-block">{{ $attraction->getExcerpt() }}</p>

          
                
            {{-- <span class="text-sm text-fontOrange">{{ $attraction->getPublishedDate() }}</span> --}}
           
        </div>
    </a>
</div>