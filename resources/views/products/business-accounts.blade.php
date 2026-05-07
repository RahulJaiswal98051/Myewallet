@extends('layouts.app')
@section('title', 'Banking & Business Accounts')

@section('content')

     <!-- rts banner area start -->
    <div class="rts-banner-area banner-style-one bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-one-inner text-start">
                        <p class="pre-title">
                            <span>For Business</span> Borderless Banking
                        </p>
                        <h1 class="title rts-text-anime-style-1">
                            Banking & Business Accounts
                        </h1>
                        <p class="disc banner-para">
                            >Multi-currency accounts and banking tools for companies that work beyond borders.<br>
                            <br>
                            >Open and manage business accounts in multiple supported currencies for seamless global operations.
                        </p>
                        
                        <a href="{{ route('register') }}" class="rts-btn btn-primary color-h-black">Open a Business Account</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-iamge-area">
            <img src="assets/images/banner/shape/04.png" alt="" class="one">
            <img src="assets/images/banner/shape/circle.svg" alt="" class="two">
        </div>
    </div>
    <!-- rts banner area end -->

    <!-- rts-about area start -->
    <div class="rts-about-area rts-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-content-left-one">
                        <div class="title-style-one left">
                            <span class="pre">About Business Accounts</span>
                            <h2 class="title rts-text-anime-style-1">Multi-currency accounts and banking tools
                                for companies that work beyond borders business agency.
                            </h2>
                        </div>
                        <p class="disc">
                            MyEwallet delivers business accounts engineered for modern digital operations: multi-currency balances, worldwide payment capabilities, and seamless integration with your card and cryptocurrency workflows.
                        </p>
                        <a href="{{ route('contact') }}" class="rts-btn btn-primary">Schedule a Demo</a>
                    </div>
                </div>
                <div class="col-lg-7 pl--70">
                    <div class="thumbnail-about-and-progress-1">

                        <div class="thumbnail-about-1">
                            <img src="assets/images/about/global-banking.png" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts-about area end -->
     <!-- rts Account features area start -->
      <div class="working-process-area-three rts-section-gap working-process-bg">
        <div class="container">
            <div class="row mt--40">
                <div class="title-style-three center">
                    <span class="pre">Account Features</span>
                    <div class="bg-title">06</div>
                    <h2 class="title rts-text-anime-style-1">Business Accounts</h2>
                </div>
            </div>
            <div class="row g-5 mt--20 align-items-center rts_jump_animation-wrapper">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 rts-jump__item">
                    <!-- single wirking process -->
                    <div class="rts-working-process-1 text-center">
                        <div class="inner">
                            <div class="icon">
                                <img src="assets/images/wokring-process/icon/services-icon-3.1.svg" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">Multi-Currency Accounts</h6>
                            <p class="disc">
                                Open and manage accounts in multiple supported currencies, enabling seamless global operations
                            </p>
                        </div>
                    </div>
                    <!-- single wirking process End -->
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 rts-jump__item">
                    <!-- single wirking process -->
                    <div class="rts-working-process-1 text-center">
                        <div class="inner two">
                            <div class="icon">
                                <img src="assets/images/wokring-process/icon/services-icon-3.2.svg" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">International Transfers</h6>
                            <p class="disc">
                                Send and receive transfers across borders with competitive rates and transparent fees
                            </p>
                        </div>
                    </div>
                    <!-- single wirking process End -->
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 rts-jump__item">
                    <!-- single wirking process -->
                    <div class="rts-working-process-1 text-center">
                        <div class="inner three">
                            <div class="icon">
                                <img src="assets/images/wokring-process/icon/services-icon-3.3.svg" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">Internal Account Transfers</h6>
                            <p class="disc">
                               Easily move funds between your own sub-accounts and connect with card programs
                            </p>
                        </div>
                    </div>
                    <!-- single wirking process End -->
                </div>
            </div>
            <div class="row g-5 mt--20 align-items-center rts_jump_animation-wrapper">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 rts-jump__item">
                    <!-- single wirking process -->
                    <div class="rts-working-process-1 text-center">
                        <div class="inner four">
                            <div class="icon">
                                <img src="assets/images/wokring-process/icon/services-icon-4.1.svg" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">Unified Dashboard</h6>
                            <p class="disc">
                                Monitor all balances, incoming funds, and outgoing transactions from a single centralized view
                            </p>
                        </div>
                    </div>
                    <!-- single wirking process End -->
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 rts-jump__item">
                    <!-- single wirking process -->
                    <div class="rts-working-process-1 text-center">
                        <div class="inner five">
                            <div class="icon">
                                <img src="assets/images/wokring-process/icon/services-icon-4.2.svg" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">Financial Statements</h6>
                            <p class="disc">
                                Generate statements and export data for bookkeeping, reporting, and compliance requirements
                            </p>
                        </div>
                    </div>
                    <!-- single wirking process End -->
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 rts-jump__item">
                    <!-- single wirking process -->
                    <div class="rts-working-process-1 text-center">
                        <div class="inner six">
                            <div class="icon">
                                <img src="assets/images/wokring-process/icon/services-icon-4.3.svg" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">Real-Time Reporting</h6>
                            <p class="disc">
                                Access comprehensive financial insights and transaction history at any time
                            </p>
                        </div>
                    </div>
                    <!-- single wirking process End -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts Account features area end -->
   <!-- rts just a Banking Tool area  -->
    <div class="just-a-consultancy-area rts-section-gapBottom mt--40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="consultancy-thumbnail-area">
                        <div class="large-image">
                            <img src="assets/images/about/02.webp" alt="thumbnail">
                        </div>
                        <div class="small-iamge images-r">
                            <img src="assets/images/about/03.webp" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl--50 pl_sm--15 mt_md--100 mt_sm--100">
                    <div class="consultancy-style-one">
                        <div class="title-style-one left mb--30">
                            <span class="pre">Embedded Banking</span>
                            <h2 class="title rts-text-anime-style-1">Banking Tools <br>(as a Service)</h2>
                        </div>
                        <div class="signle-consultancy mb--30" data-animation="fadeInUp" data-delay="0.2"
                            data-duration="1.2">
                            <h7 class="disc mb--20">
                                Leverage our banking infrastructure to embed financial capabilities directly into your platform.
                                Focus on delivering exceptional user experiences while we handle the underlying banking complexity.
                                <div class="disc" style="margin-top: 12px;">
                                <div style="display: flex; flex-direction: column; gap: 10px;">
                                    <ul style="margin: 0; padding-left: 18px;">
                                        <li>Onboard businesses and provide dedicated account access.</li>
                                        <li>Enable customers to maintain balances, process payouts, and accept incoming funds.</li>
                                        <li>Connect accounts to card programs and automated payout systems.</li>
                                        <li>Control all operations programmatically via API with real-time webhook notifications.</li>
                                        <li> Build your product experience while we manage regulatory compliance and banking infrastructure.</li>
                                    </ul>
                                </div>
                                </div>
                            </h7>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts just a Banking Tool area  end -->

    {{-- How it works --}}
    <div class="rts-about-area-two rts-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="title-style-two left">
                        <span class="bg-content">How it works</span>
                        <span class="pre">Fast onboarding</span>
                        <h2 class="title rts-text-anime-style-1">From signup to global operations <br>in minutes</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="check-wrapper-area" style="gap: 16px;">
                        <div class="single-check">
                            <i class="fa-solid fa-circle-check"></i>
                            <p>Sign up and complete business onboarding</p>
                        </div>
                        <div class="single-check">
                            <i class="fa-solid fa-circle-check"></i>
                            <p>Choose currencies and account needs</p>
                        </div>
                        <div class="single-check">
                            <i class="fa-solid fa-circle-check"></i>
                            <p>Access the dashboard, issue cards, and start global payouts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Use cases --}}
    <div class="rts-gallery-area rts-section-gap gallery-bg bg_image">
        <div class="container pt--40">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-between-wrapper-gallery-project">
                        <div class="title-style-two mb--40 left">
                            <span class="bg-content">Use cases</span>
                            <span class="pre">Who it’s for</span>
                            <h2 class="title rts-text-anime-style-1">Built for teams that <br>operate beyond borders</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="project-style-one">
                        <a href="#" class="thumbnail">
                            <img loading="lazy" src="assets/images/project/01.webp" alt="Tech startups">
                        </a>
                        <div class="inner-content">
                            <a href="#">
                                <h5 class="title">Tech startups</h5>
                            </a>
                            <span>Get paid globally and manage multi-currency revenues.</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="project-style-one">
                        <a href="#" class="thumbnail">
                            <img loading="lazy" src="assets/images/project/02.webp" alt="eCommerce businesses">
                        </a>
                        <div class="inner-content">
                            <a href="#">
                                <h5 class="title">eCommerce businesses</h5>
                            </a>
                            <span>Receive payments in multiple currencies and settle your costs.</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="project-style-one">
                        <a href="#" class="thumbnail">
                            <img loading="lazy" src="assets/images/project/01.webp" alt="Agencies & billing teams">
                        </a>
                        <div class="inner-content">
                            <a href="#">
                                <h5 class="title">Agencies &amp; billing teams</h5>
                            </a>
                            <span>Bill in USD/EUR/GBP while operating across regions.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <!-- rts Use cases area start -->
    <div class="rts-latest-service-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-one center">
                        <span class="pre">Applications</span>
                        <h2 class="title rts-text-anime-style-1">Use Cases</h2>
                    </div>
                </div>
                <div class="col-lg-12 mt--50">
                    <section class="main-wrapper-sticky">
                        <div class="sticky-statement">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="assets/images/service/01.svg" alt="service">
                                </div>
                                <h5 class="title">Payment Platforms</h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    Manage multi-currency balances and accounts for your client base, enabling seamless financial operations
                                </p>
                                {{-- <a href="#" class="arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a> --}}
                            </div>
                        </div>
                        <div class="sticky-statement">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="assets/images/service/services-icon-3.3.svg" alt="service">
                                </div>
                                <h5 class="title">International Traders</h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    Receive payments in multiple currencies and manage cross-border transactions efficiently
                                </p>
                                {{-- <a href="#" class="arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a> --}}
                            </div>
                        </div>
                        <div class="sticky-statement">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="assets/images/service/03.svg" alt="service">
                                </div>
                                <h5 class="title">Marketplaces</h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    Hold funds in escrow for sellers and automate payout releases based on transaction milestones
                                </p>
                                {{-- <a href="#" class="arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a> --}}
                            </div>
                        </div>
                        <div class="sticky-statement">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="assets/images/service/01.svg" alt="service">
                                </div>
                                <h5 class="title">Payment Platforms</h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    Send payments worldwide to employees and contractors with streamlined payout workflows
                                </p>
                                {{-- <a href="#" class="arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a> --}}
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- rts Use cases area end -->
@endsection

