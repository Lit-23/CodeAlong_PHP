@if($paginator->hasPages())

    <div class="pagination">
        @if($paginator->onFirstPage())
            <a href="#" disabled>&laquo;</a>
        @else
            <a class="active-page" href="{{ $paginator->previousPageUrl() }}">&laquo;</a>
        @endif

        @foreach($elements as $element)
            @if(is_string($element))
                <a href="#">{{ $element }}</a>
            @elseif(is_array($element))
                @foreach($element as $page => $url)
                    @if($page == $paginator->currentPage())
                        <a class="active-page" href="#">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        <a class="active-page">1</a>
        <a>2</a>
        <a>3</a>
        
        @if($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}">&raquo;</a>
        @else
            <a href="#">&raquo;</a>
        @endif
    </div>

@endif