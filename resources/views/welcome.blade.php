@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

    <div class="banner-swiper-two">
        <div class="swiper mySwiper-banner-two">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- rts banner area start -->
                    <div class="rts-banner-area-two rts-section-gap bg_image">
                        {{-- <img src="assets/images/bg/bg-image-1.jpg" alt="MyEwallet Global Payments"
                            class="hero-bg-image"> --}}
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-inner-two-content">
                                        <p class="pre-title"><span>Global Payments</span> Fast, Secure & Borderless</p>
                                        <h1 class="title">Send Money Globally <br> Instantly & Securely</h1>
                                        <p class="disc">
                                            Move money across 150+ countries with real exchange rates, zero hidden fees,
                                            and AI-powered fraud protection — all from one wallet.
                                        </p>
                                        <a href="{{ route('contact') }}" class="rts-btn btn-primary btn-white">Open Free
                                            Account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shape-area-start">
                            <div class="shape shape-one">
                                <img loading="lazy" src="assets/images/banner/shape/01.webp" alt="shape-area">
                            </div>
                            <div class="shape shape-two">
                                <img loading="lazy" src="assets/images/banner/shape/02.webp" alt="shape-area">
                            </div>
                            <div class="shape shape-three">
                                <img loading="lazy" src="assets/images/banner/shape/03.webp" alt="shape-area">
                            </div>
                            <div class="shape shape-four">
                                <img loading="lazy" src="assets/images/banner/shape/04.webp" alt="shape-area">
                            </div>
                        </div>
                    </div>
                    <!-- rts banner area end -->
                </div>
                <div class="swiper-slide">
                    <!-- rts banner area start -->
                    <div class="rts-banner-area-two two rts-section-gap bg_image">
                        {{-- <img src="assets/images/bg/bg-image-2.jpg" alt="MyEwallet Multi-Currency Accounts"
                            class="hero-bg-image"> --}}
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-inner-two-content">
                                        <p class="pre-title"><span>For Business</span> Scale Without Borders</p>
                                        <h1 class="title">Powerful Banking <br> Built for Global Business</h1>
                                        <p class="disc">
                                            Multi-currency accounts, batch payroll, virtual cards, and SWIFT transfers —
                                            everything your business needs to operate internationally.
                                        </p>
                                        <a href="{{ route('business-accounts') }}"
                                            class="rts-btn btn-primary btn-white">Explore Business Accounts</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shape-area-start">
                            <div class="shape shape-one">
                                <img loading="lazy" src="assets/images/banner/shape/01.webp" alt="">
                            </div>
                            <div class="shape shape-two">
                                <img loading="lazy" src="assets/images/banner/shape/02.webp" alt="">
                            </div>
                            <div class="shape shape-three">
                                <img loading="lazy" src="assets/images/banner/shape/03.webp" alt="">
                            </div>
                            <div class="shape shape-four">
                                <img loading="lazy" src="assets/images/banner/shape/04.webp" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- rts banner area end -->
                </div>
                <div class="swiper-slide">
                    <!-- rts banner area start -->
                    <div class="rts-banner-area-two three rts-section-gap bg_image">
                        {{-- <img src="assets/images/bg/bg-image-3.jpg" alt="MyEwallet AI Security" class="hero-bg-image">
                        --}}
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-inner-two-content">
                                        <p class="pre-title"><span>Trusted & Regulated</span> Licensed in UAE, HK & USA</p>
                                        <h1 class="title">Your Money, Safe <br> and Compliant Globally</h1>
                                        <p class="disc">
                                            Operating under financial regulations in the UAE, Hong Kong, and USA —
                                            MyEwallet keeps your funds protected and your transactions compliant.
                                        </p>
                                        <a href="{{ route('security') }}" class="rts-btn btn-primary btn-white">Learn About
                                            Security</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shape-area-start">
                            <div class="shape shape-one">
                                <img loading="lazy" src="assets/images/banner/shape/01.webp" alt="">
                            </div>
                            <div class="shape shape-two">
                                <img loading="lazy" src="assets/images/banner/shape/02.webp" alt="">
                            </div>
                            <div class="shape shape-three">
                                <img loading="lazy" src="assets/images/banner/shape/03.webp" alt="">
                            </div>
                            <div class="shape shape-four">
                                <img loading="lazy" src="assets/images/banner/shape/04.webp" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- rts banner area end -->
                </div>
            </div>
            <div class="swiper-button-next"><i class="fa-light fa-chevron-right"></i></div>
            <div class="swiper-button-prev"><i class="fa-light fa-chevron-left"></i></div>
        </div>
    </div>

    <!-- rts about area start -->
    <div class="rts-about-area-two rts-section-gap" style="padding-top: 0px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="left-thumbnail-about-area-two">
                        <img loading="lazy" src="assets/images/about/compliance-illustration.png" alt="about">
                        <div class="small-image">
                            <img loading="lazy" src="assets/images/about/05.webp" alt="small">
                        </div>
                        {{-- <div class="counter-about-area">
                            <h2 class="counter title"><span class="odometer" data-count="150">00</span>+
                            </h2>
                            <span>Countries Supported</span>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6 mt_sm--80 mt_md--80">
                    <div class="about-inner-content-two">
                        <div class="title-style-two left">
                            <span class="bg-content">About Us</span>
                            <span class="pre">Who We Are</span>
                            <h2 class="title rts-text-anime-style-1">
                                A Global Platform Built <br> for Borderless Finance
                            </h2>
                        </div>
                        <div class="about-between-wrapper">
                            <p class="disc">
                                MyEwallet International is a regulated global digital payments and banking platform,
                                operating across the UAE, Hong Kong, and USA. We empower individuals and businesses
                                to send, receive, and manage money in 150+ countries with real exchange rates,
                                bank-level security, and AI-driven insights.
                            </p>
                            <div class="check-wrapper-area">
                                <div class="single-check">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <p>Licensed & Regulated in UAE, Hong Kong & USA</p>
                                </div>
                                <div class="single-check">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <p>Multi-Currency Accounts with Real Exchange Rates</p>
                                </div>
                                <div class="single-check">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <p>AI-Powered Fraud Detection & 24/7 Security Monitoring</p>
                                </div>
                            </div>
                        </div>
                        <div class="call-and-sign-area two">
                            <div class="call-area">
                                <div class="icon">
                                    <i class="fa-sharp fa-regular fa-envelope"></i>
                                </div>
                                <div class="information">
                                    <span>Reach us anytime</span>
                                    <a href="mailto:services@myewallet.ai">
                                        <h6 class="title">services@myewallet.ai</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-1680 mt--40">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="case-studies-wrapper-main-5">
                                <div class="swiper mySwiper-case-studies-5">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="single-case-studies-four">
                                                <a href="#" class="thumbnail">
                                                    <img src="assets/images/project/business-accounts.png" alt="project"
                                                        style="width: 350px; height: auto;">
                                                </a>
                                                <div class="inner">
                                                    <a href="#">
                                                        <h3 class="title">Business Accounts</h3>
                                                        <span>Open Multi-currency business account and manage your global
                                                            finances from a single unified Platform </span>
                                                    </a>
                                                </div>
                                                {{-- <div class="eye">
                                                    <img src="assets/images/project/eye.svg" alt="project">
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-case-studies-four">
                                                <a href="#" class="thumbnail">
                                                    <img src="assets/images/project/card-issuing.png" alt="project"
                                                        style="width: 350px; height: auto;">
                                                </a>
                                                <div class="inner">
                                                    <a href="#">
                                                        <h3 class="title">Card Issuing</h3>
                                                        <span>Lunch branded physical and virtual cards at scale with custom
                                                            controls</span>
                                                    </a>
                                                </div>
                                                {{-- <div class="eye">
                                                    <img src="assets/images/project/eye.svg" alt="project">
                                                </div> --}}
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-case-studies-four">
                                                <a href="#" class="thumbnail">
                                                    <img src="assets/images/project/infinity-cards.png" alt="project"
                                                        style="width: 350px; height: auto;">
                                                </a>
                                                <div class="inner">
                                                    <a href="#">
                                                        <h3 class="title">Infinity Cards</h3>
                                                        <span>Corporate and employee cards with comprehensive spending
                                                            controls and oversight</span>
                                                    </a>
                                                </div>
                                                {{-- <div class="eye">
                                                    <img src="assets/images/project/eye.svg" alt="project">
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-case-studies-four">
                                                <a href="#" class="thumbnail">
                                                    <img src="assets/images/project/crypto-card.png" alt="project"
                                                        style="width: 350px; height: 620px;">
                                                </a>
                                                <div class="inner">
                                                    <a href="#">
                                                        <h3 class="title">Myewallet Crypto Card</h3>
                                                        <span>Spend your crypto anywhere in the world with our global crypto
                                                            card and solution</span>
                                                    </a>
                                                </div>
                                                {{-- <div class="eye">
                                                    <img src="assets/images/project/eye.svg" alt="project">
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-case-studies-four">
                                                <a href="#" class="thumbnail">
                                                    <img src="assets/images/project/cryptoconnect.png" alt="project"
                                                        style="width: 350px; height: auto;">
                                                </a>
                                                <div class="inner">
                                                    <a href="#">
                                                        <h3 class="title">CryptoConnect</h3>
                                                        <span>Seamless bridge between digital assets and traditional flat
                                                            for your business operations</span>
                                                    </a>
                                                </div>
                                                {{-- <div class="eye">
                                                    <img src="assets/images/project/eye.svg" alt="project">
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-case-studies-four">
                                                <a href="#" class="thumbnail">
                                                    <img src="assets/images/project/yield-treasury.png" alt="project"
                                                        style="width: 350px; height: auto;">
                                                </a>
                                                <div class="inner">
                                                    <a href="#">
                                                        <h3 class="title">Yield Treasury</h3>
                                                        <span>Optmize corporate balances with yield-generating strategies
                                                            while respecting liquidity needs</span>
                                                    </a>
                                                </div>
                                                {{-- <div class="eye">
                                                    <img src="assets/images/project/eye.svg" alt="project">
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination-fraction"></div>
                                    <div class="swiper-button-next"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                                    <div class="swiper-button-prev"><i class="fa-sharp fa-regular fa-arrow-left"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img loading="lazy" src="assets/images/about/shape/01.svg" alt="shape" class="one">
            <img loading="lazy" src="assets/images/about/shape/02.svg" alt="shape" class="two">
        </div>
    </div>
    <!-- rts about area end -->

    <!-- rts service area start -->
    <div class="rts-service-area pt--40 pb--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-two center">
                        <span class="bg-content">Products</span>
                        <span class="pre">What We Offer</span>
                        <h2 class="title rts-text-anime-style-1">Built for Everyone, <br> Everywhere
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-2 mt--30">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-bg-style-one-wrapper">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="service-style-swiper-wrapper-two">
                                    <div class="swiper mySwiper-service-1">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="single-service-signle-wrapper">
                                                    <div class="icons">
                                                        <img loading="lazy" src="assets/images/service/icons/01.svg"
                                                            alt="service">
                                                    </div>
                                                    <div class="information">
                                                        <h5 class="title">Personal Wallet</h5>
                                                        <p class="disc">
                                                            Send and receive money globally, hold multiple currencies,
                                                            and spend anywhere with your MyEwallet virtual card.
                                                        </p>
                                                        <a href="{{ route('personal-accounts') }}" class="arrow-right">
                                                            <i class="fa-sharp fa-solid fa-arrow-right"></i>
                                                            <span>Learn More</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-service-signle-wrapper">
                                                    <div class="icons">
                                                        <img loading="lazy" src="assets/images/service/icons/02.svg"
                                                            alt="service">
                                                    </div>
                                                    <div class="information">
                                                        <h5 class="title">Business Accounts</h5>
                                                        <p class="disc">
                                                            Multi-currency business banking with batch payroll, team
                                                            spending
                                                            controls, and seamless international transfers.
                                                        </p>
                                                        <a href="{{ route('business-accounts') }}" class="arrow-right">
                                                            <i class="fa-sharp fa-solid fa-arrow-right"></i>
                                                            <span>Learn More</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-service-signle-wrapper">
                                                    <div class="icons">
                                                        <img loading="lazy" src="assets/images/service/icons/03.svg"
                                                            alt="service">
                                                    </div>
                                                    <div class="information">
                                                        <h5 class="title">International Transfers</h5>
                                                        <p class="disc">
                                                            Send money to 150+ countries at real exchange rates
                                                            with transparent fees and fast delivery.
                                                        </p>
                                                        <a href="{{ route('myewallet-crypto-card') }}" class="arrow-right">
                                                            <i class="fa-sharp fa-solid fa-arrow-right"></i>
                                                            <span>Learn More</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-service-signle-wrapper">
                                                    <div class="icons">
                                                        <img loading="lazy" src="assets/images/service/icons/01.svg"
                                                            alt="service">
                                                    </div>
                                                    <div class="information">
                                                        <h5 class="title">Regulatory Compliance</h5>
                                                        <p class="disc">
                                                            Fully licensed across UAE, Hong Kong, and USA with
                                                            built-in AML/KYC and transaction screening.
                                                        </p>
                                                        <a href="{{ route('complaince') }}" class="arrow-right">
                                                            <i class="fa-sharp fa-solid fa-arrow-right"></i>
                                                            <span>Learn More</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts service area end -->

    <!-- rts call to action area start -->
    <div class="rts-call-to-action-area-two bg_image">
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cta-style-two-area">
                                    <h3 class="title rts-text-anime-style-1">
                                        Join over 1 million users moving money <br>
                                        smarter with MyEwallet.
                                    </h3>
                                    <a href="{{ route('register') }}" class="rts-btn btn-primary btn-white">Open Your
                                        Account Today</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts call to action area end -->

    <!-- rts business goal area start -->
    <div class="business-goal-area-2 rts-section-gap">
        <div class="container pt--30">
            <div class="row">
                <div class="col-lg-6">
                    <div class="consultancy-style-one">
                        <div class="title-style-two mb--40 left">
                            <span class="bg-content">Why Us</span>
                            <span class="pre">TRUSTED GLOBALLY</span>
                            <h2 class="title rts-text-anime-style-1">We know how to move <br> money across borders</h2>
                        </div>
                        <div class="signle-consultancy mb--30">
                            <div class="icon">
                                <img loading="lazy" src="assets/images/about/icons/01.svg" alt="">
                            </div>
                            <div class="information">
                                <h4 class="title">Unified Platform</h4>
                                <p class="disc">
                                    Everything you need in one place — business accounts, card issuing, payments, crypto
                                    infrastructure, and treasury solutions.

                                </p>
                            </div>
                        </div>
                        <div class="signle-consultancy mb--30">
                            <div class="icon">
                                <img loading="lazy" src="assets/images/about/icons/02.svg" alt="">
                            </div>
                            <div class="information">
                                <h4 class="title">API-First Integration</h4>
                                <p class="disc">
                                    Built for developers who prefer APIs over paperwork. Integrate financial features
                                    seamlessly into your product.

                                </p>
                            </div>
                        </div>
                        <div class="signle-consultancy mb--30">
                            <div class="icon">
                                <img loading="lazy" src="assets/images/about/icons/03.svg" alt="">
                            </div>
                            <div class="information">
                                <h4 class="title">Global Operations</h4>
                                <p class="disc">
                                    Operate across borders with multi-currency accounts, international transfers, and global
                                    card acceptance — all in one platform.

                                </p>
                            </div>
                        </div>
                        <div class="signle-consultancy">
                            <div class="icon">
                                <img loading="lazy" src="assets/images/about/icons/04.svg" alt="">
                            </div>
                            <div class="information">
                                <h4 class="title">Enterprise Security</h4>
                                <p class="disc">
                                    Licensed in UAE, Hong Kong, and USA with enterprise-grade security, compliance, and
                                    operational controls built-in.

                                </p>
                            </div>
                        </div>
                        <div class="button-wrapper mt--40" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                            <a href="{{ route('contact') }}" class="rts-btn btn-primary">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumbnail-business-area-right-two">
                        <div class="large-thumbnail">
                            <img loading="lazy" src="assets/images/business-goal/02.webp" alt="">
                        </div>
                        <div class="small-thumbnail images-r">
                            <img loading="lazy" src="assets/images/business-goal/01.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts business goal area end -->
    </div>

    <!-- rts counter up area start -->
    <div class="rts-counter-up-area rts-section-gap counter-bg">
        <div class="container">
            <div class="row g-5">
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter">
                        <div class="icon">
                            <img loading="lazy" src="assets/images/counterup/icon/01.svg" alt="Business_counter">
                        </div>
                        <div class="counter-details">
                            <h2 class="counter title"><span class="odometer" data-count="150">00</span>+
                            </h2>
                            <p class="disc">Countries Supported</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 justify-content-center two pl--30">
                        <div class="icon">
                            <img loading="lazy" src="assets/images/counterup/icon/02.svg" alt="Business_counter">
                        </div>
                        <div class="counter-details">
                            <h2 class="counter title"><span class="odometer" data-count="1">00</span>M+
                            </h2>
                            <p class="disc">Active Users</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 justify-content-center three pl--50 pl_md--10 pl_sm--0">
                        <div class="icon">
                            <img loading="lazy" src="assets/images/counterup/icon/03.svg" alt="Business_counter">
                        </div>
                        <div class="counter-details">
                            <h2 class="counter title">24/7</h2>
                            <p class="disc">Customer Support</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 four">
                        <div class="icon">
                            <img loading="lazy" src="assets/images/counterup/icon/04.svg" alt="Business_counter">
                        </div>
                        <div class="counter-details">
                            <h2 class="counter title">4.8★</h2>
                            <p class="disc">App Rating</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
            </div>
        </div>
    </div>
    <!-- rts counter up area end -->

    <!-- start gallery section -->
    <div class="rts-gallery-area rts-section-gap gallery-bg bg_image">
        <div class="container pt--40">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-between-wrapper-gallery-project">
                        <div class="title-style-two mb--40 left">
                            <span class="bg-content">Use Cases</span>
                            <span class="pre">Who Uses MyEwallet</span>
                            <h2 class="title rts-text-anime-style-1">Built for Every <br> Financial Journey
                            </h2>
                        </div>

                        <div class="swiper-paginations"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-style-one-wrapper">

                        <div class="swiper mySwiper-project-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="project-style-one">
                                        <a href="#" class="thumbnail">
                                            <img loading="lazy" src="assets/images/project/01.webp" alt="Freelancers">
                                        </a>
                                        <div class="inner-content">
                                            <a href="#">
                                                <h5 class="title">Freelancers & Remote Workers</h5>
                                            </a>
                                            <span>Get paid from anywhere in the world</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-style-one">
                                        <a href="#" class="thumbnail">
                                            <img loading="lazy" src="assets/images/project/02.webp" alt="Small Business">
                                        </a>
                                        <div class="inner-content">
                                            <a href="#">
                                                <h5 class="title">Small & Medium Businesses</h5>
                                            </a>
                                            <span>Multi-currency payroll and expense management</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-style-one">
                                        <a href="#" class="thumbnail">
                                            <img loading="lazy" src="assets/images/project/01.webp" alt="E-commerce">
                                        </a>
                                        <div class="inner-content">
                                            <a href="#">
                                                <h5 class="title">E-commerce & Merchants</h5>
                                            </a>
                                            <span>Accept global payments, settle in your currency</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start gallery section -->

    <!-- rts trusted client area start -->

    <!-- rts trusted client area end -->

    <!-- rts team area start -->
    <div class="rts-team-area rts-section-gapBottom pt--40">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="title-style-two center">
                        <span class="bg-content">Company</span>
                        <span class="pre">Our Story</span>
                        <h2 class="title rts-text-anime-style-1">A Team Passionate About <br> Global Financial Access</h2>
                    </div>
                    <p class="disc mt--30">
                        MyEwallet International was founded to remove barriers for businesses and individuals
                        participating in the global economy. Headquartered across the UAE, Hong Kong, and USA,
                        our fintech experts, engineers, and compliance specialists build the most trusted borderless
                        payments platform.
                    </p>
                    <div class="d-flex justify-content-center mt--30">
                        <a href="{{ route('about') }}" class="rts-btn btn-primary">Meet Our Team</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts team area end -->

    <!-- rts clients review area start -->
    <div class="rts-client-review-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-between-wrapper" dir="ltr">
                        <div class="title-style-two mb--40 left">
                            <span class="bg-content">Review</span>
                            <span class="pre">Our Testimonial</span>
                            <h2 class="title ">Our Client Reviews
                            </h2>
                        </div>
                        <div class="pagination-wrapper">
                            <div class="swiper-pagination-fraction"></div>
                            <div class="swiper-button-next"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                            <div class="swiper-button-prev"><i class="fa-sharp fa-regular fa-arrow-left"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <div class="testimonials-wrapper-swiper-demo-2">
                        <div class="swiper mySwiper-testimonials-dmeo-2" dir="ltr">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonials-main-wrapper-two">
                                        <div class="left-thumbnail">
                                            <img loading="lazy" src="assets/images/testimonials/01.webp" alt="testimonials">
                                        </div>
                                        <div class="right-content-testimonials">
                                            <p class="disc">
                                                MyEwallet has transformed how we handle international payments for our
                                                e-commerce business. The multi-currency support and fast transfers have
                                                saved us thousands in fees.
                                            </p>
                                            <div class="name-desig">
                                                <h6 class="title">Sarah Chen</h6>
                                                <p>E-commerce Director at <b>GlobalShop Inc</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonials-main-wrapper-two">
                                        <div class="left-thumbnail">
                                            <img loading="lazy" src="assets/images/testimonials/02.webp" alt="testimonials">
                                        </div>
                                        <div class="right-content-testimonials">
                                            <p class="disc">
                                                As a freelancer, MyEwallet makes it incredibly easy to receive payments from
                                                clients worldwide. The instant currency conversion and low fees are
                                                game-changers.
                                            </p>
                                            <div class="name-desig">
                                                <h6 class="title">Marcus Rodriguez</h6>
                                                <p>Freelance Developer at <b>TechSolutions</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonials-main-wrapper-two">
                                        <div class="left-thumbnail">
                                            <img loading="lazy" src="assets/images/testimonials/03.webp" alt="testimonials">
                                        </div>
                                        <div class="right-content-testimonials">
                                            <p class="disc">
                                                MyEwallet's security features give us peace of mind when handling large
                                                international transactions. The platform is reliable and the customer
                                                support is excellent.
                                            </p>
                                            <div class="name-desig">
                                                <h6 class="title">Jennifer Park</h6>
                                                <p>Finance Manager at <b>ImportExport Co</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts clients review area end -->

    <!-- appoinment areas tart -->
    <div class="appoinment-area-start rts-section-gapBottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="appoinment-wrapper-one-start">
                        <div class="title-style-two mb--40 left">
                            <span class="bg-content">Contact</span>
                            <span class="pre">We'd Love to Hear from You</span>
                            <h2 class="title">Ask Your Questions or <br> Talk to Our Experts</h2>
                        </div>
                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="single-input-wrapper">
                                <div class="single-input">
                                    <input type="text" name="name" placeholder="Your Name" required>
                                </div>
                                <div class="single-input">
                                    <input type="number" name="phone" placeholder="Phone Number" required>
                                </div>
                            </div>
                            <div class="single-input">
                                <input type="email" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="single-input mb--30">
                                <textarea name="message" placeholder="How can we help?" required></textarea>
                            </div>
                            <button type="submit" class="rts-btn btn-primary">Submit Request</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="appoinment-thumbnail">
                        <img loading="lazy" src="assets/images/appoinment/01.webp" alt="appoinment">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- appoinment areas end -->

    <!-- rts blog area start -->
    <div class="rts-blog-area rts-section-gapBottom pt--40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-two center">
                        <span class="bg-content">Blog</span>
                        <span class="pre">Fintech Insights</span>
                        <h2 class="title">Latest from MyEwallet</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="col-lg-12">
                    <div class="blog-swiper-style-one">
                        <div class="swiper mySwiper-blog-one">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="single-blog-area-one d-flex flex-column h-100">
                                        <p>Payments / <span>by MyEwallet Team</span></p>
                                        <a href="#">
                                            <h4 class="title">Send Money Internationally Fee-Free</h4>
                                        </a>
                                        <div class="bottom-details mt-auto">
                                            <a href="#" class="thumbnail">
                                                <img loading="lazy" src="assets/images/blog/01.webp" alt="blog-area">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-blog-area-one d-flex flex-column h-100">
                                        <p>Security / <span>by MyEwallet Team</span></p>
                                        <a href="#">
                                            <h4 class="title">AI Revolutionizing Fraud Detection</h4>
                                        </a>
                                        <div class="bottom-details mt-auto">
                                            <a href="#" class="thumbnail">
                                                <img loading="lazy" src="assets/images/blog/02.webp" alt="blog-area">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-blog-area-one d-flex flex-column h-100">
                                        <p>Compliance / <span>by MyEwallet Team</span></p>
                                        <a href="#">
                                            <h4 class="title">Navigating Global Financial Regulations</h4>
                                        </a>
                                        <div class="bottom-details mt-auto">
                                            <a href="#" class="thumbnail">
                                                <img loading="lazy" src="assets/images/blog/03.webp" alt="blog-area">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="swiper-pagination"></div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts blog area end -->
@endsection