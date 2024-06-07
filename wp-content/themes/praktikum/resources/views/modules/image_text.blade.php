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

<section class="flex flex-col my-4 p-4 md:p-10 opacity-0 section-img">

    <div>
        <h2 class="basis-1/4 mb-4 text-2xl text-slate-900 font-semibold md:text-3xl lg:text-3xl lg:pl-10">
            {{ $title }}
        </h2>
        <article class="flex flex-col justify-center gap-10 md:items-start space-y-6 md:flex-row md:text-lg ">
        <img src="{{ $imageSrc }}" class=" bg-no-repeat bg-cover object-cover md:order-{{ $order }}  max-w-96 h-96 md:w-1/2 ">
            <div class=" flex flex-col items-start justify-center text-justify space-y-6 md:w-1/2 ">
                  @include('modules.text')
            </div>
        </article> 
    </div>

    @include('modules.button')
</section>

