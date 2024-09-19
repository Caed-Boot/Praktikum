
<div class="flex flex-col justify-center mx-auto my-24 w-[90%] md:w-[80%]  lg:w-[70%] accordion">

    @foreach ($data['accordion'] as $item)
        @php

            $title = $item['title'];
            $text = $item['text'];
            $openId = str_replace(' ', '', $title);
            $bodyId = $openId;
            
        @endphp




        {{-- Button --}}
        
        <h2 id="accordion-collapse-heading-{{ $openId }}" class=" accordion-title px-8">
            <button type="button" class="w-full flex items-center justify-between py-4  text-m-primary font-semibold  transition-colors md:text-d-primary lg:text-d-h5 accordion__button" 
            
            data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-">
                <span class="text-left"> {{ $title }} </span>


                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 transition-all duration-300 border rounded-full plus-asset md:size-6" id="{{$bodyId}}">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                
            </button>
        </h2>

        {{-- Text --}}
        <article id=" accordion-collapse-body-{{ $bodyId }}" class="w-10/12 transition-all duration-300 ease-in-out accordion-body">
            <div class="transition-all duration-300">
                {!! $text !!}
            </div>
        </article>
    @endforeach
</div>