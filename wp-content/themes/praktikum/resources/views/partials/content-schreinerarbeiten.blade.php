@includeUnless(empty($fields['modules']), 'sections.modules')


{{-- 
    Primero recorremos el array $fields y entramos a Modules

    Estaremos recorriendo cada uno de los elementos del array como $item. En este caso queremos entrar a otro array con la key "repeater" 
--}}

<section class="grid grid-cols-2 p-2 gap-2 schreiner-grid">
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
                @endphp

                    @dump($element)
                
                    <a href="">
                        <div class="relative text-slate-50">
                            <img src="{{ $gridUrl }}" alt="" class="h-80 object-cover w-full lg:h-96 brightness-50">
                            <h2 class="absolute left-[50%] top-[50%]">{{ $gridTitle }}</h2>
                        </div>
                    </a>
            @endforeach

        @endif
    @endforeach
</section>

