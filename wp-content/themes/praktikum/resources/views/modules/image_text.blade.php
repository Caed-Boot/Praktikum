@php
    $title = isset($data['title']) ? $data['title'] : '';
    $text = isset($data['text']) ? $data['text'] : '';
    $image = isset($data['image']) ? $data['image'] : '';
    $imageSrc = isset($data['image']['url']) ? $data['image']['url'] : '';
    $order = isset($data['radio_button']) ? $data['radio_button'] : '';
    
    if ($order == 'rechts') {
        $order = 1;
        $position = 'left';
    } else {
        $order = 0;
        $position = 'right';

    }
@endphp



<section class="flex flex-col justify-center my-20 md:w-[90%] md:mx-auto">
    <h2 class="text-slate-900 mb-2 p-4 text-2xl font-semibold md:text-3xl">
        {{ $title }}
    </h2>
    <div class="flex flex-col justify-start p-4 md:flex-row">
        <article class="flex flex-col gap-8 md:flex-row">
            <img src="{{ $imageSrc }}" class="mb-4 bg-cover bg-left object-cover md:order-{{ $order }} md:w-1/2 md:h-/2 lg:w-[600px] lg:h-[600px]">
            @include('modules.text')
        </article>
    </div>
</section>
