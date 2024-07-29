<x-layouts.app title="" description="">
    <header class="inner-banner-wrap">
        <div class="inner-baner-container"
            style="background-image: url({{ asset('assets/images/zab.jpg') }});background-position:center">
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

                            <div class="grid row">

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




