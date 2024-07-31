@props(['apartment'])




<div class="flex flex-col  h-full  shadow-lg hover:shadow-2xl duration-500 group  ">
    <a href="{{ route('blog.show', $apartment->slug) }}" class="flex flex-col h-full  rounded-lg overflow-hidden">
        {{-- thumbnail --}}
        <div class="overflow-hidden ">
            <img src="{{ $apartment->getThumbnailUrl() }}" alt="miniaturka postu o tytule {{ $apartment->title }}" loading="lazy"
                class=" w-full h-full object-cover group-hover:scale-110 duration-500 max-h-[400px]">
        </div>
        {{-- text --}}
        <div class="p-6 flex flex-col justify-between flex-grow gap-8 dark:bg-bgDark-200 ">
            <h2 class="text-2xl text-fontBlue  dark:text-fontLight font-bold ">{{ $apartment->title }}</h2>
            <p class="flex-grow inline-block lg:hidden 2xl:inline-block">{{ $apartment->getExcerpt() }}</p>
            {{-- <span class="text-sm text-fontOrange">{{ $apartment->getPublishedDate() }}</span> --}}
        </div>
    </a>
</div>

