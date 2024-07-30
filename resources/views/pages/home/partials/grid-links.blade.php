<nav class="bg-primary-400 w-full h-[120px] hidden md:grid grid-cols-4">

   <x-home.link-grid-item href="{{ route('blog.index') }}"
       img="{{ asset('assets/icons/events.png') }}">Wydarzenia</x-home.link-grid-item>
   <x-home.link-grid-item href="{{ route('attraction.index') }}"
       img="{{ asset('assets/icons/attractions.png') }}">Atrakcje</x-home.link-grid-item>
   <x-home.link-grid-item href="{{ route('apartment.index') }}"
       img="{{ asset('assets/icons/accomodation.png') }}">Noclegi</x-home.link-grid-item>
   <x-home.link-grid-item href="{{ route('restaurant.index') }}"
       img="{{ asset('assets/icons/restaurant.png') }}">Gastronomia</x-home.link-grid-item>








</nav>