<header>
    <div class="container">                   
        <div class="row">
            <div class="col-6 col-sm-3 logo-column">
                <a href="index.html" class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="logo">
                </a>
            </div>
            <div class="col-6 col-sm-9 nav-column clearfix">

                <nav id="menu" class="d-none d-lg-block">
                    <ul>
                        @auth 
                        <li><a href="#" style="color:#dddb00">{{ Auth::user()->name }}</a></li>
                        <li> <a style="font-size:14px;font-weight:bold;color:#fff" href="#" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>

                        @else                       
                        <li><a id="page1" href="{{route('register')}}">Register</a></li>
                        <li><a id="page1" href="{{route('login')}}">Sign In</a></li>
                        @endauth
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
