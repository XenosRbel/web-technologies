<!--================ Start Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand logo_h" href="/"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                        <li class="nav-item @if(Route::currentRouteName() === 'home') active @endif"><a class="nav-link"
                                                                                                        href="/">Home</a>
                        </li>
                        <li class="nav-item @if(Route::currentRouteName() === 'shop') active @endif"><a class="nav-link"
                                                                                                        href="/shop">Shop</a>
                        </li>
                        {{--                        <li class="nav-item">--}}
                        {{--                            <a href="/shop" class="nav-item @if(Route::currentRouteName() === 'shop') active @endif"--}}
                        {{--                               aria-haspopup="true"--}}
                        {{--                               aria-expanded="false">Shop</a>--}}
                        {{--                            --}}{{--                                <ul class="dropdown-menu">--}}

                        {{--                            --}}{{--                                    <li class="nav-item"><a class="nav-link" href="category.html">Shop Category</a></li>--}}
                        {{--                            --}}{{--                                    <li class="nav-item"><a class="nav-link" href="single-product.html">Product--}}
                        {{--                            --}}{{--                                            Details</a></li>--}}
                        {{--                            --}}{{--                                    <li class="nav-item"><a class="nav-link" href="checkout.html">Product Checkout</a>--}}
                        {{--                            --}}{{--                                    </li>--}}
                        {{--                            --}}{{--                                    <li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a>--}}
                        {{--                            --}}{{--                                    </li>--}}
                        {{--                            --}}{{--                                    <li class="nav-item"><a class="nav-link" href="cart.html">Shopping Cart</a></li>--}}

                        {{--                            --}}{{--                                </ul>--}}
                        {{--                        </li>--}}
                        @if(\Illuminate\Support\Facades\Auth::check())
{{--                            <li class="nav-item submenu dropdown">--}}
{{--                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"--}}
{{--                                   aria-haspopup="true"--}}
{{--                                   aria-expanded="false">Blog</a>--}}
                                {{--                                <ul class="dropdown-menu">--}}
                                {{--                                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>--}}
                                {{--                                    <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a>--}}
                                {{--                                    </li>--}}
                                {{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item submenu dropdown">--}}
{{--                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"--}}
{{--                                   aria-haspopup="true"--}}
{{--                                   aria-expanded="false">Pages</a>--}}
{{--                                <ul class="dropdown-menu">--}}
{{--                                    <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>--}}
{{--                                    <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>--}}
{{--                                    <li class="nav-item"><a class="nav-link" href="tracking-order.html">Tracking</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                        @endif
                        <li class="nav-item @if(Route::currentRouteName() === 'contact') active @endif"><a
                                class="nav-link" href="/contact">Contact</a></li>
                    </ul>


                    <ul class="nav-shop">
                        <li class="nav-item">
                            <form action="/shop" type="GET" id="search_form" style="display: none;">
                                <input id="search" type="text" name="search" class="form-control">
                            </form>

                            <button onclick="search()"><i class="ti-search"></i></button>
                        </li>
                        <li class="nav-item">
                            <button onclick="location.href = '/checkout'"><i class="ti-shopping-cart"></i><span
                                    class="nav-shop__circle">3</span></button>
                        </li>
                        <li class="nav-item"><a class="button button-header" href="/checkout">Buy Now</a></li>
                        @if(!\Illuminate\Support\Facades\Auth::check())
                            <li class="nav-item"><a class="button button-header" href="/login">Login</a></li>
                        @endif
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <form action="/logout" method="POST" style="display: inline-block;">
                                @csrf
                                <li class="nav-item"><button type="submit" class="button button-header">Logout</button></li>
                            </form>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================ End Header Menu Area =================-->

<script>
    // document.addEventListener("DOMContentLoaded", function () {
        function search(){
            document.getElementById('search_form').style.display = 'inline-block'
        }
    // })
</script>
