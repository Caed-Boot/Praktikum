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

{{-- SE LE QUITO LA CLASE (opacity-0) PARA DESHABILITAR EL INTERSECtion observer --}}

<section class="flex flex-col my-4 p-4 md:p-10  transition-all section-img">

    <div>
        <h2 class="basis-1/4 mb-4 text-2xl text-slate-900 font-semibold md:text-3xl lg:text-3xl lg:pl-10">
            {{ $title }}
        </h2>
        {{--                                         md:items-start como nota               --}}
        <article class="flex flex-col justify-center space-y-6 md:items-center md:flex-row md:text-lg ">
            
        <img src="{{ $imageSrc }}" class=" bg-no-repeat bg-cover object-cover md:order-{{ $order }}   md:w-1/2 lg:w-[600px] lg:h-[600px]">
            <div class=" flex flex-col items-start justify-center text-justify space-y-6 md:w-1/2  lg:mx-20">
                  @include('modules.text')
            </div>
        </article> 
    </div>

    @include('modules.button')
</section>

