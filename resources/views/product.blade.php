
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <link rel='shortcut icon' href='./assets/img/icon/product.png'/>
    <link rel="stylesheet" href="{{ asset ('/css/main.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>


<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <div class="nav-bar-logo">
                    <a href="/">
                        <img src="{{ asset('/img/files/LOGO.png') }}" alt="Logo"
                            style="max-width: 115px; max-height: 36px">
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
                        {{-- <li>
                            <a href="#"><i class="fas fa-search search-btn"></i></a>
                        </li> --}}
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
                                        <a href="">Purchased</a>
                                    </li>
                                    <li class="header__navbar-user-item">
                                        <a href="">Change Password</a>
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
                                        <img src="./assets/img/cart/nothing_cart.png" alt="" class="header__cart-no-cart-img">
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

    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="product-photo">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            @for ($i = 0; $i < count(explode(',', $productInfo->product_photo)); $i++)
                                @if ($i == 0)
                                    <div class="carousel-item active">
                                        <img src="{{asset('/img/products/' . explode(',', $productInfo->product_photo)[$i])}}" class="d-block w-100" alt="beoplay-white">
                                    </div>
                                @else
                                    <div class="carousel-item">
                                        <img src="{{asset('/img/products/' . explode(',', $productInfo->product_photo)[$i])}}" class="d-block w-100" alt="beoplay-white">
                                    </div>
                                @endif
                            @endfor
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    

                    <div class="product-evaluate">
                        <div class="product-social">
                            <div class="product-social-text">
                                Chia sẻ:
                            </div>
                            <div class="product-social-icon">
                                <a href="#">
                                    <i class="fab fa-facebook-messenger icon-social"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-facebook icon-social"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-pinterest icon-social"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter icon-social"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-view">
                            <span class="badge text-bg-warning">
                                {{$productInfo->product_view}}
                            </span>
                            <form action="#navbar" method="post">
                                <input type="hidden" id="likedId" name="likedId" value="">                             
                                <button type="submit" class="btn badge text-bg-danger">
                                    <i class="bi bi-heart-fill"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-12 col-md-6">
                <div class="product-content">
                    <div class="product-meta">
                        <h1 class="product-title">{{$productInfo->product_name}}</h1>
                        <div class="review">
                            <span class="star-list">
                                <i class="fas fa-star star-yellow"></i>
                                <i class="fas fa-star star-yellow"></i>
                                <i class="fas fa-star star-yellow"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="review-badge">No reviews</span>
                        </div>
                        <p class="product_price">${{$productInfo->product_price}}</p>
                        <div class="product-info">
                            <p class="product-vendor">
                                <smaill class="text-body">Vendor: </smaill>
                                <smaill>GPDOT</smaill>
                            </p>
                            <p class="product-type">
                                <smaill class="text-body">Type: </smaill>
                                <smaill>{{$productInfo->category_name}}</smaill>
                            </p>
                            <p class="product-availability available">
                                <i class="fas fa-check"></i>
                                IN STOCK
                            </p>
                        </div>

                        <div class="product-description">
                            {{$productInfo->product_description}}
                        </div>
                    </div>
                    <div class="product-form-submit">
                        <div class="product-form-add">
                            <a href="#" class="btn product-form__cart-submit">
                                <span>ADD TO CART</span>
                            </a>
                        </div>
                        <div class="product-buynow">
                            <a href="#" class="btn product-form__cart-submit">
                                <span>BUY IT NOW</span>
                            </a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
        <script>
            const searchBtn = document.querySelector(".search-btn");
            const navListItem = document.querySelector(".nav-bar-list-item");
            const textField = document.querySelector(".text-field");
            const submitBtn = document.querySelector(".submit-btn");
            const iconClose = document.querySelector(".icon-close");
            const heartUnclick = document.querySelector(".heart-icon-unclick");
            const heartClick = document.querySelector(".heart-icon-click");
    
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
    
            heartUnclick.addEventListener("click", () => {
                heartUnclick.style.display = "none";
                heartClick.style.display = "block";
            });
    
            heartClick.addEventListener("click", () => {
                heartClick.style.display = "none";
                heartUnclick.style.display = "block";
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