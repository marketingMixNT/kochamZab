<x-layouts.app title="Kontakt | Kocham Ząb"
    description="Skontaktuj się z nami, aby uzyskać więcej informacji o naszym produkcie i usługach.">

    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
        <div class="inner-baner-container"
            style="background-image: url({{ asset('assets/images/zab.jpg') }});background-position:center;background-size:cover;background-repeat:no-repeat">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">Kontakt</h1>
                </div>
            </div>
        </div>
        <div class="inner-shape"></div>
    </section>
    <!-- Inner Banner html end-->
    <!-- contact form html start -->
    <div class="contact-page-section">
        <div class="contact-form-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-from-wrap">
                            <div class="section-heading">
                                <h5 class="dash-style">Bądźmy w kontakcie</h5>
                                <h2>Napisz, aby dowiedzieć się więcej</h2>

                            </div>
                            {{-- contact form --}}
                            <livewire:contact-form />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-detail-wrap">
                            <h3>Potrzebujesz Pomocy? Skontaktuj się z Nami! </h3>
                            <p>Jeśli masz jakiekolwiek pytania lub potrzebujesz dodatkowych informacji, nie wahaj się z
                                nami skontaktować. Jesteśmy tutaj, aby pomóc Ci w planowaniu Twojej wizyty i
                                odpowiedzieć na wszelkie wątpliwości. </p>
                            <p>Czekamy na Twoją wiadomość!</p>
                            <div class="details-list">
                                <ul>
                                    
                                    <li>
                                        <span class="icon">
                                            <i class="fas fa-envelope-open-text"></i>
                                        </span>
                                        <div class="details-content">
                                            <h4>Email</h4>
                                            <a href="mailto:info@kochamzab.pl">info@kochamzab.pl</a>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <i class="fas fa-phone-volume"></i>
                                        </span>
                                        <div class="details-content">
                                            <h4>Telefon</h4>
                                            <a href="tel:123456789">123 456 789</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="contct-social social-links">
                                <h3>Social Media</h3>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </div>
    <!--HERO-BOTTOM-->
    <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />
</x-layouts.app>
