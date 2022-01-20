
<header id="site_header" class="text-center">
    <div class="top-header">
        <div class="text-top d-flex">
            <p>DC POWER VISA</p>
            <p> ADDITIONAL DC SITES</p>
        </div>
        <nav class="nav_menu">
            <div class="container">
                <div class="logo">
                    <img src="{{ asset('img/dc-logo.png') }}" alt="Logo DC">
                </div>
                <ul>
                    <li><a class="{{ Route::currentRouteName() === 'characters' ? 'active' : ''}}" href="{{ route('characters') }}">Characters</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'comics' ? 'active' : ''}}" href="{{ route('comics') }}">Comics</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'movies' ? 'active' : ''}}" href="{{ route('movies') }}">Movies</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'tv' ? 'active' : ''}}" href="{{ route('tv') }}">Tv</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'games' ? 'active' : ''}}" href="{{ route('games') }}">Games</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'collectibles' ? 'active' : ''}}" href="{{ route('collectibles') }}">Collectibles</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'videos' ? 'active' : ''}}" href="{{ route('videos') }}">Videos</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'fans' ? 'active' : ''}}" href="{{ route('fans') }}">Fans</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'news' ? 'active' : ''}}" href="{{ route('news') }}">News</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'shop' ? 'active' : ''}}" href="{{ route('shop') }}">Shop <span>&dtrif;</span></a></li>
                </ul>
                <div class="search">
                    <input type="search" placeholder="Search">
                    <i class="fas fa-search"></i>
                </div>
            </div>
        </nav>
    </div>
</header>