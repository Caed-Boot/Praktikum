
@dump($data);

@php
  $title = isset($data['title']) ? $data['title'] : '';
  $text = isset($data['text']) ? $data['text'] : '';
  $image = isset($data['image']) ? $data['image'] : '';
  $imageSrc = isset($data['image']['url']) ? $data['image']['url'] : '';

  $button = isset($data['button']) ? $data['button'] : '';
@endphp
{{-- @dd($image) --}}

{{-- @dd($image) --}}
{{-- !! AUSRUFEZEICHEN !! --}}
{{-- SE UTILIZA PARA QUE ME TRAIGA LOS DATOS SIN TAGS --}}
{{-- {!! $text !!} --}}

{{-- <a href=" {{ $button['url'] }} ">
    {{ $button['title'] }}
</a> --}}

@if($button || $title )
    <a href="{{ $button['url'] }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"> {{ $button['title'] }} </a>
@endif


<section class="flex flex-col m-6 p-6">
    <h1 class="basis-1/4 text-3xl">
        {{ $title }}

    </h1>
    <article class="flex basis-1/4 p-3 gap">
        <img src="{{ $imageSrc }}" alt="" class=" w-1/2">
        <div class=" flex flex-col">
            <h2 class=" text-3xl"> subtitle</h2>
            <p class=" text-3xl">
              {!! $text !!} 
            </p>
        </div>
    </article> 
</section>