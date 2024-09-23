@php
    $title = isset($data['title']) ? $data['title'] : '';
    $text = isset($data['text']) ? $data['text'] : '';
    $image = isset($data['image']) ? $data['image'] : '';
    $imageSrc = isset($data['image']['url']) ? $data['image']['url'] : '';
    $order = isset($data['radio_button']) ? $data['radio_button'] : '';
    $buttonImgText = isset($data['button']) ? $data['button'] : '';
    $buttonTitle = isset($buttonImgText['title']) ? $buttonImgText['title'] : '';
    $buttonUrl = isset($buttonImgText['url']) ? $buttonImgText['url'] : '';
    $buttonPosition = isset($data['position_button']) ? $data['position_button'] : '';
    $textAlign = '';
    if ($order == 'rechts') {
        $order = 'order-1';
        $textAlign = 'hidden md:block text-right pr-10 lg:pr-0';
        $buttonPosition = 'justify-end';
    } else {
        $order = 'order-0';
        $position = 'right';
    }
    if ($buttonPosition == 'rechts') {
        $buttonPosition = 'justify-end';
    }
@endphp

<div class="p-4  md:p-10 mb-12 transition-all duration-500 lg:w-[70%] lg:mx-auto opacity-0 card section-img">
    <div class="mb-8 {{$textAlign}} text-m-h3 md:text-d-h4 md:font-semibold card__title"> {{$title}} </div>
    <div class="flex flex-col md:flex-row md:gap-8 lg:gap-10 card__container">
        <img src="{{$imageSrc}}" class="mb-8 object-cover object-center md:w-1/2 lg:w-3/5 card__img {{$order}} ">
        <div class="space-y-6 mb-8 md:w-2/5 card__text">
            {!! $text !!}
            @include('modules.button')
                {{-- <div class="flex {{ $buttonPosition }}">
                    <a href="{{ $buttonUrl }}" class="border border-turquoise text-turquoise p-4 hover:bg-turquoise hover:text-white transition-all duration-200">
                        {{ $buttonTitle }}
                    </a>
                </div> --}}
        </div>
    </div>
</div>