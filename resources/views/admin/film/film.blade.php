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

        .columns .columns-right .btn-group .float-right {
            display: none;
        }

        .form-control {
            display: block;
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
                    <button class="btn btn-warning d-flex align-items-center" style="padding: 7px 16px 7px 10px;"
                        data-bs-toggle="modal" data-bs-target="#create">
                        <i class="bi bi-plus fs-5"></i>Tambah
                    </button>
                </div>
            </div>
        </div>
        <!-- ---------------------
                                                end Contact
                                            ---------------- -->
        <!-- Modal -->
        <div class="card card-body rounded-top-0">
            <div class="table-responsive">
                <table class="table search-table align-middle text-nowrap">
                    <thead class="header-item">
                        <th>No.</th>
                        <th>Thumbnail</th>
                        <th>Video</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>View</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($films as $items)
                        <tr>
                            <td>1</td>
                            <td class="d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('img') }}/anim.jpg" alt="avatar" class="rounded" width="50"
                                        height="70" />
                                </div>
                                <div class="ms-2">
                                    {{-- {{ $item->name }} --}}
                                </div>
                            </td>
                            <td><video src="{{ asset('vid') }}/op.mp4" width="120" height="60"
                                    class="border border-dark rounded"></video></td>
                            <td>
                                <p class="mb-0">One Piece: Red</p>
                            </td>
                            <td>Anime</td>
                            <td>Unpublish</td>
                            {{-- <td>{{ $item->email }}</td> --}}
                            {{-- <td>{{ $item->nohp }}</td> --}}
                            {{-- <td>{{ $item->status }}</td> --}}
                            <td class="px-0">
                                <div class="action-btn d-flex">
                                    {{-- <form action="{{ route('user.destroy', $item->id) }}" method="POST"> --}}
                                    @csrf
                                    @method('delete')
                                    <button class="ms-0 btn btn-outline-danger ms-2">
                                        <i class="ti ti-trash fs-5"></i>
                                    </button>
                                    </form>
                                    <button href="" class="btn btn-outline-warning ms-1" style="padding: 7px 18px">
                                        <i class="bi bi-pencil-square"></i></button>
                                    <button href="" class="btn btn-outline-success ms-1" style="padding: 7px 18px">
                                        <i class="bi bi-eye"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $items->id }}</td>
                            <td>{{ $items->thumbnail }}</td>
                            <td>{{ $items->video }}</td>
                            <td>{{ $items->judul }}</td>
                            <td>{{ $items->kategori }}</td>
                            <td>{{ $items->status }}</td>
                        </tr>
                        @endforeach
                        <!-- start row -->
                    </tbody>
                </table>
            </div>
        </div>
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
