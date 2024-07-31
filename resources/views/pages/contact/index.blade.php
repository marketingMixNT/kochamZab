<x-layouts.app title="Kontakt | Kocham Ząb"
    description="Skontaktuj się z nami, aby uzyskać więcej informacji o naszym produkcie i usługach.">

    <x-banner>Kontakt</x-banner>

    <section class="max-w-screen-lg mx-auto py-20 px-6 sm:px-12 2xl:px-0 ">

        <div class="flex flex-col lg:flex-row gap-24">

            <div class="w-full lg:w-1/2 flex flex-col justify-start items-start gap-6 order-1 lg:order-none">
                <div class="flex flex-col gap-2">

                    <span class="font-heading uppercase text-base font-black text-secondary-400 ">Bądźmy w
                        kontakcie</span>
                    <h2 class="text-4xl lg:text-4xl text-fontBlue dark:text-fontLight font-black  uppercase mb-6">
                        Napisz, aby dowiedzieć się więcej</h2>
                </div>

                <div class="w-full sm:w-3/4 lg:w-full mx-auto">

                    <livewire:contact-form />
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex flex-col justify-start items-start gap-12">
                {{-- text --}}
                <div class="flex flex-col gap-4">
                    <h2 class="text-2xl font-black text-fontBlue">Potrzebujesz Pomocy? Skontaktuj się z Nami!
                    </h2>
                    <p>Jeśli masz jakiekolwiek pytania lub potrzebujesz dodatkowych informacji, nie wahaj się z nami
                        skontaktować. Jesteśmy tutaj, aby pomóc Ci w planowaniu Twojej wizyty i odpowiedzieć na wszelkie
                        wątpliwości.</p>
                    <p>Czekamy na Twoją wiadomość!

                    </p>
                </div>
                {{-- contact --}}
                <div class="flex flex-col justify-start items-start gap-4">

               
                <div>
                    <a href="tel:123456789" class="flex justify-center items-center gap-4 group">
                        <div class="rounded-lg bg-secondary-200 flex justify-center items-center p-2 ">
                            <x-iconpark-phonetelephone class="w-6 text-fontLight group-hover:scale-110 duration-500" />

                        </div>
                        <span>123 456 789</span>
                    </a>
                </div>
                <div>
                    <a href="mailto:kontakt@kochamzab.pl" class="flex justify-center items-center gap-4 group">
                        <div class="rounded-lg bg-secondary-200 flex justify-center items-center p-2 ">
                            <x-iconpark-mailopen class="w-6 text-fontLight group-hover:scale-110 duration-500" />

                        </div>
                        <span>kontakt@kochamzab.pl</span>
                    </a>
                </div>
            </div>
                {{-- socials --}}
                <div class="flex flex-col gap-6">
                    <h3 class="text-2xl font-black text-fontBlue">Social Media</h3>
                    <ul class="flex items-center gap-2 ">
                        <li>
                            <a href="#" rel="nofollow noreferrer"> <x-iconpark-facebook
                                    class="w-4 md:w-8  hover:scale-110 duration-500 text-secondary-400" /></a>
                        </li>
                        <li>
                            <a href="#" rel="nofollow noreferrer"> <x-iconpark-tiktok
                                    class="w-4 md:w-8 hover:scale-110 duration-500 text-secondary-400" /></a>
                        </li>
                        <li> <a href="#" rel="nofollow noreferrer"> <x-iconpark-instagram-o
                                    class="w-4 md:w-8 hover:scale-110 duration-500 text-secondary-400" /></a></li>
                    
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />
</x-layouts.app>
