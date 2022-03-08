<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | {{ Str::ucfirst($page_name) }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        * {
            box-sizing: border-box;
        }
        .navbar {
            padding: 20px;
        }

        a {
            text-decoration: none;
        }

        .article {
            border: 1px solid gainsboro;
            margin: 20px 0;
            padding: 20px;
            box-shadow: 10px 10px 6px 0 whitesmoke;
            border-radius: 8px;
        }

        li {
            list-style-type: none;
        }
    </style>
    @yield('css-link')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/home">BLOG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link @if ($page_name === 'home') active @endif" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if ($page_name === 'about') active @endif " href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if ($page_name === 'posts') active @endif" href="/posts">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if ($page_name === 'categories') active @endif" href="/categories">Categories</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        @yield('main')
    </div>
</body>
</html>