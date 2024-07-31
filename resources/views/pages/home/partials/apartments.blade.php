<x-base.section>
      {{-- text --}}
      <x-base.section-heading-container>
        <x-ui.subheading>Miejsca Noclegowe</x-ui.subheading>
        <x-ui.heading>Komfortowy Wypoczynek w Zębie</x-ui.heading>
        <x-ui.section-description>ZZąb oferuje szeroką gamę komfortowych apartamentów i miejsc noclegowych, które spełnią oczekiwania nawet najbardziej wymagających gości. Znajdziesz tu przytulne pensjonaty, nowoczesne apartamenty oraz urokliwe domki, idealne na wypoczynek zarówno dla par, rodzin, jak i grup przyjaciół. Każde miejsce jest starannie przygotowane, aby zapewnić maksymalny komfort i niezapomniane wrażenia z pobytu w tej malowniczej wsi.</x-ui.section-description>
    </x-base.section-heading-container>
    {{-- loop --}}
    <x-base.loop-grid>
        @foreach ($apartments as $apartment)
            <x-apartment-card :apartment="$apartment" />
        @endforeach
    </x-base.loop-grid>

    <x-ui.link-btn href="{{ route('apartment.index') }}" class="mt-8" >zobacz wszystkie apartamenty</x-ui.link-btn>

</x-base.section>