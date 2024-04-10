<section id="linkSection">
    <div id="linkSection-container">
        <div>
            @foreach ($links as $link)
                <ul>
                <div class="linkTitle">
                    {{ $link['title'] }}
                </div>
                @foreach ($link['actions'] as $action)
                <li>
                    {{ $action }}
                </li>
                @endforeach
            </ul>
            @endforeach
        </div>

        <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
        
    </div>
</section>