@php
    $button = isset($data['button_text']) ? $data['button_text'] : '';
    $buttonUrl = isset($button['url']) ? $button['url'] : '';
    $buttonTitle = isset($button['title']) ? $button['title'] : '';
    $position = isset($data['position']) ? $data['position'] : '';
    $place = '';

    if ($position == 'left') {
        $place = 'justify-start';
    }elseif ($position == 'center') {
        $place = 'justify-center';
    }elseif ($position == 'right') {
        $place = 'justify-end';
    };
@endphp
<div class="flex {{$place}}">
    <a href="{{ $buttonUrl }}" class="border border-turquoise text-turquoise p-4 hover:bg-turquoise hover:text-white transition-all duration-200">
        {{ $buttonTitle }}
    </a>
</div>
