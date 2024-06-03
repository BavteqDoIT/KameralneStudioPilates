<nav id="menu">
    <header class="major">
        <h2>Menu</h2>
    </header>
    <ul>
        <li><a href="{{ route('aboutus') }}">O NAS</a></li>
        <li><a href="{{ route('studio') }}">STUDIO</a></li>
        <li><a href="{{ route('pilates') }}">PILATES</a></li>
        <li><a href="{{ route('ofert') }}">OFERTA / CENNIK</a></li>
        <li><a href="{{ route('schedule') }}">GRAFIK</a></li>
        <li><a href="{{ route('contact') }}">KONTAKT</a></li>
        @auth
            <li>
                <span class="opener">Mój profil</span>
                <ul>
                    <li><a href="#">Edytuj Profil</a></li>
                    <li><a href="#">Zajęcia</a></li>
                </ul>
            </li>
            @can('isAdmin')
                <li>
                    <span class="opener">Administrator</span>
                    <ul>
                        <li><a href="{{ route('admin.users') }}">Wyświetl użytkowników</a></li>
                        <li><a href="#">TBC</a></li>
                    </ul>
                </li>
            @endcan
        @endauth
    </ul>
</nav>
