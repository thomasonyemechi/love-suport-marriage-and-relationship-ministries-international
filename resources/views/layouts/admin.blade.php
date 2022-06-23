<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page_title')</title>

    <link rel="stylesheet" href="{{ asset('assets/admin/css/all.min.css') }}">
	<!-- Custom Stylesheet -->

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/template.css') }}">
	<link rel="stylesheet" class="skin" href="{{ asset('assets/css/skin/skin-3.css') }}">

    <script src="{{ asset('assets/js/general.js') }}"></script>



    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/css/adminlte.min.css') }}">
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/admin/css/icheck-bootstrap.min.css') }}">




</head>

<body id="bg" class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

    <div class="page-wraper wrapper">
        <header class="site-header mo-left header overlay style-3">
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar clearfix ">
                    <div class="container clearfix">
                        <div class="logo-header mostion logo-dark">
                            <a href="index.html"><img src="{{ asset('assets/images/logo-3.png') }} " alt=""></a>
                        </div>
                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>

                        <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                            <div class="logo-header logo-dark">
                                <a href="index.html"><img src="{{ asset('assets/images/logo-3.png') }}" alt=""></a>
                            </div>
                            <ul class="nav navbar-nav navbar navbar-left">

                                <li><a href="/control/">Dashboard</a></li>
                                <li class="sub-menu-down"><a href="javascript:void(0);">Store Management</a>
                                    <ul class="sub-menu">
                                        <li><a href="/control/store/">Manage Store Items</a></li>
                                        <li><a href="#">Item History</a></li>
                                        <li><a href="#">Sales History</a></li>
                                        <li><a href="#">Track Transaction</a></li>
                                    </ul>
                                </li>
                                <li class="sub-menu-down"><a href="javascript:void(0);">Others</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Events</a></li>
                                        <li><a href="#">Newsletter</a></li>
                                        <li><a href="#">Search User</a></li>
                                        <li><a href="/control/testimonial">Testimonial</a></li>
                                        <li><a href="/control/contact/messages">Contact Messages</a></li>


                                    </ul>
                                </li>
                                <li><a href="/">Back Home </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @include('layouts.inc.alert')


        <div class="littleAlert"></div>

        <div class="page-content bg-white">

            @yield('page_content')
        </div>

        <footer class="site-footer style-3" id="footer">
            <div class="footer-bottom">
                <div class="container">
                    <span class="copyright-text">Copyright © {{ date('Y') }} <a href="/"> {{ env('APP_NAME') }} </a>. All rights reserved.</span>
                </div>
            </div>
        </footer>

        <button class="scroltop icon-up" type="button"><i class="fas fa-arrow-up"></i></button>

    </div>



</body>

</html>
