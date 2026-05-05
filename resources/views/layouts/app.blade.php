<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Invena – A modern and responsive HTML template for consulting businesses. Perfect for finance, corporate, and agency websites. SEO-friendly, fast-loading, and easy to customize. Create a professional online presence today!">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/Myewallet Favicon.png">
   <title>@yield('title', config('app.name', 'MyeWallet')) </title>
    <link rel="stylesheet preload" href="assets/css/plugins/fontawesome.css" as="style">
    <link rel="stylesheet preload" href="assets/css/plugins/swiper.css" as="style">
    <link rel="stylesheet preload" href="assets/css/plugins/metismenu.css" as="style">
    <link rel="stylesheet preload" href="assets/css/plugins/magnifying-popup.css" as="style">
    <link rel="stylesheet preload" href="assets/css/plugins/odometer.css" as="style">
    <link rel="stylesheet preload" href="assets/css/vendor/bootstrap.min.css" as="style">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet preload" as="style">
    <link rel="preload" as="image" href="assets/images/banner/21.webp" >
    <link rel="stylesheet preload" href="assets/css/style.css" as="style">
    <link rel="stylesheet" href="{{ asset('assets/css/case-studies.css') }}">

</head>

<body>

    <header class="header-one header--sticky">
    <div class="header-top-area-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-top-one-wrapper">
                        <div class="left">
                            <div class="mail">
                                <a href="mailto:services@myewallet.ai"><i class="fal fa-envelope"></i>
                                    services@myewallet.ai</a>
                            </div>
                            <div class="working-time">
                                <p><i class="fa-solid fa-location-dot"></i>  UAE, Hong Kong & USA</p>
                            </div>
                        </div>
                        <div class="right">
                            <ul class="top-nav">
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('faq') }}">Faq</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                            <ul class="social-wrapper-one">
                                <li><a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a></li>
                                <li><a class="mr--0" href="#" aria-label="linkedin"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-main-one-wrapper">
                        <div class="thumbnail">
                            <a href="{{ route('welcome') }}">
<img src="assets/images/logo/logo.jpg" alt="Myewallet-logo" style="width: 200px; height: 50px; object-fit: contain;">
                            </a>
                        </div>
                        <div class="main-header">
                            <div class="nav-area">
                            <ul class="">
                                <li class="main-nav">
                                    <a href="{{ route('welcome') }}">Home</a>
                                </li>
                                <li class="main-nav has-dropdown project-a-after">
                                    <a href="#">Products</a>
                                    <ul class="submenu parent-nav">
                                        <li><a href="{{ route('business-accounts') }}">Business Accounts</a></li>
                                        <li><a href="{{ route('personal-accounts') }}">Personal Wallet</a></li>
                                        <li><a href="{{ route('card-issuing') }}">Card Issuing</a></li>
                                        <li><a href="{{ route('infinity-cards') }}">Infinity Cards</a></li>
                                        <li><a href="{{ route('myewallet-crypto-card') }}">MYeWallet Crypto Card</a></li>
                                        <li><a href="{{ route('cryptoconnect') }}">CryptoConnect</a></li>
                                        <li><a href="{{ route('yield-treasury') }}">Yield Treasury</a></li>
                                    </ul>
                                </li>
                                <li class="main-nav project-a-after">
                                    <a href="#">Solutions</a>
                                </li>
                                <li class="main-nav project-a-after">
                                    <a href="#">Developers</a>
                                </li>
                                <li class="main-nav">
                                    <a href="{{ route('about') }}">Company</a>
                                </li>
                                <li class="main-nav has-dropdown project-a-after">
                                    <a href="#">Resources</a>
                                    <ul class="submenu parent-nav">
                                        <li><a href="{{ route('how-it-works') }}">How it works</a></li>
                                        <li><a href="{{ route('app-features') }}">App Features</a></li>
                                        <li><a href="{{ route('complaince') }}">Compliance</a></li>
                                        <li><a href="{{ route('security') }}">Security</a></li>
                                        <li><a href="{{ route('supported-countries') }}">Supported Countries</a></li>
                                        <li><a href="{{ route('support') }}">Support</a></li>
                                        <li><a href="{{ route('faqs') }}">FAQs</a></li>
                                    </ul>
                                </li>
                                <li class="main-nav project-a-after">
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>


<div class="loader-wrapper">
    <div class="loader">
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
                            <div class="button-area">
                                {{-- <button class="search" id="search" aria-label="Search"><i
                                        class="far fa-search"></i></button> --}}
                                <a href="{{ route('register') }}"
                                    class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@yield('content')




    <!-- rts footer two area wrapper -->
    <div class="rts-footer-area footer-two mt-dec-footer-map bg-footer-two bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                </div>
            </div>
        </div>
        
        <div class="container bg-shape-f1">
            <!-- rts footer area -->
            <div class="row pt--120 pt_sm--80 pb--80 pb_sm--40">

                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <div class="footer-one-single-wized mid-bg">
                        <div class="wized-title">
                            <h5 class="title">Download MyEwallet App</h5>
                            <img loading="lazy" src="assets/images/footer/01.svg" alt="finbiz_footer">
                        </div>
                        <div class="app-download-inner">
                            <p class="disc mb--20">Get the MyEwallet app for secure, instant global payments on the go.</p>
                            <div class="app-store-links">
                                <a href="#" class="app-store-link">
                                    <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="Download on the App Store" style="height: 40px;">
                                </a>
                                <a href="#" class="app-store-link">
                                    <img src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png" alt="Get it on Google Play" style="height: 40px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer mid area end -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12 pl--50 pl_sm--15">
                    <div class="footer-one-single-wized">
                        <div class="wized-title">
                            <h5 class="title">Quick Links</h5>
                            <img loading="lazy" src="assets/images/footer/01.svg" alt="finbiz_footer">
                        </div>
                        <div class="quick-link-inner">
                            <ul class="links">
                                <li><a href="{{ route('about') }}"><i class="far fa-arrow-right"></i> About Us</a></li>
                                <li><a href="{{ route('business-accounts') }}"><i class="far fa-arrow-right"></i> Business Accounts</a></li>
                                <li><a href="{{ route('card-issuing') }}"><i class="far fa-arrow-right"></i> Card Issuing</a></li>
                                <li><a href="{{ route('cryptoconnect') }}"><i class="far fa-arrow-right"></i> CryptoConnect</a></li>
                                <li><a href="{{ route('contact') }}"><i class="far fa-arrow-right"></i> Contact Us</a></li>
                            </ul>
                            <ul class="links margin-left-70">
                                <li><a href="{{ route('app-features') }}"><i class="far fa-arrow-right"></i> App Features</a></li>
                                <li><a href="{{ route('complaince') }}"><i class="far fa-arrow-right"></i> Compliance</a></li>
                                <li><a href="{{ route('security') }}"><i class="far fa-arrow-right"></i> Security</a></li>
                                <li><a href="{{ route('supported-countries') }}"><i class="far fa-arrow-right"></i> Supported Countries</a></li>
                                <li><a href="{{ route('faqs') }}"><i class="far fa-arrow-right"></i> FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- footer mid area -->

                <!-- footer end area post -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <div class="footer-one-single-wized margin-left-65">
                        <div class="wized-title">
                            <h5 class="title">Get Updates</h5>
                            <img loading="lazy" src="assets/images/footer/01.svg" alt="finbiz_footer">
                        </div>
                        <div class="body">
                            <div class="update-wrapper">
                                <p class="disc">Sign up for our latest news &amp; articles. We won’t give you spam
                                    mails.</p>
                                <form class="email-footer-area">
                                    <input type="email" placeholder="Enter Email Address" required="">
                                    <button type="submit" title="Close menu"><i
                                            class="fas fa-location-arrow"></i></button>
                                </form>
                                <div class="note-area">
                                    <p><span>Note:</span> We do not publish your email</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer end area post end-->
            </div>
            <!-- rts footer area End -->
        </div>
        <!-- copyright area start -->
        <div class="rts-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <p>MyEwallet International - Copyright
                                <script>
                                    document.write(
                                        new Date().getFullYear()
                                    )
                                </script>. All rights reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright area end -->
    </div>
    <!-- rts footer two area wrapper end -->

    <div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu" title="Close menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="rts-sidebar-menu-desktop">
        <a class="logo-1" href="index.html"><img class="logo" src="assets/images/logo/logo.jpg" alt="Myewallet-logo"></a>
        <div class="body d-none d-xl-block">
            <p class="disc">
                MyEwallet International is a global digital payments and banking platform licensed
                across the UAE, Hong Kong, and USA.
            </p>
            <div class="get-in-touch">
                <!-- title -->
                <div class="h6 title">Get In Touch</div>
                <!-- title End -->
                <div class="wrapper">
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-phone-alt"></i>
                        <a href="tel:+971-50-123-4567">+971 50 123 4567</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:services@myewallet.ai">services@myewallet.ai</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-globe"></i>
                        <a href="https://www.myewallet.ai">www.myewallet.ai</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="#">UAE · Hong Kong · USA</a>
                    </div>
                    <!-- single ENd -->
                </div>
                <div class="social-wrapper-two menu">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                    <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu area start -->
    <div class="mobile-menu d-block d-xl-none">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu" id="mobile-menu-active">
                <li>
                    <a href="{{ route('welcome') }}" class="main">Home</a>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main" aria-expanded="false">Products</a>
                    <ul class="submenu mm-collapse">
                        <li><a href="{{ route('business-accounts') }}">Business Accounts</a></li>
                        <li><a href="{{ route('card-issuing') }}">Card Issuing</a></li>
                        <li><a href="{{ route('infinity-cards') }}">Infinity cards</a></li>
                        <li><a href="{{ route('myewallet-crypto-card') }}">MYeWallet Crypto Card</a></li>
                        <li><a href="{{ route('cryptoconnect') }}">CryptoConnect</a></li>
                        <li><a href="{{ route('yield-treasury') }}">Yield Treasury</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="main">Solutions</a>
                </li>
                <li>
                    <a href="#" class="main">Developers</a>
                </li>
                <li>
                    <a href="#" class="main">Company</a>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main" aria-expanded="false">Resources</a>
                    <ul class="submenu mm-collapse">
                        <li><a href="{{ route('how-it-works') }}">How it works</a></li>
                        <li><a href="{{ route('app-features') }}">App Features</a></li>
                        <li><a href="{{ route('complaince') }}">Compliance</a></li>
                        <li><a href="{{ route('security') }}">Security</a></li>
                        <li><a href="{{ route('supported-countries') }}">Supported Countries</a></li>
                        <li><a href="{{ route('support') }}">Support</a></li>
                        <li><a href="{{ route('faqs') }}">FAQs</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="main">About Us</a>
                </li>
                <li>
                    <a href="{{ route('faq') }}" class="main">FAQ</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="main">Contact</a>
                </li>
            </ul>
        </nav>

        <div class="social-wrapper-one">
            <ul>
                <li>
                    <a href="#" aria-label="Facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="#" aria-label="twitter">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#" aria-label="youtube">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </li>
                <li>
                    <a href="#" aria-label="linkedin">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- mobile menu area end -->
</div>
<!-- inner menu area desktop End -->


<!-- offcanvase search -->
<div class="search-input-area">
    <div class="container">
        <div class="search-input-inner">
            <div class="input-div">
                <input class="search-input autocomplete" type="text" placeholder="Search by keyword or #">
                <button><i class="far fa-search"></i></button>
            </div>
        </div>
    </div>
    <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
</div>
<div id="anywhere-home" class="">
</div>



<!-- progress area start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
        </path>
    </svg>
</div>
<!-- progress area end -->

<script defer src="assets/js/plugins/jquery.js"></script>

<script defer src="assets/js/plugins/odometer.js"></script>
<script defer src="assets/js/plugins/jquery-appear.js"></script>


<script defer src="assets/js/plugins/gsap.js"></script>
<script defer src="assets/js/plugins/split-text.js"></script>
<script defer src="assets/js/plugins/scroll-trigger.js"></script>
<script defer src="assets/js/plugins/smooth-scroll.js"></script>
<script defer src="assets/js/plugins/metismenu.js"></script>
<script defer src="assets/js/plugins/popup.js"></script>

<script defer src="assets/js/vendor/bootstrap.min.js"></script>
<script defer src="assets/js/plugins/swiper.js"></script>
<script defer src="assets/js/plugins/contact.form.js"></script>
<script defer src="assets/js/vendor/waw.js"></script>

<script defer src="assets/js/main.js"></script>
</body>

</html>