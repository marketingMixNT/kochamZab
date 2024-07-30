@props(['restaurant'])

<div class="col-md-6 col-lg-4">
    <div class="special-item"  style="display: flex;flex-direction: column;justify-content: space-between;">
        <figure class="special-img">
            <img src="{{ $restaurant->getThumbnailUrl() }}" alt="{{ $restaurant->name }}"
                style="width:100%; height:450px; object-fit:cover" loading="lazy">
        </figure>

        <div class="special-content" >

            <h3 style="height:70px">
                <a href="{{ route('restaurant.show', $restaurant->slug) }}">{{ $restaurant->name }}</a>
            </h3>
            <p >{{ $restaurant->getExcerpt() }}</p>
            <div class="btn-wrap">
                <a href="{{ route('restaurant.show', $restaurant->slug) }}" class="button-text width-6">Sprawdź<i
                        class="fas fa-arrow-right"></i></a>

            </div>
        </div>
    </div>
</div>
