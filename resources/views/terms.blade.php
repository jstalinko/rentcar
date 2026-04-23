@extends('layouts.general')

@section('content')

    <!-- terms -->
    <section class="ftco-section pt-5 pb-5" style="background-color:#0f0f0f; min-height:80vh;">
        <div class="container">
            <div class="mb-4">
                <h4 style="color:#f0f0f0; font-weight:700;">
                    <span style="color:#C9A84C;">✦</span> Syarat & Ketentuan
                </h4>
                <div style="width:50px; height:3px; background:linear-gradient(90deg,#C9A84C,#e8c96a); border-radius:2px;"></div>
            </div>
            <div class="dark-card p-4">
                <div class="terms-content">
                    {!!$terms!!}
                </div>
            </div>
        </div>
    </section>
    <!-- end terms -->

@endsection

@section('css')
<style>
    .dark-card {
        background: #1a1a1a;
        border: 1px solid #2a2a2a;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.35);
    }
    .terms-content {
        color: #c0c0c0;
        line-height: 1.8;
        font-size: 0.95rem;
    }
    .terms-content h1, .terms-content h2, .terms-content h3,
    .terms-content h4, .terms-content h5, .terms-content h6 { color: #f0f0f0 !important; }
    .terms-content p { color: #c0c0c0; }
    .terms-content a { color: #C9A84C; }
    .terms-content a:hover { color: #e8c96a; }
    .terms-content strong, .terms-content b { color: #e0e0e0; }
    .terms-content ul li, .terms-content ol li { color: #c0c0c0; margin-bottom: 6px; }
</style>
@endsection
