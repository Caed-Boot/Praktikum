@php
    $bannerImg = isset($data['banner_image']) ? $data['banner_image'] : '';
    $bannerUrl = isset($bannerImg['url']) ? $bannerImg['url'] : '';
    $bannerText = ucfirst(isset($data['banner_text']) ? $data['banner_text'] : ''); 
@endphp


<section class="wrapper mb-20">
    <div class=" relative  flex justify-center  items-center h-44 md:h-64 overflow-hidden banner__container">
        <img src="{{ $bannerUrl }}" data-rellax-percentage="1" data-rellax-speed="-1" class="rellax object-cover w-full brightness-50 h-80 md:h-[500px]  banner__img">
        <h2 class="w-[75%] absolute !text-d-h3 md:!text-d-h2 text-center text-slate-100 "> {{$bannerText}} </h2>
    </div>
</section>
