<nav class="bg-primary-400 w-full h-[120px] hidden md:grid grid-cols-4">

   <x-link-grid-item href="{{ route('blog.index') }}"
       img="{{ asset('assets/icons/events.webp') }}">Wydarzenia</x-link-grid-item>
   <x-link-grid-item href="{{ route('attraction.index') }}"
       img="{{ asset('assets/icons/attractions.webp') }}">Atrakcje</x-link-grid-item>
   <x-link-grid-item href="{{ route('apartment.index') }}"
       img="{{ asset('assets/icons/accomodation.webp') }}">Noclegi</x-link-grid-item>
   <x-link-grid-item href="{{ route('restaurant.index') }}"
       img="{{ asset('assets/icons/restaurant.webp') }}">Gastronomia</x-link-grid-item>

</nav>