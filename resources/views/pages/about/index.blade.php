<x-layouts.app title="O nas | Kocham Ząb" description="">




    <x-banner>O nas</x-banner>

    <section class="max-w-screen-2xl mx-auto py-20 px-6 sm:px-12 2xl:px-0 ">
        <x-home.loop-grid>

            {{-- item --}}
            <a href="{{ route('about.zab') }}"
                class="p-8 bg-cover bg-center bg-no-repeat h-[500px] w-full bg-blend-multiply bg-gray-400 hover:bg-gray-500 duration-500 flex justify-start items-end group shadow-lg hover:shadow-2xl rounded-lg"
                style="background-image: url('{{ asset('assets/images/zab.jpg') }}')">


                <h2 class="text-fontLight group-hover:text-secondary-400 duration-500 text-xl lg:text-2xl font-bold">O
                    zębie</h2>
            </a>
            {{-- item --}}
            <a href="{{ route('about.zab') }}"
                class="p-8 bg-cover bg-center bg-no-repeat h-[500px] w-full bg-blend-multiply bg-gray-400 hover:bg-gray-500 duration-500 flex justify-start items-end group shadow-lg hover:shadow-2xl rounded-lg"
                style="background-image: url('{{ asset('assets/images/zab.jpg') }}')">


                <h2 class="text-fontLight group-hover:text-secondary-400 duration-500 text-xl lg:text-2xl font-bold">O
                    zębie</h2>
            </a>
            {{-- item --}}
            <a href="{{ route('about.zab') }}"
                class="p-8 bg-cover bg-center bg-no-repeat h-[500px] w-full bg-blend-multiply bg-gray-400 hover:bg-gray-500 duration-500 flex justify-start items-end group shadow-lg hover:shadow-2xl rounded-lg"
                style="background-image: url('{{ asset('assets/images/zab.jpg') }}')">


                <h2 class="text-fontLight group-hover:text-secondary-400 duration-500 text-xl lg:text-2xl font-bold">O
                    zębie</h2>
            </a>
            {{-- item --}}
            <a href="{{ route('about.zab') }}"
                class="p-8 bg-cover bg-center bg-no-repeat h-[500px] w-full bg-blend-multiply bg-gray-400 hover:bg-gray-500 duration-500 flex justify-start items-end group shadow-lg hover:shadow-2xl rounded-lg"
                style="background-image: url('{{ asset('assets/images/zab.jpg') }}')">


                <h2 class="text-fontLight group-hover:text-secondary-400 duration-500 text-xl lg:text-2xl font-bold">O
                    zębie</h2>
            </a>
            {{-- item --}}
            <a href="{{ route('about.zab') }}"
                class="p-8 bg-cover bg-center bg-no-repeat h-[500px] w-full bg-blend-multiply bg-gray-400 hover:bg-gray-500 duration-500 flex justify-start items-end group shadow-lg hover:shadow-2xl rounded-lg"
                style="background-image: url('{{ asset('assets/images/zab.jpg') }}')">


                <h2 class="text-fontLight group-hover:text-secondary-400 duration-500 text-xl lg:text-2xl font-bold">O
                    zębie</h2>
            </a>
            {{-- item --}}
            <a href="{{ route('about.zab') }}"
                class="p-8 bg-cover bg-center bg-no-repeat h-[500px] w-full bg-blend-multiply bg-gray-400 hover:bg-gray-500 duration-500 flex justify-start items-end group shadow-lg hover:shadow-2xl rounded-lg"
                style="background-image: url('{{ asset('assets/images/zab.jpg') }}')">


                <h2 class="text-fontLight group-hover:text-secondary-400 duration-500 text-xl lg:text-2xl font-bold">O
                    zębie</h2>
            </a>




        </x-home.loop-grid>



    </section>

    <!--HERO-BOTTOM-->
    <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />

</x-layouts.app>
