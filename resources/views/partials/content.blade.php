<section id="contentSection">
    <img src={{ Vite::asset('resources/img/jumbotron.jpg') }} alt="">
    <div>
        <div id="current-series">
            current series
        </div>

        <div id="comic-list">
            @foreach ($series as $serie)
                <div class="comic">
                    <a href="{{ route('single') }}">
                        <img src="{{ $serie['thumb'] }}" alt="{{ $serie['title'] }}">
                        <p>{{ $serie['title'] }}</p>
                    </a>
                </div>
            @endforeach
        </div>

        <button>load more</button>
    </div>
</section>
                