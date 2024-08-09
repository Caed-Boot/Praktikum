@includeUnless(empty($fields['modules']), 'sections.modules')


{{-- 
    Primero recorremos el array $fields y entramos a Modules

    Estaremos recorriendo cada uno de los elementos del array como $item. En este caso queremos entrar a otro array con la key "repeater" 
--}}

<section class="grid grid-cols-2 mx-auto auto-rows-[115px] md:auto-rows-[225px] md:gap-4 md:w-[95%] lg:auto-rows-[335px]  p-2 gap-2 schreiner">
    @foreach ($fields['modules'] as $i=> $item)

        {{-- 
            luego al recorrer cada uno de los elementos, debemos hacer una condicion para que encuentre la key repeater en la posicion donde este
        --}}
        @if (isset($item['repeater']))
            
            {{-- 
                Al encontrar la key, debemos crear otro foreach para poder recorrer los elementos que estan adentro del repeater
            --}}

            @foreach ($item['repeater'] as $element)
                
                {{--
                    Ya al estar dentro del repeater, podremos obtener los datos que ingresamos en el backend
                --}}
                @php
                    $gridTitle = strtoupper(isset($element['grid_title']) ? $element['grid_title'] : '');
                    $gridImg = isset($element['grid_image']) ? $element['grid_image'] : '';
                    $gridUrl = isset($gridImg['url']) ? $gridImg['url'] : '';
                    $gridRow = isset($element['rows']) ? $element['rows'] : '';
                    $gridColumn = isset($element['columns']) ? $element['columns'] : '';
                    
                    $column = 'col-span-'.$gridColumn;
                    $row = 'row-span-'.$gridRow;
                @endphp


                
                <div class=" relative text-slate-50 font-semibold text-lg md:text-xl lg:text-3xl xl:text-5xl {{$row}} {{$column}} transition-all schreiner__card">
                    <a class="" href="">
                        <img src="{{ $gridUrl }}" alt="" class=" h-full object-cover w-full brightness-50 transition-all duration-500 hover:brightness-100">
                        <h2 class="absolute left-[50%] top-[50%] transition-all duration-500">{{ $gridTitle }}</h2>
                    </a>
                </div>
            @endforeach

        @endif
    @endforeach

</section>

