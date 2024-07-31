@props(['attraction'])


<a href="{{ route('attraction.show', $attraction->slug) }}"  class="p-8 bg-cover bg-center bg-no-repeat h-[500px] w-full bg-blend-multiply bg-gray-400 hover:bg-gray-500 duration-500 flex justify-start items-end group shadow-lg hover:shadow-2xl rounded-lg"
    style="background-image: url('{{ $attraction->getThumbnailUrl() }}')">
   

        <h2 class="text-fontLight group-hover:text-secondary-400 duration-500 text-xl lg:text-2xl font-bold">{{ $attraction->title }}</h2>
  
</a>
