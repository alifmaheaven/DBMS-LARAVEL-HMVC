@if ($paginator->hasPages())
    
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <Button class="btn btn-round disabled">Previous</Button>
        @else
            <Button class="btn btn-round" onclick="window.location.href = '{{ $paginator->previousPageUrl() }}';">Previous</Button>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="disabled">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="active" style="background:#dcdcdc;">{{ $page }}</span>
                    @else
                        <span class=""><a  href="{{ $url }}">{{ $page }}</a></span>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <button type="button" class="btn btn-round"  onclick="window.location.href = '{{ $paginator->nextPageUrl() }}';">Next</button>
        @else
            <button type="button" class="btn btn-round disabled">Next</button>
        @endif
    
@endif
