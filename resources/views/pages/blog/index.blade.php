<x-layouts.app title="Wydarzenia w Zębie | Kocham Ząb"
    description="Bądź na bieżąco z najnowszymi wydarzeniami w Zębie. Odkryj lokalne imprezy, festiwale i spotkania społeczności z Kocham Ząb.">
    <header class="inner-banner-wrap">
        <div class="inner-baner-container"
            style="background-image: url({{ asset('assets/images/zab.jpg') }});background-position:center;background-size:cover;background-repeat:no-repeat ;background-attachment:fixed">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">Wydarzenia</h1>
                </div>
            </div>
        </div>
        <div class="inner-shape"></div>
    </header>

    <!--CONTENT-->

    <div class="archive-section blog-archive">
        <div class="archive-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 primary ">

                        <div class="customGrid">

                            @foreach ($posts as $post)
                                <x-blog.post-card :post="$post" />
                            @endforeach


                        </div>



                        {{ $posts->links('vendor.pagination.simple-default') }}


                    </div>

                </div>
            </div>
        </div>
    </div>




    <!--HERO-BOTTOM-->
    <x-info :totalAttractions="$totalAttractions" :totalApartments="$totalApartments" :totalRestaurants="$totalRestaurants" :totalPosts="$totalPosts" />

</x-layouts.app>
