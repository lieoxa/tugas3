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
    <nav class="navbar ps-2 pe-3 sticky-top position-fixed w-100 p-0 d-flex justify-content-between"
        style="height:68.59px;" id="mainNav">
        <div class="d-flex gap-3" style="height: 68.58px">
            <button onclick="window.location='{{ route('movie') }}'" class="btn1 border-0"><i class="bi bi-chevron-left"
                    style="font-size: 25px; margin-bottom: 20px;"></i></button>
            <h2 class="mb-0 txt-detail">Detail</h2>
        </div>
        <span>
            <button class="btn-heart sticky-top border-0" onclick="changeIconAndColor(this)"><i
                    class="bi bi-heart"></i></button>
        </span>
    </nav>
    <div class="full mb-3" style="margin-top: -43px">
        <img src="img/anim.jpg" class="w-100 thumbnail-detail" alt="...">
        <div class="parent position-relative">
            <div class="half mb-4 pt-5"
                style="margin-top: -172px; padding-left: 12px; padding-right: 12px; padding-bottom: 0.49rem;">
                <div class="title mb-2 d-flex justify-content-between">
                    <h1 class="fw-bolder">One Piece Film: Red</h1><br>
                    <i class="bi bi-three-dots-vertical" style="font-size: 25px"></i>
                </div>
                <div class="d-flex gap-2" style="font-size: 15px">
                    <div class="tahun w-auto">2022</div>
                    <div class="umur w-auto bg-secondary px-2">13+</div>
                    <div class="durasi w-auto">1h 55m</div>
                </div>
                <h6 class="mb-2" style="font-size:0.9rem">Perusahaan produksi : MAPPA</h6>
                <div class="desk">
                    <p>JSebagai seorang anak, Uta—mantan musisi Bajak Laut Rambut Merah dan teman masa kecil Monkey
                        D.
                        Luffy—berjanji bahwa dia akan membangun era baru, kebebasan dengan menampilkan musik yang
                        menyenangkan bagi dunia.<span class="additional-text"> Luffy dan Kru Topi Jerami tiba di
                            konser
                            live pertama Uta, di mana banyak penggemar berkumpul untuk menikmati nyanyian dunia lain
                            sang diva. Karena trauma masa kecil, Uta memiliki kebencian yang mendalam terhadap bajak
                            laut, yang mana membuat reuni bahagianya dengan Luffy hanya sebentar, terutama ketika
                            dia
                            mengetahui kalau Luffy telah menjadi bajak laut itu sendiri. Penolakan Luffy untuk
                            berhenti
                            menjadi bajak laut membuat Uta mengerahkan kekuatannya pada kru Topi Jerami. Mereka
                            segera
                            sadar kalau pikiran mereka telah terperangkap di dunia mimpi yang diciptakan oleh Uta
                            sejak
                            awal konser, sementara tubuh asli mereka tertidur di dunia nyata.</span>
                        <span class="read-more-btn text-primary" onclick="toggleReadMore()">Selengkapnya...</span>
                    </p>
                </div>
            </div>
            <div class="episode container">
                <button class=""></button>
            </div>
            {{-- <div class="episode container">
                <div class="jumlah-e d-flex gap-2">
                    <h5 class="fw-medium mb-3"> Season</h5>
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
                                                    type="button" data-bs-toggle="collapse" data-bs-target="#s1-e1"
                                                    aria-expanded="false" aria-controls="s1-e1">
                                                    <img class="w-10 rounded-3" src="img/e1.png">
                                                    <h6 class="my-auto">One Piece Red</h6>
                                                </button>
                                            </h2>
                                            <div id="s1-e1" class="accordion-collapse collapse"
                                                data-bs-parent="#s1_e1">
                                                <div class="accordion-body p-0 p-2 d-flex">
                                                    <video id="myVideo" poster="img/tren-anim.jpg"
                                                        style="width: 200px; height: 100px;">
                                                        <source
                                                            src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4">
                                                    </video>
                                                    <div class="icon-play w-100 text-end my-auto"
                                                        onclick="playVideo();">
                                                        <img src="img/play-button.png" style="width: 60%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
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
<script>
    function playVideo() {
        var elem = document.getElementsByTagName('video')[0];
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.mozRequestFullScreen) {
            elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullscreen) {
            elem.webkitRequestFullscreen();
        } else if (elem.msRequestFullscreen) {
            elem.msRequestFullscreen();
        } else {
            alert("Full screen not supported");
            return;
        }
        elem.play();
    }
</script>
<script>
    function playVideo() {
        var video = document.getElementById('myVideo');
        if (video.requestFullscreen) {
            video.requestFullscreen();
        } else if (video.mozRequestFullScreen) {
            video.mozRequestFullScreen();
        } else if (video.webkitRequestFullscreen) {
            video.webkitRequestFullscreen();
        } else if (video.msRequestFullscreen) {
            video.msRequestFullscreen();
        } else {
            alert("Full screen not supported");
            return;
        }
        video.play();

        video.addEventListener('webkitfullscreenchange', exitHandler);
        video.addEventListener('mozfullscreenchange', exitHandler);
        video.addEventListener('fullscreenchange', exitHandler);
        video.addEventListener('MSFullscreenChange', exitHandler);
    }

    function exitHandler() {
        if (!document.webkitIsFullScreen && !document.mozFullScreen && !document.fullscreenElement) {
            var video = document.getElementById('myVideo');
            video.currentTime = 0;
            video.src = video.poster;
            video.load();
        }
    }
</script>

</html>
