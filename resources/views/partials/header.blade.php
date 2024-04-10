<nav>
    <div id="nav-container">
        <img id="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}">
        <div id="menu">
            <ul class="links">
                @foreach ($navs as $nav)
                <li>
                    {{ $nav }}          
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>