@props(['light'=>false])

<h2 class="text-4xl lg:text-5xl {{$light ? "text-fontLight" : " text-fontBlue dark:text-fontLight"}} font-extrabold  uppercase mb-6">{{$slot}}</h2>