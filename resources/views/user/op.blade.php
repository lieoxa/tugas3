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
    <style>
        .bi .bi-play-fill::before,
        [class*=" bi-play-fillbi"]::before,
        [class^=bi-play-fill]::before {
            line-height: 1.6;
            vertical-align: initial;
        }

        .bi .bi-three-dots-vertical::before,
        [class*=" bi-three-dots-vertical"]::before,
        [class^=bi-three-dots-vertical]::before {
            line-height: 1;
            vertical-align: 8px;
        }
    </style>
</head>

<body>
    <section>
        <nav class="navbar ps-2 pe-3 sticky-top w-100 p-0 d-flex justify-content-between" style="height:68.59px;"
            id="mainNav">
            <div class="d-flex gap-3" style="height: 68.58px">
                <button onclick="window.location='{{ route('movie') }}'" class="btn1 border-0"><i
                        class="bi bi-chevron-left" style="font-size: 25px; margin-bottom: 20px;"></i></button>
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
                        <h1 class="fw-bolder">One Piece Film: Red</h1>
                        {{--  --}}
                        <div class="select-menu" onclick=showSidebar()>
                            <div class="select-btn" onclick=showSidebar()>
                                <span class="sBtn-text"><i class="bi bi-three-dots-vertical"
                                        style="font-size: 25px"></i></span>
                                <i class="bx bx-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                    <ul class="options rounded">
                        <li class="option daftar">
                            <span class="option-text"><i class="bi bi-bookmark-check-fill fs-5"></i>Tambahkan ke
                                Daftar</span>
                        </li>
                        <hr>
                        <li class="option laporkan">
                            <span class="option-text"><i class="bi bi-question-circle-fill fs-5"></i>Laporkan
                                Film</span>
                        </li>
                    </ul>
                    <div class="d-flex gap-2" style="font-size: 15px">
                        <div class="tahun w-auto">2022</div>
                        <div class="umur w-auto bg-secondary px-1">13+</div>
                        <div class="durasi w-auto">1j 55m</div>
                    </div>
                    <h6 class="mb-2" style="font-size:0.9rem">Perusahaan produksi : MAPPA</h6>
                    <div class="btn-play">
                        <a id="myButton" onclick="playVideo()" class="btn btn-light w-100 mt-2" href="#"
                            style="margin-bottom: 14px !important;"><i class="bi bi-play-fill fs-1 my-auto"></i><span
                                class="fs-5 fw-bold">Putar</span></a>
                    </div>
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
                    <iframe src="https://drive.google.com/file/d/1dO9S5lNaI5Cqn3xof4Yjmi41j6K0fgAg/preview"
                        width="100%" height="auto" allow="autoplay" allowfullscreen="true"></iframe>
                </div>
            </div>
        </div>
    </section>
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
        var elem = document.getElementsByTagName('iframe')[0];
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
    // Get iframe element
    const iframe = document.querySelector('iframe');

    // Show iframe
    iframe.classList.add('show');
</script>
<script>
        // const optionMenu = document.querySelector(".select-menu"),
        //     selectBtn = optionMenu.querySelector(".select-btn"),
        //     options = optionMenu.querySelectorAll(".option"),
        //     sBtn_text = optionMenu.querySelector(".sBtn-text");

</script>
<script>
    function showSidebar(){
        const options = document.querySelector('.options')
        options.style.display = 'block'
    }
    function hideSidebar() {
        const options = document.querySelector('.options')
        options.style.display = 'none'
    }
</script>

</html>
