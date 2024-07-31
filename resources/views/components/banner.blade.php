<header class="h-[300px] md:h-[400px] 2xl:h-[500px] bg-center bg-cover bg-no-repeat bg-fixed bg-blend-multiply bg-gray-500 hover:bg-gray-600 duration-500 relative flex justify-center items-center text-center px-6 2xl:px-0"
style="background-image: url({{ asset('assets/images/zab.jpg') }}) ">

<x-ui.header-heading class="uppercase">{{$slot}}</x-ui.header-heading>



<img src="{{ asset('assets/images/banner-pattern.png') }}" alt=""
    class="w-full absolute -bottom-1 left-0 right-0">
</header>