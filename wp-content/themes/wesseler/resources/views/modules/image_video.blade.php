@dump($fields)
@php
  $typeSelection = $data['type_selection'];
  $selectImage = $typeSelection == 'image';

  $image = $data['type_content']['image'];
  $alt = get_post_meta($image, '_wp_attachment_image_alt', true);
  $contentType = $data['type_content'];

  $options = $contentType['options'];

  $selectLocal = $contentType['source_type'] == 'local';
  $selectEmbed = $contentType['source_type'] == 'embed';
  $mp4 = $contentType['mp4'];
  $videoEmbed = $data['type_content']['video_embed'];

  $loop = $options == 'loop';
  $muted = $options == 'muted';

  $module = $data['acf_fc_layout'];
  $classes = 'object-cover object-center w-full h-full';
  $mediaTextBasic = $module === 'media_text_basic' ? 'h-[287px] w-full md:w-[500px] md:h-[375px]' : '';
@endphp

@if( $selectImage )
  <div class="image{{-- bg-gradient-to-t from-black/40 h-full--}}">
    <x-image :id="$image"
             format="default"
             :class="$mediaTextBasic"
             :alt="$alt"/>
  </div>
@elseif( $selectLocal && !$selectImage )
  <div class="video{{-- bg-gradient-to-t from-black/60--}}">
    <x-video :videoPrimary="$mp4"
             :class="$classes" {{--:videoSecondary="$module['media']['video_webm']"--}}
             autoplay="true"
             {{ $loop }}
             {{ $muted }}
             playsinline/>
  </div>

@elseif( $selectEmbed && !$selectImage )
  <div class="video embed-container{{-- bg-gradient-to-t from-black/60--}} {!! $classes !!}">
    {!! $videoEmbed !!}
  </div>
@endif
