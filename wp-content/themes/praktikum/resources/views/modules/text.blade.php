@php
    $textOnly = isset($data['text']) ? $data['text'] : '' ;
    // $buttonText = 
@endphp
<div class=" mb-10 text-base px-4 space-y-6 md:text-lg md:w-[85%] md:mx-auto lg:w-10/12 lg:text-xl font-spartan infos">

    {!! $textOnly !!}
</div>

    {{-- SE LE QUITO LA CLASE (opacity-0) PARA DESHABILITAR EL INTERSECtion observer --}}
