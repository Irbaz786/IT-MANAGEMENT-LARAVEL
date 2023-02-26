<!DOCTYPE html><html lang="en">

<head>

    <meta charset="utf-8">

    <title>Alpha- #1 The Fastest APPS SOLUTION	</title>

    <meta name="description" content="Description">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
        
    <link rel="icon" href="assets/img/favicon/favicon.ico" type="image/x-icon"> 

    <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
<link rel="stylesheet" href="assets/css/style.css">
    <link rel="preload" href="assets/fonts/source-sans-pro-v21-latin/source-sans-pro-v21-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="assets/fonts/source-sans-pro-v21-latin/source-sans-pro-v21-latin-700.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="assets/fonts/montserrat-v25-latin/montserrat-v25-latin-700.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="assets/fonts/montserrat-v25-latin/montserrat-v25-latin-600.woff2" as="font" type="font/woff2" crossorigin>

<link rel="preload" href="assets/fonts/material-icons/material-icons.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="assets/fonts/material-icons/material-icons-outlined.woff2" as="font" type="font/woff2" crossorigin>

</head>

<body>
    @section('header')

	<main class="main">
		
		<div class="main-inner">


			<!-- Begin mobile main menu -->


<nav class="mmm">
    <div class="mmm-content">
        <ul class="mmm-list">
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/about">About us</a>
            </li>
            <li>
                <a href="/service">Services</a>
            </li>
            <li>
         
            <li>
                <a href="/contact">Contacts</a>
            </li>

           
            	<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
           				@if (Route::has('login'))
                    @auth
                    <li><form method="POST" action="{{ route('logout') }}" >
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                {{ __('Log Out') }}
            </button>
        </form></li>
    
                    @else
                       <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                         <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
            @endif

        </div>
            
        </ul>
    </div>
</nav>
<!-- End mobile main menu -->

<header class="header header-minimal">
    <nav class="header-fixed">
        <div class="container">
            <div class="row flex-nowrap align-items-center justify-content-between">
                <div class="col-auto header-fixed-col logo-wrapper">
                    <a href="index.html" class="logo" title="PathSoft">
                       
                    </a>
                </div>
                <div class="col-auto col-xl col-static header-fixed-col d-none d-xl-block">
                    <div class="row flex-nowrap align-items-center justify-content-end">
                        <div class="col header-fixed-col d-none d-xl-block col-static">



                            <!-- Begin main menu -->
<nav class="main-mnu">
    <ul class="main-mnu-list">
        <li>
            <a href="/" data-title="Home">
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="/about-us" data-title="About us">
                <span>About us</span>
            </a>
        </li>
        <li>
            <a href="/service" data-title="Services">
                <span>Services</span>
            </a>
        </li>
    
        <li>
            <a href="/contact" data-title="Contacts">
                <span>Contacts</span>
            </a>
        </li>

           
                <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                         @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                         

                            @auth
                       <li><a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a></li>
                        @else
                      <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>
                
                        @if (Route::has('register'))
                         <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif

            
    </ul>
</nav><!-- End main menu -->
                        </div>
                    </div>
                </div>
                <div class="col-auto d-block d-xl-none header-fixed-col">
                    <div class="main-mnu-btn">
                        <span class="bar bar-1"></span>
                        <span class="bar bar-2"></span>
                        <span class="bar bar-3"></span>
                        <span class="bar bar-4"></span>
                        <span class="bar bar-5"></span>
                        <span class="bar bar-6"></span>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

@show
@yield('main')
@section('footer')



<!-- Begin footer -->
<footer class="footer footer-minimal">
    <div class="footer-main">
        <div class="container">
            <div class="row items align-items-center">
                <div class="col-lg-3 col-md-4 col-12 item">
                    <div class="widget-brand-info">
                        <div class="widget-brand-info-main">
                            <a href="index.html" class="logo" title="PathSoft">
                                </a>
                        </div>
                    </div>
                </div>
                <div class="col-md item">
                    <div class="footer-item">
                        <nav class="footer-nav">
                            <ul class="footer-mnu footer-mnu-line">
                                <li><a href="/index" class="hover-link" data-title="Home"><span>Home</span></a></li>
                                <li><a href="/about" class="hover-link" data-title="About us"><span>About us</span></a></li>
                                <li><a href="/service" class="hover-link" data-title="Services"><span>Services</span></a></li>
                               
                                <li><a href="/contact" class="hover-link" data-title="Contacts"><span>Contacts</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row justify-content-between items">
                <div class="col-md-auto col-12 item">
                    <nav class="footer-links">
                        <ul>
                            <li><a href="terms-and-conditions.html">Terms and Conditions</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-auto col-12 item">
                    <div class="copyright">© 2022 . All rights reserved.</div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- End footer -->

    </main>

    <!-- End main -->
    @show


    <script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/lozad/lozad.min.js"></script>
<script src="assets/libs/device/device.js"></script>
<script src="assets/libs/spincrement/jquery.spincrement.min.js"></script>
<script src="assets/libs/pristine/pristine.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/forms.js"></script>
    
</body></html>