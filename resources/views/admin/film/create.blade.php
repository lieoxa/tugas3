@extends('layouts.admin.app')

@section('styles')
    <link rel="shortcut icon" type="image/png" href="{{ asset('admin') }}/dist/images/logos/favicon.ico" />
    <link rel="stylesheet" href="{{ asset('admin') }}/dist/libs/bootstrap-table/dist/bootstrap-table.min.css">
    <!-- --------------------------------------------------- -->
    <!-- Core Css -->
    <!-- --------------------------------------------------- -->
    <link id="themeColors" rel="stylesheet" href="{{ asset('admin') }}/dist/css/style.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
    <style>
        * {
            font-family: 'Ubuntu';
        }
    </style>
@endsection

@section('content')
    <div class="widget-content searchable-container list">
        <!-- --------------------- start Contact ---------------- -->
        <div class="card card-body px-4 p-2 mb-3">
            <div class="row">
                <div class="col-md-4 col-xl-3 my-auto">
                    <h4 class="my-auto fw-bolder" style="font-size: 18px">Daftar Film</h4>
                </div>
                <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                    <a href="{{ route('film.index') }}" class="btn btn-warning d-flex align-items-center"
                        style="padding: 7px 16px 7px 8px;">
                        <i class="ti ti-chevron-left fs-6 me-1"></i>Daftar Film
                    </a>
                </div>
            </div>
        </div>
        <!-- ---------------------
                                                        end Contact
                                                    ---------------- -->
        <!-- Modal -->
        <form action="{{ route('film.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control" placeholder="Ketik di sini...">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Tahun Release</label>
                    <input type="number" name="tahun" min="1000" max="3000" step="1" value="" class="d-block form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Rating Usia</label>
                    <select name="usia" class="form-select mr-sm-2">
                        <option value="">Pilih...</option>
                        <option value="SU">SU</option>
                        <option value="13+">13+</option>
                        <option value="17+">17+</option>
                        <option value="21+">21+</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Durasi FIlm</label>
                    <input type="time" name="durasi" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Perusahaan Produksi</label>
                    <input type="Text" name="perusahaan" class="form-control" placeholder="Ketik di sini...">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Sutradara</label>
                    <input type="text" name="sutradara" class="form-control" placeholder="Ketik di sini...">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Kategori</label>
                    <select name="kategori" class="form-select mr-sm-2">
                        <option value="">Pilih...</option>
                        <option value="Film Indonesia">Film Indonesia</option>
                        <option value="Film Korea">Film Korea</option>
                        <option value="Anime">Anime</option>
                        <option value="Super Hero">Super Hero</option>
                        <option value="Horror">Horror</option>
                        <option value="Film MUVIKU">Film MUVIKU</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select mr-sm-2">
                        <option value="">Pilih...</option>
                        <option value="Publish">Publish</option>
                        <option value="Unpublish">Unpublish</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Thumbnail Film</label>
                    <input type="file" name="thumbnail" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Video</label>
                    <input type="file" name="video" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label class="d-block form-label">Deskripsi Film</label>
                    <textarea class="d-block rounded px-1" name="deskripsi" id="" cols="141" style="height: 78px; resize: none;"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning">Tambah</button>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('admin') }}/dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('admin') }}/dist/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="{{ asset('admin') }}/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ---------------------------------------------- -->
    <!-- core files -->
    <!-- ---------------------------------------------- -->
    <script src="{{ asset('admin') }}/dist/js/app.min.js"></script>
    <script src="{{ asset('admin') }}/dist/js/app.init.js"></script>
    <script src="{{ asset('admin') }}/dist/js/app-style-switcher.js"></script>
    <script src="{{ asset('admin') }}/dist/js/sidebarmenu.js"></script>

    <script src="{{ asset('admin') }}/dist/js/custom.js"></script>
    <!-- ---------------------------------------------- -->
    <!-- current page js files -->
    <!-- ---------------------------------------------- -->
    <script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>
    <script src="{{ asset('admin') }}/dist/libs/bootstrap-table/dist/bootstrap-table.min.js"></script>
    <script src="{{ asset('admin') }}/dist/js/plugins/tables/bootstrap-table.init.js"></script>
    
@endpush
