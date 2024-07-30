@props(['attraction'])

<div class="col-md-6 col-lg-4">
    <div class="desti-item overlay-desti-item">
        <a href="{{ route('attraction.show', $attraction->slug) }}">
            <figure class="desti-image">
                <img src="{{ $attraction->getThumbnailUrl() }}" alt="miniaturka atrakcji {{ $attraction->name }}"
                    style="height:500px ;width:100%;object-fit:cover" loading="lazy">
            </figure>

            <div class="desti-content">
                <h3>
                    <a href="{{ route('attraction.show', $attraction->slug) }}">{{ $attraction->name }}</a>
                </h3>
            </div>
        </a>
    </div>
</div>
