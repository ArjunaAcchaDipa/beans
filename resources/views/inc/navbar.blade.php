<nav class="navbar navbar-expand navbar-dark" style="background-color: #A67B5B; top: 0; width: 100%; padding-top: 10px">
    <div class="container">
        <div class="collapse navbar-collapse container" id="navbar" style="padding-left: 5%">
            <ul class="navbar-nav me-auto">
                <li class="nav-item container">
                    <a class="nav-link" style="font-size: 15px; color: white" aria-current="page" href="{{ url('/')}}">Home</a>
                </li>
                <li class="nav-item container">
                    <a class="nav-link" style="font-size: 15px; color: white" href="/about">About</a>
                </li>
            </ul>
            <form class="d-flex" style="padding-top: 6px; margin-bottom: 10px; margin-left: 200px; position: absolute">
                <input class="form-control me-2" style="font-size: 15px; right: 18cm; width: 204px; height: 32px" type="search" placeholder="Coffee Shop" aria-label="Search">
                <button class="btn btn-outline-success" style="font-size: 15px; color: white; background-color: #282E40; border: #282E40; right: 18cm" type="submit">Search</button>
            </form>
            <a class="navbar-brand; top: 50%" style="position: absolute; left: 50%" href="{{ url('/')}}">
                <img src="/images/logo.png" alt="Coffee Beans" width="100" height="85"/>
            </a>
        </div>
        
        <div style="float: left">
            <ul class="navbar-nav">
                @if (Auth::guest())
                    <div class="container" style="float: right">
                        <form class="d-inline-flex">
                            <a href="{{ route('login')}}" class="btn btn-outline-success" style="font-size: 15px; color: white; background-color: #282E40; border: #282E40; margin-right: 5px" type="submit">Login</a>
                            <a href="{{ route('register')}}" class="btn btn-outline-success" style="font-size: 15px; color: white; background-color: #282E40; border: #282E40" type="submit">Register</a>
                        </form>
                    </div>
                @else   
                    <div class="dropdown container">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:#282E40; font-size: 15px">
                            Hello, {{ Auth::user()->name }}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a  class="dropdown-item" href="{{ url('profile') }}" aria-current="page" style="font-size: 15px">
                                Profile
                            </a> 
                            
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            aria-current="page" style="font-size: 15px">
                                Logout
                            </a>
                        </div>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>    
                @endif
            </ul>
        </div>
    </div>
</nav>