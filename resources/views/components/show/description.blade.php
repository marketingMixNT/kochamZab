<x-base.section narrow class="max-w-screen-xl mx-auto ">

    <div class="flex flex-col lg:flex-row gap-y-12">

        <div class="w-full lg:w-[55%] flex flex-col gap-y-12 relative lg:px-12 ">


            @foreach (collect($item->gallery)->slice(0, 3) as $img)
                <img src="{{ asset('storage/' . $img) }}" alt="zdjęcie przedstawiające {{ $item->title }}"
                    class="w-full sticky top-12 aspect-square max-h-[500px] object-cover" loading="lazy">
            @endforeach

        </div>
        <div class="w-full lg:w-[45%] lg:pl-12  relative ">

            <div class="prose">

                {!! $item->desc !!}
            </div>
        </div>
    </div>


</x-base.section>
