<section id="contentSection">
    <img src="/img/jumbotron.jpg" alt="">
    <div>
        <div id="current-series">
            current series
        </div>

        <div id="comic-list">
            @foreach ($series as $serie)
                <div class="comic">
                    <img :src="{{$serie['thumb']}}" :alt="{{$serie['title']}}">
                    <p>{{ $serie['title'] }}</p>
                </div>
            @endforeach
        </div>

        <button>load more</button>
    </div>
</section>
                