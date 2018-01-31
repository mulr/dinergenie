
<nav class="navbar navbar-expand-md navbar-light bg-white fixed-top">

<div class="container">
    
        <h4><i class="fa fa-comments-o" aria-hidden="true"></i></h4> 

        <!-- <i class="fa fa-pied-piper" aria-hidden="true"></i> -->
        
        <!-- <a id="logo" class="navbar-brand font-weight-bold" href="/">DG</a> -->
        
        <a class="navbar-brand" href="{{ url('/') }}"> {{ config('app.name', 'Laravel') }} </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        
        <span class="navbar-toggler-icon"></span>
        
        </button>
        
        <div class="collapse navbar-collapse" id="#">
        
            <ul class="nav navbar-nav navbar-right ml-auto">

                <!-- Authentication Links -->

                @guest

                    <li><a href="{{ route('login') }}">Login</a></li>

                    <li><a href="{{ route('register') }}">Sign Up</a></li>

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

                    <li><a href="#" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            
                    <li><a href="#" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            
                    <li><a href="#" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
            
                    <li><a href="#" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>

            </ul>
        
        </div>

    </div>

</nav>
  
 