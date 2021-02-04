<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>
<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="#"><img src="{{ asset('assets') }}/img/logo.png" alt=""></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
        </ul>
        <div class="header__cart__price">item: <span>$150.00</span></div>
    </div>
    <div class="humberger__menu__widget">
        <div class="header__top__right__language">
            <i class="fa fa-user"></i>
            @guest
                <div><a href="{{route('admin_login')}}"> Login</a></div>
            @endguest
            @auth
                <div><a href="#"> {{Auth::user()->name}}</a></div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="{{route('userprofile')}}">My Account</a></li>
                    <li><a href="{{route('myreviews')}}">My Reviews</a></li>
                    <li><a href="{{route('user_products')}}">My Products</a></li>
                    <li><a href="{{route('user_wishlist')}}">My Wishlist</a></li>
                    <li><a href="{{route('logout')}}">Logout</a></li>
                </ul>
            @endauth
        </div>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="{{route('home')}}">Home</a></li>
            <li><a href="./shop-grid.html">Shop</a></li>
            <li><a href="#">Pages</a>
                <ul class="header__menu__dropdown">
                    <li><a href="./shop-details.html">Shop Details</a></li>
                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                    <li><a href="./checkout.html">Check Out</a></li>
                    <li><a href="./blog-details.html">Blog Details</a></li>
                </ul>
            </li>
            <li><a href="./blog.html">Blog</a></li>
            <li><a href="./contact.html">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
            <li>Free Shipping for all Order of $99</li>
        </ul>
    </div>
</div>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                            <li>@include('home.message')</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <div class="header__top__right__language">
                            <i class="fa fa-user"></i>
                            @guest
                                <div>
                                    <a style="color: #1a202c" href="{{route('admin_login')}}"> Login </a>
                                    <a style="color: #1a202c" href="{{route('register')}}">/ Register</a>
                                </div>
                            @endguest
                            @auth
                                <div>{{Auth::user()->name}}</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="{{route('userprofile')}}">My Account</a></li>
                                    <li><a href="{{route('myreviews')}}">My Reviews</a></li>
                                    <li><a href="{{route('user_products')}}">My Products</a></li>
                                    <li><a href="{{route('user_wishlist')}}">My Wishlist</a></li>
                                    <li><a href="{{route('logout')}}">Logout</a></li>
                                </ul>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="{{route('home')}}"><img src="https://arbimg1.mncdn.com/assets/dist/img/tek-tur-large.gif?v=20210128162709" name="{{ asset('assets') }}/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-7">
                <nav class="header__menu">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('home')}}">Shop</a></li>
                        <li><a href="{{route('aboutus')}}">Aboutus</a></li>
                        <li><a href="{{route('references')}}">References</a></li>
                        <li><a href="{{route('faq')}}">FAQ</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-2">
                @php
                    $countwish= \App\Http\Controllers\WishlistController::countwish(\Illuminate\Support\Facades\Auth::id());
                @endphp
                <div class="header__cart">
                    <ul>
                        <li><a href="{{route('user_wishlist')}}"><i class="fa fa-heart"></i> <span>{{$countwish}}</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->
