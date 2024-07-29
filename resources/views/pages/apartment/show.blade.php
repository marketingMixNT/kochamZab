<x-layouts.app title="" description="">
    {{-- header --}}
    <section class="inner-banner-wrap">
        <div class="inner-baner-container"
            style="background-image: url({{ asset($apartment->getThumbnailUrl()) }}); background-position:center; background-size:cover; background-repeat:no-repeat ;background-attachment:fixed">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">{{ $apartment->name }}</h1>
                </div>
            </div>
        </div>
        <div class="inner-shape"></div>
    </section>
    {{-- main --}}
    <div class="single-tour-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-tour-inner">
                        <figure class="feature-image">
                            {{-- thumbnail --}}
                            <img src="{{ asset($apartment->getThumbnailUrl()) }}"
                                alt="miniaturka atrakcji {{ $apartment->name }}"
                                style="height:500px;object-fit:cover;width:100%">
                            {{-- address --}}
                            <div class="package-meta text-center">
                                <ul>
                                    <li>
                                        <a href="{{ $apartment->google_maps_link }}" target="_blank"
                                            style="color:white">
                                            <i class="far fa-map"></i>
                                            {{ $apartment->address }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </figure>
                        {{-- socials --}}
                        <div class="col-lg-7" style="width:30%; margin:0 auto">
                            <div class="sidebar">
                                <div class="package-price">
                                    <div class="start-wrap">
                                        <div
                                            style="display: flex;justify-content: center;align-items: center;gap: 10px;">
                                            @foreach ($apartment->socials as $social)
                                                <x-socials :social="$social" />
                                            @endforeach


                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="tab-container">
                            {{-- tabs --}}
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview"
                                        role="tab" aria-controls="overview" aria-selected="true">Opis</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="map-tab" data-toggle="tab" href="#map" role="tab"
                                        aria-controls="map" aria-selected="false">Kontakt i mapa</a>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                {{-- description --}}
                                <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                    aria-labelledby="overview-tab">
                                    <div class="overview-content">
                                        {!! $apartment->desc !!}

                                    </div>
                                </div>
                                {{-- address --}}
                                <div class="tab-pane" id="map" role="tabpanel" aria-labelledby="map-tab">
                                 
                                    <div style="display: flex;justify-start: center;align-items: center;gap: 5px;margin-bottom:15px;">
                                        <i class="far fa-map"></i>
                                        <a href="{{ $apartment->google_maps_link }}"> {{ $apartment->address }}</a>
                                    </div>

                                    <div style="display: flex;justify-start: center;align-items: center;gap: 5px;margin-bottom:15px;">
                                        <i class="fas fa-phone"></i>
                                        <a href="tel:{{ $apartment->phone}}"> {{ $apartment->phone }}</a>
                                    </div>

                                    <div style="display: flex;justify-start: center;align-items: center;gap: 5px;margin-bottom:15px;">
                                        <i class="far fa-envelope"></i>
                                        <a href="mailto:{{ $apartment->email }}"> {{ $apartment->email }}</a>
                                    </div>

                                    <div class="map-area">
                                        {!! $apartment->google_maps_frame !!}
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="single-tour-gallery">
                            <h3>Galeria</h3>
                            <div class="single-tour-slider">
                                @foreach ($apartment->gallery as $image)
                                    <div class="single-tour-item">
                                        <figure class="feature-image">
                                            <a href="{{ asset('storage/' . $image) }}" class="glightbox">
                                                <img src="{{ asset('storage/' . $image) }}" alt=""
                                                    style="height:300px;object-fit:cover;width:100%"></a>
                                        </figure>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- subscribe section html start -->
    <section class="blog-section" style="padding:0;margin-bottom:100px">
        <div class="container">
            <div class="section-heading text-center">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h2>Inne apartamenty</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($filteredApartments as $apartment)
                    <x-home.apartment-card :apartment="$apartment" />
                @endforeach

            </div>


        </div>
    </section>
    <!-- subscribe html end -->
</x-layouts.app>
