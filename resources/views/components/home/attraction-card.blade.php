@props(['attraction'])

<div class="col-md-6 col-lg-4">
    <div class="desti-item overlay-desti-item">
        <figure class="desti-image">
            <img src="{{$attraction->getThumbnailUrl()}}" alt="{{$attraction->name}}"
            style="height:500px ;width:100%;object-fit:cover"
               >
        </figure>
        {{-- <div class="meta-cat bg-meta-cat">
            <a href="#">Natura</a>
        </div> --}}
        <div class="desti-content">
            <h3>
                <a href="{{route('attraction.show', $attraction->slug)}}">{{$attraction->name}}</a>
            </h3>
         
        </div>
    </div>
</div> 