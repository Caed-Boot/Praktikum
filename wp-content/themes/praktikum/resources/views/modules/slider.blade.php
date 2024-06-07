<div class="swiper md:h-96">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->

    @foreach ($data['slider'] as $item)
        @php
            $img = $item['image'];
            $imgUrl = $img['url'];
        @endphp
        
        <img src="{{ $imgUrl }}" data-swiper-autoplay="2000" class="swiper-slide md:h-96 object-cover "></img>
    @endforeach
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
  

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div>