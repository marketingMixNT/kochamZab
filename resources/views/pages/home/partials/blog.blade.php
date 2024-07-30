   <!--BLOG SECTION-->
   <section class="blog-section">
       <div class="container">
           <div class="section-heading text-center">
               <div class="row">
                   <div class="col-lg-8 offset-lg-2">
                       <h5 class="dash-style">Wydarzenia</h5>
                       <h2>Sprawdź co słychać w Zębie</h2>
                       <p>Ząb to miejsce pełne życia i niezwykłych wydarzeń. W naszej sekcji „Co słychać w Zębie” znajdziesz najnowsze informacje o lokalnych imprezach, festiwalach, koncertach i spotkaniach społeczności. Niezależnie od pory roku, w Zębie zawsze dzieje się coś ciekawego!</p>
                   </div>
               </div>
           </div>
           <div class="row">
              
              @foreach ($posts as $post)
                 <x-home.post :post="$post"/>
              @endforeach
              
           </div>

           <div class="btn-wrap text-center">
               <a href="{{ route('blog.index') }}" class="button-primary" style="text-transform:uppercase">zobacz aktualne wydarzenia</a>
           </div>
       </div>
   </section>
