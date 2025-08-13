@extends('layout.app')

@section('content')

    <div class="container" style="padding-top: 10px; padding-bottom: 15px">
        <div class="row">
            <div class="col text-center fw-bold">
                <img src="{{ asset('Storage/Game/HoK-Tokens.jpg') }}" alt="HoK Token" width="25px"> HOK TOKEN <img src="{{ asset('Storage/Game/HoK-Tokens.jpg') }}" alt="HoK Token" width="25px"> 
            </div>
        </div>
    </div>

    {{-- Profile Page Picture --}}
    <div class="container" style="padding-top: 5px; padding-bottom: 20px">
        <div class="row">
            <div class="col text-center">
                <img src="{{ asset('Storage/Game/HonorOfKingsLogoGame.jpg')}}" alt="Honor Of Kings Page" style="width: fit-content;">
            </div>
        </div>
    </div>
    {{-- Akhit Profile Page Picture --}}

    <div class="container promo">
        <div class="row">
            <div class="col" style="padding-top: 20px; padding-bottom: 2rem;">
                <h1 style="font-size: 15pt; text-align: center;">PROMO MINGGU INI</h1>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                promo minggu ini...
            </div>
        </div>
    </div>

    <div class="container body" style="padding-top:5px">
        <div class="row">
            <div class="col" style="padding-top: 20px; padding-bottom: 3rem">
                <h1 style="font-size: 15pt; text-align: center;">LIST</h1>
            </div>
        </div>
        <div class="row" style="padding-bottom: 7px">
            <div class="col-sm-2 fw-bold" style="padding-left: 85px; font-size: 13pt;">Tokens</div>
            <div class="col-sm-2 fw-bold" style="text-align: left; font-size: 13pt;">Harga</div>
            <div class="col-sm-2 fw-bold" style="font-size: 13pt;">Tokens</div>
            <div class="col-sm-2 fw-bold" style="font-size: 13pt;">Harga</div>
            <div class="col-sm-2 fw-bold" style="font-size: 13pt;">Tokens</div>
            <div class="col-sm-2 fw-bold" style="font-size: 13pt;">Harga</div>
        </div>
        <div class="row" style="padding-bottom: 7px">
            <div class="col-sm-2" style="text-align:center;"><img src="{{ asset('Storage/Game/HoK-Tokens.jpg') }}" alt="HoK Tokens" width="15px"> 17 </div>
            <div class="col-sm-2">Rp 2.750</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/HoK-Tokens.jpg') }}" alt="HoK Tokens" width="15px"> 88 </div>
            <div class="col-sm-2">Rp 12.100</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/HoK-Tokens.jpg') }}" alt="HoK Tokens" width="15px"> 257 </div>
            <div class="col-sm-2">Rp 41.800</div>
        </div>
        <div class="row" style="padding-bottom: 7px">
            <div class="col-sm-2" style="text-align:center; padding-left: 20px"><img src="{{ asset('Storage/Game/HoK-Tokens.jpg') }}" alt="HoK Tokens" width="15px"> 432 </div>
            <div class="col-sm-2">Rp 70.000</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/HoK-Tokens.jpg') }}" alt="HoK Tokens" width="15px"> 480 </div>
            <div class="col-sm-2">Rp 74.000</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/HoK-Tokens.jpg') }}" alt="HoK Tokens" width="15px"> 605 </div>
            <div class="col-sm-2">Rp 94.000</div>
        </div>
        <div class="row" style="padding-bottom: 7px">
            <div class="col-sm-2" style="text-align:center; padding-left: 20px"><img src="{{ asset('Storage/Game/HoK-Tokens.jpg') }}" alt="HoK Tokens" width="15px"> 895 </div>
            <div class="col-sm-2">Rp 122.100</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/HoK-Tokens.jpg') }}" alt="HoK Tokens" width="15px"> 1353 </div>
            <div class="col-sm-2">Rp 194.900</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/HoK-Tokens.jpg') }}" alt="HoK Tokens" width="15px"> 2724 </div>
            <div class="col-sm-2">Rp 421.800</div>
        </div>
        <div class="row" style="padding-bottom: 7px">
            <div class="col-sm-2" style="text-align:center; padding-left: 20px"><img src="{{ asset('Storage/Game/HoK-Tokens.jpg') }}" alt="HoK Tokens" width="15px"> 4580 </div>
            <div class="col-sm-2">Rp 700.000</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/HoK-Tokens.jpg') }}" alt="HoK Tokens" width="15px"> 9160 </div>
            <div class="col-sm-2">Rp 1.210.100</div>
            {{-- <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/HoK-Tokens.jpg') }}" alt="HoK Tokens" width="15px"> 60 </div>
            <div class="col-sm-2">Rp 16.400</div> --}}
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col"></div>
            </div>
        </div>
    </footer>
@endsection