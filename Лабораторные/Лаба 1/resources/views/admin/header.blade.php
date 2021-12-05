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
                        <li class="nav-item @if(Route::currentRouteName() === 'admin-index') active @endif"><a class="nav-link" href="/admin">Create product</a></li>
                        <li class="nav-item @if(Route::currentRouteName() === 'product-edit') active @endif"><a class="nav-link" href="/admin/product-edit">Update product</a></li>
                        <li class="nav-item @if(Route::currentRouteName() === 'delete-product') active @endif"><a class="nav-link" href="/admin/delete-product">Delete product</a></li>
                        <li class="nav-item @if(Route::currentRouteName() === 'orders') active @endif"><a class="nav-link" href="/admin/orders">Orders</a></li>
                    </ul>
            </div>
        </nav>
    </div>
</header>
<!--================ End Header Menu Area =================-->

