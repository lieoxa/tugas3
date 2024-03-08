<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Podcast</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/detail.css">
</head>
<style>
    .bi .bi-three-dots-vertical::before,
    [class*=" bi-three-dots-vertical"]::before,
    [class^=bi-three-dots-vertical]::before {
        line-height: 1;
        vertical-align: 14px;
    }
</style>

<body>
    <div class="full">
        <nav class="navbar ps-2 pe-3 sticky-top w-100 p-0 d-flex justify-content-between" style="height:68.59px;"
            id="mainNav">
            <div class="d-flex gap-3" style="height: 68.58px">
                <button onclick="window.location='{{ route('movie') }}'" class="btn1 border-0"><i
                        class="bi bi-chevron-left" style="font-size: 25px; margin-bottom: 20px;"></i></button>
                <h2 class="mb-0 txt-detail">Detail</h2>
            </div>
            {{-- <span>
                <button class="btn-heart sticky-top border-0" onclick="changeIconAndColor(this)"><i
                        class="bi bi-heart"></i></button>
            </span> --}}
        </nav>
        <div class="video">
            {{-- <img src="img/podcast.jpg" class="w-100"> --}}
            <video controls width="100%" poster="img/podcast.jpg">
                <source src="vid/test.mp4">
            </video>
        </div>
        <div class="container pt-2">
            <div class="mb-4 d-flex justify-content-between">
                <h3 style="height: 47px">Kena Senioritas Di TV, Dicky Difie Capek Pura Pura Baik</h3>
                <div class="select-menu">
                    <div class="select-btn">
                        <span class="sBtn-text"><i class="bi bi-three-dots-vertical" style="font-size: 25px"></i></span>
                        <i class="bx bx-chevron-down"></i>
                        <ul class="options rounded">
                            <li class="option daftar" id="daftar">
                                <span class="option-text"><i class="bi bi-bookmark-check-fill fs-5"></i>Tambahkan ke
                                    Daftar</span>
                            </li>
                            <hr>
                            <li data-bs-toggle="modal" data-bs-target="#lapor" class="option laporkan">
                                <span class="option-text"><i class="bi bi-question-circle-fill fs-5"></i>Laporkan
                                    Film</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <h6 class="d-flex" style="font-size:0.9rem">Channel : <p class="ms-1">HAS Creative</p>
            </h6>
            <h6 class="mb-2 d-flex" style="font-size:0.9rem">Host : <p class="ms-1">Praz Teguh</p>
            </h6>
            <div class="desk">
                <p>Hi Guys! Kembali lagi di Channel HAS Creative, di program Podcast Warung Kopi (PWK). Di episode kali
                    ini, PWK kedatangan seorang komika yang dikenal dengan persona kemayu sering kali dipanggil dengan <span class="additional-text">
                    sebutan Neng Dicky Difie. Dicky Fahrizal atau lebih banyak dikenal dengan nama panggung Dicky
                    Difie, merupakan seorang komika yang lahir pada tanggal 06 Desember 1985. Mengawali karir di
                    dunia komedi dengan mengikuti ajang pencarian bakat komedi bernama Stand Up Comedy Indonesia
                    season 5 pada tahun 2011.</span>
                    <span class="read-more-btn text-primary" onclick="toggleReadMore()">Selengkapnya...</span>
                </p>
            </div>
        </div>
        <div class="btn-fungsional my-4">
            <div class="text-white">
                <ul class="d-flex p-0 justify-content-around" style="list-style: none">
                    <li class="text-center favorit" id="disukai">
                        <i class="bi bi-heart"></i>
                        <h6><small>Disukai</small></h6>
                    </li>
                    <li class="text-center" onclick="downloadVideo('downloadVideo', '')">
                        <div class="mx-auto"><i class="bi bi-download"></i></div>
                        <h6><small>Download</small></h6>
                    </li>
                    <li class="text-center share">
                        <i class="bi bi-share"></i>
                        <h6><small>Bagikan</small></h6>
                    </li>
                </ul>
            </div>
        </div>
        
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
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
    nav.scrolled {
        transition: .7 s ease;
        background - color: #994D1C;
    box-shadow: # 16171 a;
        color: white;
    }
</script>

</html>
