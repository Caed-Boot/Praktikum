{{-- @dd($data) --}}


@foreach ($data as $item)
    @php
        @dd($data[$item][1]['title'])
        // $title = isset($item['title']) ? $item['title'] : ''; 
        // $text = isset($tag['text']) ? $data['text'] : ''; 

    @endphp

    <nav>
        <ul>
            <li> <h1 class=" text-2xl"> </h1> </li>
        </ul>
    </nav>
@endforeach