@if ($data['slider'])

@php
    $overlayTitle = isset($data['fokussierte_titel']) ? $data['fokussierte_titel'] : '';
    $overlay = Str::lower(isset($data['uberlappung']) ? $data['uberlappung'] : '');
@endphp

<div class="swiper relative h-96 md:h-[75vh]">
    <!-- Additional required wrapper -->

    @if ($overlay =='ein')
        
      <div class="swiper__overlap absolute opacity-50 bottom-0 top-0 w-full z-10 transition-all duration-500 h-full">
      </div>

      <h1 class="absolute z-30 text-slate-50 opacity-0 px-5 swiper__overlap-title md:px-[15rem]">  </h1>

    @endif
      

      <div class="swiper-wrapper">
        <!-- Slides -->

      @foreach ($data['slider'] as $item)
          @php
              $img = isset($item['image']) ? $item['image'] : '';
              $imgUrl = $img['url'];
              
          @endphp
          
          <img src="{{ $imgUrl }}" data-swiper-autoplay="2500" class="swiper-slide h-full md:h-full object-cover swiper__img"></img>
        @endforeach
      </div>
          <!-- If we need pagination -->

      
      <div class="absolute swiper-button-prev 
      "></div>
      
      <div class="swiper-button-next"></div>
  </div>
  @endif