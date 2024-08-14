@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination test" class="flex justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="border border-white bg-black relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 rounded-md hover:text-gray-500 focus:outline-none transition ease-in-out duration-150 text-white ">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="border border-white bg-black relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 rounded-md hover:text-gray-500 focus:outline-none transition ease-in-out duration-150 text-white ">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="border border-white bg-black relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 rounded-md hover:text-gray-500 focus:outline-none transition ease-in-out duration-150 text-white ">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class="border border-white bg-black relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 rounded-md hover:text-gray-500 focus:outline-none transition ease-in-out duration-150 text-white ">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </nav>
@endif
