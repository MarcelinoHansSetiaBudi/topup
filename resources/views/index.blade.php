<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <title>SB Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<style>
    a:hover{
        color: lightgray;
    }
</style>

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

    <div class="slider-container" style="padding-bottom: 20px">
        <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        
        <div class="slider">
            <div class="slide">
                <a href="/home">
                    <img src="{{ asset('Storage/Game/ML%20Chou.jpeg') }}" alt="Promo Image 1">
                </a>
            </div>
            <div class="slide">
                <a href="/home">
                    <img src="{{ asset('Storage/Game/Pubg.jpg') }}" alt="Promo Image 2">
                </a>
            </div>
            <div class="slide">
                <a href="/home">
                    <img src="{{ asset('Storage/Game/VALORANT.jpg') }}" alt="Promo Image 3">
                </a>
            </div>
        </div>
        
        <button class="next" onclick="moveSlide(1)">&#10095;</button>
    </div>
    
    {{-- Title --}}
    <div class="container">
        <div class="row">
            <div class="col text-center" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                <h1>Welcome to SB Store</h1>
            </div>
        </div>  
        <div class="row">
            <div class="col text-center" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                <h2>100% RESMI, TERPERCAYA, GARANSI, & ORI</h2>
            </div>
        </div>
    </div>
    {{-- Akhir Title --}}

    {{-- Content --}}
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-3">
                <a href="/ml"><img src="{{ asset('Storage/Game/ML%20Chou.jpeg') }}" alt="ML Logo" width="250px"></a>
            </div>
            <div class="col-md-3">
                <a href="/pubg"><img src="{{ asset('Storage/Game/Pubg.jpeg') }}" alt="PUBG Logo" width="250px"></a>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('Storage/Game/Hok.jpg') }}" alt="Hok Logo" width="250px">
            </div>
            <div class="col-md-3">
                <img src="{{ asset('Storage/Game/VALORANT.jpg') }}" alt="Valo Logo" width="250px">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 text-center">
                <a href="/ml" style="text-decoration: none; color: white;"><p>Mobile Legend</p></a>
            </div>
            <div class="col-sm-3 text-center">
                <a href="/pubg" style="text-decoration: none; color: white;"><p>PUBG MOBILE</p></a>
            </div>
            <div class="col-sm-3 text-center">
                <p>Honor of Kings</p>
            </div>
            <div class="col-sm-3 text-center">
                <p>Valorant</p>
            </div>
        </div>
    </div>
    {{-- Akhir Content --}}
    
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
</body>
</html>

<script>
let currentSlide = 0;

function moveSlide(direction) {
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;
    const slider = document.querySelector('.slider');
    
    // Update currentSlide
    currentSlide += direction;

    // Jika melebihi batas, kembali ke slide pertama atau terakhir
    if (currentSlide >= totalSlides) {
        currentSlide = 0;
    } else if (currentSlide < 0) {
        currentSlide = totalSlides - 1;
    }

    // Geser slider dengan transform
    const slideWidth = slides[0].clientWidth; // Dapatkan lebar slide
    slider.style.transform = `translateX(-${currentSlide * slideWidth}px)`; // Geser ke slide yang diinginkan
}

// Set slide pertama sebagai aktif saat pertama kali load
document.addEventListener('DOMContentLoaded', () => {
    moveSlide(0); // Set slide awal
});


</script>