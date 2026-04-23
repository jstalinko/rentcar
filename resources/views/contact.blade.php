@extends('layouts.general')

@section('content')

    <!-- contact -->
    <section class="ftco-section pt-5 pb-5" style="background-color:#0f0f0f; min-height:80vh;">
        <div class="container">
            <!-- Page title -->
            <div class="mb-4">
                <h4 style="color:#f0f0f0; font-weight:700;">
                    <span style="color:#C9A84C;">✦</span> {{__('contact')}}
                </h4>
                <div style="width:50px; height:3px; background:linear-gradient(90deg,#C9A84C,#e8c96a); border-radius:2px;"></div>
            </div>
            <div class="row g-4">
                <!-- MAP -->
                <div class="col-md-6 mb-4">
                    <div class="dark-card overflow-hidden" style="height:420px; padding:0;">
                        <iframe class="w-100 h-100" src="{{$contact->gmaps_url}}" style="border:0; filter:invert(90%) hue-rotate(180deg);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <!-- CONTACT INFO -->
                <div class="col-md-6 mb-4">
                    <div class="dark-card p-4 h-100">
                        <p style="color:#9a9a9a; margin-bottom:20px;">{{__('Please call or come directly to our address:')}}</p>
                        <div class="contact-item">
                            <i class="fa-solid fa-location-dot contact-icon"></i>
                            <span>{{$contact->address}}</span>
                        </div>
                        <div class="contact-item">
                            <i class="fa-regular fa-envelope contact-icon"></i>
                            <span>{{$contact->email}}</span>
                        </div>
                        <div class="contact-item">
                            <i class="fa-solid fa-phone contact-icon"></i>
                            <span>{{$contact->phone}}</span>
                        </div>
                        <div class="contact-item">
                            <i class="fa-solid fa-fax contact-icon"></i>
                            <span>{{$contact->office_phone}}</span>
                        </div>
                        <!-- Social Media -->
                        <div class="mt-4 pt-3" style="border-top:1px solid #2a2a2a;">
                            <p style="color:#9a9a9a; font-size:0.85rem; margin-bottom:12px;">Follow Us</p>
                            <div class="d-flex gap-3">
                                <a href="{{$contact->fb_url}}" class="social-btn" title="Facebook">
                                    <i class="fa-brands fa-square-facebook"></i>
                                </a>
                                <a href="{{$contact->ig_url}}" class="social-btn" title="Instagram">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="{{$contact->tiktok_url}}" class="social-btn" title="TikTok">
                                    <i class="fa-brands fa-tiktok"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact -->

@endsection

@section('css')
<style>
    .dark-card {
        background: #1a1a1a;
        border: 1px solid #2a2a2a;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.35);
    }
    .contact-item {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 16px;
        color: #d0d0d0;
        font-size: 0.95rem;
    }
    .contact-icon {
        color: #C9A84C;
        font-size: 1.05rem;
        margin-top: 2px;
        flex-shrink: 0;
    }
    .social-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: rgba(201,168,76,0.1);
        border: 1px solid rgba(201,168,76,0.3);
        color: #C9A84C !important;
        font-size: 1.2rem;
        transition: all 0.2s;
        text-decoration: none;
    }
    .social-btn:hover {
        background: #C9A84C;
        color: #0a0a0a !important;
        transform: translateY(-2px);
    }
</style>
@endsection

@section('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('assets/js/google-map.js')}}"></script>
@endsection
