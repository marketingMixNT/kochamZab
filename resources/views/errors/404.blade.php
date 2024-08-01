<x-layouts.app title="Kocham Ząb - Najlepsze Atrakcje, Restauracje i Hotele w Zębie"
    description="Znajdź najlepsze atrakcje, restauracje, hotele i aktualności w Zębie. Odkryj Ząb z Kocham Ząb!" noFollow>

  

    <x-slot:main>

    <div class="h-[calc(80vh-90px)] md:h-[calc(80vh-90px)]  lg:h-[calc(80vh-140px)]  flex flex-col justify-center items-center bg-cover bg-center bg-fixed bg-gray-400 bg-blend-multiply" style="background-image: url({{ asset('assets/images/zab.jpg') }})">
        {{-- SLIDES --}}
       

        <x-ui.header-heading>404</x-ui.header-heading>
        <x-ui.paragraph>Strona nie została znaleziona</x-ui.paragraph>

        <x-ui.link-btn href="{{ route('home') }}" class="mt-6 2xl:mt-12">Powrót do strony głównej</x-ui.link-btn>

    </div>
    

    </x-slot:main>

</x-layouts.app>
