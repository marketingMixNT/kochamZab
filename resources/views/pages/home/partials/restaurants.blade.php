



 <x-base.section narrow>
    {{-- text --}}
    <x-base.section-heading-container>
        <x-ui.subheading>Smaki Zębu</x-ui.subheading>
        <x-ui.heading>Restauracje i Lokalne Specjały</x-ui.heading>
        <x-ui.section-description>Ząb to prawdziwy raj dla miłośników dobrej kuchni. Oferujemy szeroki wybór restauracji, które serwują zarówno tradycyjne, regionalne potrawy, jak i dania kuchni międzynarodowej. Każde miejsce zachwyca nie tylko smakiem, ale także atmosferą i gościnnością. Odkryj lokalne specjały i delektuj się niezapomnianymi posiłkami w sercu tej malowniczej wsi.</x-ui.section-description>
    </x-base.section-heading-container>


   {{-- loop --}}
   <x-base.loop-grid class="md:opacity-0 fade-in">
       @foreach ($restaurants as $restaurant)
           <x-restaurant-card :restaurant="$restaurant" />
       @endforeach
   </x-base.loop-grid>

   <x-ui.link-btn href="{{ route('restaurant.index') }}" class="mt-8" >zobacz wszystkie restauracje</x-ui.link-btn>

</x-base.section>
