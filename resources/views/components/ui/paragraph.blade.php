@props(['light'=>false])

<p class="text-base  {{$light ? "text-fontLight" : ""}} ">{{$slot}}</p>