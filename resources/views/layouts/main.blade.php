<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | {{ $page_name }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @yield('css-link')
    <style>
        .navbar {
            height: 80px;
        }

        .form-inline {
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ ($page_name === "Home") ? 'active' : '' }}" href="/home">Home</a>
                    </li>
                    <li class="nav-item @if ($page_name == "About") echo active @endif ">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item @if ($page_name === "Posts") echo active @endif">
                        <a class="nav-link" href="/posts">Blog</a>
                    </li>
                </ul>
            </div>
            <div class="container">
                <form class="form-inline">
                    <input class="form-control mr-sm-2 col-lg-12" type="text" placeholder="Search" aria-label="Search">
                </form>
            </div>
            <button class="btn btn-outline-warning mr-3" type="button">Masuk</button>
            <button class="btn btn-outline-warning" type="button">Daftar</button>
        </div>
    </nav>


    <div class="container mt-3">
        @yield('container')
    </div>

</body>
</html>