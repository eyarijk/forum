<nav class="navbar navbar-default navbar-static-top" style="background-color:#18BC9C;">
    <div class="container">
        <div class="navbar-header" >

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}" style="color:#ecf0f1;">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse" >
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
              <li><a href="/" style="color:#ecf0f1;">Homepage</a></li>
              <li><a href="/about" style="color:#ecf0f1;">About</a></li>
              <li><a href="/contact" style="color:#ecf0f1;">Contact</a></li>
              <li><a href="/forum" style="color:#ecf0f1;">Forum</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}" style="color:#ecf0f1;">Login</a></li>
                    <li><a href="{{ route('register') }}" style="color:#ecf0f1;">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="color:#ecf0f1;">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <li><a href="{{ route('home') }}" >Profile</a>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
