@if ($paginator->hasPages())

    <div class="post-navigation-wrap">
        <nav>
            <ul class="pagination">
               

                @if ($paginator->onFirstPage())
                    <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"> <i class="fas fa-arrow-left"></i></a>
                    </li>
                @else
                    <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"> <i class="fas fa-arrow-left"></i></a>
                    </li>
                @endif

                @if ($paginator->hasMorePages())
                    <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"> <i class="fas fa-arrow-right"></i></a>
                    </li>
                @else
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"> <i class="fas fa-arrow-right"></i></a>
                </li>
                @endif

                
            </ul>
        </nav>
    </div>
@endif

