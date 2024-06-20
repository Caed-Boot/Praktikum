
@php
    $button = isset($data['button_url']) ? $data['button_url'] : '';
    $buttonTitle = isset($button['title']) ? $button['title'] : '';
    $buttonUrl = isset($button['url']) ? $button['url'] : '';
    
@endphp


@if ($buttonTitle == "")

@else

    <div class="flex m-auto justify-center items-center mt-4">
        <a href="{{ $buttonUrl }}" class="">  
            <button type="button" class="h-10 p-2 border-solid border border-black transition-colors hover:bg-slate-900 hover:text-slate-50 lg:text-2xl lg:h-14 mb-10 button">
                {{ $buttonTitle }} 
            </button>
        </a>
    </div>
@endif


