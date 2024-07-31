@props(['subheading', 'heading','light'=>false])

<div class="flex flex-col items-center justify-center gap-6 max-w-screen-md mx-auto text-center">
    <span class="font-heading uppercase text-lg font-black text-secondary-400 ">{{$subheading}}</span>
    <h2 class="text-4xl lg:text-5xl {{$light ? "text-fontLight" : " text-fontBlue dark:text-fontLight"}} font-black  uppercase mb-6">{{$heading}}</h2>
    <p class="text-base lg:text-lg {{$light ? "text-fontLight" : ""}}">{{$slot}}</p>
</div>
