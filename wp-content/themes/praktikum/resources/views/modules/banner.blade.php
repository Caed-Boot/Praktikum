@php
    $bannerImg = isset($data['banner_image']) ? $data['banner_image'] : '';
    $bannerUrl = isset($bannerImg['url']) ? $bannerImg['url'] : '';
    $bannerText = ucfirst(isset($data['banner_text']) ? $data['banner_text'] : ''); 
@endphp


<section class=" wrapper">
    <div class="flex justify-center relative mb-20 banner__container">
        <img src="{{ $bannerUrl }}" class=" h-auto brightness-50 banner__img">
        <h2 class="absolute text-4xl w-[75%] text-center banner__text"> {{$bannerText}} </h2>
    </div>
</section>