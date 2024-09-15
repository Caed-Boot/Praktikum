@if ($data['slider'])

<div class="swiper h-96 md:h-[75vh]">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->

    @foreach ($data['slider'] as $item)
        @php
            $img = isset($item['image']) ? $item['image'] : '';
            $imgUrl = $img['url'];
            
        @endphp
        
        <img src="{{ $imgUrl }}" data-swiper-autoplay="2500" class="swiper-slide h-full md:h-full object-cover"></img>
      @endforeach
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
        
        
        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
  </div>
  @endif