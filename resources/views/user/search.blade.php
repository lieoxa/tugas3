<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="theme-color" content="#000000" />
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@trimble-oss/modus-icons@1.9.0/dist/modus-solid/fonts/modus-icons.css">
    <link rel="stylesheet" href="css/search.css">
    <title>Search</title>
</head>

<body class="container">
    <header class="container fixed-top pb-1 pt-2">
        <nav class="navbar">
            <div class="col-12 position-relative">
                <form class="d-flex col-12" role="search">
                    <input class="form-control" type="search" placeholder="Search..." aria-label="Search">
                    <button type="submit" class="icon-search"><i class="modus-icons"
                            aria-hidden="true">search</i></button>

                </form>
            </div>
        </nav>
    </header>

    <div class="old">
        <div class="iklan">
            <section class="splide new-11" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide coming-soon">
                            <div class="cs">
                                <img src="img/cs.jpg" class="card-img-top-1 w-100 rounded-3">
                            </div>
                        </li>
                        <li class="splide__slide coming-soon">
                            <div class="cs">
                                <img src="img/cs1.jpg" class="card-img-top-1 w-100 rounded-3">
                            </div>
                        </li>
                        <li class="splide__slide coming-soon">
                            <div class="cs">
                                <img src="img/cs2.jpg" class="card-img-top-1 w-100 rounded-3">
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        {{-- <div class="text-center mb-2">
            <div class="mb-4" style="margin-right: 12px; margin-left:12px;" x-show="sliders == '' ? true : false">
                <section class="splide new-1" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide li">
                                <img src="{{ asset('img/anim.jpg') }}" class="card-img-top slider-img" alt="...">
                            </li>
                            <li class="splide__slide li">
                                <img src="{{ asset('img/hero.jpg') }}" class="card-img-top slider-img" alt="...">
                            </li>
                            <li class="splide__slide li">
                                <img src="{{ asset('img/horror.jpg') }}" class="card-img-top slider-img" alt="...">
                            </li>
                            <li class="splide__slide li">
                                <img src="{{ asset('img/drakor.jpg') }}" class="card-img-top slider-img" alt="...">
                            </li>
                            <li class="splide__slide li">
                                <img src="{{ asset('img/fi.jpg') }}" class="card-img-top slider-img" alt="...">
                            </li>
                            <li class="splide__slide li">
                                <img src="{{ asset('img/animasi7.jpg') }}" class="card-img-top slider-img"
                                    alt="...">
                            </li>
                            <li class="splide__slide li">
                                <img src="{{ asset('img/comedy7.jpg') }}" class="card-img-top slider-img"
                                    alt="...">
                            </li>
                            <li class="splide__slide li">
                                <img src="{{ asset('img/anim1.jpg') }}" class="card-img-top slider-img" alt="...">
                            </li>
                            <li class="splide__slide li">
                                <img src="{{ asset('img/hero1.jpg') }}" class="card-img-top slider-img" alt="...">
                            </li>
                            <li class="splide__slide li">
                                <img src="{{ asset('img/horror1.jpg') }}" class="card-img-top slider-img"
                                    alt="...">
                            </li>
                            <li class="splide__slide li">
                                <img src="{{ asset('img/drakor1.jpg') }}" class="card-img-top slider-img"
                                    alt="...">
                            </li>
                            <li class="splide__slide li">
                                <img src="{{ asset('img/fi1.jpg') }}" class="card-img-top slider-img"
                                    alt="...">
                            </li>
                            <li class="splide__slide li">
                                <img src="{{ asset('img/animasi8.jpg') }}" class="card-img-top slider-img"
                                    alt="...">
                            </li>
                            <li class="splide__slide li">
                                <img src="{{ asset('img/comedy6.jpg') }}" class="card-img-top slider-img"
                                    alt="...">
                            </li>
                            <li class="splide__slide li">
                                <img src="{{ asset('img/anim2.jpg') }}" class="card-img-top slider-img"
                                    alt="...">
                            </li>
                            <li class="splide__slide li">
                                <img src="{{ asset('img/hero2.jpg') }}" class="card-img-top slider-img"
                                    alt="...">
                            </li>
                            <li class="splide__slide li">
                                <img src="{{ asset('img/horror2.jpg') }}" class="card-img-top slider-img"
                                    alt="...">
                            </li>
                            <li class="splide__slide li">
                                <img src="{{ asset('img/drakor2.jpg') }}" class="card-img-top slider-img"
                                    alt="...">
                            </li>
                            <li class="splide__slide li">
                                <img src="{{ asset('img/fi2.jpg') }}" class="card-img-top slider-img"
                                    alt="...">
                            </li>
                            <li class="splide__slide li">
                                <img src="{{ asset('img/animasi9.jpg') }}" class="card-img-top slider-img"
                                    alt="...">
                            </li>
                            <li class="splide__slide li">
                                <img src="{{ asset('img/comedy5.jpg') }}" class="card-img-top slider-img"
                                    alt="...">
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div> --}}

        <footer class="menu-wrapper fixed-bottom">
            <div class="navigation container" id="navigationn">
                <li onclick="window.location='{{ route('movie') }}'">
                    <a class="btnn border-end-0 border-bottom-0 border-start-0">
                        <img src="img/logo-muviku.png" class="mb-1" style="width: 20%;">
                        <span>Utama</span>
                    </a>
                </li>
                <li onclick="window.location='{{ route('search') }}'">
                    <a class="btnn border-end-0 border-bottom-0 border-start-0 active">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25"
                            viewBox="0,0,256,256">
                            <defs>
                                <radialGradient cx="20.024" cy="20.096" r="19.604"
                                    gradientUnits="userSpaceOnUse" id="color-1_KPmthqkeTgDN_gr1">
                                    <stop offset="0.693" stop-color="#e6551c"></stop>
                                    <stop offset="0.921" stop-color="#e6551c"></stop>
                                </radialGradient>
                                <linearGradient x1="8.911" y1="8.911" x2="31.339" y2="31.339"
                                    gradientUnits="userSpaceOnUse" id="color-2_KPmthqkeTgDN_gr2">
                                    <stop offset="0" stop-color="#e6551c"></stop>
                                    <stop offset="0.223" stop-color="#e6551c"></stop>
                                    <stop offset="0.53" stop-color="#e6551c"></stop>
                                    <stop offset="0.885" stop-color="#e6551c"></stop>
                                    <stop offset="1" stop-color="#e6551c"></stop>
                                </linearGradient>
                            </defs>
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                <g transform="scale(5.33333,5.33333)">
                                    <path
                                        d="M35.983,32.448l-3.536,3.536l7.87,7.87c0.195,0.195 0.512,0.195 0.707,0l2.828,-2.828c0.195,-0.195 0.195,-0.512 0,-0.707z"
                                        fill="#e6551c"></path>
                                    <path d="M31.601,28.065l-3.536,3.536l4.383,4.382l3.535,-3.535z"
                                        fill="url(#color-1_KPmthqkeTgDN_gr1)"></path>
                                    <circle cx="20" cy="20" r="16"
                                        fill="url(#color-2_KPmthqkeTgDN_gr2)"></circle>
                                </g>
                            </g>
                            <g fill="#e6551c" fill-rule="nonzero" stroke="none" stroke-width="1"
                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                <g>
                                    <path
                                        d="M213.02,225.82v0c0,-3.5 1.04,-6.41667 3.12,-8.75c2.07333,-2.33333 5.19,-3.5 9.35,-3.5c4.15333,0 7.30667,1.16667 9.46,3.5c2.15333,2.33333 3.23,5.25 3.23,8.75v0c0,3.35333 -1.07667,6.16 -3.23,8.42c-2.15333,2.26 -5.30667,3.39 -9.46,3.39c-4.16,0 -7.27667,-1.13 -9.35,-3.39c-2.08,-2.26 -3.12,-5.06667 -3.12,-8.42z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <span>Cari</span>
                    </a>
                </li>
                <li>
                    <a class="btnn border-end-0 border-bottom-0 border-start-0">
                        <i class="bi bi-heart" aria-hidden="true"></i>
                        <span>Suka</span>
                    </a>
                </li>
                <li>
                    <a class="btnn border-end-0 border-bottom-0 border-start-0">
                        <i class="bi bi-person fs-4" aria-hidden="true"></i>
                        <span style="margin-top: -4px">Profil</span>
                    </a>
                </li>
            </div>
        </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>
    var inputElement = document.querySelector('.form-control');

    inputElement.addEventListener('input', function() {
        if (this.value.trim() !== '') {
            this.classList.add('form-control-filled');
        } else {
            this.classList.remove('form-control-filled');
        }
    });
</script>

<script>
    var splide = new Splide('.splide.new-11', {
        arrows: false,
        lazyLoad: 'nearby',
        autoplay: true,
        interval: 4000,
        type: 'loop',
        gap: '0.5rem',
    });
    splide.mount();
</script>
<script>
    document.addEventListener('contextmenu', function(e) {
        e.preventDefault();
    });
</script>
<script>
    var splide = new Splide('.splide.new-1', {
            perPage: 4,
            focus: 0,
            omitEnd: true,
            rewind: true,
            arrows: false,
            pagination: false,
            lazyLoad: 'nearby',
            gap: '0.5rem',
        });

        splide.mount();
</script>
{{-- <script>
    document.querySelector('.form-control').addEventListener('input', function() {
        var icon = document.querySelector('.icon-search i');
        icon.style.color = this.value.trim() !== '' ? 'blue' : ''; // Warna disesuaikan berdasarkan nilai input
    });
</script> --}}
{{-- <script>
    var btnContainer = document.getElementById("navigationn");
    var btnns = btnContainer.getElementsByClassName("btnn");

    for (var i = 0; i < btnns.length; i++) {
        btnns[i].addEventListener('click', function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        })
    }
</script> --}}

</html>
