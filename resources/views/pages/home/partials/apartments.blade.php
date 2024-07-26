<!--ACCOMODATION SECTION-->
<section class="package-section">
    <div class="container">
        <div class="section-heading text-center">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h5 class="dash-style">Komfortowy Wypoczynek w Zębie</h5>
                    <h2>Apartamenty i Miejsca Noclegowe</h2>
                    <p>Ząb oferuje szeroką gamę komfortowych apartamentów i miejsc noclegowych, które spełnią oczekiwania nawet najbardziej wymagających gości. Znajdziesz tu przytulne pensjonaty, nowoczesne apartamenty oraz urokliwe domki, idealne na wypoczynek zarówno dla par, rodzin, jak i grup przyjaciół. Każde miejsce jest starannie przygotowane, aby zapewnić maksymalny komfort i niezapomniane wrażenia z pobytu w tej malowniczej wsi. </p>
                </div>
            </div>
        </div>
        <div class="package-inner">
            <div class="row">



                @foreach ($apartments as $apartment)
                    <x-home.apartment-card :apartment="$apartment" />
                @endforeach





            </div>
            <div class="btn-wrap text-center">
                <a href="#" class="button-primary">ZOBACZ WSZYSTKIE NOCLEGI</a>
            </div>
        </div>
    </div>
</section>
