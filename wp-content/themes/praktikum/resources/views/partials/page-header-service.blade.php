@php
    $textCustom = isset($fields['text_custom']) ? $fields['text_custom'] : '';
    $imgCustom = isset($fields['image_custom']) ? $fields['image_custom'] : '';
    $UrlCustom = $imgCustom['url'];

    $buttonCustom = isset($fields['button_custom']) ? $fields['button_custom'] : '';
    $buttonTitle = isset($buttonCustom['title']) ? $buttonCustom['title'] : '';
    $buttonUrl = isset($buttonCustom['url']) ? $buttonCustom['url'] : '';

@endphp


<section class="flex flex-col justify-center mb-20">
  <div class="flex flex-col mt-16 md:flex-row lg:h-[730px]">
      <article class="flex flex-col gap-6 md:flex-row">
          <img src="{{ $UrlCustom }}" class="h-96 bg-cover bg-left object-cover md:w-2/4 md:h-auto">
          <div class="flex flex-col justify-center space-y-4 p-2 custom-info md:text-lg lg:px-8 xl:text-xl">
            {!! $textCustom !!}
            
            @if( $buttonCustom == '')  
                
            @else
              <div class="flex items-center mt-4">
                <a href="{{ $buttonUrl }}" class="">  
                    <button type="button" class="flex justify-center items-center h-10 p-2 border-solid border border-black transition-colors hover:bg-slate-900 hover:text-slate-50 lg:text-2xl lg:h-14">
                        {{ $buttonTitle }}
                    </button>
                </a>
              </div>
            @endif
          </div>
          
      </article>

     
  </div>
</section>