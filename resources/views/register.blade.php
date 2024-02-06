<!doctype html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="style.css">
        <title>Register</title>
    </head>
    <style>
        body {
            background-color: #000000;
            overflow: hidden;
            background: url('img/image.jpg') no-repeat center center fixed;
            /* Ganti 'path/to/your/image.jpg' dengan path atau URL gambar pemandangan Anda */
            background-size: cover;
            /* Menutupi seluruh elemen dengan gambar */
        }

        .mt-6 {
            margin-top: 10%;
        }

        .mt-7{
            margin-top: 30%;
        }

        .card {
            background: rgba(255, 255, 255, 0.664);
            /* Latar belakang card dengan efek transparan */
            border-radius: 10px;
            /* Sudut card yang membulat */
            backdrop-filter: blur(1px);
            /* Efek blur pada latar belakang card */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Bayangan lembut */
        }


        .text-indah {
            color: #ffffff;
            /* Warna teks */
            font-size: 15px;
            /* Ketebalan teks */
            margin-top: 3rem;
            /* Jarak atas */
        }

        .text-indah a {
            transition: color 0.3s;
            /* Animasi perubahan warna tautan */
        }

        .text-indah a:hover {
            color: #0056b3;
            /* Warna tautan saat dihover */
        }
        
        .fc{
            background-color: #7ca5d4b6;
        }

        input::placeholder,input{
            color: #000000;
            text-indent: 5px;
        }
        .tombol{
            background-color: #000000;
            color: #ffffff;
        }

        password-input::placeholder,
        .password-input {
            text-indent: 5px;
        }

        .input-with-bg {
            transition: background-color 0.3s;
        }

        .input-with-bg.has-value {
            background-color: white;
        }

        input[type=submit]:disabled {
            color: black;
            background-color: #5e5c5c5d;
        }


    </style>

    <body>
        <div class="container">
            <div class="justify-content-center">
                <div class="row col-12 mt-7 mx-auto">
                    <div class="card-header text-center">
                        <h1 class="card-title fw-bolder text-white fs-1">DAFTAR</h1>
                    </div>
                    <div class="card-body row mt-6 mx-auto">
                        @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    
                    @if ($errors->any())
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            alert("{{ implode('\n', $errors->all()) }}");
                        });
                    </script>
                    @endif
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            
                            <div class="mb-3 col-11 mx-auto">
                                <label for="name" class="form-label text-white fw-bold">Nama</label>
                                <input type="text" name="name" class="fc required form-control rounded-pill input-with-bg" id="name" placeholder="Ketik nama anda.." style="border: none" onkeyup="enableSubmit()">
                            </div>
                            <div class="mb-3 col-11 mx-auto">
                                <label for="email" class="form-label text-white fw-bold">Email</label>
                                <input type="email" name="email" class="fc required form-control rounded-pill input-with-bg" id="email" placeholder="Ketik email anda.." style="border: none" onkeyup="enableSubmit()">
                            </div>
                            <div class="mb-3 col-11 mx-auto">
                                <label for="nohp" class="form-label text-white fw-bold">No. Handphone</label>
                                <input type="text" name="nohp" class="fc required form-control rounded-pill input-with-bg" id="nohp" placeholder="Ketik no. handphone anda.." style="border: none" onkeyup="enableSubmit()">
                            </div>
                            <div class="mb-3 col-11 mx-auto position-relative">
                                <label for="password" class="form-label text-white fw-bold">Sandi</label>
                                <input type="password" name="password" class="fc required form-control rounded-pill input-with-bg passwordInput" style="border: none" id="password" placeholder="Ketik sandi anda.." onkeyup="enableSubmit()">
                                <i class="bi-eye position-absolute" id="togglePassword" style="font-size: 24px; right: 13px; top: 48%; cursor: pointer;"></i>
                            </div>
                            <div class="mb-3 col-11 mx-auto position-relative">
                                <label for="konfirmasi_password" class="form-label text-white fw-bold">Konfirmasi Sandi</label>
                                <input type="password" name="password_confirmation" class="fc required form-control passwordInput input-with-bg rounded-pill" id="konfirmasi_password" placeholder="Ketik ulang sandi anda.." style="border: none" onkeyup="enableSubmit()">
                                <i class="bi-eye position-absolute" id="toggleKonfirmasiPassword" style="font-size: 24px; right: 13px; top: 48%; cursor: pointer;"></i>
                            </div>
                        
                            <div class="mb-1 mt-4">
                                <div class="col-5 d-grid mx-auto">
                                    <input type="submit" class="btn bg-primary fw-bold mx-auto px-5" style="border-radius: 50px; margin-top: 20px;" value="Daftar" disabled>
                                </div>
                            </div>
                        </form>
                        <p class="text-center text-indah">Sudah punya akun? <a href="{{ route('login') }}" class="fw-bold"> Masuk</a></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <script>
        const passwordInput = document.getElementById("password");
        const togglePasswordButton = document.getElementById("togglePassword");

        togglePasswordButton.addEventListener("click", function() {
            const type = passwordInput.type === "password" ? "text" : "password";
            passwordInput.type = type;
            if (type == 'text') {
                togglePasswordButton.classList.remove("bi-eye");
                togglePasswordButton.classList.add("bi-eye-fill");
            } else {
                togglePasswordButton.classList.add("bi-eye");
                togglePasswordButton.classList.remove("bi-eye-fill");
            }
        });

    </script>

<script>
    const konfirmasiPasswordInput = document.getElementById("konfirmasi_password");
    const toggleKonfirmasiPasswordButton = document.getElementById("toggleKonfirmasiPassword");

    toggleKonfirmasiPasswordButton.addEventListener("click", function() {
        const type = konfirmasiPasswordInput.type === "password" ? "text" : "password";
        konfirmasiPasswordInput.type = type;
        if (type == 'text') {
            toggleKonfirmasiPasswordButton.classList.remove("bi-eye");
            toggleKonfirmasiPasswordButton.classList.add("bi-eye-fill");
        } else {
            toggleKonfirmasiPasswordButton.classList.add("bi-eye");
            toggleKonfirmasiPasswordButton.classList.remove("bi-eye-fill");
        }
    });
</script>

<script>
    const inputs = document.querySelectorAll('.input-with-bg');

    inputs.forEach(input => {
        input.addEventListener('input', event => {
            if (input.value === '') {
                input.classList.remove('has-value');
            } else {
                input.classList.add('has-value');
            }
        });
    });

    function enableSubmit() {
            let inputs = document.getElementsByClassName('required'); // Enter your class name for a required field, this should also be reflected within your form fields.
            let btn = document.querySelector('input[type="submit"]');
            let isValid = true;
            for (var i = 0; i < inputs.length; i++) {
                let changedInput = inputs[i];
                if (changedInput.value.trim() === "" || changedInput.value === null) {
                    changedInput.classList.remove("disabled");
                    isValid = false;
                    break;
                }
            }
            btn.disabled = !isValid;
        }
</script>

</html>