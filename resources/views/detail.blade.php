<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@trimble-oss/modus-icons@1.9.0/dist/modus-solid/fonts/modus-icons.css">
    <link rel="stylesheet" href="detail.css">
    <title>Detail</title>
</head>

<body>
    <nav class="navbar sticky-top position-fixed w-100 p-0" style="height:68.59px;" id="mainNav">
        <div class="container-fluid d-flex">
            <button onclick="window.location='{{ route('movie') }}'" class="btn1 border-0 position-fixed"><i
                    class="modus-icons" aria-hidden="true">chevron_left</i></button>
        </div>
    </nav>
    <div class="full mb-3" style="margin-top: -43px">
        <img src="img/jk.jpg" class="w-100" alt="...">
        <div class="parent position-relative">
            <div class="half z-2 mb-4 pt-5"
                style="margin-top: -172px; padding-left: 12px; padding-right: 12px; padding-bottom: 0.49rem;">
                <div class="title mb-2 d-flex justify-content-between">
                    <h1 class="fw-bolder">Jujutsu Kaisen</h1><br>
                    <button class="btn-heart sticky-top border-0" onclick="changeIconAndColor(this)"><i
                            class="bi bi-heart"></i></button>
                </div>
                <h6 class="mb-2" style="font-size:0.9rem">Perusahaan produksi : MAPPA</h6>
                <div class="desk">
                    <p>Jujutsu Kaisen bercerita tentang Yuji Itadori yang menjadi murid SMA
                        karena sebuah kejadian,<span class="additional-text"> Iseng-iseng melakukan aktivitas melakukan
                            aktivitas paranormal tanpa
                            dasar dengan klub gaib. Siswa sekolah menengah Yuuji Itadori menghabiskan hari-harinya di
                            ruang klub atau rumah
                            sakit, dimana dia mengunjungi kakeknya yang terbaring di tempat tidur.</span>
                        <span class="read-more-btn text-primary" onclick="toggleReadMore()">Selengkapnya...</span>
                    </p>
                </div>
            </div>
            <div class="episode container">
                <div class="jumlah-e d-flex gap-2">
                    <h5 class="fw-medium mb-3">Season </h5>
                </div>
                <div class="accordion accordion-flush gap-2 d-grid" id="accordionFlushExample">
                    <div class="accordion-item rounded-4 border">
                        <h2 class="accordion-header">
                            <button class="accordion-button rounded-5 collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Season 1
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse rounded-5"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body px-2 pt-0 rounded-5">
                                <div class="row grid gap-2 list-episode list-unstyled">
                                    <li class="col-12 g-col-12">
                                        <div
                                            class="py-2 px-2 d-flex card-body  border border-secondary bg-dark rounded-4">
                                            <div class="ep my-auto w-17"><img class="w-75 rounded-3" src="img/e1.png"
                                                    alt="">
                                            </div>
                                            <div class="epis w-100 d-flex my-auto justify-content-between">
                                                <h6 class="my-auto">Ryomen Sukuna</h6>
                                                <i class="bi bi-chevron-down text-dark rounded-pill fs-5 me-0"
                                                    style="width: 10%"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-12 g-col-12">
                                        <div
                                            class="py-2 px-2 d-flex card-body  border border-secondary bg-dark rounded-4">
                                            <div class="ep my-auto w-17"><img class="w-75 rounded-3" src="img/e2.png"
                                                    alt="">
                                            </div>
                                            <div class="epis w-100 d-flex my-auto justify-content-between">
                                                <h6 class="my-auto">For My Self</h6>
                                                <i class="bi bi-play-circle-fill text-white fs-4 me-0"
                                                    style="width: 10%"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-12 g-col-12">
                                        <div class="py-2 px-2 d-flex card-body border bg-dark border-info rounded-4">
                                            <div class="ep my-auto w-17"><img class="w-75 rounded-3" src="img/e3.png"
                                                    alt="">
                                            </div>
                                            <div class="epis w-100 d-flex my-auto justify-content-between">
                                                <h6 class="my-auto">Girl of Steel</h6>
                                                <i class="bi bi-play-circle-fill text-white fs-4 me-0"
                                                    style="width: 10%"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-12 g-col-12">
                                        <div class="py-2 px-2 d-flex card-body border bg-dark border-info rounded-4">
                                            <div class="ep my-auto w-17"><img class="w-75 rounded-3" src="img/e4.png"
                                                    alt="">
                                            </div>
                                            <div class="epis w-100 d-flex my-auto justify-content-between">
                                                <h6 class="my-auto">Curse Womb Must Die</h6>
                                                <i class="bi bi-play-circle-fill text-white fs-4 me-0 my-auto"
                                                    style="width: 10%"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-12 g-col-12">
                                        <div class="py-2 px-2 d-flex card-body border bg-dark border-info rounded-4">
                                            <div class="ep my-auto w-17"><img class="w-75 rounded-3" src="img/e5.png"
                                                    alt="">
                                            </div>
                                            <div class="epis w-100 d-flex my-auto justify-content-between">
                                                <h6 class="my-auto">Curse Womb Must Die -II-</h6>
                                                <i class="bi bi-play-circle-fill text-white fs-4 me-0"
                                                    style="width: 10%"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-12 g-col-12">
                                        <div class="py-2 px-2 d-flex card-body border bg-dark border-info rounded-4">
                                            <div class="ep my-auto w-17"><img class="w-75 rounded-3" src="img/e6.png"
                                                    alt="">
                                            </div>
                                            <div class="epis w-100 d-flex my-auto justify-content-between">
                                                <h6 class="my-auto">After Rain</h6>
                                                <i class="bi bi-play-circle-fill text-white fs-4 me-0"
                                                    style="width: 10%"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-12 g-col-12">
                                        <div class="py-2 px-2 d-flex card-body border bg-dark border-info rounded-4">
                                            <div class="ep my-auto w-17"><img class="w-75 rounded-3" src="img/e7.png"
                                                    alt="">
                                            </div>
                                            <div class="epis w-100 d-flex my-auto justify-content-between">
                                                <h6 class="my-auto">Assault</h6>
                                                <i class="bi bi-play-circle-fill text-white fs-4 me-0"
                                                    style="width: 10%"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-12 g-col-12">
                                        <div class="py-2 px-2 d-flex card-body border bg-dark border-info rounded-4">
                                            <div class="ep my-auto w-17"><img class="w-75 rounded-3" src="img/e8.png"
                                                    alt="">
                                            </div>
                                            <div class="epis w-100 d-flex my-auto justify-content-between">
                                                <h6 class="my-auto">Boredom</h6>
                                                <i class="bi bi-play-circle-fill text-white fs-4 me-0"
                                                    style="width: 10%"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <div class="accordion accordion-flush" id="accordionFlushExamplee">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed px-2" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseNine"
                                                    aria-expanded="false" aria-controls="flush-collapseNine">
                                                    <img class="w-17 rounded-3" src="img/e8.png">
                                                    <h6 class="my-auto">Boredom</h6>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseNine" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFlushExamplee">
                                                <div class="accordion-body">Placeholder content for this accordion,
                                                    which is intended to demonstrate the <code>.accordion-flush</code>
                                                    class. This is the first item's accordion body.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-4 border">
                        <h2 class="accordion-header">
                            <button class="accordion-button rounded-5 collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Season 2
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse rounded-5"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body px-2 pt-0 rounded-5">
                                <div class="row grid gap-2 list-episode list-unstyled">
                                    <li class="col-12 g-col-12 d-flex">
                                        <div
                                            class="w-50 py-2 px-2 d-flex card-body border border-secondary bg-dark rounded-4 gap-2">
                                            <div class="ep my-auto w-17"><img class="rounded-3" src="img/e1.png"
                                                    style="width: 92%">
                                            </div>
                                            <div class="epis w-75 d-flex justify-content-between">
                                                <h6 class="my-auto">Ryomen Sukuna</h6>
                                                <i class="bi bi-play-circle-fill text-white fs-4 me-0"
                                                    style="visibility: hidden; width: 10%"></i>
                                            </div>
                                        </div>
                                        <div class="my-auto ps-2 w-25 durasi">
                                            <p>05:00 / 23:57</p>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        window.addEventListener("scroll", function() {
            var nav = document.getElementById("mainNav");

            if (window.scrollY > 10) {
                nav.classList.add("scrolled");
            } else {
                nav.classList.remove("scrolled");
            }
        });
    });
</script>
<script>
    let isFavorite = false;

    function changeIconAndColor(button) {
        // Mengambil elemen ikon pada tombol
        var iconElement = button.querySelector("i");

        // Mengganti kelas ikon untuk mengubahnya menjadi bintang terisi (filled star)
        iconElement.classList.toggle("bi-heart");
        iconElement.classList.toggle("bi-heart-fill");

        // Mengubah warna ikon menjadi kuning
        var currentColor = iconElement.style.color;
        iconElement.style.color = (currentColor === "#D04848") ? "" : "#D04848";
        isFavorite = !isFavorite;
    }
</script>
<script>
    document.addEventListener('contextmenu', function(e) {
        e.preventDefault();
    });
</script>
<script>
    function toggleReadMore() {
        const textDesk = document.querySelector('.desk');
        const readMoreBtn = document.querySelector('.read-more-btn');
        const additionalText = document.querySelector('.additional-text');

        textDesk.classList.toggle('expanded');

        if (textDesk.classList.contains('expanded')) {
            additionalText.style.display = 'inline';
            readMoreBtn.textContent = 'Tutup';
        } else {
            additionalText.style.display = 'none';
            readMoreBtn.textContent = 'Selengkapnya...';
        }
    }
</script>

</html>
