@php
    $teamImg = isset($data['team_image']) ? $data['team_image'] : '';
    $teamUrl = isset($teamImg['url']) ? $teamImg['url'] : '';
    $teamInfo = isset($data['team_info']) ? $data['team_info'] : '';
    $teamEmail = isset($data['team_email']) ? $data['team_email'] : '';
    $teamTelefon = isset($data['team_telefon']) ? $data['team_telefon'] : '';
    
@endphp


<section class="flex my-32">

    @foreach ($data['team_repeater'] as $item)
        @dump($item)
    @endforeach

    <div class="flex justify-center items-end gap-4 mx-2">
        <img src="{{$teamUrl}}" class="w-24">
        <div class=" space-y-4 text-base ">
            {!! $teamInfo !!} <br>

            @if ( $teamEmail == '' && $teamTelefon == '' )
                
            @else
            <a class="text-red-700 font-semibold">@ {!! $teamEmail !!}</a> <br><br> 
            <a class="text-red-700 font-semibold"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 inline-block">
                <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
              </svg> {!! $teamTelefon !!}</a> 
            @endif
        </div>
    </div>
</section>