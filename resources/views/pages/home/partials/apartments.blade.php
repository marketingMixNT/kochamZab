<x-home.section>
    {{-- text --}}
    <x-home.text-box subheading="Apartamenty i Miejsca Noclegowe" heading="Komfortowy Wypoczynek w Zębie"> Ząb oferuje szeroką gamę komfortowych apartamentów i miejsc noclegowych, które spełnią oczekiwania nawet najbardziej wymagających gości. Znajdziesz tu przytulne pensjonaty, nowoczesne apartamenty oraz urokliwe domki, idealne na wypoczynek zarówno dla par, rodzin, jak i grup przyjaciół. Każde miejsce jest starannie przygotowane, aby zapewnić maksymalny komfort i niezapomniane wrażenia z pobytu w tej malowniczej wsi.</x-home.text-box>
    {{-- loop --}}
    <x-home.loop-grid>
        @foreach ($apartments as $apartment)
            <x-home.apartment-card :apartment="$apartment" />
        @endforeach
    </x-home.loop-grid>

    <x-link-btn href="{{ route('apartment.index') }}" class="mt-8" >zobacz wszystkie apartamenty</x-link-btn>

</x-home.section>