@props(['restaurant'])

<div class="col-md-6 col-lg-4">
    <div class="special-item">
        <figure class="special-img">
            <img src="{{ $restaurant->getThumbnailUrl() }}" alt="{{ $restaurant->name }}"
                style="width:100%; height:450px; object-fit:cover">
        </figure>

        <div class="special-content">

            <h3>
                <a href="#">{{ $restaurant->name }}</a>
            </h3>
            <p>{{ $restaurant->getExcerpt() }}</p>
            <div class="btn-wrap">
                <a href="{{ route('restaurant.show', $restaurant->slug) }}" class="button-text width-6">Sprawdź<i
                        class="fas fa-arrow-right"></i></a>

            </div>
        </div>
    </div>
</div>
