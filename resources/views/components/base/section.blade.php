@props(['narrow' => false])

<section
    class=" flex flex-col justify-center items-center gap-12 lg:gap-20 px-6 md:px-12 2xl:px-0 py-12 {{ $narrow ? 'lg:pt-10 lg:pb-20' : 'lg:py-20' }}  ">
    {{ $slot }}</section>
