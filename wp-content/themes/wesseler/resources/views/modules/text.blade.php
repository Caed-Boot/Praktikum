@php
    $textOnly = isset($data['text']) ? $data['text'] : '' ;
    $button = isset($data['button_text']) ? $data['button_text'] : '';
    $buttonUrl = isset($button['url']) ? $button['url'] : '';
@endphp



<div class="text-only space-y-8 px-8 py-16 md:w-[80%] lg:w-[70%] md:mx-auto md:text-left">

    {!! $textOnly !!}   

    @if ($button == '')
        
    @else

        @include('modules.button')

    @endif


</div>

