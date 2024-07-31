@props(['post'])

<div class="w-full  md:w-3/4 lg:w-full  flex flex-col  h-full mx-auto  shadow-lg hover:shadow-2xl duration-500 group  ">
    <a href="{{ route('blog.show', $post->slug) }}" class="flex flex-col h-full  rounded-lg overflow-hidden">
        {{-- thumbnail --}}
        <div class="overflow-hidden ">
            <img src="{{ $post->getThumbnailUrl() }}" alt="miniaturka postu o tytule {{ $post->title }}" loading="lazy"
                class=" w-full h-full object-cover group-hover:scale-110 duration-500 max-h-[400px]">
        </div>
        {{-- text --}}
        <div class=" flex flex-col justify-between flex-grow gap-8 p-6 bg-bgLight-200 dark:bg-bgDark-200 ">
            <h2 class="text-2xl text-fontBlue  dark:text-fontLight font-semibold ">{{ $post->title }}</h2>
            <p class="inline-block lg:hidden 2xl:inline-block flex-grow   font-light ">{{ $post->getExcerpt() }}</p>

          
                
            <span class="text-sm text-fontOrange">{{ $post->getPublishedDate() }}</span>
           
        </div>
    </a>
</div>
