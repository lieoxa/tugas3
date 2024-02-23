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
                    <h2 class="text-white text-center">Brahmana Apta Putra Rehan</h2>
                </div>
            </div>
        </div>
        <div class="container d-grid gap-3 menu">
            <div class="accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button id="profil" class="profil accordion-button collapsed position-relative rounded-top-3"
                            type="button">
                            <i class="modus-icons" aria-hidden="true">person</i>
                            Edit Profil
                            <i class="bi bi-chevron-right"></i>
                        </button>
                    </h2>
                </div>
                <div class="accordion-item rounded-bottom-3">
                    <h2 class="accordion-header">
                        <button id="akun"
                            class="profil accordion-button collapsed position-relative rounded-bottom-3" type="button">
                            <i class="modus-icons" aria-hidden="true">email</i>
                            Edit Akun
                            <i class="bi bi-chevron-right"></i>
                        </button>
                    </h2>
                </div>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item rounded-top-3">
                    <h2 class="accordion-header">
                        <button class="profil accordion-button collapsed position-relative rounded-top-3"
                            type="button">
                            <i class="bi bi-bookmark-check-fill fs-5"></i>
                            List Tontonan
                            <i class="bi bi-chevron-right"></i>
                        </button>
                    </h2>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button id="laporan" class="profil accordion-button collapsed position-relative"
                            type="button">
                            <i class="modus-icons" aria-hidden="true">help</i>
                            Laporkan
                            <i class="bi bi-chevron-right"></i>
                        </button>
                    </h2>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="profil accordion-button collapsed position-relative" type="button">
                            <i class="modus-icons" aria-hidden="true">key</i>
                            Edit Sandi
                            <i class="bi bi-chevron-right"></i>
                        </button>
                    </h2>
                </div>
                <div class="accordion-item rounded-bottom-3">
                    <h2 class="accordion-header">
                        <button id="log-out" class="profil accordion-button collapsed position-relative text-danger rounded-bottom-3"
                            type="button">
                            <i class="modus-icons" aria-hidden="true">sign_out</i>
                            Log Out
                            <i class="bi bi-chevron-right"></i>
                        </button>
                    </h2>
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
                        <img src="img/group-3.png" width="30">
                        <span style="margin-top: -4px">Profil</span>
                    </a>
                </li>
            </div>
        </div>
    </footer>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('profil').addEventListener('click', function() {

        Swal.fire({
            width: 369,
            title: "Edit Profil",
            imageUrl: "{{ asset('img/profile.png') }}",
            input: "file",
            imageWidth: 100,
            imageHeight: 100,
            imageAlt: "Custom image",
            showCancelButton: true,
            confirmButtonText: "Save",
            denyButtonText: `Don't save`
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                Swal.fire("Saved!", "", "success");
            }
        })
    });

    document.getElementById('laporan').addEventListener('click', async function() {
        const {
            value: text
        } = await Swal.fire({
            input: "textarea",
            title: "Laporkan",
            inputPlaceholder: "Ketik laporanmu disini...",
            inputAttributes: {
                "aria-label": "Type your message here"
            },
            showCancelButton: true,
            width: 369,
        });
        if (text) {
            Swal.fire(text);
        }
    });

    document.getElementById('log-out').addEventListener('click', async function() {
        Swal.fire({
            title: "Tetap ingin keluar?",
            width: 369,
            showDenyButton: true,
            confirmButtonText: "Iya",
            denyButtonText: `Tidak`
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                Swal.fire("logout berhasil!", "", "success");
            } 
        });

    });
</script>

</html>
