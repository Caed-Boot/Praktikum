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


<article class="p-4 md:p-6 md:p-10 mb-12 transition-all duration-500 lg:w-[70%] lg:mx-auto opacity-0 card section-img">
    <h2 class="mb-8 text-2xl md:text-3xl md:font-semibold card__title"> {{$title}} </h2>
    <div class="flex flex-col md:flex-row md:gap-8 lg:gap-10 card__container">
        <img src="{{$imageSrc}}" class="mb-8 object-cover object-center md:w-1/2 lg:w-3/5 card__img {{$order}} ">

        <div class="space-y-6 mb-8 card__text">
            {!! $text !!}

            @if ($buttonTitle == '')
            
            @else
    
            <div class="flex justify-center md:justify-start button">
                <a href="{{ $buttonUrl }}">
                    <button class="border-2 border-turquoise py-3 px-6 transition-all duration-300 hover:bg-turquoise button__container">
                        <span class="text-turquoise transition-all duration-300 button__text">{{ $buttonTitle }}</span>
                    </button>
                </a>
            </div>
            
            @endif
        </div>

      
    </div>

</article>


