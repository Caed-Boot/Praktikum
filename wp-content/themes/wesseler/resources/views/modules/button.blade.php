@php
    $button = isset($data['button_text']) ? $data['button_text'] : '';
    $buttonUrl = isset($button['url']) ? $button['url'] : '';
    $buttonTitle = isset($button['title']) ? $button['title'] : '';

    $position = isset($data['position']) ? $data['position'] : '';
    
    if ($position == 'left') {
        $margin = 'justify-start';
        
    }elseif ($position == 'center') {
        
        $margin = 'justify-center';
    }else {
        $margin = 'justify-end';
    };
@endphp

<div class="flex {{$margin}} button">
    <a href="{{ $buttonUrl }}">
        <button class="border-2 border-turquoise py-3 px-6 transition-all duration-300 hover:bg-turquoise button__container">
            <span class="text-turquoise transition-all duration-300 button__text">{{ $buttonTitle }}</span>
        </button>

    </a>
</div>
