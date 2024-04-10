<footer>
    <div>
        <a href="#">SIGN-UP NOW</a>
        <div>
            <p>FOLLOW US</p>
            <ul id="socials-line">
                @foreach ($socials as $social)
                    <li>
                        <img src="{{ Vite::asset($social) }}" alt="">
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</footer>

