@php
    $bannerImg = isset($data['banner_image']) ? $data['banner_image'] : '';
    $bannerUrl = isset($bannerImg['url']) ? $bannerImg['url'] : '';
    $bannerText = ucfirst(isset($data['banner_text']) ? $data['banner_text'] : ''); 
@endphp


<section class="wrapper">
    <div class="relative  flex justify-center  items-center h-44 md:h-96 overflow-hidden banner__container">
        <img src="{{ $bannerUrl }}" data-rellax-percentage="1" data-rellax-speed="-1" class="rellax object-cover object-center h-80 w-full brightness-50  banner__img">
        <h2 class="w-[75%] absolute text-3xl text-center text-slate-100 md:text-6xl lg:text-8xl"> {{$bannerText}} </h2>
    </div>
</section>