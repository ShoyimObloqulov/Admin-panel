<!doctype html>
<html lang="uz">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Link Of CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/iconsax.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/metismenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/simplebar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/calendar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/jbox.all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/editor.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/loaders.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/sidebar-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/responsive.css') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('admin/assets/images/favicon.svg') }}">
    <!-- Title -->
    <title>Joxi - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body class="body-bg-f8faff">
    <!-- Start Preloader Area -->
    <div class="preloader">
        <img src="{{ asset('admin/assets/images/main-logo.svg') }}" alt="main-logo">
    </div>
    <!-- End Preloader Area -->

    <!-- Start All Section Area -->
    <div class="all-section-area">
        <!-- Start Header Area -->
        <div class="header-area header-style-three">
            <div class="container-fluid">
                <div class="header-content-wrapper">
                    <div class="header-content d-flex justify-content-between align-items-center">
                        <div class="header-left-content d-flex">
                            <div class="responsive-burger-menu d-block d-lg-none">
                                <span class="top-bar"></span>
                                <span class="middle-bar"></span>
                                <span class="bottom-bar"></span>
                            </div>

                            <div class="main-logo">
                                <img src="{{asset('admin/assets/images/white-logo.svg')}}" alt="main-logo">
                            </div>

                            <form class="search-bar d-flex">
                                <img src="{{asset('admin/assets/images/icon/search-normal.svg')}}" alt="search-normal">

                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            </form>

                            <div class="option-item for-mobile-devices d-block d-lg-none">
                                <i class="search-btn ri-search-line"></i>
                                <i class="close-btn ri-close-line"></i>

                                <div class="search-overlay search-popup">
                                    <div class='search-box'>
                                        <form class="search-form">
                                            <input class="search-input" name="search" placeholder="Search" type="text">

                                            <button class="search-button" type="submit">
                                                <i class="ri-search-line"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="header-right-content d-flex align-items-center">
                            <div class="header-right-option">
                                <a href="#" class="dropdown-item fullscreen-btn" id="fullscreen-button">
                                    <img src="{{ asset('admin/assets/images/icon/maximize.svg') }}" alt="maximize">
                                </a>
                            </div>

                            @if(auth()->check())
                            <div class="header-right-option dropdown profile-nav-item pt-0 pb-0">
                                <a class="dropdown-item dropdown-toggle avatar d-flex align-items-center" href="#"
                                    id="navbarDropdown-4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{asset('admin/assets/images/avatar.png')}}" alt="avatar">
                                    <div class="d-none d-lg-block d-md-block">
                                        <h3>Salom, {{auth()->user()->name}}</h3>
                                        <span>Super Admin</span>
                                    </div>
                                </a>

                                <div class="dropdown-menu">
                                    <div class="dropdown-header d-flex flex-column align-items-center">
                                        <div class="figure mb-3">
                                            <img src="{{asset('admin/assets/images/avatar.png')}}"
                                                class="rounded-circle" alt="avatar">
                                        </div>

                                        <div class="info text-center">
                                            <span class="name">{{auth()->user()->name}}</span>
                                            <p class="mb-3 email">
                                                {{auth()->user()->email}}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="dropdown-wrap">
                                        <ul class="profile-nav p-0 pt-3">
                                            <li class="nav-item">
                                                <a href="profile.html" class="nav-link">
                                                    <i class="ri-user-line"></i>
                                                    <span>Profile</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="inbox.html" class="nav-link">
                                                    <i class="ri-mail-send-line"></i>
                                                    <span>My Inbox</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="edit-profile.html" class="nav-link">
                                                    <i class="ri-edit-box-line"></i>
                                                    <span>Edit Profile</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="edit-profile.html" class="nav-link">
                                                    <i class="ri-settings-5-line"></i>
                                                    <span>Settings</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropdown-footer">
                                        <ul class="profile-nav">
                                            <li class="nav-item">
                                                <form action="{{ route('logout') }}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-primary mb-1">
                                                        <i class="ri-login-circle-line"></i>
                                                        <span>Logout</span>
                                                    </button>
                                                </form>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Area -->

        @include('layouts.sidebar')

        <!-- Start Main Content Area -->
        <main class="main-content-wrap style-two">
            <div class="overview-content-area">
                @yield('content')
            </div>
            <!-- Start Footer Area -->
            <div class="footer-area">
                <div class="container-fluid">
                    <div class="footer-content">
                        <p>© Joxi is Proudly Owned by <a href="{{url('https://t.me/Obloqulov_Shoyim')}}"
                                target="_blank">ShoyimObloqulov</a></p>
                    </div>
                </div>
            </div>
            <!-- End Footer Area -->
        </main>
        <!-- End Main Content Area -->
    </div>
    <!-- End All Section Area -->

    <!-- Start Template Sidebar Area -->
    <div class="template-sidebar-area">
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
            <div class="offcanvas-header">
                <a href="index.html">
                    <img src="assets/images/main-logo.svg" alt="main-logo">
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul>
                    <li>
                        <a class="default-btn btn active" target="_blank" href="#">
                            Buy Now
                        </a>
                    </li>
                    <li>
                        <a class="default-btn btn" target="_blank"
                            href="https://themeforest.net/user/envytheme/portfolio">
                            Our Portfolio
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Template Sidebar Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="ri-arrow-up-s-fill"></i>
        <i class="ri-arrow-up-s-fill"></i>
    </div>
    <!-- End Go Top Area -->

    <!-- Jquery Min JS -->
    <script data-cfasync="false"
        src="{{asset('admin/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/metismenu.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/apexcharts/tutor-lms.js') }}"></script>
    <script src="{{ asset('admin/assets/js/geticons.js') }}"></script>
    <script src="{{ asset('admin/assets/js/calendar.js') }}"></script>
    <script src="{{ asset('admin/assets/js/calendar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/editor.js') }}"></script>
    <script src="{{ asset('admin/assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
</body>

</html>
