@extends('layouts.general')

@section('content')

    <!-- booking check -->
    <section class="ftco-section pt-4 pb-5" style="background-color:#0f0f0f; min-height:70vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="dark-card p-4">
                        <div class="d-flex align-items-center mb-4">
                            <i class="fa fa-search" style="color:#C9A84C; font-size:1.4rem; margin-right:10px;"></i>
                            <h5 class="mb-0 font-weight-bold" style="color:#f0f0f0;">{{__('Check Status Booking')}}</h5>
                        </div>
                        <form action="/booking-check" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="dark-label">
                                    <i class="fa fa-ticket-alt mr-1" style="color:#C9A84C;"></i>
                                    {{__('Enter your booking code in the input below')}}
                                </label>
                                <input type="text" name="code" class="dark-input form-control" placeholder="Masukkan Kode Booking...">
                            </div>
                            <button type="submit" class="btn-gold w-100 mt-2">
                                <i class="fa fa-search mr-2"></i> {{__('Check Booking Code')}}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end booking check -->

@endsection

@section('css')
<style>
    .dark-card {
        background: #1a1a1a;
        border: 1px solid #2a2a2a;
        border-radius: 12px;
        box-shadow: 0 4px 24px rgba(0,0,0,0.4);
    }
    .dark-label {
        color: #9a9a9a;
        font-size: 0.85rem;
        font-weight: 500;
        display: block;
        margin-bottom: 6px;
    }
    .dark-input {
        background-color: #242424 !important;
        border: 1px solid rgba(201,168,76,0.3) !important;
        color: #f0f0f0 !important;
        border-radius: 8px;
    }
    .dark-input::placeholder { color: rgba(255,255,255,0.3) !important; }
    .dark-input:focus { border-color: #C9A84C !important; box-shadow: 0 0 0 3px rgba(201,168,76,0.15) !important; }
    .btn-gold {
        display: inline-block;
        background: linear-gradient(135deg, #C9A84C, #e8c96a);
        color: #0a0a0a !important;
        font-weight: 700;
        border: none;
        padding: 11px 24px;
        border-radius: 8px;
        font-size: 0.95rem;
        cursor: pointer;
        text-align: center;
        transition: all 0.2s;
    }
    .btn-gold:hover { background: linear-gradient(135deg, #e8c96a, #C9A84C); transform: translateY(-1px); }
</style>
@endsection
