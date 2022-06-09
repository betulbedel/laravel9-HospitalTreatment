<!-- MENÜLER -->


<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <form action="#">
            <div class="input-group input-navbar">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                </div>
                <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
            </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupport">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('index')}}">Home</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/home/doctors">Doktorlarımız</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/home/blog">Haberlerimiz</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('references')}}">References</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('faq')}}">FAQ</a>
                </li>
                <li class="nav-item">
                 @auth()
                        <a href="{{route('userpanel.index')}}" class="btn btn-primary ml-lg-3"> {{Auth::user()->name}}</a>
                        <a  class="btn btn-primary ml-lg-3" href= "/home/logoutuser">  Log out</a>
                    @endauth

                </li>
                @guest()
                <li class="nav-item">
                    <a href="/home/registeruser" class="btn btn-primary ml-lg-3">Kayıt Ol</a> <a href="/home/loginuser" class="btn btn-primary ml-lg-3">Giriş yap</a>
                </li>
                @endguest
            </ul>

            <style>
                .dropdown {
                    position: relative;
                    display: inline-block;
                }

                .dropdown-content {
                    display: none;
                    position: absolute;
                    background-color: #f9f9f9;
                    min-width: 160px;
                    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                    padding: 12px 16px;
                    z-index: 1;
                }

                .dropdown:hover .dropdown-content {
                    display: block;
                }
            </style>


        </div> <!-- .navbar-collapse -->
    </div> <!-- .container -->
</nav>
</header>

<!-- MENÜLER BİTİŞ -->
