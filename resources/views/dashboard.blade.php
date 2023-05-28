<!DOCTYPE html>
<html>
<head>
    <title>Custom Auth in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset ('/css/pagination.css') }}">
    <link rel="stylesheet" href="{{ asset ('/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset ('/css/index.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
<<<<<<< HEAD
    <style>
        .header__cart-wrap::after {
            cursor: pointer;
            content: "";
            display: block;
            position: absolute;
            right: -3px;
            top: -9px;
            border-width: 35px 30px;
            border-style: solid;
            border-color: transparent transparent transparent transparent;
        }
    
        @media (max-width: 1023px) {
            .header__cart-list::after {
                border-color: transparent transparent transparent transparent;
            }
        }
        .category-show {
            cursor: pointer;
        }
    </style>
</head>

=======
</head>

<style>
    .header__cart-wrap::after {
        cursor: pointer;
        content: "";
        display: block;
        position: absolute;
        right: -3px;
        top: -9px;
        border-width: 35px 30px;
        border-style: solid;
        border-color: transparent transparent transparent transparent;
    }

    @media (max-width: 1023px) {
        .header__cart-list::after {
            border-color: transparent transparent transparent transparent;
        }
    }
    .category-show {
        cursor: pointer;
    }
</style>
>>>>>>> login-user
<body>

 <!-- Header Begin -->
 <header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <div class="">
                <a href="/">
<<<<<<< HEAD
                    <img src="{{ asset ('/img/files/LOGO.png') }}" alt="Logo" style="max-width: 115px; max-height: 36px">
=======
                    <img src="{{ asset ('/img/files/LOGO.png') }}" alt="Logo" style="max-width: 115px; max-height: 36px">                
>>>>>>> login-user
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="nav-bar-list-item">
                <ul class="nav-bar-list-item-list">
                    @guest
                        <li>
<<<<<<< HEAD
                            <a class="nav-link" href="">
=======
                            <a class="nav-link" href="{{ route('login') }}">
>>>>>>> login-user
                                <i class="far fa-user"></i>
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
<<<<<<< HEAD
                            <a class="nav-link" href="">Logout</a>
=======
                            <a class="nav-link" href="{{ route('signout') }}">Logout</a>
>>>>>>> login-user
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

</header>
<!-- Header End -->


@yield('content')
</body>
</html>