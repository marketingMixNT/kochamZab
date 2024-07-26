@props(['post'])

<div class="col-md-6 col-lg-4">
    <article class="post">
        <figure class="feature-image">
            <a href="#">
                <img src="{{$post->getThumbnailUrl()}}" alt="{{$post->title}}"
                   style="height:300px;width:100%;object-fit:cover">
            </a>
        </figure>
        <div class="entry-content" >
            <h3 class="post-title" c">
                <a href="#">{{$post->title}}</a>
            </h3>
            <div class="entry-meta">

                <span class="posted-on">
                    <a href="#">{{$post->getPublishedDate()}}</a>
                </span>

            </div>
        </div>
    </article>
</div>