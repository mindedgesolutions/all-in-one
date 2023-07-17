@if ($paginator->hasPages())
    <style scoped>
        a.disabled {
            pointer-events: none;
            color: #ccc;
        }
    </style>
    <!-- <div class="card-footer d-flex align-items-center"> -->
    <p class="m-0 text-muted">Showing <span>{{ $paginator->firstItem() }}</span> to
        <span>{{ $paginator->lastItem() }}</span> of <span>{{ $paginator->total() }}</span> entries
    </p>
    <ul class="pagination m-0 ms-auto">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <i class="ti ti-chevron-left"></i>
                    prev
                </a>
            </li>
        @else
            <li class="page-item">
                <button class="page-link" href="#" tabindex="-1" aria-disabled="true" wire:click="previousPage"
                    wire:loading.attr="disabled" rel="prev" aria-label="@lang('pagination.previous')">
                    <i class="ti ti-chevron-left"></i>
                    prev
                </button>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item"><a class="page-link" href="#">{{ $element }}</a></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>
                    @else
                        <li class="page-item"><button wire:click="gotoPage({{ $page }})" class="page-link"
                                href="#">{{ $page }}</button></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <button class="page-link" href="#" wire:click="nextPage" wire:loading.attr="disabled"
                    rel="next" aria-label="@lang('pagination.next')">
                    next
                    <i class="ti ti-chevron-right"></i>
                </button>
            </li>
        @else
            <li class="page-item disabled">
                <a class="page-link" href="#" rel="next" aria-label="@lang('pagination.next')">
                    next
                    <i class="ti ti-chevron-right"></i>
                </a>
            </li>
        @endif
    </ul>
@endif
<!-- </div>
