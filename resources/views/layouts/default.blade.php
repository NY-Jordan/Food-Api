<html>
<head>
    <title>Mon site</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<Body>
    <header style="margin-bottom: 30px;">
        <div class="container">
            <nav class="nav bg-dark nav-bar" style="margin:00px; padding:10px; border-radius:10px;">
                <ul class="nav-items d-flex  m-0">
                    <li class="nav nav-item">
                        <a class="nav-link active" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav nav-item">
                        <a class="nav-link active" href="{{ route('menus') }}">Menus</a>
                    </li>
                    <li class="nav nav-item">
                        <a class="nav-link active" href="#">Recepices</a>
                    </li>
                    <li class="nav nav-item">
                        <a class="nav-link active" href="#">Ingredients</a>
                    </li> 
                    <li class="nav nav-item " >
                        <form action="" method="post" class="d-flex" style="margin-right: 80px;">
                            <input type="search" class="form-control"  style=" width:400px; margin-left:10px; border-radius: 100px;"name="searchMenu1" id="searchMenu1" placeholder="Recherchez un Menu1">
                            <button type="submit" style="margin-left: 10px;" class="btn btn-primary">Search</button>                                                
                        </form>
                    </li>
                    <li class="nav nav-item" style="text-align: right;">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="btn btn-primary" type="submit">Se Deconnecter</button>
                        </form>                
                    </li>
                </ul>
            </nav>    
        </div>
    </header>
    @yield('content')
    <footer class="bg-dark" style="height: 100px;">
        ;gnkgkgkgk
    </footer>
</Body>
<script src="{{ asset('bootstrap/css/bootstrap.min.js') }}"></script>
</html>
