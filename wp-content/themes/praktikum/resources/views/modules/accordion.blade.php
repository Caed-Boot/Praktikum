
<div id="flex justify-center mx-6 accordion">

    @foreach ($data['accordion'] as $item)
        @php

            $title = $item['title'];
            $text = $item['text'];
            $openId = str_replace(' ', '', $title);
            $bodyId = $openId;
            
        @endphp

        {{-- Button --}}
        
        <h2 id="accordion-collapse-heading-{{ $openId }}" class=" my-2 accordion-title">
            <button type="button" class="w-10/12 max-w- flex items-center justify-between text-xl m-auto p-5 font-medium rtl:text-right text-gray-800 border-b border-b-black md:text-2xl lg:text-2xl hover:bg-gray-100 gap-3 transition-colors" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-">
                <span class="text-left"> {{ $title }} </span>

                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
            </button>
        </h2>

        {{-- Text --}}
        <div id=" accordion-collapse-body-{{ $bodyId }}" class="flex justify-center h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out accordion-body">
            <div class="w-10/12  p-5 space-y-4 md:text-xl lg:text-xl xl:text-2xl">
                {!! $text !!}
            </div>
        </div>
    @endforeach
</div>