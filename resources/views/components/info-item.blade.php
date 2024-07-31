<a href="{{ $href }}"
    class="flex  justify-between items-center gap-6 py-8 px-6 bg-secondary-400 rounded-lg hover:opacity-80 duration-500    group">
    <img src="{{ $img }}" alt="" class=" w-12 2xl:w-16 group-hover:scale-110 duration-500">
    <div class="w-3/4  flex flex-col justify-center items-center pl-6 border-l">

        <span class="text-3xl text-fontLight dark:text-fontLight font-bold">{{ $counter }}</span>

        <span class="text-base lg:text-sm 2xl:text-base counter-text text-fontLight dark:text-fontLight">
            {{ $slot }}
        </span>
    </div>
</a>
