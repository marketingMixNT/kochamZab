<a href="{{ $href }}"
    class="h-[450px] w-full flex justify-start items-end p-8 bg-cover bg-center bg-no-repeat  bg-blend-multiply bg-gray-400 hover:bg-gray-500 rounded-lg duration-500 shadow-lg hover:shadow-2xl  "  aria-label="Zobacz stronę: {{ $slot }}"
    style="background-image: url('{{ $img }}')">


    <h2 class="  text-xl lg:text-2xl  font-semibold text-fontLight group-hover:text-secondary-400 duration-500">
        {{$slot}}</h2>

</a>
