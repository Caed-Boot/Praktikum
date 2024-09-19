@php
    $textOnly = isset($data['text']) ? $data['text'] : '' ;
    $button = isset($data['button_text']) ? $data['button_text'] : '';
    $buttonUrl = isset($button['url']) ? $button['url'] : '';
    $greenTitle = isset($data['turquoise_title']) ? $data['turquoise_title'] : '';

    $positionUntertitel = Str::lower(isset($data['position_untertitel']) ? $data['position_untertitel'] : '');

    if ($positionUntertitel == 'links') {
        $positionTitle = 'text-left';
    }elseif ($positionUntertitel == 'mitte') {
        $positionTitle = 'text-center';
        
    }else {
        $positionTitle = 'text-right';

    }
    
@endphp



<div class="space-y-8 px-8 py-16 md:w-[80%] lg:w-[70%] md:mx-auto md:text-left text-only">

    <h3 class="text-m-h4 text-turquoise {{$positionTitle}}"> {{$greenTitle}} </h3>

    {!! $textOnly !!}

    @if ($button == '')
        
    @else

        @include('modules.button')

    @endif


</div>

