
<div></div>

<footer class=" text-fontLight">
   <div class="bg-bgDark-300">
    <div class="max-w-screen-xl mx-auto pt-12 pb-20 px-12 ">
        <div class="flex justify-center items-center mb-20">
            <a href="{{ route('home') }}"><img src="{{ asset('assets/logo/logo--horizontal.webp') }}"
                    alt="logo stowarzyszenia Kocham Ząb" class="w-[200px]"></a>

        </div>
        <div class="grid  lg:grid-cols-4  gap-6">
            {{-- grid-col --}}
            <div class="hidden lg:flex flex-col items-start justify-start gap-4 ">
                <h2 class="text-lg font-bold text-fontOrange uppercase">KOCHAM ZĄB</h2>
                <nav class="textwidget widget-text">
                    <ul class="space-y-2">
                        <li><x-link href="{{ route('about.zab') }}">O Zębie</x-link></li>
                        <li><x-link href="{{ route('about.history') }}">Historia</x-link></li>
                        <li><x-link href="{{ route('about.poronin') }}">Gmina Poronin</x-link></li>
                        <li><x-link href="{{ route('about.association') }}">Zespół Regionalny Zbójnicek</x-link></li>
                        <li><x-link href="{{ route('about.zwiazek') }}">Związek Podhalan o/Ząb</x-link></li>
                        <li><x-link href="#">Polityka Prywatności</x-link></li>
                        <li><x-link href="#">Kontakt</x-link></li>
                    </ul>
                </nav>
            </div>
            {{-- grid-col --}}
            <div class="hidden lg:flex flex-col items-start justify-start gap-4">
                <h2 class="text-lg font-bold text-fontOrange uppercase">Turystyka</h2>
                <nav class="textwidget widget-text">
                    <ul class="space-y-2">
                        <li><x-link href="{{ route('attraction.index') }}">Atrakcje</x-link></li>
                        <li><x-link href="{{ route('apartment.index') }}">Noclegi</x-link></li>
                        <li><x-link href="{{ route('restaurant.index') }}">Gastronomia</x-link></li>

                    </ul>
                </nav>
            </div>
            {{-- grid-col --}}
            <div class="hidden lg:flex flex-col items-start justify-start gap-4">
                <h2 class="text-lg font-bold text-fontOrange uppercase">Mieszkańcy</h2>
                <nav class="textwidget widget-text">
                    <ul class="space-y-2">
                        <li><x-link href="{{ route('attraction.index') }}">Atrakcje</x-link></li>
                        <li><x-link href="{{ route('apartment.index') }}">Noclegi</x-link></li>
                        <li><x-link href="{{ route('restaurant.index') }}">Gastronomia</x-link></li>

                    </ul>
                </nav>
            </div>
            {{-- grid-col --}}
            <div class="flex flex-col justify-center lg:justify-start items-center lg:items-start gap-4">
                <h2 class="text-lg font-bold text-fontOrange uppercase">O nas</h2>
                <p class=" xs:px-12 md:px-32 lg:px-0 text-center lg:text-left">Witamy Cię na naszej stronie poświęconej turystyce. Cieszymy się, że na nią wszedłeś, bo to oznacza,
                    że być może planujesz pobyt na Podhalu i poszukujesz informacji, które ułatwią Ci zaplanowanie
                    wypoczynku.</p>
            </div>
        </div>
    </div>
   </div>

   <div class="bg-bgDark-200">
    <div class="max-w-screen-lg mx-auto flex flex-col sm:flex-row justify-around lg:justify-between  items-center py-6 px-12 gap-6">

        <span>© <span id="footerYear"></span> kochamzab.pl</span>
        <a href="https://marketingmix.pl" target="_blank"><img class="w-32" src="{{asset('assets/marketingmix.svg')}}"
                alt="logo MarketingMix"></a>

    </div>
   </div>
</footer>
