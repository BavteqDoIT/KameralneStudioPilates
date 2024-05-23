<header class="major">
        <h2>Witaj {{ $username }}!</h2>
    </header>
    <ul class="actions">
        @auth
            <li><a href="#" class="button primary large disabled">ZALOGUJ</a></li>
            <li>
                <div>
                    <a class="button primary large" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                {{ __('Wyloguj') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                    </form>
                </div>
            </li>
        @endauth
        @guest
            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="button primary large" href="{{ route('login') }}">{{ __('Zaloguj') }}</a>
                                </li>
                            @endif
            <li><a href="#" class="button primary large disabled">WYLOGUJ</a></li>
        @endguest
    </ul>

