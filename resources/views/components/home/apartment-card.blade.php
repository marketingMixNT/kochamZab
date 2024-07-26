@props(['apartment'])

<div class="col-lg-4 col-md-6">
    <div class="package-wrap">
       <figure class="feature-image">
          <a href="#">
             <img src="{{$apartment->getThumbnailUrl()}}" alt="{{$apartment->name}}" style="height:305px;width:100%;object-fit:cover">
          </a>
       </figure>
       {{-- <div class="package-price">
          <h6>
             <!-- <span>$1,900 </span> / per person -->
             lorem ipsum dolor
          </h6>
       </div> --}}
       <div class="package-content-wrap">
          {{-- <div class="package-meta text-center">
             <ul>
                <li>
                   <i class="far fa-clock"></i>
                   lorem
                </li>
                <li>
                   <i class="fas fa-user-friends"></i>
                   lorem
                </li>
                <li>
                   <i class="fas fa-map-marker-alt"></i>
                   lorem
                </li>
             </ul>
          </div> --}}
          <div class="package-content" style="margin-top:40px">
             <h3>
                <a href="#">{{$apartment->name}}</a>
             </h3>
            
             <p>{{$apartment->getExcerpt()}}</p>
             <div class="btn-wrap">
                <a href="#" class="button-text width-6">Zarezerwuj<i
                      class="fas fa-arrow-right"></i></a>
                
             </div>
          </div>
       </div>
    </div>
 </div> 