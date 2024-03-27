@extends('layouts.admin.app')

@section('styles')
    <link rel="shortcut icon" type="image/png" href="{{ asset('admin') }}/dist/images/logos/favicon.ico" />
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
    <!-- --------------------------------------------------- -->
    <style>
        * {
            font-family: 'Ubuntu';
        }

        .published {
            color: rgb(0, 192, 0);
            font-weight: bolder;
        }

        .Unpublish {
            color: red;
            font-weight: bolder;
        }

        .btn.disabled {
            background-color: black;
            /* Warna latar belakang hitam saat dinonaktifkan */
            color: white;
            /* Warna teks putih saat dinonaktifkan */
            cursor: not-allowed;
            /* Mengubah kursor menjadi not-allowed saat dinonaktifkan */
        }

        .bi::before,
        [class*=" bi-"]::before {
            line-height: 2;
            vertical-align: -0.2215em;
        }
    </style>
    <!-- --------------------------------------------------- -->
    <link id="themeColors" rel="stylesheet" href="{{ asset('admin') }}/dist/css/style.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection

@section('content')
    <div class="widget-content searchable-container list">
        <!-- --------------------- start Contact ---------------- -->
        @if (count($banner) > 0)
            <div class="card card-body px-4 p-2 mb-3">
                <div class="row">
                    <div class="col-md-4 col-xl-3 my-auto">
                        <h4 class="my-auto fw-bolder" style="font-size: 18px">Daftar Banner</h4>
                    </div>
                    <div
                        class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">

                        <a data-bs-toggle="modal" data-bs-target="#create" id="btn-add-contact" class="btn btn-warning d-flex align-items-center"
                            style="padding: 7px 16px 7px 10px;">
                            <i class="bi bi-plus fs-5"></i>Tambah
                        </a>
                    </div>
                </div>
            </div>
            <!-- ---------------------
                                end Contact
                                ---------------- -->
            <!-- Modal -->

            <div class="card card-body">
                <div class="table-responsive">
                    <table class="table search-table align-middle text-nowrap">
                        <thead class="header-item">
                            {{-- <th>
                            <div class="n-chk align-self-center text-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input primary" id="contact-check-all" />
                                    <label class="form-check-label" for="contact-check-all"></label>
                                    <span class="new-control-indicator"></span>
                                </div>
                            </div>
                        </th> --}}
                            <th class="w-0">No.</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Lokasi Banner</th>
                            <th>Tgl. Film</th>
                            <th>Jam Film</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach ($banner as $items)
                                <tr>
                                    <td class="w-0">{{ $items->id }}</td>
                                    <td><img src="{{ asset('imgdb/' . $items->gambar) }}" alt="" width="120"
                                            height="60" class="rounded"></td>
                                    <td>{{ $items->nama }}</td>
                                    <td>{{ $items->lokasi }}</td>
                                    <td>{{ $items->tglfilm }}</td>
                                    <td>{{ $items->jamfilm }}</td>
                                    <td>
                                        <span
                                            class="usr-status-kost @if ($items->status == 'Publish') published @else Unpublish @endif">{{ $items->status }}</span>
                                    </td>
                                    <td class="px-0">
                                        <div class="action-btn d-flex">
                                            <form action="{{ route('banner.destroy', $items->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="ms-0 btn btn-outline-danger ms-2">
                                                    <i class="ti ti-trash fs-5"></i>
                                                </button>
                                            </form>
                                            <button type="button" class="btn btn-outline-warning ms-1"
                                                style="padding: 0px 18px;" data-bs-toggle="modal" data-bs-target="#edit"><i
                                                    class="bi bi-pencil-square"></i></button>
                                        </div>

                                        <div class="modal fade" id="edit" data-bs-backdrop="static" tabindex="-1"
                                            data-bs-keyboard="false">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content px-3">
                                                    <div class="modal-header d-flex align-items-center">
                                                        <h5 class="modal-title">Tambah Banner</h5>
                                                    </div>
                                                    <form action="{{ route('banner.update', $items->id) }}" class="row"
                                                        method="POST">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="add-contact-box">
                                                                <div class="add-contact-content">
                                                                    <form id="addContactModalTitle">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="mb-3 contact-email">
                                                                                    <label for="">
                                                                                        <h6>Nama Film<span
                                                                                                class="text-danger">*</span>
                                                                                        </h6>
                                                                                    </label>
                                                                                    <input name="nama" id="nama"
                                                                                        type="text" class="form-control"
                                                                                        value="{{ $items->nama }}"
                                                                                        placeholder="Ketik...">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="mb-3 contact-location">
                                                                                    <label for="">
                                                                                        <h6>Jam Film <span
                                                                                                class="text-danger">*</span>
                                                                                        </h6>
                                                                                    </label>
                                                                                    <input name="jamfilm" id="jamfilm"
                                                                                        type="time" class="form-control"
                                                                                        value="{{ $items->jamfilm }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="img-profil mb-2">
                                                                            <img class="mx-auto rounded" id="preview"
                                                                                src="#" alt="Preview" height="150"
                                                                                width="266.66" style="display: none;">
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="mb-3 contact-phone">
                                                                                    <label for="">
                                                                                        <h6>Tanggal Film <span
                                                                                                class="text-danger">*</span>
                                                                                        </h6>
                                                                                    </label>
                                                                                    <input name="tglfilm" id="tglfilm"
                                                                                        type="date" class="form-control"
                                                                                        value="{{ $items->tglfilm }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="mb-3 contact-occupation">
                                                                                    <label for="">
                                                                                        <h6>Status<span
                                                                                                class="text-danger">*</span>
                                                                                        </h6>
                                                                                    </label>
                                                                                    <select name="status"
                                                                                        class="form-select mr-sm-2"
                                                                                        id="status">
                                                                                        <option selected>Pilih...</option>
                                                                                        <option value="Publish"
                                                                                            {{ $items->status == 'Publish' ? 'selected' : '' }}>
                                                                                            Publish</option>
                                                                                        <option value="Unpublish"
                                                                                            {{ $items->status == 'Unpublish' ? 'selected' : '' }}>
                                                                                            Unpublish</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="mb-3 contact-name">
                                                                                    <label for="">
                                                                                        <h6>Gambar Film<span
                                                                                                class="text-danger">*</span>
                                                                                        </h6>
                                                                                    </label>
                                                                                    <input name="gambar" type="file"
                                                                                        value="{{ $items->gambar }}"
                                                                                        class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="mb-3 contact-occupation">
                                                                                    <label for="">
                                                                                        <h6>Lokasi Banner<span
                                                                                                class="text-danger">*</span>
                                                                                        </h6>
                                                                                    </label>
                                                                                    <select name="lokasi"
                                                                                        class="form-select mr-sm-2"
                                                                                        id="inlineFormCustomSelect">
                                                                                        <option selected>Pilih...</option>
                                                                                        <option value="Utama"
                                                                                            {{ $items->lokasi == 'Utama' ? 'selected' : '' }}>
                                                                                            Utama</option>
                                                                                        <option value="Search"
                                                                                            {{ $items->lokasi == 'Search' ? 'selected' : '' }}>
                                                                                            Search</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn rounded-2 px-3" data-bs-dismiss="modal"
                                                                style="background: #838383; color: white;">Batal</button>
                                                            <button type="submit" class="btn btn-warning rounded-2 px-3"
                                                                style="background: #838383; color: #white;">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="justify-content-center">
                    <div class="text-center">
                        <img src="img/empty-banner.png" width="300" style="margin-top: 120px; opacity: 0.5;"><br>
                        <h6 class="fw-medium">Tidak Ada Banner!</h6>
                        <a data-bs-toggle="modal" data-bs-target="#create" id="btn-add-contact"
                            class="btn btn-warning justify-content-center mt-1 align-items-center"
                            style="padding: 7px 16px 7px 10px;">
                            <i class="bi bi-plus fs-5" style="vertical-align: -0.1em;"></i>Tambah Banner
                        </a>
                    </div>
                </div>
        @endif
    </div>
    </div>
    <div class="modal fade" id="create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" x-data="{ nama: '', tglfilm: '', gambar: '', jamfilm: '', status: '', lokasi: '' }">
            <form action="{{ route('banner.store') }}" class="row" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content px-2">
                    <div class="modal-header d-flex align-items-center">
                        <h5 class="modal-title">Tambah Banner</h5>
                    </div>
                    <div class="modal-body">
                        <div class="add-contact-box">
                            <div class="add-contact-content">
                                <form id="addContactModalTitle">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="col-md-12">
                                                <div class="mb-3 contact-email">
                                                    <label for="">
                                                        <h6>Nama Film <span class="text-danger">*</span></h6>
                                                    </label>
                                                    <input name="nama" id="nama" type="text" x-model="nama"
                                                        class="form-control input-with-bg required"
                                                        placeholder="Ketik...">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3 contact-phone">
                                                    <label for="">
                                                        <h6>Tanggal Film <span class="text-danger">*</span></h6>
                                                    </label>
                                                    <input name="tglfilm" id="tglfilm" type="date"
                                                        class="form-control" x-model="tglfilm">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3 contact-name">
                                                    <label for="">
                                                        <h6>Gambar Film <span class="text-danger">*</span></h6>
                                                    </label>
                                                    <input name="gambar" id="gambar" type="file"
                                                        class="form-control" x-model="gambar" onchange="previewImage()">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="col-md-12">
                                                <div class="mb-3 contact-location">
                                                    <label for="">
                                                        <h6>Jam Film <span class="text-danger">*</span></h6>
                                                    </label>
                                                    <input name="jamfilm" id="jamfilm" x-model="jamfilm"
                                                        type="time" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3 contact-occupation">
                                                    <label for="">
                                                        <h6>Status <span class="text-danger">*</span></h6>
                                                    </label>
                                                    <select name="status" class="form-select mr-sm-2" x-model="status"
                                                        id="status">
                                                        <option value="">Pilih...</option>
                                                        <option value="Publish">Publish</option>
                                                        <option value="Unpublish">Unpublish</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3 contact-occupation">
                                                    <label for="">
                                                        <h6>Lokasi Banner<span class="text-danger">*</span></h6>
                                                    </label>
                                                    <select name="lokasi" class="form-select mr-sm-2" x-model="lokasi"
                                                        id="lokasi">
                                                        <option value="">Pilih...</option>
                                                        <option value="Utama">Utama</option>
                                                        <option value="Search">Search</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="img-profil mb-2">
                                        <img class="mx-auto rounded" id="preview" src="#" alt="Preview"
                                            height="150" width="266.66" style="display: none;">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        {{-- <button class="btn btn-danger rounded-2 px-3" :class="name ? 'disabled' : null"
                            data-bs-dismiss="modal">Batal</button> --}}
                        <button type="button" class="btn rounded-2 px-3" style="background: #838383; color: white;"
                            data-bs-dismiss="modal">Batal</button>
                        <button type="submit" id="btn-add" class="btn rounded-2 px-3"
                            style="background: #838383; color: white;"
                            :class="nama && tglfilm && gambar && jamfilm && status && lokasi ? null : 'disabled'">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('admin') }}/dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('admin') }}/dist/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="{{ asset('admin') }}/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('admin') }}/dist/js/app.min.js"></script>
    <script src="{{ asset('admin') }}/dist/js/app.init.js"></script>
    <script src="{{ asset('admin') }}/dist/js/app-style-switcher.js"></script>
    <script src="{{ asset('admin') }}/dist/js/sidebarmenu.js"></script>

    <script src="{{ asset('admin') }}/dist/js/custom.js"></script>

    <script src="{{ asset('admin') }}/dist/js/apps/contact.js"></script>

    <script>
        function previewImage() {
            var imgProfil = document.getElementById('gambar');
            var preview = document.getElementById('preview');

            if (imgProfil.files && imgProfil.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }

                reader.readAsDataURL(imgProfil.files[0]);
            }
        }

        // const inputs = document.querySelectorAll('.input-with-bg');

        // function enableSubmit() {
        //     let inputs = document.getElementsByClassName(
        //     'required'); // Enter your class name for a required field, this should also be reflected within your form fields.
        //     let btn = document.querySelector('input[type="button"]');
        //     let isValid = true;
        //     for (var i = 0; i < inputs.length; i++) {
        //         let changedInput = inputs[i];
        //         if (changedInput.value.trim() === "" || changedInput.value === null) {
        //             changedInput.classList.remove("disabled");
        //             isValid = false;
        //             break;
        //         }
        //     }
        //     btn.disabled = !isValid;
        // }
    </script>
@endpush
