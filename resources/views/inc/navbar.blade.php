<nav class="navbar navbar-expand navbar-dark" style="background-color: #A67B5B; top: 0; width: 100%; padding-top: 10px">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 15px; color: white" aria-current="page" href="{{ url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 15px; color: white" href="/about">About</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" style="font-size: 15px;position: relative;right: 19cm " type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" style="font-size: 15px; color: white; background-color: #282E40; border: #282E40; position: relative;right: 19cm" type="submit">Search</button>
            </form>
            <a class="navbar-brand; top: 50%" style="position: absolute; left: 50%" href="{{ url('/')}}">
                <img src="images/logo.png" alt="Coffee Beans" width="100" height="85"/>
            </a>
        </div>
        
        <div style="float: right; padding-right: 20px">
            <ul class="navbar-nav">
                @if (Auth::guest())
                    @include('auth.login')
                    @include('auth.register')
                @else   
                <li>
                    <a class="nav-link active" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                    aria-current="page" style="font-size: 25px">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>      
                @endif
            </ul>
        </div>
    </div>
</nav>