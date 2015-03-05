<ul class="pagination centered">
    <li class="arrow-first {{ $current === 0 ? 'unavailable' : '' }}"><a href="{{ $baseUrl }}"> |< </a></li>
    @if(isset($links[$current - 1]))
        <?php $prev = $links[$current - 1]; ?>
        <li class="prev"><a href="{{ $baseUrl.$prev['uri'] }}"> < </a></li>
    @else
        <li class="prev unavailable"><a href="#"> < </a></li>
    @endif
@foreach($links as $key => $link)
    <li class="{{ $link['isCurrent'] ? 'active' : '' }}"><a href="{{ $baseUrl.$link['uri'] }}">{{ $key + 1 }}</a></li>
@endforeach
    @if(isset($links[$current + 1]))
        <?php $next = $links[$current + 1] ?>
        <li class="next"><a href="{{ $baseUrl.$next['uri'] }}"> > </a></li>
    @else
        <li class="next unavailable"><a href="#"> > </a></li>
    @endif
    <?php $last = end($links); ?>
    <li class="arrow-last {{ ($current + 1) === count($links) ? 'unavailable' : '' }}"><a href="{{ $baseUrl.$last['uri'] }}"> >| </a></li>
</ul>
