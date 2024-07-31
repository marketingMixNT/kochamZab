<x-layouts.app title="{{ $post->getMetaTitle() }}" description="{{ $post->getMetaDesc() }}">


    <section class="max-w-screen-lg mx-auto py-20 px-6 sm:px-12 2xl:px-0 ">
        <article class="space-y-6">
            <img src="{{ $post->getThumbnailUrl() }}" alt="{{ $post->title }}" class="aspect-video w-full object-cover">

            <div class="text-center space-x-4">

                <h1 class="text-4xl font-bold text-fontBlue dark:text-fontLight ">{{ $post->title }}</h1>
                <span class="text-sm">{{ $post->getPublishedDate() }}</span>
            </div>
            <div class="prose">
                {!! $post->content !!}
            </div>
        </article>
    </section>



  

    <section class="max-w-screen-2xl mx-auto py-20 px-6 sm:px-12 2xl:px-0 ">

<h2 class="text-4xl font-bold text-center text-fontBlue dark:text-fontLight mb-12">Zobacz pozostałe aktualności</h2>

        <x-home.loop-grid>

            @foreach ($filteredPosts as $post)
                <x-home.post-card :post="$post" />
            @endforeach
        </x-home.loop-grid>

        

    </section>




</x-layouts.app>
