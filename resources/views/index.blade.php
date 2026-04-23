<!DOCTYPE html>
<html lang="en">

<head>
    @if(web()?->title)
    <title>{{web()->title}}</title>
    @else
    <title>{{env('APP_NAME')}}</title>
    @endif
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="{{web()->meta_author}}">
    <meta name="description" content="{{web()->meta_description}}">
    <meta name="keywords" content="{{web()->meta_keywords}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- costum css -->
    <link rel="stylesheet" href="{{asset('assets/css/css/custom.css')}}">
    <style>
        /* ===== DARK GOLD THEME OVERRIDE ===== */
        :root {
            --gold: #C9A84C;
            --gold-light: #e8c96a;
            --gold-dark: #a07c30;
            --dark-bg: #0f0f0f;
            --dark-card: #1a1a1a;
            --dark-section: #141414;
            --dark-border: #2a2a2a;
            --text-primary: #f0f0f0;
            --text-muted: #9a9a9a;
        }
        body {
            background-color: var(--dark-bg) !important;
            color: var(--text-primary) !important;
        }
        /* NAVBAR */
        #ftco-navbar.ftco_navbar {
            background: rgba(10,10,10,0.97) !important;
            border-bottom: 1px solid var(--dark-border);
            backdrop-filter: blur(10px);
        }
        #ftco-navbar .navbar-brand, #ftco-navbar .navbar-brand * {
            color: var(--gold) !important;
            font-weight: 700;
            letter-spacing: 1px;
        }
        #ftco-navbar .nav-link {
            color: var(--text-primary) !important;
            font-weight: 500;
            transition: color 0.2s;
        }
        #ftco-navbar .nav-link:hover,
        #ftco-navbar .nav-item.active .nav-link {
            color: var(--gold) !important;
        }
        #ftco-navbar .navbar-toggler {
            color: var(--text-primary) !important;
            border-color: var(--dark-border);
        }
        /* HERO */
        .hero-wrap .overlay {
            background: rgba(0,0,0,0.65) !important;
        }
        .hero-wrap h1 {
            color: #ffffff !important;
            text-shadow: 0 2px 20px rgba(0,0,0,0.8);
        }
        .hero-wrap h1 span {
            color: var(--gold) !important;
        }
        /* BOOKING FORM SECTION */
        .ftco-section.ftco-no-pt.bg-light,
        section.ftco-section.bg-light {
            background-color: var(--dark-section) !important;
        }
        .request-form {
            background: linear-gradient(135deg, #1c1400 0%, #2a1f00 50%, #1a1400 100%) !important;
            border: 1px solid var(--gold-dark);
            border-radius: 10px;
            box-shadow: 0 8px 32px rgba(201,168,76,0.15);
        }
        .request-form h2 {
            color: var(--gold) !important;
        }
        .request-form .label {
            color: #e0e0e0 !important;
        }
        .request-form .form-control {
            background-color: rgba(255,255,255,0.07) !important;
            border-color: rgba(201,168,76,0.4) !important;
            color: #ffffff !important;
        }
        .request-form .form-control::placeholder {
            color: rgba(255,255,255,0.4) !important;
        }
        /* FIX: custom-control-input dengan z-index:-1 jadi tertutup background form
           karena box-shadow membuat stacking context baru. Override ke z-index positif. */
        .request-form .custom-control {
            position: relative !important;
            z-index: auto;
        }
        .request-form .custom-control-input {
            position: absolute !important;
            z-index: 1 !important;
            opacity: 0 !important;
            width: 1rem !important;
            height: 1.25rem !important;
            margin: 0 !important;
            cursor: pointer !important;
        }
        /* Styling visual radio circle */
        .request-form .custom-control-label::before {
            background-color: rgba(255,255,255,0.08) !important;
            border: 2px solid rgba(201,168,76,0.5) !important;
        }
        .request-form .custom-control-input:checked ~ .custom-control-label::before {
            background-color: var(--gold) !important;
            border-color: var(--gold) !important;
        }
        .request-form .custom-control-input:checked ~ .custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%230f0f0f'/%3e%3c/svg%3e") !important;
        }
        .request-form .custom-control-input:focus ~ .custom-control-label::before {
            box-shadow: 0 0 0 3px rgba(201,168,76,0.25) !important;
        }
        /* RADIO PILL — native radio, no z-index tricks needed */
        .radio-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            cursor: pointer;
            padding: 5px 12px;
            border: 1px solid rgba(201,168,76,0.35);
            border-radius: 20px;
            background: rgba(255,255,255,0.04);
            color: #e0e0e0 !important;
            font-size: 0.85rem;
            font-weight: 500;
            transition: all 0.18s;
            user-select: none;
        }
        .radio-pill:hover {
            border-color: var(--gold);
            background: rgba(201,168,76,0.08);
            color: #fff !important;
        }
        .radio-pill input[type="radio"] {
            appearance: none;
            -webkit-appearance: none;
            width: 14px;
            height: 14px;
            border: 2px solid rgba(201,168,76,0.5);
            border-radius: 50%;
            background: transparent;
            cursor: pointer;
            position: relative;
            flex-shrink: 0;
            transition: all 0.18s;
        }
        .radio-pill input[type="radio"]:checked {
            background: var(--gold);
            border-color: var(--gold);
            box-shadow: inset 0 0 0 3px #1c1400;
        }
        .radio-pill:has(input:checked) {
            border-color: var(--gold);
            background: rgba(201,168,76,0.15);
            color: var(--gold) !important;
        }
        /* FIX: custom-control-input dengan z-index:-1 jadi tertutup background form
           karena box-shadow membuat stacking context baru. Override ke z-index positif. */
        .request-form .custom-control {
            position: relative !important;
            z-index: auto;
        }
        .request-form .custom-control-input {
            position: absolute !important;
            z-index: 1 !important;
            opacity: 0 !important;
            width: 1rem !important;
            height: 1.25rem !important;
            margin: 0 !important;
            cursor: pointer !important;
        }
        /* Styling visual radio circle */
        .request-form .custom-control-label::before {
            background-color: rgba(255,255,255,0.08) !important;
            border: 2px solid rgba(201,168,76,0.5) !important;
        }
        .request-form .custom-control-input:checked ~ .custom-control-label::before {
            background-color: var(--gold) !important;
            border-color: var(--gold) !important;
        }
        .request-form .custom-control-input:checked ~ .custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%230f0f0f'/%3e%3c/svg%3e") !important;
        }
        .request-form .custom-control-input:focus ~ .custom-control-label::before {
            box-shadow: 0 0 0 3px rgba(201,168,76,0.25) !important;
        }
        /* SERVICES / FEATURES BOX */
        .services-wrap {
            background-color: var(--dark-card) !important;
            border: 1px solid var(--dark-border);
        }
        .services-wrap .heading-section {
            color: var(--text-primary) !important;
        }
        .services {
            background-color: #222 !important;
            border: 1px solid var(--dark-border);
            border-radius: 8px;
            padding: 15px;
        }
        .services .heading {
            color: var(--text-primary) !important;
        }
        .services .icon span,
        .flaticon-route,
        .flaticon-handshake,
        .flaticon-rent {
            color: var(--gold) !important;
        }
        /* CAR LISTING SECTION */
        section.ftco-section.bg-light.pt-5 {
            background-color: var(--dark-bg) !important;
        }
        .car-wrap {
            background-color: var(--dark-card) !important;
            border: 1px solid var(--dark-border);
            box-shadow: 0 4px 20px rgba(0,0,0,0.4);
            transition: transform 0.25s, box-shadow 0.25s;
        }
        .car-wrap:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 32px rgba(201,168,76,0.18);
            border-color: var(--gold-dark);
        }
        .car-wrap .text {
            background-color: var(--dark-card) !important;
        }
        .car-wrap .text h2 a {
            color: var(--text-primary) !important;
        }
        .car-wrap .text h2 a:hover {
            color: var(--gold) !important;
        }
        .car-wrap .cat {
            color: var(--text-muted) !important;
        }
        .car-wrap .badge-light {
            background-color: #242424 !important;
            border-radius: 6px;
        }
        .car-wrap .badge-light p, .car-wrap .badge-light p i {
            color: var(--text-primary) !important;
        }
        /* GOLD ACCENT — replace text-danger */
        .text-danger,
        .flaticon-car-seat.text-danger,
        .flaticon-backpack.text-danger,
        .flaticon-pistons.text-danger,
        .flaticon-diesel.text-danger,
        .flaticon-car.text-danger {
            color: var(--gold) !important;
        }
        /* BUTTONS */
        .btn-danger {
            background-color: var(--gold) !important;
            border-color: var(--gold) !important;
            color: #0f0f0f !important;
            font-weight: 600;
            transition: background 0.2s, transform 0.15s;
        }
        .btn-danger:hover {
            background-color: var(--gold-light) !important;
            border-color: var(--gold-light) !important;
            transform: translateY(-1px);
        }
        .btn-outline-danger {
            color: var(--gold) !important;
            border-color: var(--gold) !important;
            font-weight: 600;
            transition: all 0.2s;
        }
        .btn-outline-danger:hover {
            background-color: var(--gold) !important;
            color: #0f0f0f !important;
        }
        .btn-secondary {
            background-color: #2a2a2a !important;
            border-color: #3a3a3a !important;
            color: var(--text-primary) !important;
        }
        .btn-secondary:hover {
            background-color: #333 !important;
        }
        /* heading above car list */
        .font-weight-bold {
            color: var(--text-primary) !important;
        }
        a.text-danger {
            color: var(--gold) !important;
        }
        /* FOOTER */
        .ftco-footer.ftco-bg-dark {
            background-color: #0a0a0a !important;
            border-top: 1px solid var(--dark-border);
        }
        .ftco-footer .ftco-heading-2 a,
        .ftco-footer .ftco-heading-2 {
            color: var(--gold) !important;
        }
        .ftco-footer p,
        .ftco-footer .text,
        .ftco-footer ul li a {
            color: var(--text-muted) !important;
        }
        .ftco-footer ul li a:hover {
            color: var(--gold) !important;
        }
        .ftco-footer .ftco-footer-social li a {
            background-color: var(--dark-card);
            color: var(--gold) !important;
            border: 1px solid var(--gold-dark);
        }
        .ftco-footer .ftco-footer-social li a:hover {
            background-color: var(--gold);
            color: #0f0f0f !important;
        }
        .ftco-footer .icon {
            color: var(--gold) !important;
        }
        .ftco-footer p a {
            color: var(--gold) !important;
        }
        /* DROPDOWN LANGUAGE */
        .dropdown-menu {
            background-color: #1a1a1a !important;
            border: 1px solid var(--dark-border) !important;
        }
        .dropdown-item {
            color: var(--text-primary) !important;
        }
        .dropdown-item:hover {
            background-color: #2a2a2a !important;
            color: var(--gold) !important;
        }
        /* PAGINATION */
        .page-item .page-link {
            background-color: var(--dark-card) !important;
            border-color: var(--dark-border) !important;
            color: var(--text-primary) !important;
        }
        .page-item.active .page-link {
            background-color: var(--gold) !important;
            border-color: var(--gold) !important;
            color: #0f0f0f !important;
        }
        /* BOOKING SUBMIT BUTTON */
        .request-form .btn-outline-light {
            background: var(--gold) !important;
            border-color: var(--gold) !important;
            color: #0f0f0f !important;
            font-weight: 700;
        }
        .request-form .btn-outline-light:hover {
            background: var(--gold-light) !important;
        }
        /* scrollbar */
        ::-webkit-scrollbar { width: 7px; }
        ::-webkit-scrollbar-track { background: #111; }
        ::-webkit-scrollbar-thumb { background: var(--gold-dark); border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: var(--gold); }
        /* DATEPICKER — pastikan calendar popup selalu di atas semua elemen */
        .datepicker,
        .datepicker-dropdown,
        .bootstrap-datetimepicker-widget,
        .ui-datepicker,
        .xdsoft_datetimepicker {
            z-index: 9999 !important;
        }
        /* Juga fix timepicker */
        .ui-timepicker-wrapper,
        .timepicker-container {
            z-index: 9999 !important;
        }
    </style>
</head>

<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" id="ftco-navbar" style="background:#0a0a0a !important; position:sticky; top:0; z-index:1050;">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">{!!web_name()!!}</a>
            <button class="navbar-toggler float-end" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{url('/')}}" class="nav-link">{{__('home')}}</a></li>
    
                    <li class="nav-item"><a href="{{url('/booking-check')}}" class="nav-link">{{__('Booking Check')}}</a></li>
                    <li class="nav-item"><a href="{{url('/vehicles')}}" class="nav-link">{{__('vehicles')}}</a></li>
                    <li class="nav-item"><a href="{{url('/contact')}}" class="nav-link">{{__('contact')}}</a></li>
                </ul>
            </div>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{App::getLocale()}}
                </button>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="btnGroupDrop1">
                  <li>
                    <a class="dropdown-item" href="/lang/id">
                    <img src="{{asset('assets/flag/id.png')}}" class="img-fluid" style="max-width: 25px; max-height: 25px;" alt="">&NonBreakingSpace; id_ID
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="/lang/en">
                    <img src="{{asset('assets/flag/us.png')}}" class="img-fluid" style="max-width: 25px; max-height: 25px;" alt="">&NonBreakingSpace; en_US
                    </a>
                  </li>
                </div>
            </div>
        </div>

    </nav>
    <!-- END nav -->
    <!-- banner -->
    <div class="hero-wrap hero-animated" id="hero-banner">
        <!-- Rotating text ring -->
        <div class="hero-ring-wrapper">
            <svg class="hero-ring-svg" viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <path id="circlePath" d="M 200,200 m -155,0 a 155,155 0 1,1 310,0 a 155,155 0 1,1 -310,0"/>
                </defs>
                <text class="ring-text" fill="#C9A84C" font-size="15" font-family="Poppins,sans-serif" letter-spacing="6" font-weight="600">
                    <textPath href="#circlePath">
                        ✦ RENTAL CIREBON ✦ PREMIUM SERVICE ✦ BEST PRICE ✦ FAST &amp; EASY ✦ RENTAL CIREBON ✦ PREMIUM SERVICE ✦
                    </textPath>
                </text>
            </svg>
        </div>

        <!-- Gold particles -->
        <div class="hero-particles">
            <span class="particle" style="--x:10%;--y:20%;--d:2.1s;--s:0.5"></span>
            <span class="particle" style="--x:25%;--y:60%;--d:3.3s;--s:0.7"></span>
            <span class="particle" style="--x:45%;--y:15%;--d:1.8s;--s:0.4"></span>
            <span class="particle" style="--x:60%;--y:75%;--d:2.7s;--s:0.6"></span>
            <span class="particle" style="--x:75%;--y:30%;--d:3.9s;--s:0.5"></span>
            <span class="particle" style="--x:85%;--y:55%;--d:2.4s;--s:0.8"></span>
            <span class="particle" style="--x:15%;--y:80%;--d:1.5s;--s:0.6"></span>
            <span class="particle" style="--x:90%;--y:10%;--d:4.1s;--s:0.4"></span>
            <span class="particle" style="--x:55%;--y:45%;--d:3.0s;--s:0.7"></span>
            <span class="particle" style="--x:35%;--y:88%;--d:2.2s;--s:0.5"></span>
        </div>


        <!-- Main content -->
        <div class="container hero-content">
            <div class="row no-gutters slider-text justify-content-center align-items-center">
                <div class="col-lg-9 text-center">
                    <div class="hero-badge mb-3">
                        <span>✦ DNA RENTAL CIREBON ✦</span>
                    </div>
                    <h1 class="hero-title mb-3">
                        Sewa Rental Mobil <br>
                        <span class="hero-title-gold">Berkualitas</span>
                    </h1>
                    <p class="hero-subtitle mb-4">{{__('Premium vehicles, professional service, unbeatable price')}}</p>
                    <div class="hero-cta-group">
                        <a href="/vehicles" class="btn btn-hero-primary">
                            <i class="fa fa-car mr-2"></i> {{__('Browse Vehicles')}}
                        </a>
                        <a href="#book-section" class="btn btn-hero-outline">
                            <i class="fa fa-calendar mr-2"></i> {{__('Book Now')}}
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <style>
            /* ===== HERO ANIMATED ===== */
            .hero-animated {
                position: relative;
                min-height: 600px;
                background: linear-gradient(135deg, #0a0a0a 0%, #0f0d00 40%, #100c00 60%, #0a0a0a 100%) !important;
                overflow: hidden;
                display: flex;
                align-items: center;
                margin-bottom: 0;
                padding-bottom: 0;
            }
            /* ROTATING RING */
            .hero-ring-wrapper {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 420px;
                height: 420px;
                z-index: 1;
                opacity: 0.35;
                pointer-events: none;
                animation: ringRotate 28s linear infinite;
            }
            .hero-ring-svg {
                width: 100%;
                height: 100%;
            }
            @keyframes ringRotate {
                from { transform: translate(-50%, -50%) rotate(0deg); }
                to   { transform: translate(-50%, -50%) rotate(360deg); }
            }
            /* PARTICLES */
            .hero-particles { position: absolute; inset: 0; z-index: 1; pointer-events: none; }
            .particle {
                position: absolute;
                left: var(--x);
                top: var(--y);
                width: calc(4px * var(--s));
                height: calc(4px * var(--s));
                background: #C9A84C;
                border-radius: 50%;
                animation: particleFloat var(--d) ease-in-out infinite alternate;
                box-shadow: 0 0 6px #C9A84C;
            }
            @keyframes particleFloat {
                0%   { transform: translateY(0) scale(1); opacity: 0.6; }
                100% { transform: translateY(-22px) scale(1.4); opacity: 0.15; }
            }
            /* ROAD - removed from hero, see road-section below */
            .hero-road { display: none; }
            /* CONTENT */
            .hero-content {
                position: relative;
                z-index: 5;
                padding-top: 60px;
                padding-bottom: 60px;
            }
            .hero-badge {
                display: inline-block;
                background: rgba(201,168,76,0.12);
                border: 1px solid rgba(201,168,76,0.4);
                border-radius: 50px;
                padding: 6px 20px;
                color: #C9A84C !important;
                font-size: 12px;
                font-weight: 700;
                letter-spacing: 3px;
                animation: badgePulse 2.5s ease-in-out infinite;
            }
            @keyframes badgePulse {
                0%, 100% { box-shadow: 0 0 0 0 rgba(201,168,76,0.3); }
                50%       { box-shadow: 0 0 0 8px rgba(201,168,76,0); }
            }
            .hero-title {
                font-size: clamp(2rem, 5vw, 3.5rem) !important;
                font-weight: 800 !important;
                color: #ffffff !important;
                line-height: 1.2;
                text-shadow: 0 4px 30px rgba(0,0,0,0.6);
            }
            .hero-title-gold {
                color: #C9A84C !important;
                display: inline-block;
                animation: goldShimmer 3s ease-in-out infinite;
                background: linear-gradient(90deg, #C9A84C, #ffe082, #C9A84C);
                background-size: 200%;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }
            @keyframes goldShimmer {
                0%   { background-position: 0% 50%; }
                50%  { background-position: 100% 50%; }
                100% { background-position: 0% 50%; }
            }
            .hero-subtitle {
                color: rgba(255,255,255,0.6) !important;
                font-size: 1.05rem;
                letter-spacing: 0.5px;
            }
            .hero-cta-group {
                display: flex;
                gap: 14px;
                justify-content: center;
                flex-wrap: wrap;
            }
            .btn-hero-primary {
                background: linear-gradient(135deg, #C9A84C, #e8c96a);
                color: #0a0a0a !important;
                font-weight: 700;
                border: none;
                padding: 12px 30px;
                border-radius: 50px;
                font-size: 0.95rem;
                transition: transform 0.2s, box-shadow 0.2s;
                box-shadow: 0 4px 20px rgba(201,168,76,0.35);
                text-decoration: none;
            }
            .btn-hero-primary:hover {
                transform: translateY(-3px);
                box-shadow: 0 8px 28px rgba(201,168,76,0.5);
                color: #0a0a0a !important;
            }
            .btn-hero-outline {
                background: transparent;
                color: #ffffff !important;
                font-weight: 600;
                border: 2px solid rgba(255,255,255,0.35);
                padding: 12px 30px;
                border-radius: 50px;
                font-size: 0.95rem;
                transition: all 0.2s;
                text-decoration: none;
            }
            .btn-hero-outline:hover {
                border-color: #C9A84C;
                color: #C9A84C !important;
                background: rgba(201,168,76,0.08);
            }
            @media (max-width: 576px) {
                .hero-ring-wrapper { width: 280px; height: 280px; }
                .hero-animated { min-height: 500px; }
                .hero-content { padding-bottom: 110px; }
            }
        </style>
    </div>
    <!-- end banner -->
    <!-- pemesanan -->
    <section id="book-section" class="ftco-section ftco-no-pt pb-0" style="background-color:#141414 !important; position:relative; z-index:20; overflow:visible !important;">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12	featured-top">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex align-items-center">
                                <form action="/direct-booking"  method="POST" class="request-form ftco-animate" style="background-color: #242424; color: #fff;">
                                @csrf
                                <h2>{{__('Make your trip')}}</h2>
                                <div class="form-group">
                                    <label class="label">{{__('pickup_location')}}</label>
                                    <div class="d-flex gap-3 mt-1">
                                        <label class="radio-pill">
                                            <input type="radio" name="pickup_type" value="office" id="office" onchange="showDropOff('pickup_address','hide')">
                                            <span>{{__('office')}}</span>
                                        </label>
                                        <label class="radio-pill ml-2">
                                            <input type="radio" id="other" name="pickup_type" value="other_location" onchange="showDropOff('pickup_address','show')">
                                            <span>{{__('other location')}}</span>
                                        </label>
                                    </div>
                                    <input type="text" class="form-control mt-2" style="display:none" id="pickup_address" name="pickup_address" placeholder="{{__('pickup_location')}} {{__('other location')}}">
                                </div>
                                <div class="form-group">
                                    <label class="label">{{__('drop_off location')}}</label>
                                    <div class="d-flex gap-3 mt-1">
                                        <label class="radio-pill">
                                            <input type="radio" name="dropoff_type" value="office" id="officeDropoff" onchange="showDropOff('dropoff_address','hide')">
                                            <span>{{__('office')}}</span>
                                        </label>
                                        <label class="radio-pill ml-2">
                                            <input type="radio" id="otherDropoff" name="dropoff_type" value="other_location" onchange="showDropOff('dropoff_address','show')">
                                            <span>{{__('other location')}}</span>
                                        </label>
                                    </div>
                                    <input type="text" class="form-control mt-2" id="dropoff_address" style="display:none" name="dropoff_address" placeholder="{{__('drop_off location')}} {{__('other location')}}">
                                </div>
                                <div class="form-group">
                                    <label for="book_pick_date" class="label">{{__('pick-up date')}}</label>
                                    <input type="text" name="pickup_date" class="form-control" id="book_pick_date" placeholder="Tanggal Penjemputan" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="book_off_date" class="label">{{__('drop-off date')}}</label>
                                    <input type="text" name="dropoff_date" class="form-control" id="book_off_date" placeholder="Tanggal Pengantaran" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">{{__('pick-up time')}}</label>
                                    <input type="text" name="pickup_time" class="form-control" id="time_pick" placeholder="Time">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-light bg-light text-dark py-3 px-4">{{__('Rent A Car Now')}}</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="services-wrap rounded-right w-100">
                                <h3 class="heading-section mb-4">{{__('Better Way to Rent Your Perfect Cars')}}</h3>
                                <div class="row d-flex mb-4">
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-route text-danger"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">{{__('Choose Your Pickup Location')}}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-handshake text-danger"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">{{__('Select the Best Deal')}}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-rent text-danger"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">{{__('Reserve Your Rental Car')}}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="/vehicles" class="btn btn-danger py-3 px-4">{{__('Reserve your perfect car')}}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- end pemesanan -->

    <!-- ===== ROAD ANIMATION SECTION ===== -->
    <div class="road-section" style="background:#111; overflow:hidden; position:relative; height:110px; border-top:2px solid #2a2a2a; border-bottom:2px solid #2a2a2a;">
        <!-- lane marks top -->
        <div style="position:absolute; top:22px; left:0; right:0; height:3px; display:flex; animation:roadScroll 1.1s linear infinite;">
            <div style="width:80px;height:3px;background:#C9A84C;opacity:0.4;margin-right:60px;flex-shrink:0;border-radius:2px;"></div>
            <div style="width:80px;height:3px;background:#C9A84C;opacity:0.4;margin-right:60px;flex-shrink:0;border-radius:2px;"></div>
            <div style="width:80px;height:3px;background:#C9A84C;opacity:0.4;margin-right:60px;flex-shrink:0;border-radius:2px;"></div>
            <div style="width:80px;height:3px;background:#C9A84C;opacity:0.4;margin-right:60px;flex-shrink:0;border-radius:2px;"></div>
            <div style="width:80px;height:3px;background:#C9A84C;opacity:0.4;margin-right:60px;flex-shrink:0;border-radius:2px;"></div>
            <div style="width:80px;height:3px;background:#C9A84C;opacity:0.4;margin-right:60px;flex-shrink:0;border-radius:2px;"></div>
            <div style="width:80px;height:3px;background:#C9A84C;opacity:0.4;margin-right:60px;flex-shrink:0;border-radius:2px;"></div>
            <div style="width:80px;height:3px;background:#C9A84C;opacity:0.4;margin-right:60px;flex-shrink:0;border-radius:2px;"></div>
            <div style="width:80px;height:3px;background:#C9A84C;opacity:0.4;margin-right:60px;flex-shrink:0;border-radius:2px;"></div>
            <div style="width:80px;height:3px;background:#C9A84C;opacity:0.4;margin-right:60px;flex-shrink:0;border-radius:2px;"></div>
        </div>
        <!-- center divider -->
        <div style="position:absolute; top:50%; left:0; right:0; height:2px; background:rgba(201,168,76,0.15); transform:translateY(-50%);"></div>
        <!-- lane marks bottom -->
        <div style="position:absolute; bottom:22px; left:0; right:0; height:3px; display:flex; animation:roadScroll 1.4s linear infinite reverse;">
            <div style="width:80px;height:3px;background:#C9A84C;opacity:0.4;margin-right:60px;flex-shrink:0;border-radius:2px;"></div>
            <div style="width:80px;height:3px;background:#C9A84C;opacity:0.4;margin-right:60px;flex-shrink:0;border-radius:2px;"></div>
            <div style="width:80px;height:3px;background:#C9A84C;opacity:0.4;margin-right:60px;flex-shrink:0;border-radius:2px;"></div>
            <div style="width:80px;height:3px;background:#C9A84C;opacity:0.4;margin-right:60px;flex-shrink:0;border-radius:2px;"></div>
            <div style="width:80px;height:3px;background:#C9A84C;opacity:0.4;margin-right:60px;flex-shrink:0;border-radius:2px;"></div>
            <div style="width:80px;height:3px;background:#C9A84C;opacity:0.4;margin-right:60px;flex-shrink:0;border-radius:2px;"></div>
            <div style="width:80px;height:3px;background:#C9A84C;opacity:0.4;margin-right:60px;flex-shrink:0;border-radius:2px;"></div>
            <div style="width:80px;height:3px;background:#C9A84C;opacity:0.4;margin-right:60px;flex-shrink:0;border-radius:2px;"></div>
            <div style="width:80px;height:3px;background:#C9A84C;opacity:0.4;margin-right:60px;flex-shrink:0;border-radius:2px;"></div>
            <div style="width:80px;height:3px;background:#C9A84C;opacity:0.4;margin-right:60px;flex-shrink:0;border-radius:2px;"></div>
        </div>
        <!-- Car 1 gold (kiri ke kanan, jalur atas) -->
        <div style="position:absolute; top:8px; animation:carDriveA 7s linear infinite;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 80" width="160" height="64">
                <rect x="10" y="30" width="180" height="38" rx="8" fill="#C9A84C"/>
                <path d="M50 30 Q60 8 90 8 L130 8 Q158 8 165 30 Z" fill="#e8c96a"/>
                <path d="M62 28 Q68 12 88 12 L110 12 Q115 14 118 28 Z" fill="#0f0f0f" opacity="0.8"/>
                <path d="M120 28 Q122 14 130 12 L148 12 Q158 14 162 28 Z" fill="#0f0f0f" opacity="0.8"/>
                <rect x="168" y="38" width="14" height="18" rx="4" fill="#1a1a1a"/>
                <rect x="170" y="42" width="10" height="6" rx="2" fill="#fffbe0" opacity="0.9"/>
                <rect x="18" y="38" width="14" height="18" rx="4" fill="#1a1a1a"/>
                <rect x="20" y="42" width="10" height="6" rx="2" fill="#ff4444" opacity="0.8"/>
                <circle cx="48" cy="68" r="12" fill="#1a1a1a"/>
                <circle cx="48" cy="68" r="6" fill="#C9A84C"/>
                <circle cx="152" cy="68" r="12" fill="#1a1a1a"/>
                <circle cx="152" cy="68" r="6" fill="#C9A84C"/>
                <rect x="60" y="18" width="70" height="3" rx="1" fill="#a07c30" opacity="0.6"/>
            </svg>
        </div>
        <!-- Car 2 abu (kiri ke kanan, jalur atas, delay) -->
        <div style="position:absolute; top:8px; opacity:0.5; animation:carDriveA 11s linear infinite; animation-delay:-5s;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 65" width="120" height="52">
                <rect x="8" y="24" width="144" height="30" rx="6" fill="#777"/>
                <path d="M38 24 Q46 6 72 6 L102 6 Q124 6 128 24 Z" fill="#999"/>
                <path d="M50 22 Q54 10 70 10 L90 10 Q100 12 102 22 Z" fill="#222" opacity="0.7"/>
                <path d="M104 22 Q108 10 118 10 L128 10 Q134 12 136 22 Z" fill="#222" opacity="0.7"/>
                <rect x="136" y="30" width="10" height="14" rx="3" fill="#111"/>
                <rect x="138" y="33" width="7" height="5" rx="1" fill="#fffbe0" opacity="0.8"/>
                <rect x="14" y="30" width="10" height="14" rx="3" fill="#111"/>
                <circle cx="38" cy="54" r="10" fill="#111"/>
                <circle cx="38" cy="54" r="5" fill="#777"/>
                <circle cx="122" cy="54" r="10" fill="#111"/>
                <circle cx="122" cy="54" r="5" fill="#777"/>
            </svg>
        </div>
        <!-- Car 3 kanan ke kiri (jalur bawah) -->
        <div style="position:absolute; bottom:8px; transform:scaleX(-1); animation:carDriveB 9s linear infinite; animation-delay:-2s;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 80" width="140" height="56">
                <rect x="10" y="30" width="180" height="38" rx="8" fill="#8a6a1a"/>
                <path d="M50 30 Q60 8 90 8 L130 8 Q158 8 165 30 Z" fill="#a07c30"/>
                <path d="M62 28 Q68 12 88 12 L110 12 Q115 14 118 28 Z" fill="#0f0f0f" opacity="0.8"/>
                <path d="M120 28 Q122 14 130 12 L148 12 Q158 14 162 28 Z" fill="#0f0f0f" opacity="0.8"/>
                <rect x="168" y="38" width="14" height="18" rx="4" fill="#1a1a1a"/>
                <rect x="170" y="42" width="10" height="6" rx="2" fill="#fffbe0" opacity="0.9"/>
                <rect x="18" y="38" width="14" height="18" rx="4" fill="#1a1a1a"/>
                <rect x="20" y="42" width="10" height="6" rx="2" fill="#ff4444" opacity="0.8"/>
                <circle cx="48" cy="68" r="12" fill="#1a1a1a"/>
                <circle cx="48" cy="68" r="6" fill="#a07c30"/>
                <circle cx="152" cy="68" r="12" fill="#1a1a1a"/>
                <circle cx="152" cy="68" r="6" fill="#a07c30"/>
            </svg>
        </div>
        <style>
            @keyframes roadScroll {
                from { transform: translateX(0); }
                to   { transform: translateX(-140px); }
            }
            @keyframes carDriveA {
                0%   { left: -220px; }
                100% { left: calc(100% + 20px); }
            }
            @keyframes carDriveB {
                0%   { right: -220px; }
                100% { right: calc(100% + 20px); }
            }
        </style>
    </div>
    <!-- ===== END ROAD ANIMATION SECTION ===== -->

    <!-- list mobil -->
    <section class="ftco-section pt-5" style="background-color:#0f0f0f !important;">
        <div class="container">
            <div class="d-flex justify-content-between mb-1">
                <h5 class="font-weight-bold"><i class="flaticon-car text-danger"></i> {{__('New vehicles ready for rent')}}</h5>
                <a href="{{url('/vehicles')}}" class="text-danger">{{__('view all vehicles')}} <i class="fa fa-arrow-right"></i></a>
            </div>
            <div class="row">

                @foreach($armadas as $ar)
                @if($ar->stock == $ar->used) @continue @endif
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url('{{$ar->thumbnail}}');">
                        </div>
                        <div class="text p-3">
                            <h2 class="mb-0"><a href="/detail/{{$ar->id}}">{{$ar->name}}</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">{{$ar->brand}}</span>
                            </div>
                            <div class="align-content-center badge-light p-3 mb-2">
                                <div class="d-flex justify-content-between">
                                    <p><i class="flaticon-car-seat text-danger m-0"></i> {{$ar->seat}} {{__('seat')}}</p>
                                    <p><i class="flaticon-backpack text-danger"></i> {{$ar->luggage}} {{__('luggage')}}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="m-0"><i class="flaticon-pistons text-danger"></i>&nbsp;{{$ar->transmission}}</p>
                                    <p class="m-0"><i class="flaticon-diesel text-danger"></i> {{$ar->fuel}}</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                {{-- <p class="text-danger ml-auto">{{rupiah($ar->price_hour)}} <span>/{{__('hour')}}</span></p> --}}
                                <p class="text-danger ml-auto">{{rupiah($ar->price_day)}} <span>/{{__('day')}}</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block">
                                <a href="/book/{{$ar->id}}" class="btn btn-outline-danger py-2 mr-1">{{__('Book Now')}}</a>
                                <a href="/detail/{{$ar->id}}" class="btn btn-secondary py-2 ml-1">{{__('details')}}</a>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27"> 
                       {{$armadas->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end list mobil -->

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2"><a href="{{url('/')}}" class="logo">{{web()->name}}</a></h2>
                        <p>{{substr(web()->about,0,100)}} ... <a href="/about">More</a></p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="{{web()->fb_url}}"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="{{web()->ig_url}}"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Information</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{url('/about')}}" class="py-2 d-block">{{__('about')}}</a></li>
                            <li><a href="{{url('/terms')}}" class="py-2 d-block">{{__('terms')}}</a></li>
                            <li><a href="{{url('/privacy-policy')}}" class="py-2 d-block">{{__('privacy_policy')}}</a></li>
    
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">{{__('Have a Questions?')}}</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">{{web()->address}}</span></li>
                                <li><a href="tel:{{web()->phone}}"><span class="icon icon-phone"></span><span class="text">{{web()->phone}}</span></a></li>
                                <li><a href="mailto:{{web()->email}}"><span class="icon icon-envelope"></span><span
                                            class="text">{{web()->email}}</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
    
    
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->


    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/aos.js')}}"></script>
    <script src="{{asset('assets/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('assets/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{asset('assets/js/scrollax.min.js')}}"></script>
   <script >
    function showDropOff(id, type)
    {
        if(type == 'show'){
        document.getElementById(id).style.display='block';
        }else{
        document.getElementById(id).style.display='none';
        }
    }
   </script>
    <script src="{{asset('assets/js/google-map.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/7ac3fca741.js')}}" crossorigin="anonymous"></script>
</body>

</html>
