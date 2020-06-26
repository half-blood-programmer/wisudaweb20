<!-- top navigation -->
<header id="header">
    <div class="container-fluid">
        <div class="navbar">

            <div class="toggle-container">
                <input type="checkbox" class="dark" id="switch" name="theme" />
                <label class="labelswitch" for="switch">Toggle</label>
                <span></span>
            </div>

            <div class="navigation-row">
                <nav id="navigation">
                    <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
                    <div class="nav-box navbar-collapse">
                        <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                            @if (Route::has('login'))
                                @auth
                                <li style="margin: -12px 0 0 0;">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"
                                     id="logo" ><i class="fa fa-paw" style="margin:2px;"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                        </form>
                                </li>

                                @else
                                    @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}">Daftar</a></li>
                                    @endif

                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li style="margin: -12px 0 0 30px;">
                                        <a href="{{ route('landing') }}" id="logo" ><i class="fa fa-paw" style="margin:2px;"></i>
                                        </a>
                                    </li>
                                @endauth
                            @endif
                            <li></li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
