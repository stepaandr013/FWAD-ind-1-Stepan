<ul style="display: flex; gap:10px;">

    @if ($paginator->hasPages())

        @foreach ($elements as $element)

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    <li>
                        @if ($page == $paginator->currentPage())
                            <a href="{{ $url }}" class="active" style="font-weight:bold;">{{ $page }}</a>
                        @else
                            <a href="{{ $url }}">{{ $page }}</a>
                        @endif

                    </li>
                @endforeach
            @endif
        @endforeach

    @endif

</ul>
