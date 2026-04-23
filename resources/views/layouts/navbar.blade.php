<!DOCTYPE html>
<html lang="en">
  <head>
    @if (\App\Models\Websetting::all()[0]?->title)

    <title> {{\App\Models\Websetting::all()[0]?->title}}</title>

    @else
      <title> {{env('APP_NAME')}} </title>
    @endif
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="{{web()->meta_author}}">
    <meta name="description" content="{{web()->meta_description}}">
    <meta name="keywords" content="{{web()->meta_keywords}}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

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
        .ftco_navbar, #ftco-navbar {
            position: sticky !important;
            top: 0 !important;
            z-index: 1050 !important;
            width: 100% !important;
        }
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
        /* SECTIONS */
        .ftco-section,
        .bg-light {
            background-color: var(--dark-section) !important;
        }
        .bg-white {
            background-color: var(--dark-card) !important;
        }
        /* REQUEST FORM */
        .request-form {
            background: linear-gradient(135deg, #1c1400 0%, #2a1f00 50%, #1a1400 100%) !important;
            border: 1px solid var(--gold-dark);
            border-radius: 10px;
            box-shadow: 0 8px 32px rgba(201,168,76,0.15);
        }
        .request-form h2 { color: var(--gold) !important; }
        .request-form .label { color: #e0e0e0 !important; }
        .request-form .form-control {
            background-color: rgba(255,255,255,0.07) !important;
            border-color: rgba(201,168,76,0.4) !important;
            color: #ffffff !important;
        }
        .request-form .form-control::placeholder { color: rgba(255,255,255,0.4) !important; }
        .request-form .custom-control-label { color: #e0e0e0 !important; }
        .request-form .btn-outline-light {
            background: var(--gold) !important;
            border-color: var(--gold) !important;
            color: #0f0f0f !important;
            font-weight: 700;
        }
        .request-form .btn-outline-light:hover { background: var(--gold-light) !important; }
        /* SERVICES */
        .services-wrap {
            background-color: var(--dark-card) !important;
            border: 1px solid var(--dark-border);
        }
        .services-wrap .heading-section { color: var(--text-primary) !important; }
        .services {
            background-color: #222 !important;
            border: 1px solid var(--dark-border);
            border-radius: 8px;
            padding: 15px;
        }
        .services .heading { color: var(--text-primary) !important; }
        /* CAR WRAP */
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
        .car-wrap .text { background-color: var(--dark-card) !important; }
        .car-wrap .text h2 a { color: var(--text-primary) !important; }
        .car-wrap .text h2 a:hover { color: var(--gold) !important; }
        .car-wrap .cat { color: var(--text-muted) !important; }
        .car-wrap .badge-light {
            background-color: #242424 !important;
            border-radius: 6px;
        }
        .car-wrap .badge-light p, .car-wrap .badge-light p i { color: var(--text-primary) !important; }
        /* GOLD ACCENT */
        .text-danger {
            color: var(--gold) !important;
        }
        a.text-danger { color: var(--gold) !important; }
        /* HEADINGS & TEXT */
        h1, h2, h3, h4, h5, h6 { color: var(--text-primary) !important; }
        p { color: var(--text-muted) !important; }
        .font-weight-bold { color: var(--text-primary) !important; }
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
        /* FORMS */
        .form-control {
            background-color: #222 !important;
            border-color: var(--dark-border) !important;
            color: var(--text-primary) !important;
        }
        /* TABLE */
        table, .table { color: var(--text-primary) !important; }
        .table th, .table td {
            border-color: var(--dark-border) !important;
            background-color: var(--dark-card) !important;
        }
        /* FOOTER */
        .ftco-footer.ftco-bg-dark {
            background-color: #0a0a0a !important;
            border-top: 1px solid var(--dark-border);
        }
        .ftco-footer .ftco-heading-2 a,
        .ftco-footer .ftco-heading-2 { color: var(--gold) !important; }
        .ftco-footer p, .ftco-footer .text, .ftco-footer ul li a { color: var(--text-muted) !important; }
        .ftco-footer ul li a:hover { color: var(--gold) !important; }
        .ftco-footer .ftco-footer-social li a {
            background-color: var(--dark-card);
            color: var(--gold) !important;
            border: 1px solid var(--gold-dark);
        }
        .ftco-footer .ftco-footer-social li a:hover {
            background-color: var(--gold);
            color: #0f0f0f !important;
        }
        .ftco-footer .icon { color: var(--gold) !important; }
        .ftco-footer p a { color: var(--gold) !important; }
        /* DROPDOWN */
        .dropdown-menu {
            background-color: #1a1a1a !important;
            border: 1px solid var(--dark-border) !important;
        }
        .dropdown-item { color: var(--text-primary) !important; }
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
        /* SCROLLBAR */
        ::-webkit-scrollbar { width: 7px; }
        ::-webkit-scrollbar-track { background: #111; }
        ::-webkit-scrollbar-thumb { background: var(--gold-dark); border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: var(--gold); }
        /* DATEPICKER — popup selalu di atas semua elemen */
        .datepicker,
        .datepicker-dropdown,
        .bootstrap-datetimepicker-widget {
            z-index: 9999 !important;
        }
        .ui-timepicker-wrapper {
            z-index: 9999 !important;
        }
        /* CARD — global dark override */
        .card {
            background-color: var(--dark-card) !important;
            border: 1px solid var(--dark-border) !important;
            color: var(--text-primary) !important;
        }
        .card-header {
            background-color: #222 !important;
            border-bottom: 1px solid var(--dark-border) !important;
            color: var(--text-primary) !important;
        }
        .card-body { color: var(--text-primary) !important; }
        .card-footer {
            background-color: #222 !important;
            border-top: 1px solid var(--dark-border) !important;
        }
        /* MODAL — global dark */
        .modal-content {
            background-color: var(--dark-card) !important;
            border: 1px solid var(--dark-border) !important;
            color: var(--text-primary) !important;
        }
        .modal-header {
            border-bottom: 1px solid var(--dark-border) !important;
        }
        .modal-footer {
            border-top: 1px solid var(--dark-border) !important;
        }
        .close { color: var(--text-primary) !important; }
        /* SELECT & INPUT GROUP */
        .custom-select, select.form-control {
            background-color: #242424 !important;
            border: 1px solid rgba(201,168,76,0.25) !important;
            color: var(--text-primary) !important;
        }
        .custom-select option, select.form-control option {
            background: #1a1a1a;
            color: var(--text-primary);
        }
        .input-group-text {
            background-color: #222 !important;
            border-color: var(--dark-border) !important;
            color: var(--text-primary) !important;
        }
        /* NAVBAR — active link underline gold */
        #ftco-navbar .nav-item.active .nav-link {
            color: var(--gold) !important;
            position: relative;
        }
        #ftco-navbar .nav-item.active .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 12px;
            right: 12px;
            height: 2px;
            background: var(--gold);
            border-radius: 1px;
        }
        /* BADGE LIGHT */
        .badge-light {
            background-color: #242424 !important;
            color: var(--text-primary) !important;
        }
    </style>
    @yield('css')
  </head>
  <body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light sticky-top" id="ftco-navbar" style="background:#0a0a0a !important;">
	    <div class="container">
	      <a class="navbar-brand" href="{{url('/')}}">{!!web_name()!!}</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item @if (Request::is('/')) active @endif "><a href="{{url('/')}}" class="nav-link">{{__('home')}}</a></li>
              <li class="nav-item @if (Request::is('booking-check')) active @endif"><a href="{{url('booking-check')}}" class="nav-link">{{__('Booking Check')}}</a></li>
	          <li class="nav-item @if (Request::is('vehicles')) active @endif"><a href="{{url('vehicles')}}" class="nav-link">{{__('vehicles')}}</a></li>
	          <li class="nav-item @if (Request::is('contact')) active @endif"><a href="{{url('contact')}}" class="nav-link">{{__('contact')}}</a></li>
	        </ul>
	      </div>
          <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="fa fa-language"></i> {{strtoupper(App::getLocale())}}
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
