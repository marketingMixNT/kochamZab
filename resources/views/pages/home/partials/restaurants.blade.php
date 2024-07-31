



 <x-home.section>
   {{-- text --}}
   <x-home.text-box subheading="Smaki Zębu" heading="Restauracje i Lokalne Specjały">Ząb to prawdziwy raj dla miłośników dobrej kuchni. Oferujemy szeroki wybór restauracji, które serwują zarówno tradycyjne, regionalne potrawy, jak i dania kuchni międzynarodowej. Każde miejsce zachwyca nie tylko smakiem, ale także atmosferą i gościnnością. Odkryj lokalne specjały i delektuj się niezapomnianymi posiłkami w sercu tej malowniczej wsi.</x-home.text-box>
   {{-- loop --}}
   <x-home.loop-grid>
       @foreach ($restaurants as $attraction)
           <x-home.attraction-card :attraction="$attraction" />
       @endforeach
   </x-home.loop-grid>

   <x-link-btn href="{{ route('blog.index') }}" class="mt-8" >zobacz wszystkie restauracje</x-link-btn>

</x-home.section>
