@php
    $textOnly = isset($data['text']) ? $data['text'] : '' ;
    $greenTitle = isset($data['turquoise_title']) ? $data['turquoise_title'] : '';
    $positionUntertitel = isset($data['position_untertitel']) ? $data['position_untertitel'] : '';

    if ($positionUntertitel == 'links') {
        $positionTitle = 'text-left';
    }elseif ($positionUntertitel == 'mitte') {
        $positionTitle = 'text-center';
    }else {
        $positionTitle = 'text-right';
    }
@endphp

<div class="space-y-8 px-8 py-16 md:w-[80%] lg:w-[70%] md:mx-auto text-only">
    <div class="text-m-h4 text-turquoise {{$positionTitle}}">             
        {{$greenTitle}}     
    </div>
    {!! $textOnly !!}
    
    @include('modules.button')
</div>