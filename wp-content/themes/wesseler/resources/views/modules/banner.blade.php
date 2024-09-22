@php
    $bannerImg = isset($data['banner_image']) ? $data['banner_image'] : '';
    $bannerUrl = isset($bannerImg['url']) ? $bannerImg['url'] : '';
    $bannerText = isset($data['banner_text']) ? $data['banner_text'] : ''; 
@endphp

<section class="wrapper mb-20">
    <div class=" border relative  flex justify-center  items-center h-44 md:h-64 overflow-hidden">
        <img src="{{ $bannerUrl }}" data-rellax-percentage="1" data-rellax-speed="-1" class="rellax object-cover object-top w-full brightness-50 h-80 md:h-[500px]">
        <div class="w-[75%] absolute text-d-h3 md:text-d-h2 lg:text-d-h1 text-center text-slate-100 "> {{$bannerText}} </div>
    </div>
</section>