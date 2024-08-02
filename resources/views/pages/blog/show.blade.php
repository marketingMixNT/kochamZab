<x-layouts.app title="{{ $post->getMetaTitle() }}" description="{{ $post->getMetaDesc() }}">



    <x-slot:header>

        <header class="max-w-screen-lg mx-auto pt-12 lg:pt-20 px-6 sm:px-12 2xl:px-0 space-y-6">
            <img src="{{ $post->getThumbnailUrl() }}" alt="{{ $post->title }}" class="aspect-video w-full object-cover">

            <div class="text-center flex flex-col gap-3">

                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-fontBlue dark:text-fontLight ">
                    {{ $post->title }}</h1>

                <span class="text-sm">{{ $post->getPublishedDate() }}</span>
            </div>
        </header>
    </x-slot:header>

    <x-slot:main>

        <x-base.section narrow class="max-w-screen-lg mx-auto">
            <article class="prose">

                {!! $post->content !!}

            </article>
        </x-base.section>


        <x-base.section narrow class="max-w-screen-xl mx-auto pb-20">

            <x-ui.heading>Pozostałe artykuły</x-ui.heading>

            <x-base.loop-grid class="md:opacity-0 fade-in">

                @foreach ($filteredPosts as $post)
                    <x-post-card :post="$post" />
                @endforeach
            </x-base.loop-grid>
        </x-base.section>
    </x-slot:main>












</x-layouts.app>
