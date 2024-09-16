@php
    $button = isset($data['button_text']) ? $data['button_text'] : '';
    $buttonUrl = isset($button['url']) ? $button['url'] : '';
    $buttonTitle = isset($button['title']) ? $button['title'] : '';
@endphp

<div class="flex justify-center md:justify-start button">
    <a href="{{ $buttonUrl }}">
        <button class="border-2 border-turquoise py-3 px-6 transition-all duration-300 hover:bg-turquoise button__container">
            <span class="text-turquoise transition-all duration-300 button__text">{{ $buttonTitle }}</span>
        </button>

    </a>
</div>
