
@foreach ($data['repeater'] as $item)
    
    @php
        $button = isset($item['button']) ? $item['button'] : '';
        
        $buttonUrl = isset($button['url']) ? $button['url'] : '';
        $buttonTitle = isset($button['title']) ? $button['title'] : '';

    @endphp

    <div class="flex m-auto justify-center items-center mt-4">
        <a href="{{ $buttonUrl }}">  
            <button type="button" class="h-10 p-2 border-solid border border-black transition-colors hover:bg-slate-900 hover:text-slate-50 lg:text-2xl lg:h-14 mb-10 button">
                {{ $buttonTitle }}
            </button>
        </a>
    </div>

    
@endforeach


