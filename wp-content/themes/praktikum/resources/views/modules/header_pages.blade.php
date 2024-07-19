@php
    $headerTitle = isset($data['header_text']) ? $data['header_text'] : '';
    $headerSubtitle = isset($data['header_subtitle']) ? $data['header_subtitle'] : '';
    $headerImg = isset($data['header_pages']) ? $data['header_pages'] : '';
    $headerUrl = isset($headerImg['url']) ? $headerImg['url'] : '';
@endphp


<div class="relative text-slate-50 w-full mb-14 lg:h-[55vh]">
    <img src="{{ $headerUrl }}" alt="" class="h-full object-cover w-full brightness-75">
    <h2 class="absolute bottom-10 p-4 mb-2 text-5xl md:text-6xl lg:text-8xl">{{ $headerTitle }}</h2>
    <h4 class="text-base absolute bottom-0 p-4 md:text-xl">{!! $headerSubtitle !!}</h4>
</div>