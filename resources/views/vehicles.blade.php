@extends('layouts.general')

@section('content')

    <!-- vehicles -->
    <section class="ftco-section pt-5 pb-5" style="background-color:#0f0f0f; min-height:80vh;">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="font-weight-bold" style="color:#f0f0f0;">
                    <i class="flaticon-car" style="color:#C9A84C;"></i> {{__('list car')}}
                </h5>
                <!-- filter button mobile -->
                <button type="button" class="btn d-lg-none d-md-none" data-toggle="modal" data-target="#exampleModal"
                    style="background:rgba(201,168,76,0.15); border:1px solid #C9A84C; color:#C9A84C; border-radius:8px; padding:6px 14px;">
                    <i class="flaticon-car"></i> Filter
                </button>
            </div>
            <div class="row">
                <!-- SIDEBAR FILTER (desktop) -->
                <div class="col-md-3 d-lg-block d-none">
                    <div class="dark-card p-0 overflow-hidden">
                        <div class="px-3 pt-3 pb-2" style="border-bottom:1px solid #2a2a2a;">
                            <h6 class="mb-0" style="color:#C9A84C; font-weight:700; letter-spacing:1px;">⚙ Filter</h6>
                        </div>
                        <div class="p-3">
                            <label class="dark-label"><i class="flaticon-list" style="color:#C9A84C;"></i> {{__('type')}}</label>
                            <div class="input-group mb-3">
                                <select name="type" id="tipe" class="dark-select" onchange="tipeFilter()">
                                    <option value="all" @if(Request::get('t') == 'all') selected @endif>{{__('all')}}</option>
                                    <option value="car" @if(Request::get('t') == 'car') selected @endif>{{__('car')}}</option>
                                    <option value="motorcycle" @if(Request::get('t') == 'motorcycle') selected @endif>{{__('motorcycle')}}</option>
                                </select>
                            </div>
                            <form method="get" action="/vehicles" id="filterForm" @if(Request::get('t') !== 'car') style="display:none;" @endif>
                                <input type="hidden" name="t" value="{{Request::get('t')}}">
                                <label class="dark-label"><i class="flaticon-car-seat" style="color:#C9A84C;"></i> {{__('seat')}}</label>
                                <div class="input-group mb-3">
                                    <select class="dark-select" name="seat">
                                        <option value="">{{__('choose')}} {{__('seat')}}</option>
                                        <option value="5" @if(Request::get('seat') == 5) selected @endif>5 {{__('seat')}}</option>
                                        <option value="8" @if(Request::get('seat') == 8) selected @endif>8 {{__('seat')}}</option>
                                        <option value="11" @if(Request::get('seat') == 11) selected @endif>11 {{__('seat')}}</option>
                                    </select>
                                </div>
                                <label class="dark-label"><i class="flaticon-car" style="color:#C9A84C;"></i> {{__('type car')}}</label>
                                <div class="input-group mb-3">
                                    <select class="dark-select" name="transmission">
                                        <option value="">{{__('choose')}} {{__('car')}}</option>
                                        <option value="automatic" @if(Request::get('transmission') == 'automatic') selected @endif>Automatic</option>
                                        <option value="manual" @if(Request::get('transmission') == 'manual') selected @endif>Manual</option>
                                    </select>
                                </div>
                                <label class="dark-label"><i class="flaticon-diesel" style="color:#C9A84C;"></i> {{__('fuel')}}</label>
                                <div class="input-group mb-3">
                                    <select class="dark-select" name="fuel">
                                        <option value="">{{__('choose')}} {{__('fuel')}}</option>
                                        <option value="petrol" @if(Request::get('fuel') == 'petrol') selected @endif>{{__('petrol')}}</option>
                                        <option value="diesel" @if(Request::get('fuel') == 'diesel') selected @endif>{{__('diesel')}}</option>
                                    </select>
                                </div>
                                <input type="submit" class="btn-gold w-100" value="{{__('Search')}}">
                            </form>
                        </div>
                    </div>
                </div>

                <!-- MAIN CONTENT -->
                <div class="col-md-9">
                    <!-- search bar -->
                    <div class="dark-card p-3 mb-4">
                        <form action="/vehicles" method="get">
                            <input type="text" class="dark-input form-control" placeholder="{{__('Search')}}..." name="search" onchange="this.form.submit()">
                        </form>
                    </div>
                    <!-- car list -->
                    <div class="row">
                        @foreach($armadas as $ar)
                        @if($ar->stock == $ar->used) @continue @endif
                        <div class="col-md-6 mt-3">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end" style="background-image: url('{{$ar->thumbnail}}');"></div>
                                <div class="text p-3">
                                    <h2 class="mb-0"><a href="/detail/{{$ar->id}}">{{$ar->name}}</a></h2>
                                    <div class="d-flex mb-3"><span class="cat">{{$ar->brand}}</span></div>
                                    <div class="align-content-center badge-light p-3 mb-2">
                                        <div class="d-flex justify-content-between">
                                            <p><i class="flaticon-car-seat text-danger m-0"></i> {{$ar->seat}} Seats</p>
                                            <p><i class="flaticon-backpack text-danger"></i> {{$ar->luggage}} luggage</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="m-0"><i class="flaticon-pistons text-danger"></i>&nbsp;{{$ar->transmission}}</p>
                                            <p class="m-0"><i class="flaticon-diesel text-danger"></i> {{$ar->fuel}}</p>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <p style="color:#9a9a9a;">Start From</p>
                                        <p class="text-danger ml-auto">{{rupiah($ar->price_day)}} <span>/day</span></p>
                                    </div>
                                    <p class="d-flex mb-0">
                                        <a href="/book/{{$ar->id}}" class="btn btn-outline-danger py-2 mr-1">Book now</a>
                                        <a href="/detail/{{$ar->id}}" class="btn btn-secondary py-2 ml-1">Details</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row mt-5">
                        <div class="col text-center"><div class="block-27">{{$armadas->links()}}</div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end vehicles -->

    <!-- Modal filter mobile -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background:#1a1a1a; border:1px solid #2a2a2a;">
                <div class="modal-header" style="border-bottom:1px solid #2a2a2a;">
                    <h5 class="modal-title" style="color:#C9A84C;">⚙ Filter</h5>
                    <button type="button" class="close" data-dismiss="modal" style="color:#f0f0f0;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="background:#1a1a1a;">
                    <label class="dark-label"><i class="flaticon-list" style="color:#C9A84C;"></i> {{__('type')}}</label>
                    <div class="input-group mb-3">
                        <select name="type" id="tipem" class="dark-select" onchange="tipeFilterMobile()">
                            <option value="all" @if(Request::get('t') == 'all') selected @endif>{{__('all')}}</option>
                            <option value="car" @if(Request::get('t') == 'car') selected @endif>{{__('car')}}</option>
                            <option value="motorcycle" @if(Request::get('t') == 'motorcycle') selected @endif>{{__('motorcycle')}}</option>
                        </select>
                    </div>
                    <form method="get" action="/vehicles" id="filterFormm" @if(Request::get('t') !== 'car') style="display:none;" @endif>
                        <input type="hidden" name="t" value="{{Request::get('t')}}">
                        <label class="dark-label"><i class="flaticon-car-seat" style="color:#C9A84C;"></i> {{__('seat')}}</label>
                        <div class="input-group mb-3">
                            <select class="dark-select" name="seat">
                                <option value="">{{__('choose')}} {{__('seat')}}</option>
                                <option value="5" @if(Request::get('seat') == 5) selected @endif>5 {{__('seat')}}</option>
                                <option value="8" @if(Request::get('seat') == 8) selected @endif>8 {{__('seat')}}</option>
                                <option value="11" @if(Request::get('seat') == 11) selected @endif>11 {{__('seat')}}</option>
                            </select>
                        </div>
                        <label class="dark-label"><i class="flaticon-car" style="color:#C9A84C;"></i> {{__('type car')}}</label>
                        <div class="input-group mb-3">
                            <select class="dark-select" name="transmission">
                                <option value="">{{__('choose')}} {{__('car')}}</option>
                                <option value="automatic" @if(Request::get('transmission') == 'automatic') selected @endif>Automatic</option>
                                <option value="manual" @if(Request::get('transmission') == 'manual') selected @endif>Manual</option>
                            </select>
                        </div>
                        <label class="dark-label"><i class="flaticon-diesel" style="color:#C9A84C;"></i> {{__('fuel')}}</label>
                        <div class="input-group mb-3">
                            <select class="dark-select" name="fuel">
                                <option value="">{{__('choose')}} {{__('fuel')}}</option>
                                <option value="petrol" @if(Request::get('fuel') == 'petrol') selected @endif>{{__('petrol')}}</option>
                                <option value="diesel" @if(Request::get('fuel') == 'diesel') selected @endif>{{__('diesel')}}</option>
                            </select>
                        </div>
                        <input type="submit" class="btn-gold w-100" value="{{__('Search')}}">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('css')
<style>
    .dark-card {
        background: #1a1a1a;
        border: 1px solid #2a2a2a;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.3);
    }
    .dark-label {
        color: #9a9a9a;
        font-size: 0.83rem;
        font-weight: 600;
        display: block;
        margin-bottom: 5px;
        letter-spacing: 0.3px;
    }
    .dark-input, .dark-select {
        background-color: #242424 !important;
        border: 1px solid rgba(201,168,76,0.25) !important;
        color: #f0f0f0 !important;
        border-radius: 8px !important;
        width: 100%;
        padding: 8px 12px;
    }
    .dark-input::placeholder { color: rgba(255,255,255,0.3) !important; }
    .dark-input:focus, .dark-select:focus {
        border-color: #C9A84C !important;
        box-shadow: 0 0 0 3px rgba(201,168,76,0.15) !important;
        outline: none;
    }
    .dark-select option { background: #1a1a1a; color: #f0f0f0; }
    .btn-gold {
        display: inline-block;
        background: linear-gradient(135deg, #C9A84C, #e8c96a);
        color: #0a0a0a !important;
        font-weight: 700;
        border: none;
        padding: 10px 20px;
        border-radius: 8px;
        font-size: 0.9rem;
        cursor: pointer;
        text-align: center;
        transition: all 0.2s;
        width: 100%;
    }
    .btn-gold:hover { background: linear-gradient(135deg, #e8c96a, #C9A84C); transform: translateY(-1px); }
</style>
@endsection

@section('js')
<script>
    function tipeFilter(){
        const tipe = document.getElementById('tipe').value;
        const filterForm = document.getElementById('filterForm');
        filterForm.style.display = (tipe == 'car') ? 'block' : 'none';
        window.location.href = '?t='+ tipe;
    }
    function tipeFilterMobile(){
        const tipe = document.getElementById('tipem').value;
        const filterForm = document.getElementById('filterFormm');
        filterForm.style.display = (tipe == 'car') ? 'block' : 'none';
        window.location.href = '?t='+ tipe;
    }
</script>
@endsection