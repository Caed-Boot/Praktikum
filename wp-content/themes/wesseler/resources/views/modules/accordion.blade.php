
<div class="flex flex-col justify-center my-24 md:w-[70%] md:mx-auto accordion">

    @foreach ($data['accordion'] as $item)
        @php

            $title = $item['title'];
            $text = $item['text'];
            $openId = str_replace(' ', '', $title);
            $bodyId = $openId;
            
        @endphp



        {{-- Button --}}
        
        <h2 id="accordion-collapse-heading-{{ $openId }}" class=" accordion-title px-8 ">
            <button type="button" class="w-full flex items-center justify-between py-4 border-y-[1px] text-m-primary font-semibold border-turquoise transition-colors md:text-d-primary" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-">
                <span class="text-left"> {{ $title }} </span>


                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 transition-all duration-300 border rounded-full plus-asset">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                
            </button>
        </h2>

        {{-- Text --}}
        <article id=" accordion-collapse-body-{{ $bodyId }}" class="grid w-10/12 transition-all p-4 duration-300 ease-in-out accordion-body">
            <div class="transition-all duration-300">
                {!! $text !!}
            </div>
        </article>
    @endforeach
</div>