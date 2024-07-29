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
            <div class="destination-inner destination-three-column">
                <div class="row">
                    @foreach ($attractions as $attraction)
                        <x-home.attraction-card :attraction="$attraction" />
                    @endforeach

                </div>
                {{ $attractions->links('vendor.pagination.simple-default') }}
            </div>
        </div>
    </section>



    <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />





</x-layouts.app>
