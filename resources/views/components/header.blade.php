<header>

    {{-- TOP --}}
    <div class="hidden lg:block bg-primary-400 border-b border-secondary-400 ">
        {{-- container --}}
        <div class="max-w-screen-2xl mx-auto flex justify-between items-center py-4 px-6 ">
            {{-- text --}}
            <div>
                <span class="text-fontLight text-sm uppercase font-semibold">Stowarzyszenie Rozwoju i Promocji Wsi Ząb i
                    Okolicy</span>
            </div>
            {{-- languageSwitcher & themeToggle --}}
            <div class="flex items-center gap-4">
                <x-shared.header.language-switcher />
                <x-shared.header.theme-toggle />
            </div>
        </div>
    </div>

    {{-- BOTTOM --}}
    <div class=" px-4 sm:px-10 2xl:px-0 bg-bgLight-400 dark:bg-bgDark-400">
        {{-- container --}}
        <nav class="max-w-screen-xl mx-auto flex justify-between items-center py-4 sticky top-0">
            {{-- logo --}}
            <a href="{{ route('home') }}"><img src="{{ asset('assets/logo--horizontal.png') }}"
                    alt="logo stowarzyszenia Kocham Ząb" class="w-[200px]"></a>
            {{-- nav-items --}}
            <div class="hidden lg:block">
                <x-shared.header.nav-links />
            </div>
            {{-- contact --}}
            <a href="{{ route('contact.index') }}"
                class=" hidden lg:block  px-8 xl:px-10 py-2 bg-secondary-400 hover:bg-secondary-200  lg:text-sm xl:text-base font-medium uppercase text-white rounded-md duration-500">Kontakt</a>
            {{-- hamburger --}}
            <x-shared.header.hamburger />
        </nav>

        {{-- mobile menu --}}
        <nav id="menu"
            class="fixed  top-[92px] left-0 right-0 bottom-0 flex justify-center items-center bg-primary-400 translate-x-[100%] duration-500  ease-in-out z-50">
            {{-- links --}}
            <x-shared.header.nav-links />
            {{-- other --}}
            <x-shared.header.theme-toggle class="absolute top-4 right-4 lg:hidden" />
            <x-shared.socials class="absolute bottom-4 left-4 lg:hidden" />
            <x-shared.header.language-switcher class="absolute bottom-4 right-4 lg:hidden text-fontLight" />
        </nav>
    </div>

</header>
