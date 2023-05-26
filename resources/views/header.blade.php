<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel='shortcut icon' href='./assets/img/icon/homepage.png'/>
    <link rel="stylesheet" href="{{ asset ('/css/pagination.css') }}">
    <link rel="stylesheet" href="{{ asset ('/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset ('/css/index.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
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

<body>
    <!-- Header Begin -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <div class="nav-bar-logo">
                    <a href="index.php">
                        <img src="https://avatars.githubusercontent.com/u/94631848?v=4" alt="Logo" style="max-width: 115px; max-height: 36px">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav" style="margin: auto;">
                        <li class="nav-bar-item active">
                            <a href="index.php" class="nav-bar-link active">
                                <span class="nav-bar-title">
                                    Home
                                </span>
                            </a>
                        </li>
                        <li class="nav-bar-item">
                            <a href="#shop" class="nav-bar-link">
                                <span class="nav-bar-title">
                                    Shop
                                </span>
                            </a>
                        </li>
                        <li class="nav-bar-item">
                            <a href="#contact" class="nav-bar-link">
                                <span class="nav-bar-title">
                                    Contact
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="nav-bar-list-item">
                    <ul class="nav-bar-list-item-list">
                        <li>
                            <a href="#"><i class="fas fa-search search-btn"></i></a>
                        </li>
                        @guest
                            <li>
                                <a class="nav-link" href="{{ route('login') }}"><i class="far fa-user"></i></a>
                            </li>
                        @else
                            <li class="header__navbar-item header__navbar-user">
                                <img src="https://avatars.githubusercontent.com/u/94631848?v=4" alt="" class="header__navbar-user-img">
                                <span class="header__navbar-user-name">{{ $user['fullname'] }}</span>

                                <ul class="header__navbar-user-menu">
                                    <li class="header__navbar-user-item">
                                        <a href="/profile">My Account</a>
                                    </li>
                                    <li class="header__navbar-user-item">
                                        <a href="purchasedproduct.php">Purchased</a>
                                    </li>
                                    <li class="header__navbar-user-item">
                                        <a href="changepassword.php">Change Password</a>
                                    </li>
                                    <li class="header__navbar-user-item header__navbar-user-item--separate">
                                        <a href="{{ route('signout') }}">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                        <li>
                            <div class="header__cart">
                                <div class="header__cart-wrap">
                                    <i class="header__cart-icon fas fa-shopping-cart"></i>
                                    <!-- no cart: header__cart-list--no-cart -->
                                    <div class="header__cart-list header__cart-list--no-cart">
                                        <img src="../../../public/img/cart/nothing_cart.png" alt="" class="header__cart-no-cart-img">
                                        <span class="header__cart-list-no-cart-msg">
                                            No Product
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Seach Begin -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-field">
                        <button class="icon-close">&times;</button>
                        <form action="search.php" class="example" method="get">
                            <input autocomplete="off" type="text" id="search" placeholder="Search.." name="findKeyWord" />
                            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Seach End -->
    </header>
    <!-- Header End -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="{{ asset ('/js/pagination.js') }}"></script>
<script src="{{ asset ('/js/index.js') }}"></script>
</html>