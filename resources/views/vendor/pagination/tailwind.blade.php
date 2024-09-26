<nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between bg-[#83709E] p-4 rounded-lg shadow-md">
    <div class="flex justify-between flex-1 sm:hidden">
        @if ($paginator->onFirstPage())
        <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-[#83709E] bg-[#83709E] border border-[#83709E] cursor-default leading-5 rounded-md">
            {!! __('Anterior') !!}
        </span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-[#83709E] bg-[#83709E] border border-[#83709E] leading-5 rounded-md hover:bg-gray-700 transition ease-in-out duration-150">
            {!! __('Anterior') !!}
        </a>
    @endif
    
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-[#83709E] bg-[#83709E] border border-[#83709E] leading-5 rounded-md hover:bg-gray-700 transition ease-in-out duration-150">
            {!! __('Siguiente') !!}
        </a>
    @else
        <span class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-[#83709E] bg-[#83709E] border border-[#83709E] cursor-default leading-5 rounded-md">
            {!! __('Siguiente') !!}
        </span>
    @endif
    </div>
    
    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
        <div>
            <p class="text-sm text-white leading-5">
                {!! __('Mostrando') !!}
                @if ($paginator->firstItem())
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    {!! __('a') !!}
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                @else
                    {{ $paginator->count() }}
                @endif
                {!! __('de') !!}
                <span class="font-medium">{{ $paginator->total() }}</span>
                {!! __('resultados') !!}
            </p>
        </div>

        <div>
            <span class="relative z-0 inline-flex shadow-sm rounded-md">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <span aria-disabled="true">
                        <span class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-400 bg-[#83709E] border border-gray-300 cursor-default rounded-l-md" aria-hidden="true"></span>
                    </span>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-white bg-[#83709E] border border-gray-300 rounded-l-md hover:bg-gray-700 transition ease-in-out duration-150" aria-label="{{ __('pagination.previous') }}">
                    </a>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    @if (is_string($element))
                        <span aria-disabled="true">
                            <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-[#83709E] border border-gray-300 cursor-default">{{ $element }}</span>
                        </span>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span aria-current="page">
                                    <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-400 bg-[#83709E] border border-gray-300 cursor-default">{{ $page }}</span>
                                </span>
                            @else
                                <a href="{{ $url }}" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-white bg-[#83709E] border border-gray-300 hover:bg-gray-700 transition ease-in-out duration-150" aria-label="{{ __('Ir a la página :page', ['page' => $page]) }}">
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-white bg-[#83709E] border border-gray-300 rounded-r-md hover:bg-gray-700 transition ease-in-out duration-150" aria-label="{{ __('pagination.next') }}">
                    </a>
                @else
                    <span aria-disabled="true">
                        <span aria-hidden="true"></span>
                    </span>
                @endif
            </span>
        </div>
    </div>
</nav>
