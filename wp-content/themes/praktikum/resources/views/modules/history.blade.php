

<section class="grid mx-2">

    @foreach ($data['repeater'] as $item)
        @php
            $historyYear = isset($item['year_history']) ? $item['year_history'] : '';
            $historyTitle = isset($item['title_history']) ? $item['title_history'] : '';
            $historyImage = isset($item['image_history']) ? $item['image_history'] : '';
            $historyUrl = isset($historyImage['url']) ? $historyImage['url'] : '';
            $historyText = isset($item['text_history']) ? $item['text_history'] : '';
        @endphp
        <div class="flex flex-col">
            
            <h2> {{$historyYear}} </h2>
            <img alt="">
        </div>
    @endforeach

</section>

