@php
    $button = isset($data['button']) ? $data['button'] : '';
    $buttonUrl = isset($button['url']) ? $button['url'] : '';
    $buttonTitle = isset($button['title']) ? $button['title'] : '';
    $position = isset($data['position']) ? $data['position'] : '';
    $place = '';

    if ($position == 'links') {
        $place = 'justify-start';
    }elseif ($position == 'mitte') {
        $place = 'justify-center';
    }elseif ($position == 'rechts') {
        $place = 'justify-end';
    };
@endphp

@if ($buttonTitle)
    <div class="flex {{$place}}">
        <a href="{{ $buttonUrl }}" class="border border-turquoise text-turquoise p-4 hover:bg-turquoise hover:text-white transition-all duration-200">
            {{ $buttonTitle }}
        </a>
    </div>
@endif

