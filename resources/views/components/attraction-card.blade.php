@props(['attraction'])


<a href="{{ route('attraction.show', $attraction->slug) }}"
    class="h-[450px] w-full flex justify-start items-end p-8 bg-cover bg-center bg-no-repeat  bg-blend-multiply bg-gray-400 hover:bg-gray-500 rounded-lg duration-500 shadow-lg hover:shadow-2xl   group " aria-label="Zobacz atrakcję: {{ $attraction->title }}"
    style="background-image: url('{{ $attraction->getThumbnailUrl() }}')">


    <h2 class="  text-xl lg:text-2xl  font-semibold text-fontLight group-hover:text-secondary-400 duration-500">
        {{ $attraction->title }}</h2>

</a>
