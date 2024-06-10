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


{{-- 
<section class="flex flex-col my-4 p-4 md:p-10 transition-all section-img">

    <div class="flex">
        <h2 class="basis-1/4 mb-4 text-2xl text-slate-900 font-semibold md:text-3xl lg:text-3xl lg:pl-10">
            {{ $title }}
        </h2>
    
        <article class="flex flex-col justify-center space-y-6 md:items-center md:flex-row md:text-lg ">
            
        <img src="{{ $imageSrc }}" class=" bg-no-repeat bg-cover object-cover md:order-{{ $order }}   md:w-1/2 lg:w-[600px] lg:h-[600px]">
            <div class=" flex flex-col items-start justify-center text-justify space-y-6 md:w-1/2  lg:mx-20 font-spartan">
                  @include('modules.text')
            </div>
        </article> 
    </div>

    @include('modules.button')
</section> --}}

<section class="flex flex-col justify-center my-8 min-w-9">
    <h2 class="text-slate-900 mb-2 p-4 text-2xl font-semibold md:text-3xl">
        {{ $title }}
    </h2>
    <div class="flex flex-col justify-start p-4 md:flex-row">
        <article class="flex flex-col gap-8 md:flex-row">
            <img src="{{ $imageSrc }}" class="mb-4 bg-cover bg-left object-cover md:order-{{ $order }}   md:w-1/2 lg:w-[600px] lg:h-[600px]">
            @include('modules.text')
        </article>
    </div>
</section>
