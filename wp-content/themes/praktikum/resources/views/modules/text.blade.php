@php
    $textOnly = isset($data['text']) ? $data['text'] : '' ;
    $button = isset($data['button_text']) ? $data['button_text'] : '';
    $buttonTitle = isset($button['title']) ? $button['title'] : '';
    $buttonUrl = isset($button['url']) ? $button['url'] : '';
@endphp


<div class=" mb-10 text-base px-4 space-y-6 md:text-lg md:w-[85%] md:mx-auto lg:w-10/12 lg:text-xl lg:w-[80%] xl:w-[70%] xl:text-2xl font-spartan infos">

    {!! $textOnly !!}   

        @if ($buttonTitle == '')
            
        @else
           @include('modules.button')
        @endif

   
</div>

    {{-- SE LE QUITO LA CLASE (opacity-0) PARA DESHABILITAR EL INTERSECtion observer --}}
