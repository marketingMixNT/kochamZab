<x-layouts.app title="Restauracje w Zębie | Kocham Ząb" description="Poznaj najlepsze restauracje w Zębie. Odkryj lokalne smaki i delektuj się wyśmienitymi potrawami w urokliwych miejscach z Kocham Ząb.">
    <!-- header-->
    <section class="inner-banner-wrap">
        <div class="inner-baner-container"
            style="background-image: url({{ asset('assets/images/zab.jpg') }});background-position:center;background-size:cover;background-repeat:no-repeat ">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">Restauracje</h1>
                </div>
            </div>
        </div>
        <div class="inner-shape"></div>
    </section>
    <!-- main-->
    <section class="destination-section destination-page">
        <div class="container">
            <div class="package-inner">
                <div class="row">

                    @foreach ($restaurants as $restaurant)
                        <x-home.restaurant-card :restaurant="$restaurant" />
                    @endforeach

                </div>
                <div class="btn-wrap text-center">
                    {{ $restaurants->links('vendor.pagination.simple-default') }}

                </div>
            </div>
        </div>
    </section>



    <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />





</x-layouts.app>
