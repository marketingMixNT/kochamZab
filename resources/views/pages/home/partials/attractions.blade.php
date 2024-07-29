 <!--ATTRACTIONS SECTION-->
 <section class="destination-section">
     <div class="container">
         <div class="section-heading">
             <div class="row align-items-end">
                 <div class="col-lg-7">
                     <h5 class="dash-style">Atrakcje</h5>
                     <h2>Zobacz co warto zobaczyć</h2>
                 </div>
                 <div class="col-lg-5">
                     <div class="section-disc">
                        Ząb oferuje wiele wspaniałych atrakcji, które zachwycą każdego odwiedzającego. Od malowniczych szlaków turystycznych po historyczne zabytki i lokalne festiwale - każdy znajdzie tu coś dla siebie.
                 </div>
             </div>
         </div>
         <div class="destination-inner destination-three-column" style='margin-top:30px'>
             <div class="row">
                 <div class="col-lg-12">
                     
                     <div class="row">
                     @foreach ($attractions as $attraction )
                         <x-home.attraction-card :attraction="$attraction"/>
                         @endforeach
                        </div>

                        
                 </div>
                 
             </div>
             <div class="btn-wrap text-center">
                 <a href="#" class="button-primary">WIĘCEJ ATRAKCJI</a>
             </div>
         </div>
     </div>
 </section>
