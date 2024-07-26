<header id="masthead" class="site-header header-primary">
    <!-- top -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 d-none d-lg-block">
                    <div class="header-contact-info">
                        <span>Stowarzyszenie Rozwoju i Promocji Wsi Ząb i Okolicy</span>
                    </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-lg-end justify-content-between">
                    <div class="header-social social-links" style="margin-right:10px">
                        {{-- socials --}}
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>

                        </ul>
                    </div>
                  
                    <div>
                    </div>
                    <div class="header-social social-links">
                        {{-- langugageSwitcher --}}
                        <ul class="language-switcher">
                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a rel="alternate" hreflang="{{ $localeCode }}"
                                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ strtoupper($localeCode) }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- bottom -->
    <div class="bottom-header">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="site-identity">
                <h1 class="site-title">
                    <a href="index.html">
                        <img class="white-logo" src="assets/logo.png" alt="logo" style="width:70px">
                        <img class="black-logo" src="assets/logo.png" alt="logo" style="width:90px">
                    </a>
                </h1>
            </div>
            
            <div class="main-navigation d-none d-lg-block">
                <nav id="navigation" class="navigation">
                    <ul>

                        <li class="menu-item-has-children">
                            <a href="/o-nas.html">O nas</a>
                            <ul>
                                <li>
                                    <a href="/o-zebie.html">O Zębie</a>
                                </li>
                                <li>
                                    <a href="/historia.html">Historia</a>
                                </li>
                                <li>
                                    <a href="/gmina-poronin.html">Gmina Poronin</a>
                                </li>
                                <li>
                                    <a href="/stowarzyszenie.html">Stowarzyszenie</a>
                                </li>
                                <li>
                                    <a href="/zwiazek-podhalan.html">Związek Podhalan o/Ząb</a>
                                </li>
                                <li>
                                    <a href="/zespol-regionalny-zbojnicek.html">Zespół Regionalny Zbójnicek</a>
                                </li>

                            </ul>
                        </li>

                        <li class="menu-item"> <a href="/wydarzenia.html">Wydarzenia</a></li>
                        <li class="menu-item"> <a href="/atrakcje.html">Atrakcje</a></li>
                        <li class="menu-item"> <a href="/noclegi.html">Noclegi</a></li>
                        <li class="menu-item"> <a href="/gastronomia.html">Gastronomia</a></li>

                    </ul>
                </nav>
            </div>
            <div class="header-btn">
                <a href="/kontakt.html" class="button-primary">KONTAKT</a>
            </div>
        </div>
    </div>
    <div class="mobile-menu-container"></div>
</header>
