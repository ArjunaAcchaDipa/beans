 <!-- Bootstrap CSS -->
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
crossorigin="anonymous"
/>
<nav class="navbar navbar-expand navbar-dark" style="background-color: #A67B5B">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 15px; color: white" aria-current="page" href="{{ url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 15px; color: white" href="/about">About</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" style="font-size: 15px" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" style="font-size: 15px; color: white; background-color: #282E40; border: #282E40" type="submit">Search</button>
            </form>
            <a class="navbar-brand; top: 50%" style="position: absolute; left: 50%" href="{{ url('/')}}">
                <img src="images/logo.png" alt="Coffee Beans" width="100" height="85"/>
            </a>
        </div>
        
        <div style="float: right">
            <form class="d-flex">
               <a href="{{ route('login')}}" class="btn btn-outline-success" style="font-size: 15px; color: white; background-color: #282E40; border: #282E40" type="submit">Login</a>
               
            </form>
        </div>
        <div style="float: right">
            <form class="d-flex">
                <div class="container">
                    <a href="{{ route('register')}}" class="btn btn-outline-success" style="font-size: 15px; color: white; background-color: #282E40; border: #282E40" type="submit">Register</a>
                </div>
            </form>
        </div>
    </div>
</nav>