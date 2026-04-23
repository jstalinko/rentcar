@extends('layouts.general')

@section('content')

    <!-- about -->
    <section class="ftco-section pt-5 pb-5" style="background-color:#0f0f0f; min-height:80vh;">
        <div class="container">
            <!-- Page Title -->
            <div class="mb-4">
                <h4 style="color:#f0f0f0; font-weight:700;">
                    <span style="color:#C9A84C;">✦</span> {{__('about')}}
                </h4>
                <div style="width:50px; height:3px; background:linear-gradient(90deg,#C9A84C,#e8c96a); border-radius:2px;"></div>
            </div>
            <div class="row align-items-start">
                <!-- Image -->
                <div class="col-md-4 col-12 mb-4">
                    <div class="overflow-hidden" style="border-radius:14px; border:1px solid #2a2a2a; box-shadow:0 8px 32px rgba(0,0,0,0.5);">
                        <img src="https://images.unsplash.com/photo-1576267423048-15c0040fec78?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            class="img-fluid w-100" alt="About DNA Rental Cirebon"
                            style="display:block; filter:brightness(0.85) saturate(0.9);">
                    </div>
                </div>
                <!-- Content Card -->
                <div class="col-md-8 col-12 mb-4">
                    <div class="dark-card p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div style="width:4px; height:28px; background:linear-gradient(180deg,#C9A84C,#e8c96a); border-radius:2px; margin-right:12px;"></div>
                            <h2 style="margin:0; color:#f0f0f0; font-weight:700; font-size:1.4rem;">{{__('about')}}</h2>
                        </div>
                        <div class="about-content">
                            {!!$about!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about -->

@endsection

@section('css')
<style>
    .dark-card {
        background: #1a1a1a;
        border: 1px solid #2a2a2a;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.35);
    }
    .about-content {
        color: #c0c0c0;
        line-height: 1.8;
        font-size: 0.95rem;
    }
    .about-content h1, .about-content h2, .about-content h3,
    .about-content h4, .about-content h5, .about-content h6 {
        color: #f0f0f0 !important;
    }
    .about-content p { color: #c0c0c0; }
    .about-content a { color: #C9A84C; }
    .about-content a:hover { color: #e8c96a; }
    .about-content strong, .about-content b { color: #e0e0e0; }
    .about-content ul li, .about-content ol li {
        color: #c0c0c0;
        margin-bottom: 6px;
    }
</style>
@endsection
