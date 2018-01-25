
<nav class="navbar navbar-expand-md navbar-light bg-white navbar-fixed">

<div class="container">
    
        <a id="logo" class="navbar-brand font-weight-bold" href="/">DG</a>
        
        <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        
        <span class="navbar-toggler-icon"></span>
        
        </button>
        
        <div class="collapse navbar-collapse" id="#">
        
            <ul class="nav navbar-nav navbar-right ml-auto">
                <!-- Authentication Links -->
                @guest

                    <li><a href="{{ route('login') }}">Login</a></li>

                    <li><a href="{{ route('register') }}">Register</a></li>

                @else

                    <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Hi, {{ Auth::user()->name }}!<span class="caret"></span></a>

                        <ul class="dropdown-menu">

                            <li>

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
  
 