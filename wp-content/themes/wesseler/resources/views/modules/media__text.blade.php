@php
  $style = $data['style_selection'];
  $textCentered = $data['text_centered_single'];
  $textTop = $data['text_top'];
  $textBottomRight_01 = $data['bottom_right_01'];
  $textBottomRight_02 = $data['bottom_right_02'];
  $styleClass = $style == 'styleOne' ? 'flex-col' : '';
@endphp

@dump($data)

<div id="media_text" class="media-text media-text-overlay bg-gradient-to-t
from-black/60 from-40% to-black/45 to-95%
md:from-black/60 md:from-0 md:to-transparent
relative overflow-hidden
text-white py-16 mb-12
md:h-screen md:max-h-[1000px] md:py-0 md:px-28 md:mb-0">
  <div class="overlay flex {{ $styleClass }} px-8 max-w-[1300px] mx-auto md:items-center
  md:justify-between md:h-full">
    @if( $style == 'styleOne')
      @if( $textTop )
        <div class="content-top mb-10  text-center font-light
         md:flex
         md:justify-start
        ">
          <div class="w-full md:w-4/5 md:pt-44">
            {!! $textTop !!}
          </div>
        </div>
      @endif
      @if( $textBottomRight_01  || $textBottomRight_02 )
        <div class="flex justify-end">
          <div class="content-bottom opacity-0 w-full text-center
                md:w-3/5 md:text-right md:space-y-8 md:pb-40">
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
    @endif

    @if($style == 'styleTwo')
      @if( $textCentered )
        <div class="content-top opacity-0 mx-auto md:w-10/12 leading-snug
        font-light">
          {!! $textCentered !!}
        </div>
      @endif
    @endif
  </div>

  @include('modules.image_video')
</div>
