<x-layouts.app title="" description="">
    <!-- header-->
    <section class="inner-banner-wrap">
        <div class="inner-baner-container"
            style="background-image: url({{ asset('assets/images/zab.jpg') }});background-position:center">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">Atrakcje</h1>
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



                    @foreach ($apartments as $apartment)
                        <x-home.apartment-card :apartment="$apartment" />
                    @endforeach





                </div>
                <div class="btn-wrap text-center">
                    {{ $apartments->links('vendor.pagination.simple-default') }}

                </div>
            </div>
        </div>
    </section>



    <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />





</x-layouts.app>
