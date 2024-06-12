@php
    $headerTitle = isset($data['header_text']) ? $data['header_text'] : '';
    $headerSubtitle = isset($data['header_subtitle']) ? $data['header_subtitle'] : '';
    $headerImg = isset($data['header_pages']) ? $data['header_pages'] : '';
    $headerUrl = isset($headerImg['url']) ? $headerImg['url'] : '';
@endphp

{{-- @dump($headerTitle)
@dump($headerSubtitle)
@dump($headerUrl) --}}

<div class="relative text-slate-50 w-full">
    <img src="{{ $headerUrl }}" alt="" class="h-80 object-cover">
    <h2 class="text-4xl md:text-4xl absolute bottom-5 p-4 mb-2">{{ $headerTitle }}</h2>
    <h4 class="text-sm absolute bottom-0 p-4">{!! $headerSubtitle !!}</h4>
</div>