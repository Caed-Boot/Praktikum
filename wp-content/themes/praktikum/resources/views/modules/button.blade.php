{{-- 
@php
    $buttonTitle = isset($data['button_title']) ? $data['button_title'] : '';
    $button = isset($data['button_url']) ? $data['button_url'] : '';
    $buttonUrl = isset($button['url']) ? $button['url'] : '';
    
@endphp

@dump($buttonUrl)



<a href="{{ $buttonUrl }}"> {{ $buttonTitle }}  </a> --}}
