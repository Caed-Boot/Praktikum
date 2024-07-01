@php
    $headerTitle = isset($data['header_text']) ? $data['header_text'] : '';
    $headerSubtitle = isset($data['header_subtitle']) ? $data['header_subtitle'] : '';
    $headerImg = isset($data['header_pages']) ? $data['header_pages'] : '';
    $headerUrl = isset($headerImg['url']) ? $headerImg['url'] : '';
@endphp


<div class="relative text-slate-50 w-full mb-14 lg:h-96">
    <img src="{{ $headerUrl }}" alt="" class="h-80 object-cover w-full lg:h-96">
    <h2 class="text-5xl md:text-6xl absolute bottom-10 p-4 mb-2">{{ $headerTitle }}</h2>
    <h4 class="text-base absolute bottom-0 p-4 md:text-xl">{!! $headerSubtitle !!}</h4>
</div>