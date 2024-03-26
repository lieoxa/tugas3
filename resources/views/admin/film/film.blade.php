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

        .published {
            color: rgb(0, 192, 0);
            font-weight: medium;
        }

        .Unpublish {
            color: red;
            font-weight: medium;
        }

        p {
            margin-bottom: 0px;
        }
    </style>
@endsection

@section('content')
    <div class="widget-content searchable-container list">
        <!-- --------------------- start Contact ---------------- -->
        <div class="card card-body px-4 p-2 mb-3">
            <div class="row">
                <div class="col-md-4 col-xl-3 my-auto">
                    <h4 class="my-auto fw-medium" style="font-size: 18px">Daftar Film</h4>
                </div>
                <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                    <a href="{{ route('film.create') }}" class="btn btn-warning d-flex align-items-center"
                        style="padding: 7px 16px 7px 10px;">
                        <i class="ti ti-plus fs-5"></i>Tambah Film
                    </a>
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
                        <th>Judul</th>
                        <th>Thumbnail</th>
                        <th>Video</th>
                        <th>Kategori</th>
                        <th>View</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($films as $item)
                            {{-- <tr>
                            <td>1</td>
                            <td class="d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('img') }}/anim.jpg" alt="avatar" class="rounded" width="50"
                                        height="70" />
                                </div>
                                <div class="ms-2">
                                </div>
                            </td>
                            <td><video src="{{ asset('vid') }}/op.mp4" width="120" height="60"
                                    class="border border-dark rounded"></video></td>
                            <td>
                                <p class="mb-0">One Piece: Red</p>
                            </td>
                            <td>88.888</td>
                            <td>Anime</td>
                            <td>Unpublish</td>
                            <td class="px-0">
                                <div class="action-btn d-flex">
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
                        </tr> --}}
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->judul }}</td>
                                <td>{{ $item->thumbnail }}</td>
                                <td>{{ $item->video }}</td>
                                <td>{{ $item->kategori }}</td>
                                <td>{{ $item->view }}</td>
                                <td><span
                                        class="usr-status-kost @if ($item->status == 'Publish') published @else Unpublish @endif">{{ $item->status }}</span>
                                </td>
                                <td class="px-0">
                                    <div class="action-btn d-flex">
                                        <form action="{{ route('film.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="ms-0 btn btn-outline-danger ms-2">
                                                <i class="ti ti-trash fs-5"></i>
                                            </button>
                                        </form>
                                        <button href="" class="btn btn-outline-warning ms-1"
                                            style="padding: 7px 18px">
                                            <i class="bi bi-pencil-square"></i></button>
                                        <button href="" class="btn btn-outline-success ms-1"
                                            style="padding: 7px 18px" data-bs-toggle="modal" data-bs-target="#detail">
                                            <i class="bi bi-eye"></i></button>
                                    </div>

                                    <div class="modal fade" id="detail" data-bs-backdrop="static" tabindex="-1" data-bs-keyboard="false">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content px-3">
                                                <div class="modal-header d-flex align-items-center">
                                                    <h5 class="modal-title fw-medium">Detail</h5>
                                                </div>
                                                <form action="{{ route('film.update', $item->id) }}" class="row" method="POST">
                                                    <div class="modal-body">
                                                        <div class="add-contact-box">
                                                            <div class="add-contact-content">
                                                                <form id="addContactModalTitle">
                                                                    <div class="row">
                                                                        <div class="col-md-3 pe-0">
                                                                            <div class="mb-3 contact-email">
                                                                                <img src="{{ asset('imgdb/' . $item->thumbnail) }}" alt=""
                                                                                    width="100" height="130" class="rounded">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9 ps-0">
                                                                            <div class="ms-2 d-block">
                                                                                <h6 class="fw-medium">{{ $item->judul }}</h6>
                                                                                <div class="row">
                                                                                    <div class="col-2">
                                                                                        <p>{{ $item->tahun }}</p>
                                                                                        <p>{{ $item->usia }}</p>
                                                                                        <p>{{ $item->durasi }}</p>
                                                                                        <p>{{ $item->kategori }}</p>
                                                                                    </div>
                                                                                    <div class="col-10">
                                                                                        <p>{{ $item->perusahaan }}</p>
                                                                                        <p>{{ $item->sutradara }}</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        {{-- <div class="col-md-8">
                                                                            <div class="ms-2 d-block">
                                                                            </div>
                                                                        </div> --}}
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <p>{{ $item->deskripsi }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="img-profil mb-2">
                                                                        <img class="mx-auto rounded" id="preview" src="#" alt="Preview"
                                                                            height="150" width="266.66" style="display: none;">
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button style="background: #8a8a8a; color: white;" type="button" class="btn"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
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
