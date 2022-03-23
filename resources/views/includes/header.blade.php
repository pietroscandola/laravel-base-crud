<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link me-3 @if (Request::routeIs('home')) active @endif"
                            href="{{ url('/') }}">HOME
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Request::is('comics*')) active @endif"
                            href="{{ route('comics.index') }}">COMICS
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
