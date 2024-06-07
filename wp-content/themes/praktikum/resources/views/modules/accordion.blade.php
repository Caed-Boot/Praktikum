
<div id="flex justify-center max-w-20 mx-6" data-accordion="collapse">

    @foreach ($data['accordion'] as $item)
        @php

            $title = $item['title'];
            $text = $item['text'];
            $openId = str_replace(' ', '', $title);
            $bodyId = $openId;
            
        @endphp
        <h2 id="accordion-collapse-heading-{{ $openId }}" class="accordion-title">
            <button type="button" class="flex items-center justify-between text-xl w-5/6 m-auto p-5 font-medium rtl:text-right text-gray-800 border-b border-b-black focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-">
                <span> {{ $title }} </span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
            </button>
        </h2>


        <div id="accordion-collapse-body-{{ $bodyId }}" class="h-0 opacity-0 overflow-hidden transition-height duration-500 ease-in-out accordion-body">
            <div class="p-5 border border-b-0 border-gray-200 space-y-4">
                {!! $text !!}
            </div>
        </div>
    @endforeach
</div>