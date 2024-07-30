@props(['post'])

<div class="customPost" >
    <article class="post">
        <figure class="feature-image">
            <a href="{{ route('blog.show', $post->slug) }}">
                <img src="{{ $post->getThumbnailUrl() }}" alt="{{ $post->title }}"
                    style="width:100%;height:305px;object-fit:cover">
            </a>
        </figure>
        <div class="entry-content">
            <h3>
                <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
            </h3>
            <div class="entry-meta">

                <span class="posted-on">
                    <a href="{{ route('blog.show', $post->slug) }}">{{ $post->getPublishedDate() }}</a>
                </span>

            </div>
            <p>{{ $post->getExcerpt() }}</p>
            <a href="{{ route('blog.show', $post->slug) }}" class="button-text">Czytaj</a>
        </div>
    </article>
</div>
