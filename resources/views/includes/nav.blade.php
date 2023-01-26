<div class="container w3HeaderLogoEd">
    <nav class="navbar navbar-expand-lg navbar-light">
        <h1>
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fas fa-graduation-cap"></i>Edu School
            </a>
        </h1>


        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
            <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul id="menu-main-menu" class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll ">
                <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-8 current_page_item nav-item"><a href="/" class="nav-link active">Accueil</a></li>
                <li  class="menu-item menu-item-type-post_type menu-item-object-page nav-item"><a href="{{ route('front.signup') }}" class="nav-link ">Inscription</a></li>
                @if (Auth::check())
                   <li  class="menu-item menu-item-type-post_type menu-item-object-page nav-item "><a href="{{ route('front.account') }}" class="nav-link ">Mon compte</a></li>
                @else
                    <li  class="menu-item menu-item-type-post_type menu-item-object-page nav-item "><a href="{{ route('front.login') }}" class="nav-link ">Connexion</a></li>
                @endif
            </ul>

            <!-- search-right -->
            <div class="header-search position-relative HeaderSearch">
                <div class="search-right mx-lg-2">
                    <a href="#search" class="btn search-btn p-0" title="search">
                        <i class="fas fa-search"></i></a>
                    <!-- search popup -->
                    <div id="search" class="pop-overlay">
                        <div class="popup">
                            <form action="https://wp.w3layouts.com/eduschool/" method="GET" class="search-box">
                                <input type="search" placeholder="Enter Keyword..." name="s" required="required" autofocus="">
                                <button type="submit" class="btn"><span class="fas fa-search" aria-hidden="true"></span></button>
                            </form>
                        </div>
                        <a class="close" href="#close">&times;</a>
                    </div>
                    <!-- //search popup -->
                </div>
            </div>
            <!--//search-right-->

        </div>

        <!-- toggle switch for light and dark theme -->
        <div class="cont-ser-position DarkandLight">
            <nav class="navigation">
                <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox">
                        <div class="mode-container">
                            <i class="gg-sun"></i>
                            <i class="gg-moon"></i>
                        </div>
                    </label>
                </div>
            </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
    </nav>
</div>
