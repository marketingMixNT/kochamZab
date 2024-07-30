@props(['apartment'])

<div class="col-lg-4 col-md-6">
    <div class="package-wrap">
        <figure class="feature-image">
            <a href="{{ route('apartment.show', $apartment->slug) }}">
                <img src="{{ $apartment->getThumbnailUrl() }}" alt="{{ $apartment->name }}"
                    style="height:305px;width:100%;object-fit:cover" loading="lazy">
            </a>
        </figure>

        <div class="package-content-wrap">

            <div class="package-content" style="margin-top:40px">
                <h3>
                    <a href="{{ route('apartment.show', $apartment->slug) }}">{{ $apartment->name }}</a>
                </h3>

                <p style="height:100px">{{ $apartment->getExcerpt() }}</p>
                <div class="btn-wrap">
                    <a href="{{ route('apartment.show', $apartment->slug) }}" class="button-text width-6">Zobacz<i
                            class="fas fa-arrow-right"></i></a>

                </div>
            </div>
        </div>
    </div>
</div>
