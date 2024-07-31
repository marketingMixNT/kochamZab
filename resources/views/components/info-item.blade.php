<a href="{{ $href }}"
    class="bg-secondary-400 group hover:opacity-80 duration-500 py-8 px-16  rounded-lg flex  justify-center items-center gap-6">
    <img src="{{ $img }}" alt="" class="w-12 2xl:w-16 group-hover:scale-110 duration-500">
    <div class="border-l  flex flex-col justify-center items-center pl-6">

        <span class="counter-no">
            <span class="text-3xl text-fontLight dark:text-fontLight font-bold">{{ $counter }}</span>
        </span>
        <span class="text-base lg:text-sm 2xl:text-base counter-text text-fontLight dark:text-fontLight">
            {{ $slot }}
        </span>
    </div>
</a>
