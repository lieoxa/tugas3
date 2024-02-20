<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@trimble-oss/modus-icons@1.9.0/dist/modus-solid/fonts/modus-icons.css">
    <link rel="stylesheet" href="css/detail.css">
    <title>Detail</title>
</head>

<body>
    <nav class="navbar ps-2 pe-3 sticky-top position-fixed w-100 p-0 d-flex justify-content-between" style="height:68.59px;" id="mainNav">
        <div class="d-flex gap-3" style="height: 68.58px">
            <button onclick="window.location='{{ route('movie') }}'" class="btn1 border-0"><i class="bi bi-chevron-left" style="font-size: 30px"></i></button>
            <h2 class="mb-0 txt-detail">Detail</h2>
        </div>
        <span>
            <button class="btn-heart sticky-top border-0" onclick="changeIconAndColor(this)"><i
                    class="bi bi-heart"></i></button>
        </span>
    </nav>
    <div class="full mb-3" style="margin-top: -43px">
        <img src="img/jk.jpg" class="w-100" alt="...">
        <div class="parent position-relative">
            <div class="half mb-4 pt-5"
                style="margin-top: -172px; padding-left: 12px; padding-right: 12px; padding-bottom: 0.49rem;">
                <div class="title mb-2 d-flex justify-content-between">
                    <h1 class="fw-bolder">Jujutsu Kaisen</h1><br>
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
                                    <div class="accordion accordion-flush" id="s1_e1">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button
                                                    class="accordion-button eps-icon-down collapsed border px-2 py-2 rounded-4 border-secondary bg-dark gap-2"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#s1-e1" aria-expanded="false"
                                                    aria-controls="s1-e1">
                                                    <img class="w-10 rounded-3" src="img/e1.png">
                                                    <h6 class="my-auto">Ryomen Sukuna</h6>
                                                </button>
                                            </h2>
                                            <div id="s1-e1" class="accordion-collapse collapse"
                                                data-bs-parent="#s1_e1">
                                                <div class="accordion-body p-0 p-2 d-flex">
                                                    <div class="desc text-white w-75">
                                                        Placeholder content for this accordion,
                                                        which is intended to demonstrate the class. This is the first
                                                        item's accordion body.
                                                    </div>
                                                    <div class="icon-play w-25">
                                                        <img src="img/play-button.png" class="w-100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion accordion-flush" id="s1_e2">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button
                                                    class="accordion-button eps-icon-down collapsed border px-2 py-2 rounded-4 border-secondary bg-dark gap-2"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#s1-e2" aria-expanded="false"
                                                    aria-controls="s1-e2">
                                                    <img class="w-10 rounded-3" src="img/e2.png">
                                                    <h6 class="my-auto">For My Self</h6>
                                                </button>
                                            </h2>
                                            <div id="s1-e2" class="accordion-collapse collapse"
                                                data-bs-parent="#s1_e2">
                                                <div class="accordion-body p-0 p-2">
                                                    <div class="desc text-white">
                                                        Placeholder content for this accordion,
                                                        which is intended to demonstrate the class. This is the first
                                                        item's accordion body.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion accordion-flush" id="s1_e3">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button
                                                    class="accordion-button eps-icon-down collapsed border px-2 py-2 rounded-4 border-info bg-dark gap-2"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#s1-e3" aria-expanded="false"
                                                    aria-controls="s1-e3">
                                                    <img class="w-10 rounded-3" src="img/e3.png">
                                                    <h6 class="my-auto">Girl of Steel</h6>
                                                </button>
                                            </h2>
                                            <div id="s1-e3" class="accordion-collapse collapse"
                                                data-bs-parent="#s1_e3">
                                                <div class="accordion-body p-0 p-2">
                                                    <div class="desc text-white">
                                                        Placeholder content for this accordion,
                                                        which is intended to demonstrate the class. This is the first
                                                        item's accordion body.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion accordion-flush" id="s1_e4">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button
                                                    class="accordion-button eps-icon-down collapsed border px-2 py-2 rounded-4 border-info bg-dark gap-2"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#s1-e4" aria-expanded="false"
                                                    aria-controls="s1-e4">
                                                    <img class="w-10 rounded-3" src="img/e4.png">
                                                    <h6 class="my-auto">Curse Womb Must Die</h6>
                                                </button>
                                            </h2>
                                            <div id="s1-e4" class="accordion-collapse collapse"
                                                data-bs-parent="#s1_e4">
                                                <div class="accordion-body p-0 p-2">
                                                    <div class="desc text-white">
                                                        Placeholder content for this accordion,
                                                        which is intended to demonstrate the class. This is the first
                                                        item's accordion body.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion accordion-flush" id="s1_e5">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button
                                                    class="accordion-button eps-icon-down collapsed border px-2 py-2 rounded-4 border-info bg-dark gap-2"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#s1-e5" aria-expanded="false"
                                                    aria-controls="s1-e5">
                                                    <img class="w-10 rounded-3" src="img/e5.png">
                                                    <h6 class="my-auto">Curse Womb Must Die -ll-</h6>
                                                </button>
                                            </h2>
                                            <div id="s1-e5" class="accordion-collapse collapse"
                                                data-bs-parent="#s1_e5">
                                                <div class="accordion-body p-0 p-2">
                                                    <div class="desc text-white">
                                                        Placeholder content for this accordion,
                                                        which is intended to demonstrate the class. This is the first
                                                        item's accordion body.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion accordion-flush" id="s1_e6">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button
                                                    class="accordion-button eps-icon-down collapsed border px-2 py-2 rounded-4 border-info bg-dark gap-2"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#s1-e6" aria-expanded="false"
                                                    aria-controls="s1-e6">
                                                    <img class="w-10 rounded-3" src="img/e6.png">
                                                    <h6 class="my-auto">After Rain</h6>
                                                </button>
                                            </h2>
                                            <div id="s1-e6" class="accordion-collapse collapse"
                                                data-bs-parent="#s1_e6">
                                                <div class="accordion-body p-0 p-2">
                                                    <div class="desc text-white">
                                                        Placeholder content for this accordion,
                                                        which is intended to demonstrate the class. This is the first
                                                        item's accordion body.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion accordion-flush" id="s1_e7">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button
                                                    class="accordion-button eps-icon-down collapsed border px-2 py-2 rounded-4 border-info bg-dark gap-2"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#s1-e7" aria-expanded="false"
                                                    aria-controls="s1-e7">
                                                    <img class="w-10 rounded-3" src="img/e7.png">
                                                    <h6 class="my-auto">Assault</h6>
                                                </button>
                                            </h2>
                                            <div id="s1-e7" class="accordion-collapse collapse"
                                                data-bs-parent="#s1_e7">
                                                <div class="accordion-body p-0 p-2">
                                                    <div class="desc text-white">
                                                        Placeholder content for this accordion,
                                                        which is intended to demonstrate the class. This is the first
                                                        item's accordion body.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion accordion-flush" id="s1_e8">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button
                                                    class="accordion-button eps-icon-down collapsed border px-2 py-2 rounded-4 border-info bg-dark gap-2"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#s1-e8" aria-expanded="false"
                                                    aria-controls="s1-e8">
                                                    <img class="w-10 rounded-3" src="img/e8.png">
                                                    <h6 class="my-auto">Boredom</h6>
                                                </button>
                                            </h2>
                                            <div id="s1-e8" class="accordion-collapse collapse"
                                                data-bs-parent="#s1_e8">
                                                <div class="accordion-body p-0 p-2">
                                                    <div class="desc text-white">
                                                        Placeholder content for this accordion,
                                                        which is intended to demonstrate the class. This is the first
                                                        item's accordion body.
                                                    </div>
                                                </div>
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
