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
    <link rel="stylesheet" href="css/profile.css">
    <title>Profile</title>
</head>

<body>

    <div class="old">
        <div class="bg-img position-relative">
            <div class="bg-profile-img bg-profile">
                <img src="img/bg-profile.png" class="w-100">
            </div>
            <div class="foto-profile w-100">
                <div class="foto-nama">
                    <div class="kelas-foto w-100 mb-3">
                        <img src="img/profile.png" class="w-25 foto">
                    </div>
                    <h2 class="text-white text-center">Brahmana Apta Putra
                </div>
            </div>
        </div>
        <div class="container d-grid gap-3 menu">
            <div class="accordion">
                <div class="accordion-item">
                    <button class="profil accordion-button collapsed position-relative rounded-top-3" type="button"
                        data-bs-toggle="modal" data-bs-target="#profil">
                        <i class="modus-icons" aria-hidden="true">person</i>
                        Edit Profil
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>


                <div class="accordion-item rounded-bottom-3">
                    <button class="profil accordion-button collapsed position-relative rounded-bottom-3" type="button"
                        data-bs-toggle="modal" data-bs-target="#akun">
                        <i class="modus-icons" aria-hidden="true">email</i>
                        Edit Akun
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>
            <div class="accordion">
                <div class="accordion-item rounded-top-3">
                    <button class="profil accordion-button collapsed position-relative rounded-top-3" type="button">
                        <i class="bi bi-bookmark-check-fill fs-5"></i>
                        Daftar Tonton
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
                <div class="accordion-item">
                    <button class="profil accordion-button collapsed position-relative" type="button"
                        data-bs-toggle="modal" data-bs-target="#lapor">
                        <i class="modus-icons" aria-hidden="true">help</i>
                        Laporkan Kesalahan
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
                <div class="accordion-item">
                    <button class="profil accordion-button collapsed position-relative" type="button"
                        data-bs-toggle="modal" data-bs-target="#password">
                        <i class="modus-icons" aria-hidden="true">key</i>
                        Edit Sandi
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
                <div class="accordion-item rounded-bottom-3">
                    <button class="profil accordion-button collapsed position-relative text-danger rounded-bottom-3"
                        data-bs-toggle="modal" data-bs-target="#logout" type="button">
                        <i class="modus-icons" aria-hidden="true">sign_out</i>
                        Log Out
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="menu-wrapper fixed-bottom">
            <div class="navigation container-fluid" id="navigationn">
                <li onclick="window.location='{{ route('movie') }}'">
                    <a class="btnn border-end-0 border-bottom-0 border-start-0">
                        <img src="img/logo-muviku.png" class="mb-1" style="width: 20%;">
                        <span>Utama</span>
                    </a>
                </li>
                <li onclick="window.location='{{ route('search') }}'">
                    <a class="btnn border-end-0 border-bottom-0 border-start-0">
                        <i class="bi bi-search pe-0" aria-hidden="true"></i>
                        <span>Cari</span>
                    </a>
                </li>
                <li>
                    <a class="btnn border-end-0 border-bottom-0 border-start-0">
                        <i class="bi bi-heart pe-0" aria-hidden="true"></i>
                        <span>Suka</span>
                    </a>
                </li>
                <li>
                    <a class="btnn border-end-0 border-bottom-0 border-start-0 active">
                        <img src="img/group-1.png" width="20">
                        <span style="margin-top: -4px">Profil</span>
                    </a>
                </li>
            </div>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade bg-success" id="profil" tabindex="-1" aria-labelledby="profilLabel" aria-hidden="true">
        <div class="modal-dialog container">
            <div class="modal-content edit-profil rounded-5">
                <div class="modal-body container pt-0">
                    <div class="image-profil">
                        <div class="img-profil">
                            <img class="mx-auto mt-3" id="preview" src="#" alt="Preview"
                                style="display: none;max-width: 100px; max-height: 100px; border-radius: 999px;" />
                        </div>
                    </div>
                    <div class="body-modal d-grid gap-3">
                        <div class="modal-dialog text-center">
                            <h1 class="modal-title fs-5" id="profilLabel">Edit Profil</h1>
                        </div>
                        <div class="nama">
                            <h6>Nama</h6>
                            <input type="text" name="" id=""
                                class="w-100 rounded border-dark txt" placeholder="Ketik nama barumu...">
                        </div>
                        <div class="img-profile">
                            <h6>Foto Profil</h6>
                            <input type="file" name="" hidden="" class="w-100 rounded border-dark"
                                onchange="previewImage()" id="fileInput">
                            <label for="fileInput"
                                class="bg-white label-upload w-100 px-2 pt-2 border-dark rounded  text-center"
                                id="file-input-label" for="file-input"><i class="bi bi-upload"></i>Pilih File</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer mx-auto border-top-0">
                    <button type="submit" class="btn btn-secondary py-2 px-3">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bg-success text-white" id="akun" tabindex="-1" aria-labelledby="akunLabel"
        aria-hidden="true">
        <div class="modal-dialog container">
            <div class="modal-content border edit-profil rounded-5" style="background: #222327">
                <div class="modal-dialog text-center py-1">
                    <h1 class="modal-title fs-5" id="akunLabel">Edit Akun</h1>
                </div>
                <div class="modal-body container d-grid gap-3 pt-0">
                    <div class="nama">
                        <h6>Email Baru</h6>
                        <input type="email" name="" id="" class="w-100 rounded border-dark txt"
                            placeholder="Ketik email barumu...">
                    </div>
                    <div class="img-profile">
                        <h6>No. Tlpn Baru</h6>
                        <input type="text" name="" class="w-100 rounded border-dark"
                            placeholder="Ketik email barumu...">
                    </div>
                    <div class="select-menu">
                        <div class="select-btn">
                            <span class="sBtn-text">Pilih Gender</span>
                            <i class="bi bi-chevron-down p-0"></i>
                        </div>
                        <ul class="options text-black">
                            <li class="option">
                                <i class="bi bi-gender-male"></i>
                                <span class="option-text">Laki - laki</span>
                            </li>
                            <hr class=" justify-center mx-auto" style="width: 90%">
                            <li class="option">
                                <i class="bi bi-gender-female"></i>
                                <span class="option-text">Perempuan</span>
                            </li>
                        </ul>
                    </div>
                    <div class="nama">
                        <h6>Sosial</h6>
                        <input type="text" name="" id="" class="w-100 rounded border-dark txt"
                            placeholder="Ketik nama barumu...">
                    </div>
                </div>
                <div class="modal-footer mx-auto border-top-0">
                    <button type="button" class="btn btn-secondary py-2 px-3">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal bg-success fade" id="lapor" tabindex="-1" aria-labelledby="laporLabel"
        aria-hidden="true">
        <div class="modal-dialog container">
            <div class="modal-content rounded-5">
                <div class="modal-header border-bottom-0 d-block">
                    <h1 class="modal-title fs-5" id="laporLabel">Laporkan Kesalahan Film</h1>
                </div>
                <div class="modal-body container">
                    <textarea class="w-100 rounded"name="" id="" cols="30" rows="6"></textarea>
                </div>
                <div class="modal-footer border-top-0 justify-content-center">
                    <button type="button" class="btn text-white bg-secondary px-3"
                        data-bs-dismiss="modal">Kirim</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bg-success px-3" id="password" tabindex="-1" aria-labelledby="passwordLabel"
        aria-hidden="true">
        <div class="modal-content modal-dialog-scrollable pw edit-pw rounded-5 py-2">
            <div class="img-lock">
                <div class="img-pw mx-auto d-flex mt-3">
                    <img class="mx-auto" src="img/lock.png" style="max-width: 25%; max-height: 25%;">
                </div>
            </div>
            <div class="modal-dialog  text-center py-1 my-0">
                <h1 class="modal-title fs-5" id="passwordLabel">Ubah Kata Sandi</h1>
            </div>
            <div class="modal-body container d-grid gap-3 pt-0">
                <div class="pw-lama">
                    <h6>Sandi Lama</h6>
                    <input type="password" name="" id=""
                        class="w-100 rounded border-dark txt position-relative" placeholder="Ketik sandi lamamu...">
                    <i class="bi-eye position-absolute icon-eye-pw" style="font-size: 24px; right: 13px;"></i>
                </div>
                <div class="pw-baru">
                    <h6>Sandi Baru</h6>
                    <input type="password" name="" id=""
                        class="w-100 rounded border-dark txt position-relative" placeholder="Ketik sandi barumu...">
                    <i class="bi-eye position-absolute icon-eye-pw" style="font-size: 24px; right: 13px;"></i>
                </div>
                <div class="confirm-pw">
                    <h6>Konfirmasi Sandi Baru</h6>
                    <input type="password" name="" id=""
                        class="w-100 rounded border-dark txt position-relative"
                        placeholder="Ketik ulang sandi barumu...">
                    <i class="bi-eye position-absolute icon-eye-pw" style="font-size: 24px; right: 13px;"></i>
                </div>
                <p class="mb-0">Lupa kata sandi? <span class="text-warning"><i>Klik disini</i></span></p>
            </div>
            <div class="modal-footer mx-auto border-top-0 d-block text-center">
                <button type="button" class="btn bg-secondary btn-simpan py-2 px-4">Simpan</button>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal bg-success fade" id="logout" tabindex="-1" aria-labelledby="logoutLabel"
        aria-hidden="true">
        <div class="modal-dialog container">
            <div class="modal-content rounded-5">
                <div class="modal-header border-bottom-0 text-center d-block pb-0">
                    <h1 class="modal-title fs-5" id="logoutLabel">Anda Yakin Ingin Keluar?</h1>
                </div>
                <div class="modal-footer border-top-0 justify-content-center">
                    <button onclick="window.location='{{ route('login') }}'" type="button"
                        class="btn bg-secondary text-white px-3 py-2" data-bs-dismiss="modal">Iya</button>
                    <button type="button" class="btn btn-danger py-2 px-3" data-bs-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script>
    function previewImage() {
        var fileInput = document.getElementById('fileInput');
        var preview = document.getElementById('preview');

        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }

            reader.readAsDataURL(fileInput.files[0]);
        }
    }
</script>
<script>
    document.addEventListener('contextmenu', function(e) {
        e.preventDefault();
    });
</script>
<script>
    const optionMenu = document.querySelector(".select-menu"),
            selectBtn = optionMenu.querySelector(".select-btn"),
            options = optionMenu.querySelector(".option"),
            sBtn_text = optionMenu.querySelector(".sBtn-text");

selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));

options.forEach(option =>{
    option.addEventListener("click", ()=>{
        let selectedOption = option.querySelector(".option-text").innerText;
        sBtn_text.innerText = selectedOption;
        console.log(selectedOption)
    })
})
</script>
</html>
