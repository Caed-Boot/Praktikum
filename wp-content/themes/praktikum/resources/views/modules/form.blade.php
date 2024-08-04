

<form action="" method="POST" class="flex flex-col p-3 gap-2 md:w-[85%] md:mx-auto lg:w-[70%] xl:w-[65%]" id="contact-form">

    @foreach ($data['repeater'] as $item)
    
        @php
            $formName = isset($item['form_field']) ? $item['form_field'] : '';
            $formObligatory = isset($item['obligatory']) ? $item['obligatory'] : '';
            $formArial = isset($item['text_arial']) ? $item['text_arial'] : '';
            $formDatenschutz = isset($data['form_datenschutz']) ? $data['form_datenschutz'] : '';

            $obligatory = "obligatory";

        @endphp


            @if ($formObligatory == "yes" && $formArial == "yes")

                <label for="{{$formName}}" class="font-semibold text-xl {{$obligatory}} "> {{$formName}} <span> * </span> </label>

                <textarea name="{{$formName}}" id="{{$formName}}" cols="30" rows="10" form="contact-form" class="form__input"></textarea>
                
            
            @elseif ($formObligatory == "yes" )

                

                <label for="{{$formName}}" class="font-semibold text-xl {{$obligatory}}"> {{$formName}} <span> * </span> </label>

                <input type="text" placeholder="{{$formName}}" id="{{$formName}}" name="{{$formName}}" class=" h-14 mb-6 bg-slate-100 form__input important_field">

            @else

                <label for="{{$formName}}" class="font-semibold text-xl"> {{$formName}}</label>

                <input type="text" placeholder="{{$formName}}" id="{{$formName}}" name="{{$formName}}" class=" h-14 mb-6 bg-slate-100 form__input">

            @endif
    @endforeach

    @if ($formDatenschutz == "yes")

        <label for="{{$formDatenschutz}}" class="font-semibold text-xl ">Datenschutzerklärung</label>
        <input type="checkbox" class=" form__input">

        <p> 
            <span class="text-red-700 font-semibold form__datenschutz">Datenschutzerklärung</span> - Hiermit erkläre ich mich mit den Datenschutzerklärung einverstanden. 
        </p>
        
    @else
    
    @endif
    
    <input type="button" name="Absenden" class="border w-32 h-12 bg-gray-800 text-slate-50 font-semibold border-0" data-absenden="absenden" value="Absenden">

</form>