@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
      			<a class="page-link" href="#" tabindex="-1">Previous</a>
    		</li>
        @else
            <li class="disabled">
      			<a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" tabindex="-1">Previous</a>
    		</li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
    					<li class="page-item pagination-active">
      						<a class="page-link" style="background: #21cf7a; border: 1px solid #3ee895; border-bottom: none; color: white;" href="#">{{ $page }}<span class="sr-only">(current)</span></a>
    					</li>
                    @else
                     
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>

                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="page-item">
      		<a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>
    	</li>
        @else
        <li class="disabled">
      		<a href="#" class="page-link">Next</a>
    	</li>
        @endif
    </ul>
@endif

<style type="text/css">
	.page-link:hover {
	color: gray;
}
</style>