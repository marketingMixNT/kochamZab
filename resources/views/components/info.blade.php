<div class="bg-top bg-no-repeat bg-cover bg-fixed py-24 bg-blend-multiply bg-gray-500 flex flex-col justify-center items-center gap-12 px-6 lg:px-12"
    style="background-image: url({{ asset('assets/images/zab.jpg') }})">
    <x-home.text-box light subheading="Kocham Ząb" heading="Miejsce pełne możliwości">ąb to nie tylko malownicza wieś, ale
        również miejsce pełne różnorodnych atrakcji i
        udogodnień.
        Niezależnie od tego, czy jesteś miłośnikiem przyrody, smakoszem lokalnej kuchni, czy
        poszukujesz relaksu i odpoczynku - Ząb ma coś specjalnego dla każdego. Przyjedź i przekonaj
        się, jak wiele ma do zaoferowania!</x-home.text-box>
    <div class="max-w-screen-2xl mx-auto grid  sm:grid-cols-2 lg:grid-cols-4 gap-8 sm:gap-6 2xl:gap-12 px-6">

        <x-info-item href="{{ route('blog.index') }}" img="{{ asset('assets/icons/events.webp') }}"
            :counter="$totalPosts">Wydarzeń</x-info-item>
        <x-info-item href="{{ route('attraction.index') }}" img="{{ asset('assets/icons/attractions.webp') }}"
            :counter="$totalAttractions">Atrakcji</x-info-item>
        <x-info-item href="{{ route('apartment.index') }}" img="{{ asset('assets/icons/accomodation.webp') }}"
            :counter="$totalApartments">Apartamentów</x-info-item>
        <x-info-item href="{{ route('restaurant.index') }}" img="{{ asset('assets/icons/restaurant.webp') }}"
            :counter="$totalRestaurants">Restauracji</x-info-item>




    </div>

</div>
