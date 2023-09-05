<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel='shortcut icon' href='./assets/img/icon/profile.png'/>
    <link rel="stylesheet" href="{{ asset ('/css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
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
        .btn-solid-primary {
            color: rgb(255, 255, 255) !important;
            position: relative;
            overflow: visible;
            outline: 0px;
            background: rgb(238, 77, 45);
            padding: 10px 20px;
            margin-left: 13rem;
        }
    </style>
</head>


<body>
    <!-- Header Begin -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <div class="nav-bar-logo">
                    <a href="/">
                        <img src="https://avatars.githubusercontent.com/u/94631848?v=4" alt="Logo" style="max-width: 115px; max-height: 36px">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav" style="margin: auto;">
                        <li class="nav-bar-item active">
                            <a href="/" class="nav-bar-link active">
                                <span class="nav-bar-title">
                                    Home
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
    <div class="profile-info">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>
                        Account Information
                    </h3>
                    <p>
                        Manage profile information for account security
                    </p>
                </div>
            </div>
        </div>

        <div class="profile-edit">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="profile-edit-text">
                            <div class="profile-list">
                                <span class="profile-title">
                                    Username
                                </span>
                                <span class="profile-text">
                                    {{ $user['username'] }}
                                </span>
                            </div>
                            <div class="profile-list">
                                <span class="profile-title">
                                    Full name
                                </span>
                                <span class="profile-text">
                                    {{ $user['fullname'] }}
                                </span>
                            </div>
                            <div class="profile-list">
                                <span class="profile-title">
                                    Email
                                </span>
                                <span class="profile-text">
                                    {{ $user['email'] }}
                                </span>
                            </div>
                            <div class="profile-list">
                                <span class="profile-title">
                                    Phone
                                </span>
                                <span class="profile-text">
                                    {{ $user['phone'] }}
                                </span>
                            </div>
                            <a href="/changeprofile" type="button" class="btn btn-solid-primary">Change</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="profile-edit-photo">
                            <img src="https://avatars.githubusercontent.com/u/94631848?v=4"
                                alt="avatar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer-mid">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 text-center text-lg-left">
                    <div class="footer__powered">
                        <p>
                            © Copyright 2022
                            <b>stark-demo</b>.
                            <span>
                                <a href="https://github.com/dkhak3">Powered by duykhadev</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 text-center">
                    <div class="footer-mid__linklist mt-2">
                        <ul>
                            <li class="d-inline-block px-3 py-2" style="position: relative ;">
                                <a href="#" title="Privacy Policy ">Privacy Policy </a>
                            </li>
                            <li class="d-inline-block px-3 py-2" style="position: relative ;">
                                <a href="#" title=" Help"> Help</a>
                            </li>
                            <li class="d-inline-block px-3 py-2" style="position: relative ;">
                                <a href="#" title="FAQs">FAQs</a>
                            </li>
                            <li class="d-inline-block px-3 py-2" style="position: relative ;">
                                <a href="#" title="Contact Us">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-payment col-lg-4 col-md-12 text-lg-right text-center">
                    <img class="mb-4 lazyloaded" src="./assets/img/files/payma.png" alt="">
                </div>
            </div>
        </div>

        <a href="#">
            <div class="back-to-home">
                <i class="fa fa-chevron-up"></i>
            </div>
        </a>
    </footer>

    <script>
        const searchBtn = document.querySelector(".search-btn");
        const navListItem = document.querySelector(".nav-bar-list-item");
        const textField = document.querySelector(".text-field");
        const submitBtn = document.querySelector(".submit-btn");
        const iconClose = document.querySelector(".icon-close");

        searchBtn.addEventListener("click", () => {
            navListItem.style.display = "none";
            textField.style.display = "block";
            iconClose.style.display = "block";
        });

        submitBtn.addEventListener("click", () => {
            navListItem.style.display = "block";
            textField.style.display = "none";
            iconClose.style.display = "none";
        });

        iconClose.addEventListener("click", () => {
            navListItem.style.display = "block";
            textField.style.display = "none";
            iconClose.style.display = "none";
        });

        window.onscroll = function() {
            if (document.documentElement.scrollTop > 200) {
                document.querySelector(".back-to-home").style.display = "block";
            } else {
                document.querySelector(".back-to-home").style.display = "none";
            }
        };
    </script>
</body>

</html>