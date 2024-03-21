@extends('layouts.admin.app')

@section('styles')
    <link rel="shortcut icon" type="image/png" href="{{ asset('admin') }}/dist/images/logos/favicon.ico" />
    <!-- --------------------------------------------------- -->

    <!-- --------------------------------------------------- -->
    <link id="themeColors" rel="stylesheet" href="{{ asset('admin') }}/dist/css/style.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection

@section('content')
    <div class="widget-content searchable-container list">
        <div class="card card-body px-4 p-2 mb-3">
            <div class="row">
                <div class="col-md-4 col-xl-3 my-auto">
                    <h4 class="my-auto" style="font-size: 18px">Tambah Banner</h4>
                </div>
                <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                    {{-- <form class="position-relative">
                        <input type="text" class="form-control product-search ps-5" id="input-search"
                            placeholder="Cari User..." />
                        <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                    </form> --}}
                    <a style="padding: 7px 16px 7px 14px;" href="{{ route('banner.index') }}" id="btn-add-contact"
                        class="btn btn-info d-flex align-items-center"><i class="bi bi-badge-ad fs-6 me-1"></i>Daftar Banner
                    </a>
                </div>
            </div>
        </div>
        <!-- Modal -->

        <div class="card card-body ">
            <form action="{{ route('banner.store') }}" class="row" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 col-md-6">
                    <label class="form-label">Gambar</label>
                    <input name="gambar" id="gambar" type="file" class="form-control">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label">Nama</label>
                    <input name="nama" id="nama" type="text" class="form-control" placeholder="Ketik...">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label">Lokasi</label>
                    <select name="lokasi" class="form-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>Pilih...</option>
                        <option value="Utama">Utama</option>
                        <option value="Search">Search</option>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label">Tgl. Film</label>
                    <input name="tglfilm" id="tglfilm" type="date" class="form-control">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label">Jam Film</label>
                    <input name="jamfilm" id="jamfilm" type="time" class="form-control">
                </div>
                <div class="btn-submitm text-end">
                    <button type="submit" class="btn btn-primary">Simpan</button>
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
@endpush
