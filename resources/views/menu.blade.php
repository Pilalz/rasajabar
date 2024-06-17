<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Babette">
    <link href="{{ asset('images/logo/logo5.png') }}" rel="icon">
    <title>Babette</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Rubik:400,500,700%7cShadows+Into+Light&display=swap">
    <link rel="stylesheet" href="{{ asset('css/libraries.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
    <div class="wrapper">
        <!-- =========================
            Header
        =========================== -->
        <header id="header" class="header header-transparent header-layout4">
            <nav class="navbar navbar-expand-lg sticky-navbar">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('index') }}">
                        <img src="{{ asset('images/logo/logo2.png') }}" style="width: 150px; height: 80px;" class="logo-light" alt="logo">
                        <img src="{{ asset('images/logo/logo6.png') }}" style="width: 150px; height: 80px;" class="logo-dark" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button">
                        <span class="menu-lines"><span></span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mainNavigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav__item with-dropdown">
                                <a href="{{ route('index') }}"  class="dropdown-toggle nav__item-link ">Home</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item with-dropdown">
                                <a href="{{ route('menu') }}"  class="dropdown-toggle nav__item-link active">Menu</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item with-dropdown">
                                <a href="{{ route('gallery') }}"  class="dropdown-toggle nav__item-link">Gallery</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item with-dropdown">
                                <a href="{{ route('contact') }}" class="dropdown-toggle nav__item-link">About</a>
                            </li><!-- /.nav-item -->
                            <!-- /.nav-item -->
                        </ul><!-- /.navbar-nav -->
                    </div><!-- /.navbar-collapse -->
                    <div class="navbar-actions-wrap">
                        <div class="navbar-actions d-flex align-items-center">
                        <a href="#" class="navbar__action-btn search-popup-trigger"><i class="fa fa-search"></i></a>
                        </div><!-- /.navbar-actions -->
                    </div><!-- /.navbar-actions-wrap -->
                </div><!-- /.container -->
            </nav><!-- /.navabr -->
        </header><!-- /.Header -->

        <!-- ========================
        page title 
        =========================== -->
        <section id="page-title" class="page-title page-title-layout3 text-center bg-overlay bg-overlay-2 bg-parallax">
            <div class="bg-img"><img src="{{ asset('images/backgrounds/10.jpg') }}" alt="background"></div>
            <svg class="pagetitle__divider-shape" xmlns="http://www.w3.org/2000/svg" width="22" height="61"
                viewBox="0 0 22 61">
                <path
                d="M799,769h2v61h-2V769Zm8,24.8a0.969,0.969,0,0,0-1.911,0,3.012,3.012,0,0,1-.883,2.16,4.486,4.486,0,0,0,0,6.136,3.083,3.083,0,0,1,0,4.32,4.486,4.486,0,0,0,0,6.136,3.088,3.088,0,0,1,0,4.325,4.5,4.5,0,0,0,0,6.142,3.014,3.014,0,0,1,.884,2.163,0.969,0.969,0,0,0,1.911,0,4.414,4.414,0,0,0-1.213-3.07,3.091,3.091,0,0,1,0-4.328,4.491,4.491,0,0,0,0-6.14,3.08,3.08,0,0,1,0-4.319,4.488,4.488,0,0,0,0-6.137,3.081,3.081,0,0,1,0-4.32A4.407,4.407,0,0,0,807,793.8Zm0-20a0.969,0.969,0,0,0-1.911,0,3.014,3.014,0,0,1-.883,2.16,4.486,4.486,0,0,0,0,6.136,3.083,3.083,0,0,1,0,4.32,4.488,4.488,0,0,0,0,6.137,3.087,3.087,0,0,1,0,4.324,4.5,4.5,0,0,0,0,6.142,3.014,3.014,0,0,1,.884,2.163,0.969,0.969,0,0,0,1.911,0,4.414,4.414,0,0,0-1.213-3.07,3.089,3.089,0,0,1,0-4.327,4.491,4.491,0,0,0,0-6.14,3.081,3.081,0,0,1,0-4.32,4.488,4.488,0,0,0,0-6.137,3.081,3.081,0,0,1,0-4.32A4.409,4.409,0,0,0,807,773.8ZM793,793.8a0.969,0.969,0,0,1,1.911,0,3.012,3.012,0,0,0,.883,2.16,4.486,4.486,0,0,1,0,6.136,3.083,3.083,0,0,0,0,4.32,4.486,4.486,0,0,1,0,6.136,3.088,3.088,0,0,0,0,4.325,4.5,4.5,0,0,1,0,6.142,3.014,3.014,0,0,0-.884,2.163,0.969,0.969,0,0,1-1.911,0,4.414,4.414,0,0,1,1.213-3.07,3.091,3.091,0,0,0,0-4.328,4.491,4.491,0,0,1,0-6.14,3.08,3.08,0,0,0,0-4.319,4.488,4.488,0,0,1,0-6.137,3.081,3.081,0,0,0,0-4.32A4.407,4.407,0,0,1,793,793.8Zm0-20a0.969,0.969,0,0,1,1.911,0,3.014,3.014,0,0,0,.883,2.16,4.486,4.486,0,0,1,0,6.136,3.083,3.083,0,0,0,0,4.32,4.488,4.488,0,0,1,0,6.137,3.087,3.087,0,0,0,0,4.324,4.5,4.5,0,0,1,0,6.142,3.014,3.014,0,0,0-.884,2.163,0.969,0.969,0,0,1-1.911,0,4.414,4.414,0,0,1,1.213-3.07,3.089,3.089,0,0,0,0-4.327,4.491,4.491,0,0,1,0-6.14,3.081,3.081,0,0,0,0-4.32,4.488,4.488,0,0,1,0-6.137,3.081,3.081,0,0,0,0-4.32A4.409,4.409,0,0,1,793,773.8Zm-4,5.2h2v41h-2V779Zm20,0h2v41h-2V779Z"
                transform="translate(-789 -769)"></path>
            </svg>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                        <span class="pagetitle__subheading">Discover</span>
                        <h1 class="pagetitle__heading">Menu from West Java</h1>
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.page-title -->

        <!-- ========================
            Menu layout 4
        =========================== -->
        <section id="menulayout4" class="menu-layout4 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading text-center mb-30">
                            <span class="heading__subtitle">Taste The Best</span>
                            <h2 class="heading__title">Discover Our Menu</h2>
                            <div class="heading__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path
                                    d="M515,925a10,10,0,1,0,10,10A10.011,10.011,0,0,0,515,925Zm7,13.865a2.568,2.568,0,0,1-.651-0.549,3.235,3.235,0,0,0-5.209,0,1.449,1.449,0,0,1-1.146.683,1.419,1.419,0,0,1-1.2-.695,3.2,3.2,0,0,0-2.548-1.3,3.345,3.345,0,0,0-2.605,1.316,2.625,2.625,0,0,1-.64.544,7.953,7.953,0,0,1-.928-2.86h15.862A7.926,7.926,0,0,1,522,938.863ZM507.069,934a7.948,7.948,0,0,1,.928-2.859,2.617,2.617,0,0,1,.64.543A3.345,3.345,0,0,0,511.242,933a3.2,3.2,0,0,0,2.548-1.3,1.423,1.423,0,0,1,1.2-.7,1.452,1.452,0,0,1,1.146.685,3.237,3.237,0,0,0,5.209,0,2.575,2.575,0,0,1,.651-0.55,7.939,7.939,0,0,1,.932,2.865H507.069ZM515,927a7.975,7.975,0,0,1,5.8,2.509,5.325,5.325,0,0,0-.914.806,1.3,1.3,0,0,1-2.292,0,3.287,3.287,0,0,0-5.289.035,1.286,1.286,0,0,1-1.066.648,1.452,1.452,0,0,1-1.145-.683,5.348,5.348,0,0,0-.9-0.8A7.972,7.972,0,0,1,515,927Zm0,16a7.97,7.97,0,0,1-5.808-2.516,5.3,5.3,0,0,0,.9-0.8,1.452,1.452,0,0,1,1.145-.685,1.288,1.288,0,0,1,1.066.649,3.288,3.288,0,0,0,5.289.036,1.3,1.3,0,0,1,2.292,0,5.241,5.241,0,0,0,.914.806A7.972,7.972,0,0,1,515,943Z"
                                    transform="translate(-505 -925)"></path>
                                </svg>
                            </div>
                            <p class="heading__desc">Even if you're not a great chef, there's nothing to stop you understanding
                                the difference between what tastes good and what doesn't.</p>
                        </div><!-- /.heading -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="container-fluid col-padding-0">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <ul class="portfolio-filter justify-content-center">
                            <li><a class="filter active" href="#" data-filter="all">All</a></li>
                            <li><a class="filter" href="#" data-filter=".filter-launch">Makanan</a></li>
                            <li><a class="filter" href="#" data-filter=".filter-drinks">Minuman</a></li>
                        </ul><!-- /.portfolio-filter  -->
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
                <div class="row filtered-items-wrap">
                @foreach ($menus as $menu)
                    <div class="col-sm-12 col-md-6 col-lg-6 mix {{ $menu->jenis == 'Makanan' ? 'filter-launch' : ($menu->jenis == 'Minuman' ? 'filter-drinks' : '') }}">
                        <a href="{{ route('menu.detail', $menu->id) }}" class="hover-card d-block">
                            <div class="menu-item" style="height:300px;">
                                <div class="menu__item-img position-relative">
                                    <img src="/images/menu/{{ ($menu->gambar) }}" alt="{{ $menu->nama }}" class="img-fluid w-100 h-100">
                                    <svg class="divider-shape" xmlns="http://www.w3.org/2000/svg" width="142" height="17" viewBox="0 0 142 17">
                                        <path
                                            d="M800,600V583c8.782,15.985,46.811,11.315,56,12a35.721,35.721,0,0,1,15,5m-71,0V583c-8.782,15.985-46.811,11.315-56,12a35.717,35.717,0,0,0-15,5"
                                            transform="translate(-729 -583)"></path>
                                    </svg>
                                </div><!-- /.menu__item-img -->
                                <div class="menu__item-content p-3">
                                    <div class="menu__item-content-inner">
                                        <h4 class="menu__item-title">{{ $menu->nama }}</h4>
                                        <div class="menu__item-icon">
                                            <img src="{{ asset('images/logo/logo3.png') }}" style="width:20px; height:20px;">
                                        </div>
                                        <p class="menu__item-desc">{{ $menu->short_description }}</p>
                                        <span class="menu__item-price">{{ $menu->jenis }}</span>
                                        <span class="pricing__tag"></span>
                                    </div>
                                </div><!-- /.menu__item-content -->
                            </div><!-- /.menu-item -->
                        </a>
                    </div><!-- /.col-lg-6 -->
                @endforeach
                </div><!-- /.row  -->
            </div><!-- /.container -->
        </section><!-- /.menu layout 4 -->

    <!-- ========================
        Footer
        ========================== -->
        <footer id="footer" class="footer footer-layout1 text-center bg-dark">
            <div class="footer-inner">
                <div class="container">
                    <div class="footer-top">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 position-static">
                                <svg class="footer__divider-shape" xmlns="http://www.w3.org/2000/svg" width="22" height="61"
                                viewBox="0 0 22 61">
                                    <path
                                        d="M799,769h2v61h-2V769Zm8,24.8a0.969,0.969,0,0,0-1.911,0,3.012,3.012,0,0,1-.883,2.16,4.486,4.486,0,0,0,0,6.136,3.083,3.083,0,0,1,0,4.32,4.486,4.486,0,0,0,0,6.136,3.088,3.088,0,0,1,0,4.325,4.5,4.5,0,0,0,0,6.142,3.014,3.014,0,0,1,.884,2.163,0.969,0.969,0,0,0,1.911,0,4.414,4.414,0,0,0-1.213-3.07,3.091,3.091,0,0,1,0-4.328,4.491,4.491,0,0,0,0-6.14,3.08,3.08,0,0,1,0-4.319,4.488,4.488,0,0,0,0-6.137,3.081,3.081,0,0,1,0-4.32A4.407,4.407,0,0,0,807,793.8Zm0-20a0.969,0.969,0,0,0-1.911,0,3.014,3.014,0,0,1-.883,2.16,4.486,4.486,0,0,0,0,6.136,3.083,3.083,0,0,1,0,4.32,4.488,4.488,0,0,0,0,6.137,3.087,3.087,0,0,1,0,4.324,4.5,4.5,0,0,0,0,6.142,3.014,3.014,0,0,1,.884,2.163,0.969,0.969,0,0,0,1.911,0,4.414,4.414,0,0,0-1.213-3.07,3.089,3.089,0,0,1,0-4.327,4.491,4.491,0,0,0,0-6.14,3.081,3.081,0,0,1,0-4.32,4.488,4.488,0,0,0,0-6.137,3.081,3.081,0,0,1,0-4.32A4.409,4.409,0,0,0,807,773.8ZM793,793.8a0.969,0.969,0,0,1,1.911,0,3.012,3.012,0,0,0,.883,2.16,4.486,4.486,0,0,1,0,6.136,3.083,3.083,0,0,0,0,4.32,4.486,4.486,0,0,1,0,6.136,3.088,3.088,0,0,0,0,4.325,4.5,4.5,0,0,1,0,6.142,3.014,3.014,0,0,0-.884,2.163,0.969,0.969,0,0,1-1.911,0,4.414,4.414,0,0,1,1.213-3.07,3.091,3.091,0,0,0,0-4.328,4.491,4.491,0,0,1,0-6.14,3.08,3.08,0,0,0,0-4.319,4.488,4.488,0,0,1,0-6.137,3.081,3.081,0,0,0,0-4.32A4.407,4.407,0,0,1,793,793.8Zm0-20a0.969,0.969,0,0,1,1.911,0,3.014,3.014,0,0,0,.883,2.16,4.486,4.486,0,0,1,0,6.136,3.083,3.083,0,0,0,0,4.32,4.488,4.488,0,0,1,0,6.137,3.087,3.087,0,0,0,0,4.324,4.5,4.5,0,0,1,0,6.142,3.014,3.014,0,0,0-.884,2.163,0.969,0.969,0,0,1-1.911,0,4.414,4.414,0,0,1,1.213-3.07,3.089,3.089,0,0,0,0-4.327,4.491,4.491,0,0,1,0-6.14,3.081,3.081,0,0,0,0-4.32,4.488,4.488,0,0,1,0-6.137,3.081,3.081,0,0,0,0-4.32A4.409,4.409,0,0,1,793,773.8Zm-4,5.2h2v41h-2V779Zm20,0h2v41h-2V779Z"
                                        transform="translate(-789 -769)"></path>
                                </svg>
                            </div><!-- /.col-lg-12 -->
                        <div class="footer-middle">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12 position-static">
                                    <div class="footer__logo-wrap text-center">
                                        <img src="{{ asset('images/logo/logo-footer.png') }}" alt="logo" class="footer__logo">
                                    </div>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                                <p class="mb-20">
                                RasaJabar was designed with history in mind. We have created a space to disseminate various recipes for 
                                typical West Javanese food, combined with interactive features, user-friendly navigation, and visually 
                                appealing content to enhance the culinary experience.
                                </p>
                                <!-- <a href="reservation.html" class="btn btn__primary btn__bordered btn__lg">See The Gallery</a> -->
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.footer-middle -->
                </div><!-- /.container -->
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="footer__copyright mb-30">
                                    <span>&copy; RasaJabar </span>
                                    <a href="http://themeforest.net/user/7oroof" class="color-theme">7oroof.com</a>
                                </div>
                                <ul class="social__icons social__icons-white justify-content-center">
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-tripadvisor"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                </ul><!-- /.social__icons -->
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                    <svg class="footer__divider-shape-bottom" xmlns="http://www.w3.org/2000/svg" width="142" height="17"
                        viewBox="0 0 142 17">
                        <path
                        d="M800,600V583c8.782,15.985,46.811,11.315,56,12a35.721,35.721,0,0,1,15,5m-71,0V583c-8.782,15.985-46.811,11.315-56,12a35.717,35.717,0,0,0-15,5"
                        transform="translate(-729 -583)"></path>
                    </svg>
                </div><!-- /.Footer-bottom -->
            </div><!-- /.Footer-inner -->
        </footer><!-- /.Footer -->
        <button id="scrollTopBtn"><i class="fa fa-angle-up"></i></button>

        <div class="search-popup">
        <i class="fa fa-times close-search"></i>
        <form class="module__search-form">
            <input type="text" class="search__input" placeholder="Type Words Then Enter">
            <button class="module__search-btn"><i class="fa fa-search"></i></button>
        </form>
        </div><!-- /.search-popup -->

    </div>
    <!-- /.wrapper -->

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>