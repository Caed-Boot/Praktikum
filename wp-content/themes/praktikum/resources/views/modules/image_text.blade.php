@php
    $title = isset($data['title']) ? $data['title'] : '';
    $text = isset($data['text']) ? $data['text'] : '';
    $image = isset($data['image']) ? $data['image'] : '';
    $imageSrc = isset($data['image']['url']) ? $data['image']['url'] : '';
    $order = isset($data['radio_button']) ? $data['radio_button'] : '';
    $buttonImgText = isset($data['button']) ? $data['button'] : '';
    $buttonTitle = isset($buttonImgText['title']) ? $buttonImgText['title'] : '';
    $buttonUrl = isset($buttonImgText['url']) ? $buttonImgText['url'] : '';
    $padding = "";

    if ($order == 'rechts') {
        $order = 1;
        $position = 'left';
        $padding = 'md:pl-10 lg:pl-16 xl:pl-28';
    } else {
        $order = 0;
        $position = 'right';
    }
@endphp

<section class="flex flex-col justify-center my-20 md:w-[90%] md:mx-auto image-text transition-all duration-500  section-img">
    <div class="flex flex-col">
        <h2 class="text-slate-900 mb-2 px-4 py-4 text-2xl font-semibold {{$padding}} md:text-3xl">
            {{ $title }}
        </h2>
        <div class="flex p-4 md:flex-row">
            <article class="flex flex-col gap-8 md:flex-row">
                <img src="{{ $imageSrc }}" class="mb-4 bg-cover bg-left object-cover md:order-{{ $order }} md:w-1/2 md:h-3/4 lg:w-[50%] lg:h-[100%]">
              
                <div class="flex flex-col">
                    @include('modules.text')
        
                    @if ($buttonTitle == '')
                        
                    @else
                        <div class="flex m-auto mt-4">
                            <a class="text-slate-800" href="{{ $buttonUrl }}">  
                                <button type="button" class="h-10 p-2 border-solid border border-black transition-colors hover:bg-slate-900 hover:text-slate-50 lg:text-2xl lg:h-14 mb-10 button">
                                    {{ $buttonTitle }} 
                                </button>
                            </a>
                        </div>
                    @endif
                </div>
                
            </article>
    </div>
    </div>
</section>

