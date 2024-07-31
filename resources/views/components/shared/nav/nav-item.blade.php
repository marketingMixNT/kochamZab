@props(['href', 'class' => ''])
<li> <a href="{{ $href }}"
        class="hover:text-secondary-400 duration-500 text-base  xs:text-lg md:text-2xl lg:text-sm xl:text-base uppercase  font-medium text-fontLight  lg:text-fontBlue  dark:text-fontLight  {{ $class }}">{{ $slot }}</a>
</li>
