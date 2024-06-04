 
@dd($data);

@php
  $textTop = $data['text_top'];
  $textBottomRight_01 = $data['bottom_right_01'];
  $textBottomRight_02 = $data['bottom_right_02'];
@endphp

<div id="media_text" class="media-text bg-gradient-to-t from-black/40 relative min-h-[550px] overflow-hidden text-white
py-16 md:py-0 md:px-28">
  <div class="overlay flex flex-col px-8 space-y-24 max-w-[1300px] mx-auto md:justify-between">
    @if( $textTop )
      <div class="content-top opacity-0 text-center md:pt-48 md:w-4/5 text-[1.75rem] font-light">
        {!! $textTop !!}
      </div>
    @endif
    @if( $textBottomRight_01  || $textBottomRight_02 )
      <div class="flex justify-end ">
        <div class="content-bottom opacity-0 w-full text-center
                md:w-3/5 md:text-right md:space-y-8 md:pb-48">
          @if( $textBottomRight_01  )
            <div class="w-full">
              {!! $textBottomRight_01 !!}
            </div>
          @endif
          @if( $textBottomRight_02 )
            <div class="hidden w-full
                    md:block">
              {!! $textBottomRight_02 !!}
            </div>
          @endif
        </div>
      </div>
    @endif
  </div>
  @include('modules.image_video')
</div>

