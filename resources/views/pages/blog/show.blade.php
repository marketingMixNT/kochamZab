<x-layouts.app title="{{ $post->getMetaTitle() }}" description="{{ $post->getMetaDesc() }}">
   {{-- header --}}
    <section class="inner-banner-wrap">
        <div class="inner-baner-container"
            style="background-image: url({{ asset($post->getThumbnailUrl()) }});background-position:center;background-size:cover; background-repeat:no-repeat; background-attachment:fixed;">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">{{ $post->title }}</h1>
                    <div class="entry-meta">

                        <span class="posted-on">
                            {{ $post->getPublishedDate() }}
                        </span>

                    </div>
                </div>
            </div>
        </div>
        <div class="inner-shape"></div>
    </section>
   {{-- main --}}
    <div class="single-post-section">
        <div class="single-post-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 primary right-sidebar">
                        <!-- single blog post html start -->
                        <figure class="feature-image">
                            <img src="{{ $post->getThumbnailUrl() }}" alt="{{ $post->title }}"
                                style="width:100%;height:400px;object-fit:cover;">
                        </figure>
                        <article class="single-content-wrap">
                            {!! $post->content !!}
                        </article>
                    </div>


                </div>
            </div>
        </div>
    </div>
  
  <section class="blog-section" style="padding:0;margin-bottom:100px">
   <div class="container">
       <div class="section-heading text-center">
           <div class="row">
               <div class="col-lg-8 offset-lg-2">
                   <h2>Pozostałe aktualności</h2>
               </div>
           </div>
       </div>
       <div class="row">
          
          @foreach ($filteredPosts as $post)
             <x-home.post :post="$post"/>
          @endforeach
          
       </div>

       
   </div>
</section>


</x-layouts.app>
