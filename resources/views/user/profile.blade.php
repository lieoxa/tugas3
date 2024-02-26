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
                        List Tontonan
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
                <div class="accordion-item">
                    <button class="profil accordion-button collapsed position-relative" type="button">
                        <i class="modus-icons" aria-hidden="true">help</i>
                        Laporkan Film
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
                        type="button">
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
                        <i class="bi bi-search" aria-hidden="true"></i>
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
        <div class="modal-dialog">
            <div class="modal-content edit-profil">
                <div class="modal-dialog text-center py-1">
                    <h1 class="modal-title fs-5" id="profilLabel">Edit Profil</h1>
                </div>
                <hr />
                <div class="modal-body container d-grid gap-3">
                    <div class="image-profil my-auto">
                        <div class="img-profil">
                            <img class="mx-auto" id="preview" src="#" alt="Preview" style="max-width: 40%; max-height: 40%; border-radius: 999px;" />
                        </div>
                    </div>
                    <div class="nama">
                        <h6>Nama</h6>
                        <input type="text" name="" id="" class="w-100 rounded border-dark txt"
                            placeholder="Ketik nama barumu...">
                    </div>
                    <div class="img-profile">
                        <h6>Foto Profil</h6>
                        <input type="file" name="" hidden=""
                            class="w-100 rounded border-dark" onchange="previewImage()" id="fileInput">
                        <label for="fileInput" class="bg-white label-upload w-100 px-2 pt-2 border-dark rounded  text-center"
                            id="file-input-label" for="file-input"><i class="bi bi-upload"></i>Pilih File</label>
                    </div>
                </div>
                <hr />
                <div class="modal-footer mx-auto border-top-0">
                    <button type="submit" class="btn btn-secondary px-3">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bg-success" id="akun" tabindex="-1" aria-labelledby="akunLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content edit-profil">
                <div class="modal-dialog text-center py-1">
                    <h1 class="modal-title fs-5" id="akunLabel">Edit Akun</h1>
                </div>
                <hr />
                <div class="modal-body container d-grid gap-4">
                    <div class="nama">
                        <h6>Email Baru</h6>
                        <input type="text" name="" id="" class="w-100 rounded border-dark txt"
                            placeholder="Ketik email barumu...">
                    </div>
                    <div class="img-profile">
                        <h6>No. Tlpn Baru</h6>
                        <input type="text" name="" class="w-100 rounded border-dark"
                            placeholder="Ketik email barumu...">
                    </div>
                </div>
                <hr />
                <div class="modal-footer mx-auto border-top-0">
                    <button type="button" class="btn btn-secondary py-2">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bg-success" id="password" tabindex="-1" aria-labelledby="passwordLabel"
        aria-hidden="true">
        <div class="modal-content edit-pw">
            <div class="modal-dialog text-center py-1">
                <h1 class="modal-title fs-5" id="passwordLabel">Edit Sandi</h1>
            </div>
            <hr />
            <div class="modal-body container d-grid gap-4">
                <div class="pw-lama">
                    <h6>Sandi Lama</h6>
                    <input type="text" name="" id="" class="w-100 rounded border-dark txt"
                        placeholder="Ketik sandi lamamu...">
                </div>
                <div class="pw-baru">
                    <h6>Sandi Baru</h6>
                    <input type="text" name="" id="" class="w-100 rounded border-dark txt"
                        placeholder="Ketik sandi barumu...">
                </div>
                <div class="confirm-pw">
                    <h6>Konfirmasi Sandi Baru</h6>
                    <input type="text" name="" id="" class="w-100 rounded border-dark txt"
                        placeholder="Ketik ulang sandi barumu...">
                </div>
                <p>Lupa kata sandi? <span class="text-warning"><i>Klik disini</i></span></p>
            </div>
            <hr />
            <div class="modal-footer mx-auto border-top-0">
                <button type="button" class="btn bg-secondary btn-simpan py-2">Simpan</button>
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

</html>
