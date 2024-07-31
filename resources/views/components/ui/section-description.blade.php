@props(['light'=>false])

<p class="text-base lg:text-lg {{$light ? "text-fontLight" : ""}} font-light">{{$slot}}</p>