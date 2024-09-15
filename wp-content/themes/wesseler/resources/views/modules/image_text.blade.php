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
        $order = 'order-1';
        $position = 'left';
        $padding = 'md:pl-10 lg:pl-16 xl:pl-28';
    } else {
        $order = 'order-0';
        $position = 'right';
    }
@endphp


<article class="p-4 md:p-6 md:p-10 mb-12 transition-all duration-500 lg:w-[80%] lg:mx-auto opacity-0 card section-img">
    <h2 class="mb-8 text-2xl md:text-3xl md:font-semibold card__title"> {{$title}} </h2>
    <div class="flex flex-col md:flex-row md:gap-8 lg:gap-10 card__container">
        <img src="{{$imageSrc}}" class="mb-8 md:w-1/2 lg:w-3/5 card__img {{$order}} ">

        <div class="space-y-6 mb-8 card__text">
            {!! $text !!}

            @if ($buttonTitle == '')
            
            @else
    
            <div class=" m-auto mt-4">
                <a class="text-slate-800" href="{{ $buttonUrl }}">  
                    <button type="button" class="h-10 p-2 border-solid border border-black transition-colors hover:bg-slate-900 hover:text-slate-50 lg:text-2xl lg:h-14 mb-10 button">
                        {{ $buttonTitle }} 
                    </button>
                </a>
            </div>
    
    
            @endif
        </div>

      
    </div>

</article>


