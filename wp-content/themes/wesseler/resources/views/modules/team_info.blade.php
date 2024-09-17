

<section class="grid gap-y-16 p-8 md:grid-cols-2 md:w-[80%] md:mx-auto grid-team">

    @foreach ($data['team_repeater'] as $item)
        
        @php
            $teamImg = isset($item['team_image']) ? $item['team_image'] : '';
            $teamUrl = isset($teamImg['url']) ? $teamImg['url'] : '';
            $teamInfo = isset($item['team_info']) ? $item['team_info'] : '';
            $teamEmail = isset($item['team_email']) ? $item['team_email'] : '';
            $teamTelefon = isset($item['team_telefon']) ? $item['team_telefon'] : '';
    
        @endphp

            <div class="flex flex-row md:flex-col justify-center md:items-center transition-all duration-500 section-img">
                
                <div class="flex md:flex-col md:items-center gap-6">

                    <img src="{{$teamUrl}}" class="object-cover object-center w-2/5 md:w-4/5">
                    
                    <div class="flex flex-col justify-start space-y-2 grid-team__info">
                        
                        <div class="space-y-3">
                            {!! $teamInfo !!} 
                        </div>
                        
                        <div class="text-left">

                            @if ( $teamEmail == '' && $teamTelefon == '' )
                            
                            @else
                            <div class="flex flex-col space-y-4">
                                <a class=" font-semibold text-m-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 inline-block">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                  </svg>
                                   {!! $teamEmail !!}</a> 
                                <a class=" font-semibold text-m-primary"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 inline-block">
                                    <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                                </svg> {!! $teamTelefon !!}</a> 
                            </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        
    @endforeach
</section>