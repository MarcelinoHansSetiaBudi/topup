<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>B Store</title>
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

    {{-- Title --}}
    <div class="container" id="title">
        <div class="row">
            <div class="col text-center fw-bold" style="font-size: 13pt">UC PUBG MOBILE</div>
        </div>
        <div class="row" style="padding-top: 20px;">
            <div class="col text-center fw-bold">LIST</div>
        </div>
        <div class="row" style="padding-top: 50px">
            <div class="col-sm-2" style="padding-left: 50px; padding-bottom: 10px"><img src="{{ asset('Storage/Game/UC.jpg') }}" alt="UC PUBG" width="30px">UC</div>
            <div class="col-sm-2">Harga</div>
            <div class="col-sm-2" style="padding-left: 50px; padding-bottom: 10px"><img src="{{ asset('Storage/Game/UC.jpg') }}" alt="UC PUBG" width="30px">UC</div>
            <div class="col-sm-2">Harga</div>
            <div class="col-sm-2" style="padding-left: 50px; padding-bottom: 10px"><img src="{{ asset('Storage/Game/UC.jpg') }}" alt="UC PUBG" width="30px">UC</div>
            <div class="col-sm-2">Harga</div>
        </div>
    </div>
    {{-- Akhir title --}}

    <div class="container">
        <div class="row">
            <div class="col-sm-2" style="padding-left: 70px"> 30 </div>
            <div class="col-sm-2"> Rp 6.512 </div>
            <div class="col-sm-2" style="padding-left: 70px"> 60 </div>
            <div class="col-sm-2"> Rp 12.979 </div>
            <div class="col-sm-2" style="padding-left: 70px"> 180 </div>
            <div class="col-sm-2"> Rp 38.832 </div>
        </div>
        <div class="row">
            <div class="col-sm-2" style="padding-left: 70px"> 325 </div>
            <div class="col-sm-2"> Rp 65.714 </div>
            <div class="col-sm-2" style="padding-left: 70px"> 355 </div>
            <div class="col-sm-2"> Rp 71.660 </div>
            <div class="col-sm-2" style="padding-left: 70px"> 660 </div>
            <div class="col-sm-2"> Rp 131.930 </div>
        </div>
        <div class="row">
            <div class="col-sm-2" style="padding-left: 70px"> 720 </div>
            <div class="col-sm-2"> Rp 144.995 </div>
            <div class="col-sm-2" style="padding-left: 70px"> 840 </div>
            <div class="col-sm-2"> Rp 172.033 </div>
            <div class="col-sm-2" style="padding-left: 70px"> 1105 </div>
            <div class="col-sm-2"> Rp 224.617 </div>
        </div>
        <div class="row">
            <div class="col-sm-2" style="padding-left: 70px"> 1320 </div>
            <div class="col-sm-2"> Rp 264.839 </div>
            <div class="col-sm-2" style="padding-left: 70px"> 1410 </div>
            <div class="col-sm-2"> Rp 288.601 </div>
            <div class="col-sm-2" style="padding-left: 70px"> 1500 </div>
            <div class="col-sm-2"> Rp 304.650 </div>
        </div>
        <div class="row">
            <div class="col-sm-2" style="padding-left: 70px"> 1320 </div>
            <div class="col-sm-2"> Rp 264.839 </div>
            <div class="col-sm-2" style="padding-left: 70px"> 1410 </div>
            <div class="col-sm-2"> Rp 288.601 </div>
            <div class="col-sm-2" style="padding-left: 70px"> 1500 </div>
            <div class="col-sm-2"> Rp 304.650 </div>
        </div>
    </div>
</body>
</html>