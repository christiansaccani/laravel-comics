

<nav>
    <div id="nav-container">
        <img id="logo" src="/img/dc-logo.png">
        <div id="menu">
            <ul class="links">
                @foreach ($links as $link)
                <li>
                    {{ $link }}
            
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>