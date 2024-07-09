

<section class=" mx-2 p-8 relative xl:w-[80%] xl:mx-auto  history__container">

    @foreach ($data['repeater'] as $item)
        @php
            $historyYear = isset($item['year_history']) ? $item['year_history'] : '';
            $historyTitle = isset($item['title_history']) ? $item['title_history'] : '';
            $historyImage = isset($item['image_history']) ? $item['image_history'] : '';
            $historyUrl = isset($historyImage['url']) ? $historyImage['url'] : '';
            $historyText = isset($item['text_history']) ? $item['text_history'] : '';
            $margin;
            $textPosition;

            if ($loop->index % 2 == 0) {
                $margin = "r";
                $textPosition = "right";
                $circlePosition ="circle-right-position";
            } else {
                $margin = "l";
                $textPosition = "left";
                $circlePosition ="circle-left-position";
            }
        @endphp


        <div class="flex flex-col mb-12 gap-4 md:w-[40%] md:m{{ $margin }}-auto history">
            <div class="relative md:text-{{$textPosition}}">
                <span class="circle"></span>
                <span class=" history__title text-lg lg:text-3xl"> {{$historyYear}} </span>
            </div>

            @if ($historyTitle == '' && $historyUrl =='')
                
            @else
                <h2 class="md:text-{{$textPosition}} lg:text-4xl"> {{ $historyTitle }} </h2>
                <img src="{{ $historyUrl }}" class="">
            @endif
            <div class=" history__info md:text-lg lg:text-2xl">
                {!! $historyText !!}
            </div>
        </div>
    @endforeach

</section>

