<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->

    <link href="{{asset('assets/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/assets/css/app.css')}}">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets/assets/css/blog-home.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

    <div class="container">
        @CSRF
        {{ method_field('PUT') }}
        @if (!Auth::guest())
        <a class="navbar-brand" href="{{route('bookings.all')}}">Book Your Meeting Room</a>
        @endif
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">Home
                        <span class="sr-only"><current></current></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dashboard')}}">Admin</a>
                </li>
                @if (Auth::guest())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @endif
                @if (!Auth::guest())
                    <li class="nav-item">


                        {{--                        <a class="nav-link" href="{{route('logout')}}">Logout</a>--}}
                        <form action="/logout" method="post">
                            @csrf
                            <button class="btn btn-primary">Logout</button>
                        </form>


                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>

</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            @yield('content')

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Search Widget -->
            <div class="card my-4">
                <h5 class="card-header">Search</h5>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
                    </div>
                </div>
            </div>
            @yield('change')
            @if (Auth::guest())
                <div class="card my-4">
                    <h5 class="card-header">Change Room</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Freebies</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        @endif
            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">Side Widget</h5>
                <div class="card-body">
                    You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                </div>
            </div>

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

{{--<!-- Footer -->--}}
{{--<footer class="py-5 bg-dark">--}}
{{--    <div class="container">--}}
{{--        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>--}}
{{--    </div>--}}
{{--    <!-- /.container -->--}}
{{--</footer>--}}

<!-- Bootstrap core JavaScript -->
<script src="{{asset('assets/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
