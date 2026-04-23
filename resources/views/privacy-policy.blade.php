@extends('layouts.general')

@section('content')

    <!-- privacy policy -->
    <section class="ftco-section pt-5 pb-5" style="background-color:#0f0f0f; min-height:80vh;">
        <div class="container">
            <div class="mb-4">
                <h4 style="color:#f0f0f0; font-weight:700;">
                    <span style="color:#C9A84C;">✦</span> Privacy Policy
                </h4>
                <div style="width:50px; height:3px; background:linear-gradient(90deg,#C9A84C,#e8c96a); border-radius:2px;"></div>
            </div>
            <div class="dark-card p-4">
                <div class="policy-content">
                    {!!$privacy_policy!!}
                </div>
            </div>
        </div>
    </section>
    <!-- end privacy policy -->

@endsection

@section('css')
<style>
    .dark-card {
        background: #1a1a1a;
        border: 1px solid #2a2a2a;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.35);
    }
    .policy-content {
        color: #c0c0c0;
        line-height: 1.8;
        font-size: 0.95rem;
    }
    .policy-content h1, .policy-content h2, .policy-content h3,
    .policy-content h4, .policy-content h5, .policy-content h6 { color: #f0f0f0 !important; }
    .policy-content p { color: #c0c0c0; }
    .policy-content a { color: #C9A84C; }
    .policy-content a:hover { color: #e8c96a; }
    .policy-content strong, .policy-content b { color: #e0e0e0; }
    .policy-content ul li, .policy-content ol li { color: #c0c0c0; margin-bottom: 6px; }
</style>
@endsection
