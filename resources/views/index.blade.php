<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel='shortcut icon' href='/img/icon/homepage.png' />
    <link rel="stylesheet" href="{{ asset('/css/pagination.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                    <a href="/">
                        <img src="{{ asset('/img/files/LOGO.png') }}" alt="Logo"
                            style="max-width: 115px; max-height: 36px">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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
                                <img src="https://avatars.githubusercontent.com/u/94631848?v=4" alt=""
                                    class="header__navbar-user-img">
                                <span class="header__navbar-user-name">{{ $user->fullname }}</span>

                                <ul class="header__navbar-user-menu">
                                    <li class="header__navbar-user-item">
                                        {{-- <a href="{{ route('profile') }}">My Account</a> --}}
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
                                        <img src="../../../public/img/cart/nothing_cart.png" alt=""
                                            class="header__cart-no-cart-img">
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
                        <form action="{{route('index.search')}}" class="example" method="post">
                            @csrf
                            <input autocomplete="off" type="text" id="search" name="search" placeholder="Search.."/>
                            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Seach End -->
    </header>
    <!-- Header End -->

    <!-- Category Heading Begin -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="category-heading">
                    <span class="category-show">
                        <i class="fas fa-sliders-h category-heading-icon"></i>
                        Filter
                    </span>

                    <div class="col">
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="index.php?sort=5">None <svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                            <path
                                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                                        </svg></a></li>
                                <li><a class="dropdown-item" href="index.php?sort=1">Price: low to hight <svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
                                        </svg></a></li>
                                <li><a class="dropdown-item" href="index.php?sort=2">Price: hight to low <svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z" />
                                        </svg></a></li>
                                <li><a class="dropdown-item" href="index.php?sort=3">Star: low to hight <svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
                                        </svg></a></li>
                                <li><a class="dropdown-item" href="index.php?sort=4">Star: hight to low <svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z" />
                                        </svg></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category Heading Begin -->

    <!-- Show Category Heading Begin -->
    <div class="modal js-modal">
        <div class="modal-container js-modal-container">
            <div class="modal-close js-modal-close">
                <i class="fas fa-times"></i>
            </div>

            <header class="modal-header">
                <i class="fas fa-sliders-h category-heading-icon"></i>
                Category
            </header>

            <div class="modal-body">
                <ul class="category-list">
                    <!-- Thêm category-item--active để active -->
                    <li class="category-item category-item--active">
                        <a href="#" class="category-item__link">
                            <!-- <i class="fas fa-arrow-right"></i> -->
                            <svg viewBox="0 0 4 7" class="category-svg-icon">
                                <polygon points="4 3.5 0 0 0 7"></polygon>
                            </svg>
                            Product
                        </a>
                    </li>
                    @foreach ($categoryLists as $item)
                        <li class="category-item">
                            <a href="{{route('index.productByCategory', $item->id)}}" class="category-item__link">{{ $item->category_name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!-- Show Category Heading End -->


    <!-- Category Begin -->
    <div class="main-content" id="shop">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-12 js-sidebar">
                    <div class="category">
                        <h3 class="category__heading">
                            <i class="container__category-heading-icon fas fa-list-ul"></i>
                            Category
                        </h3>

                        <ul class="category-list">
                            <!-- Thêm category-item--active để active -->
                            <li class="category-item category-item--active">
                                <a href="#" class="category-item__link">
                                    <!-- <i class="fas fa-arrow-right"></i> -->
                                    <svg viewBox="0 0 4 7" class="category-svg-icon">
                                        <polygon points="4 3.5 0 0 0 7"></polygon>
                                    </svg>
                                    Product
                                </a>
                            </li>
                            @foreach ($categoryLists as $item)
                                <li class="category-item">
                                    <a href="{{route('index.productByCategory', $item->id)}}" class="category-item__link">{{ $item->category_name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- Product Begin -->
                <div class="col">
                    <div class="product-style">
                        <div class="product-menu">
                            <div class="row">
                                <div class="col">
                                    <a href="" class="btn-view btn-view-2"></a>
                                    <a href="" class="btn-view btn-view-3"></a>
                                    <a href="" class="btn-view btn-view-4 active"></a>
                                </div>

                                <div class="col">
                                    <div class="dropdown">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z" />
                                            </svg>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="index.php?sort=5">None <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-x-lg"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                                                    </svg></a></li>
                                            <li><a class="dropdown-item" href="index.php?sort=1">Price: low to hight
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-arrow-up"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
                                                    </svg></a></li>
                                            <li><a class="dropdown-item" href="index.php?sort=2">Price: hight to low
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-arrow-down"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z" />
                                                    </svg></a></li>
                                            <li><a class="dropdown-item" href="index.php?sort=3">Star: low to hight
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-arrow-up"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
                                                    </svg></a></li>
                                            <li><a class="dropdown-item" href="index.php?sort=4">Star: hight to low
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-arrow-down"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z" />
                                                    </svg></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            @foreach ($productLists as $item)
                                <div class="main-product col-sm-6 col-6 col-lg-3">
                                    <div class="product-card">
                                        <div class="product-card__image-wr">
                                            <a href="{{route('index.viewProduct', $item->id)}}" style="max-width: 480px;">
                                                <img src="{{asset('/img/products/' . explode(',', $item->product_photo)[0])}}"
                                                    alt="">
                                            </a>
                                        </div>

                                        <a href="">
                                            <div class="product-card-buy">
                                                <i class="fas fa-shopping-cart"></i>
                                            </div>
                                        </a>

                                        <div class="product-card__info">
                                            <a href="" class="product-card__name">
                                                {{$item->product_name}}
                                            </a>

                                            <div class="product-card__price">
                                                <span class="money">${{$item->product_price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="pagination">
                            {{$productLists->links()}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product End -->
        </div>
    </div>
    <!-- Category End -->
    <!-- Footer Begin -->
    <div id="contact" class="footer-container">
        <section class="footer-top text-center">
            <div class="container">
                <div class="footer__newsletter mx-auto">
                    <div class="footer__newsletter_title">
                        <h2 class="font-weight-bold">
                            Get in touch
                        </h2>
                        <p class="font-family-2">Subcrible for latest stories and promotions (35% save)</p>
                    </div>
                    <div class="form-vertical">
                        <form method="post" action="" id="" class="contact-form">
                            <div class="input-group form-group">
                                <input class="form-control py-4" type="email" value=""
                                    placeholder="Your email" name="" id="">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-theme gradient-theme" name="commit">
                                        Subscribe
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
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
                    <img class="mb-4 lazyloaded" src="./public/img/files/payma.png" alt="">
                </div>
            </div>
        </div>

        <a href="#">
            <div class="back-to-home">
                <i class="fa fa-chevron-up"></i>
            </div>
        </a>
    </footer>
    <!-- Footer End -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="{{ asset('/js/pagination.js') }}"></script>
<script src="{{ asset('/js/index.js') }}"></script>

</html>
