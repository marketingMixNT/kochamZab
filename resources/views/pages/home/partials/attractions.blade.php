

 <x-home.section>
     {{-- text --}}
     <x-home.text-box subheading="Atrakcje" heading="Sprawdź co warto zobaczyć"> Ząb oferuje wiele wspaniałych atrakcji,
         które zachwycą każdego odwiedzającego. Od malowniczych szlaków turystycznych po historyczne zabytki i lokalne
         festiwale - każdy znajdzie tu coś dla siebie.</x-home.text-box>
     {{-- loop --}}
     <x-home.loop-grid>
         @foreach ($attractions as $attraction)
             <x-home.attraction-card :attraction="$attraction" />
         @endforeach
     </x-home.loop-grid>

     <x-link-btn href="{{ route('blog.index') }}" class="mt-8" >zobacz aktualne wydarzenia</x-link-btn>

 </x-home.section>
