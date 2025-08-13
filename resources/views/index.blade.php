@extends('layout.app')

@section('content')


<link rel="stylesheet" href="{{ asset('css/content.css') }}">

<section style="background-color: #242a2e">
    <div class="container" >
        <div class="slider-container mb-2">
            <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
            
            <div class="slider">
                <div class="slide">
                    <a href="/">
                        <img src="{{ asset('Storage/Game/ML%20Chou.jpeg') }}" alt="Promo Image 1">
                    </a>
                </div>
                <div class="slide">
                    <a href="/">
                        <img src="{{ asset('Storage/Game/Pubg.jpg') }}" alt="Promo Image 2">
                    </a>
                </div>
                <div class="slide">
                    <a href="/">
                        <img src="{{ asset('Storage/Game/VALORANT.jpg') }}" alt="Promo Image 3">
                    </a>
                </div>
            </div>        
            <button class="next" onclick="moveSlide(1)">&#10095;</button>
        </div>
    </div>
</section>   
    
    {{-- Content --}}
    <div class="container" style="padding-top:2cm">
        <div class="row">
            <div class="col fw-bold"><img src="{{ asset('Storage/Logo/fire.jpg') }}" alt="fire" width="20px"> TEMUKAN PRODUK FAVORIT </div>
        </div>
    </div>

{{-- Game Tabs --}}
<div class="container mb-4">
    <div class="row">
        <div class="col text-center">
            <div class="game-tabs">
                <span class="tab-item active" data-category="mobile">Mobile Game</span>
                <span class="tab-item" data-category="pc">PC Game</span>
                {{-- <span class="tab-item" data-category="voucher">VOUCHER</span> --}}
            </div>
        </div>
    </div>
</div>


{{-- Game List --}}
<div class="container">
    <div class="row game-category" data-category="mobile">
        <div class="col-sm-4 text-center mb-4">
            <a href="/ml"><img src="{{ asset('Storage/Game/ML%20Chou.jpeg') }}" alt="ML Logo" width="250px" style="border-radius: 8px"></a>
            <p class="text-white mt-2">Mobile Legend</p>
        </div>
        <div class="col-sm-4 text-center mb-4">
            <a href="/pubg"><img src="{{ asset('Storage/Game/Pubg.jpeg') }}" alt="PUBG Logo" width="250px"></a>
            <p class="text-white mt-2">PUBG MOBILE</p>
        </div>
        <div class="col-sm-4 text-center mb-4">
            <a href="/hok"><img src="{{ asset('Storage/Game/Hok.jpg') }}" alt="Hok Logo" width="250px"></a>
            <p class="text-white mt-2">Honor of Kings</p>
        </div>
    </div>

    <div class="row game-category" data-category="pc" style="display: none;">
        <div class="col-sm-4 text-center mb-4">
            <img src="{{ asset('Storage/Game/VALORANT.jpg') }}" alt="Valo Logo" width="250px">
            <p class="text-white mt-2">Valorant</p>
        </div>
        {{-- Tambahkan game PC lainnya di sini jika ada --}}
    </div>
</div>

    {{-- Logo Kecil --}}
    <div class="container" style="margin-top: 10px; padding-top: 10px">
        <div class="row">
            <div class="col">
                <img src="{{ asset('Storage/Logo/SB%20Store%20Logo.png')}}" alt="SB store" width="50px">&nbsp;&nbsp; SB Store
            </div>
        </div>
    </div>
    {{-- Akhir Logo Kecil --}}

    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-2" style="padding-left: 15px">Peta Situs</div>
            <div class="col-sm-2" style="padding-left: 15px">Dukungan</div>
            <div class="col-sm-2" style="padding-left: 15px">Legalitas</div>
        </div>
    </div>
    {{-- Penjelasan Store --}}
    <div class="container" style="padding-top: 10px;">
        <div class="row">
            <div class="col-sm-4" style="padding-right: 30px">
                SB Store merupakan sebuah platform top up
            </div>
            <div class="col-sm-2" style="padding-bottom: 7.5px;"><a href="/" style="text-decoration: none; color: white;">Beranda</a></div>
            <div class="col-sm-2" style="padding-bottom: 7.5px;"><a href="/" style="text-decoration: none; color: white;">Whatsapp</a></div>
            <div class="col-sm-2" style="padding-bottom: 7.5px;"><a href="/" style="text-decoration: none; color: white;">Kebijakan Pribadi</a></div>
        </div>
        <div class="row">
            <div class="col-sm-4" style="padding-right: 30px">
                game yang 100% RESMI, TERPERCAYA,& ORI. 
            </div>
            <div class="col-sm-2" style="padding-top: 7.5px; padding-bottom: 7.5px;"><a href="/" style="text-decoration: none; color: white;">Hubungi Kami</a></div>
            <div class="col-sm-2" style="padding-top: 7.5px; padding-bottom: 7.5px;"><a href="/" style="text-decoration: none; color: white;">Instagram</a></div>
            <div class="col-sm-2" style="padding-top: 7.5px; padding-bottom: 7.5px;"><a href="/" style="text-decoration: none; color: white;">Syarat & Ketentuan</a></div>
        </div>
        <div class="row">
            <div class="col-sm-4" style="padding-right: 30px;">
                Proses cepat 1 - 3 detik. Jika terdapat kendala
            </div>
            <div class="col-sm-2" style="padding-top: 7.5px;"><a href="/" style="text-decoration: none; color: white;">Ulasan</a></div>
            <div class="col-sm-2" style="padding-top: 7.5px;"><a href="/" style="text-decoration: none; color: white;">Email</a></div>
            <div class="col-sm-2" style="padding-top: 7.5px;"><a href="/" style="text-decoration: none; color: white;"></a></div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                lebih lanjut silakan klik button chat CS untuk berkonsultasi lebih lanjut.
            </div>
        </div>
    </div>
    {{-- Akhir Penjelasan Store --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}

@endsection

<script>
let currentSlide = 0;

function moveSlide(direction) {
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;
    const slider = document.querySelector('.slider');

    currentSlide += direction;

    if (currentSlide >= totalSlides) {
        currentSlide = 0;
    } else if (currentSlide < 0) {
        currentSlide = totalSlides - 1;
    }

    const slideWidth = slides[0].clientWidth;
    slider.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
}

document.addEventListener('DOMContentLoaded', () => {
    moveSlide(0);
});

 document.addEventListener('DOMContentLoaded', () => {
        const tabs = document.querySelectorAll('.tab-item');
        const categories = document.querySelectorAll('.game-category');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const selected = tab.getAttribute('data-category');

                // Toggle active tab class
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');

                // Show/Hide category content
                categories.forEach(cat => {
                    if (cat.getAttribute('data-category') === selected) {
                        cat.style.display = 'flex';
                    } else {
                        cat.style.display = 'none';
                    }
                });
            });
        });

        // Default: show mobile game
        categories.forEach(cat => {
            cat.style.display = cat.getAttribute('data-category') === 'mobile' ? 'flex' : 'none';
        });
    });

</script>