
<article class=" bg-turquoise p-8 space-y-4 text-asset mb-16 md:grid md:grid-cols-3 md:space-y-0">
@foreach ($data['header_asset'] as $item)

    @php
        $title = isset($item['text_asset']) ? $item['text_asset'] : '';
    @endphp
   
    <div class="flex flex-row  gap-4 md:gap-2">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </span>
     

        <h3> {{ $title }} </h3>
         
    </div>
@endforeach

</article>