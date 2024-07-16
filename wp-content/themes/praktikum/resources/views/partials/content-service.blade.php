@includeUnless(empty($fields['modules']), 'sections.modules')


<section class=" service">

        @foreach ($fields['modules'] as $item)
            
            @if (isset($item['repeater']))

                @php
                $serviceTitle = strtoupper(isset($item['service_title']) ? $item['service_title'] : '') ;
                @endphp

                {{-- Title --}}
                <h2 class=" font-semibold mb-4 text-xl px-4 md:text-2xl md:w-[90%] md:mx-auto xl:w-[65%] xl:text-3xl"> {{ $serviceTitle }} </h2>

                <div class=" grid gap-2 text-slate-800 text-lg mb-10 p-4 gap-4 md:grid-cols-2 md:w-[90%] md:mx-auto md:text-xl xl:w-[65%] xl:text-2xl">

                    @foreach ($item['repeater'] as $element)
                    
                    @php
                        $serviceImg = isset($element['service_image']) ? $element['service_image'] : '';
                        
                        $serviceUrl = isset($serviceImg['url']) ? $serviceImg['url'] : '';

                        $serviceSubtitle = strtoupper(isset($element['service_subtitle']) ? $element['service_subtitle'] : '');
                    @endphp

                    <a href="/">
                        <div class=" relative h-80 mb-10 service__grid">
                            <img src="{{ $serviceUrl }}" class="h-full w-full object-cover brightness-75 transition-all duration-[0.3s]">
                            <h2 class="absolute bottom-[-15px] bg-white px-2 transition-all duration-[0.3s] md:px-6 ">
                                {{ $serviceSubtitle }}
                            </h2>
                        </div>
                    </a>


                @endforeach
                </div>
               

            @endif

        @endforeach

</section>