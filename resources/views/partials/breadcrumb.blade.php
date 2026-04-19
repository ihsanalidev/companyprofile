<div class="breadcrumb">
    @foreach ($breadcrumb as $index => $item)
        @if ($item['url'])
            <a href="{{ $item['url'] }}">{{ $item['name'] }}</a>
        @else
            <span class="active-breadcrumb">{{ $item['name'] }}</span>
        @endif

        @if ($index < count($breadcrumb) - 1)
            <span>›</span>
        @endif
    @endforeach
</div>