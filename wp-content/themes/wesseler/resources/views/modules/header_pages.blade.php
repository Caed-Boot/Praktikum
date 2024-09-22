@php
    $headerTitle = isset($data['header_text']) ? $data['header_text'] : '';
    $headerSubtitle = isset($data['header_subtitle']) ? $data['header_subtitle'] : '';
    $headerImg = isset($data['header_pages']) ? $data['header_pages'] : '';
    $headerUrl = isset($headerImg['url']) ? $headerImg['url'] : '';
@endphp

<div class="relative text-slate-50 w-full mb-14 md:h-[40vh]">
    <img src="{{ $headerUrl }}" alt="" class="h-full object-cover w-full brightness-75 rellax" data-rellax-percentage="0.5" data-rellax-speed="-1">
    <div class="flex flex-col gap-4 absolute bottom-0 px-4">
        <span class="text-m-h2 md:text-d-h2 lg:text-d-h1">{{ $headerTitle }}</span>
        {!! $headerSubtitle !!}
    </div>
</div>