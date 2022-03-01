<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/asset/css/bootstrap.min.css')}}" />
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/films')}}">All Films</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success" href="{{url('/films/create')}}">Creat New</a>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0" method="post" action="{{url('/searchres')}}">
                    @csrf
                    <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>

    </nav>
    <div class="container">
        @yield('content')
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('/asset/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('/asset/js/popper.min.js')}}"></script>
    <script src="{{asset('/asset/js/bootstrap.min.js')}}"></script>

</body>

</html>
