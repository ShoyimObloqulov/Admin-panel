
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
		<link rel="icon" type="image/png" href="assets/images/favicon.svg">
		<!-- Title -->
		<title>Admin - Auth</title>
    </head>

    <body class="body-bg-f8faff">
		<!-- Start Preloader Area -->
		<div class="preloader">
            <img src="{{ asset('admin/assets/images/main-logo.svg') }}" alt="main-logo">
        </div>
		<!-- End Preloader Area -->

		<!-- Start Account Area -->
        <div class="account-area">
            @yield('content')
        </div>
        <!-- End Account Area -->

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
                            <a class="default-btn btn" target="_blank" href="https://themeforest.net/user/envytheme/portfolio">
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
        <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script> 
        <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('admin/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/metismenu.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/simplebar.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/geticons.js') }}"></script>
        <script src="{{ asset('admin/assets/js/sweetalert2.all.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/jbox.all.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/editor.js') }}"></script>
		<script src="{{ asset('admin/assets/js/form-validator.min.js') }}"></script>
		<script src="{{ asset('admin/assets/js/contact-form-script.js') }}"></script>
		<script src="{{ asset('admin/assets/js/ajaxchimp.min.js') }}"></script>
		<script src="{{ asset('admin/assets/js/custom.js') }}"></script>
    </body>
</html>