@extends('layouts.admin.app')

@section('styles')
    <link rel="shortcut icon" type="image/png" href="{{ asset('admin') }}/dist/images/logos/favicon.ico" />
    <link rel="stylesheet" href="{{ asset('admin') }}/dist/libs/bootstrap-table/dist/bootstrap-table.min.css">
    <!-- --------------------------------------------------- -->
    <!-- Core Css -->
    <!-- --------------------------------------------------- -->
    <link id="themeColors" rel="stylesheet" href="{{ asset('admin') }}/dist/css/style.min.css" />
@endsection

@section('content')
    {{-- <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Notes</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted text-decoration-none"
                                    href="./index.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Notes</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{ asset('admin') }}/dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <ul class="nav nav-pills p-3 mb-3 rounded align-items-center card flex-row px-4">
        <div class="my-auto">
            <h4 class="card-title mb-0">Tabel Laporan</h4>
        </div>
    </ul>
    <div class="tab-content">
        <div id="note-full-container" class="note-has-grid row">
            @foreach ($laporans as $items)
                <div class="col-md-4 single-note-item all-category">
                    <div class="card card-body">
                        <span class="side-stick"></span>
                        <div class="d-flex justify-content-between mb-2">
                            <p class="note-date my-auto fs-2">{{ $items->nama }}</p>
                            <form action="{{ route('laporan.destroy', $items->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="bg-transparent border-0 text-danger px-2 py-1 ms-auto" style="font-size: 13px; text-decoration: underline;">
                                    Hapus
                                </button>
                            </form>
                        </div>
                        <div class="note-content">
                            <p class="note-inner-content"
                                data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                                {{ $items->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Modal Add notes -->
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
    <script src="{{ asset('admin') }}/dist/js/apps/notes.js"></script>
@endpush
