<section id="mediaSection">
    <div>
        <ul>
            @foreach ($medias as $media)
                <li>
                    <img src="{{ Vite::asset($media['img']) }}" alt="{{ $media['title'] }}">
                    {{ $media['title'] }}
                </li>
            @endforeach
        </ul>
    </div>
</section>



            