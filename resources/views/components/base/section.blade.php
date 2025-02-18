@props(['class'=>'','narrow' => false,'noFlex' => false])

<section
    class=" {{$noFlex ? '' : 'flex flex-col justify-center items-center'}} gap-12 lg:gap-20 px-6 md:px-12 2xl:px-0  {{ $narrow ? 'py-8 lg:pt-10 lg:pb-20' : ' py-12 lg:py-20' }}  {{$class}}">
    {{ $slot }}</section>
