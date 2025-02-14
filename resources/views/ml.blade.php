<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>SB Store</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('storage/logo/SB%20Store%20Logo.png') }}" alt="Logo"  width="35" height="35" class="rounded">
                <span style="font-size: 14px; margin-left: 5px">Store</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">
                            <i class="fas fa-home" style="font-size: 10pt">
                                <span style="margin-left: 3px">Home</span>
                            </i>
                        </a>
                        {{-- <i class="fa-regular fa-bolt-lightning"></i> --}}
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/flashsale">
                            <i class="fas fa-bolt" style="font-size: 10pt;">
                                <span style="margin-left: 3px">Flashsale</span>
                            </i>
                        </a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container pb-4">
        <div class="row">
            <div class="col text-center fw-bold">
                <img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ML" width="25px"> DIAMOND MOBILE LEGEND <img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ML" width="25px"> 
            </div>
        </div>
    </div>

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
            <div class="col-sm-2 fw-bold" style="padding-left: 85px; font-size: 13pt;">Diamond</div>
            <div class="col-sm-2 fw-bold" style="text-align: left; font-size: 13pt;">Harga</div>
            <div class="col-sm-2 fw-bold" style="font-size: 13pt;">Diamond</div>
            <div class="col-sm-2 fw-bold" style="font-size: 13pt;">Harga</div>
            <div class="col-sm-2 fw-bold" style="font-size: 13pt;">Diamond</div>
            <div class="col-sm-2 fw-bold" style="font-size: 13pt;">Harga</div>
        </div>
        <div class="row" style="padding-bottom: 7px">
            <div class="col-sm-2" style="text-align:center;"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 3 </div>
            <div class="col-sm-2">Rp 1.200</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 5 </div>
            <div class="col-sm-2">Rp 1.440</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 10 </div>
            <div class="col-sm-2">Rp 2.900</div>
        </div>
        <div class="row" style="padding-bottom: 7px">
            <div class="col-sm-2" style="text-align:center; padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 12 </div>
            <div class="col-sm-2">Rp 3.300</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 14 </div>
            <div class="col-sm-2">Rp 3.850</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 15 </div>
            <div class="col-sm-2">Rp 4.350</div>
        </div>
        <div class="row" style="padding-bottom: 7px">
            <div class="col-sm-2" style="text-align:center; padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 19 </div>
            <div class="col-sm-2">Rp 5.340</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 20 </div>
            <div class="col-sm-2">Rp 5.820</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 28 </div>
            <div class="col-sm-2">Rp 7.800</div>
        </div>
        <div class="row" style="padding-bottom: 7px">
            <div class="col-sm-2" style="text-align:center; padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 30 </div>
            <div class="col-sm-2">Rp 8.800</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 44 </div>
            <div class="col-sm-2">Rp 11.600</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 60 </div>
            <div class="col-sm-2">Rp 16.400</div>
        </div>
        <div class="row" style="padding-bottom: 7px">
            <div class="col-sm-2" style="text-align:center; padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 78 </div>
            <div class="col-sm-2">Rp 21.500</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 88 </div>
            <div class="col-sm-2">Rp 23.000</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 92 </div>
            <div class="col-sm-2">Rp 24.200</div>
        </div>
        <div class="row" style="padding-bottom: 7px">
            <div class="col-sm-2" style="text-align:center; padding-left: 28px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 100 </div>
            <div class="col-sm-2">Rp 27.500</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 140 </div>
            <div class="col-sm-2">Rp 37.500</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 154 </div>
            <div class="col-sm-2">Rp 40.800</div>
        </div>
        <div class="row" style="padding-bottom: 7px">
            <div class="col-sm-2" style="text-align:center; padding-left: 28px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 164 </div>
            <div class="col-sm-2">Rp 44.900</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 170 </div>
            <div class="col-sm-2">Rp 45.000</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 185 </div>
            <div class="col-sm-2">Rp 48.900</div>
        </div>
        <div class="row" style="padding-bottom: 7px">
            <div class="col-sm-2" style="text-align:center; padding-left: 28px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 210 </div>
            <div class="col-sm-2">Rp 55.900</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 257 </div>
            <div class="col-sm-2">Rp 67.600</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 284 </div>
            <div class="col-sm-2">Rp 76.000</div>
        </div>
        <div class="row" style="padding-bottom: 7px">
            <div class="col-sm-2" style="text-align:center; padding-left: 28px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 296 </div>
            <div class="col-sm-2">Rp 77.500</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 336 </div>
            <div class="col-sm-2">Rp 89.200</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 355 </div>
            <div class="col-sm-2">Rp 92.800</div>
        </div>
        <div class="row" style="padding-bottom: 7px">
            <div class="col-sm-2" style="text-align:center; padding-left: 28px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 366 </div>
            <div class="col-sm-2">Rp 96.400</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 387 </div>
            <div class="col-sm-2">Rp 105.500</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 406 </div>
            <div class="col-sm-2">Rp 106.100</div>
        </div>
        <div class="row" style="padding-bottom: 7px">
            <div class="col-sm-2" style="text-align:center; padding-left: 28px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 429 </div>
            <div class="col-sm-2">Rp 113.900</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 514 </div>
            <div class="col-sm-2">Rp 133.900</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 568 </div>
            <div class="col-sm-2">Rp 144.800</div>
        </div>
        <div class="row" style="padding-bottom: 7px">
            <div class="col-sm-2" style="text-align:center; padding-left: 28px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 600 </div>
            <div class="col-sm-2">Rp 154.300</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 642 </div>
            <div class="col-sm-2">Rp 164.800</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 702 </div>
            <div class="col-sm-2">Rp 185.500</div>
        </div>
        <div class="row" style="padding-bottom: 7px">
            <div class="col-sm-2" style="text-align:center; padding-left: 28px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 720 </div>
            <div class="col-sm-2">Rp 187.000</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 758 </div>
            <div class="col-sm-2">Rp 202.200</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 790 </div>
            <div class="col-sm-2">Rp 210.000</div>
        </div>
        <div class="row" style="padding-bottom: 7px">
            <div class="col-sm-2" style="text-align:center; padding-left: 28px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 875 </div>
            <div class="col-sm-2">Rp 222.280</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 938 </div>
            <div class="col-sm-2">Rp 243.700</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 1045 </div>
            <div class="col-sm-2">Rp 266.500</div>
        </div>
        <div class="row" style="padding-bottom: 7px">
            <div class="col-sm-2" style="text-align:center; padding-left: 37px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 1159 </div>
            <div class="col-sm-2">Rp 301.400</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 1750 </div>
            <div class="col-sm-2">Rp 451.800</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 2010 </div>
            <div class="col-sm-2">Rp 472.500</div>
        </div>
        <div class="row" style="padding-bottom: 7px">
            <div class="col-sm-2" style="text-align:center; padding-left: 37px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 2046 </div>
            <div class="col-sm-2">Rp 484.500</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 2232 </div>
            <div class="col-sm-2">Rp 581.100</div>
            <div class="col-sm-2" style="padding-left: 20px"><img src="{{ asset('Storage/Game/diamond.jpg') }}" alt="diamond ml" width="15px"> 2380 </div>
            <div class="col-sm-2">Rp 589.500</div>
        </div>
    </div>
</body>
</html>