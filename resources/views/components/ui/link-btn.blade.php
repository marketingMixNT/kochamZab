@props(['href', 'class' => ''])

<a href="{{ $href }}"
    class="  px-8 xl:px-10 py-4 bg-secondary-400 hover:bg-secondary-200  lg:text-sm xl:text-base font-medium uppercase text-white rounded-md duration-500 {{$class}}">{{ $slot }}</a>
