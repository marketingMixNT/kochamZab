<x-layouts.app
title="Kocham Ząb - Najlepsze Atrakcje, Restauracje i Hotele w Zębie"
description="Znajdź najlepsze atrakcje, restauracje, hotele i aktualności w Zębie. Odkryj Ząb z Kocham Ząb!"
>

@include('pages.home.partials.hero') 
@include('pages.home.partials.grid-links') 
@include('pages.home.partials.blog') 
@include('pages.home.partials.attractions') 
<x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts"/>
@include('pages.home.partials.apartments') 
@include('pages.home.partials.restaurants') 


</x-layouts.app>