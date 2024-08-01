<x-layouts.app title="Kontakt | Kocham Ząb"
    description="Skontaktuj się z nami, aby uzyskać więcej informacji o naszym produkcie i usługach.">

    <x-slot:header>
        <x-banner >Kontakt</x-banner>
    
    </x-slot:header>

    <x-slot:main>

    <x-base.section class="max-w-screen-lg mx-auto py-20 px-6 sm:px-12 2xl:px-0 ">

        <div class="max-w-screen-lg flex flex-col 2xl:flex-row gap-6 md:gap-12 2xl:gap-24">

            <div class="w-full lg:w-1/2 flex flex-col justify-start items-start gap-6">
                <div class="flex flex-col gap-2">

                    <x-ui.subheading>Bądźmy w kontakcie</x-ui.subheading>
                    <x-ui.heading small>Napisz, aby dowiedzieć się więcej</x-ui.heading>
                   
                </div>

                <div class="w-full sm:w-3/4 lg:w-full mx-auto">

                    <livewire:contact-form />
                </div>
            </div>

            <div class="w-full sm:w-3/4  lg:w-1/2 flex flex-col justify-start items-start gap-12">
                {{-- text --}}
                <div class="flex flex-col gap-4">
                    <h3 class="text-2xl font-black text-fontBlue dark:text-fontLight">Potrzebujesz Pomocy? Skontaktuj się z Nami!
                    </h3>
                    <x-ui.paragraph>Jeśli masz jakiekolwiek pytania lub potrzebujesz dodatkowych informacji, nie wahaj się z nami
                        skontaktować. Jesteśmy tutaj, aby pomóc Ci w planowaniu Twojej wizyty i odpowiedzieć na wszelkie
                        wątpliwości.</x-ui.paragraph>
                    <x-ui.paragraph>Czekamy na Twoją wiadomość!

                    </x-ui.paragraph>
                </div>
                {{-- contact --}}
                <div class="flex flex-col justify-start items-start gap-4">

               
                <div>
                    <a href="tel:123456789" class="flex justify-center items-center gap-4 group">
                        <div class="rounded-lg bg-secondary-200 flex justify-center items-center p-2 ">
                            <x-iconpark-phonetelephone class="w-8 text-fontLight group-hover:scale-110 duration-500" />

                        </div>
                        <span class="text-lg">123 456 789</span>
                    </a>
                </div>
                <div>
                    <a href="mailto:kontakt@kochamzab.pl" class="flex justify-center items-center gap-4 group">
                        <div class="rounded-lg bg-secondary-200 flex justify-center items-center p-2 ">
                            <x-iconpark-mailopen class="w-8 text-fontLight group-hover:scale-110 duration-500" />

                        </div>
                        <span class="text-lg">kontakt@kochamzab.pl</span>
                    </a>
                </div>
            </div>
                {{-- socials --}}
                <div class="flex flex-col gap-6">
                    <h3 class="text-2xl font-black text-fontBlue dark:text-fontLight">Social Media
                    </h3>
                    <ul class="flex items-center gap-2 ">
                        <li>
                            <a href="#" rel="nofollow noreferrer"> <x-iconpark-facebook
                                    class="w-9  hover:scale-110 duration-500 text-secondary-400" /></a>
                        </li>
                        <li>
                            <a href="#" rel="nofollow noreferrer"> <x-iconpark-tiktok
                                    class="w-9 hover:scale-110 duration-500 text-secondary-400" /></a>
                        </li>
                        <li> <a href="#" rel="nofollow noreferrer"> <x-iconpark-instagram-o
                                    class="w-9 hover:scale-110 duration-500 text-secondary-400" /></a></li>
                    
                    </ul>
                </div>

            </div>
        </div>
    </x-base.section>

    <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />

    </x-slot:main>
</x-layouts.app>
