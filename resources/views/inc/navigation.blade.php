<!--================Header Area =================-->
<header class="header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="{{ route('home') }}"><img src="{{ asset('royal-theme')}}/image/Logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item {{ (Route::currentRouteName() == 'home') ? 'active' : '' }}" ><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item {{ (Route::currentRouteName() == 'about') ? 'active' : '' }}"><a class="nav-link" href="{{ route('about') }}">About us</a></li>
                    <li class="nav-item {{ (Route::currentRouteName() == 'user.menu') ? 'active' : '' }}" ><a class="nav-link" href="{{ route('user.menu') }}">Foods & Drinks</a></li>
                    <li class="nav-item {{ (Route::currentRouteName() == 'user.halls') ? 'active' : '' }}" ><a class="nav-link" href="{{ route('user.halls') }}">Conference Halls</a></li>
                    <li class="nav-item {{ (Route::currentRouteName() == 'user.services') ? 'active' : '' }}" ><a class="nav-link" href="{{ route('user.services') }}">Services</a></li>
                    <li class="nav-item {{ (Route::currentRouteName() == 'contact') ? 'active' : '' }}" ><a class="nav-link" href="{{ route('contact') }}">Contact us</a></li>

                    {{-- <li class="nav-item"><a class="nav-link" href="accomodation.html">Accomodation</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="elements.html">Elemests</a></li> --}}
                </ul>
            </div>
        </nav>
    </div>
</header>
<!--================Header Area =================-->
