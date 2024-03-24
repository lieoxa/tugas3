@extends('layouts.admin.app')

@section('styles')
    <link rel="shortcut icon" type="image/png" href="{{ asset('admin') }}/dist/images/logos/favicon.ico" />
    <link rel="stylesheet" href="{{ asset('admin') }}/dist/libs/bootstrap-table/dist/bootstrap-table.min.css">
    <!-- --------------------------------------------------- -->
    <!-- Core Css -->
    <!-- --------------------------------------------------- -->
    <link id="themeColors" rel="stylesheet" href="{{ asset('admin') }}/dist/css/style.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
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
        <div class="card card-body px-4 p-2 mb-0 rounded-bottom-0">
            <div class="row">
                <div class="col-md-4 col-xl-3 my-auto">
                    <h4 class="my-auto" style="font-size: 18px">Daftar Film</h4>
                </div>
                <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
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
                        <th>Tahun</th>
                        <th>Usia</th>
                        <th>Durasi</th>
                        <th>Perusahaan</th>
                        <th>Sutradara</th>

                        <th>Deskripsi</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        {{-- @foreach ($film as $item) --}}
                            <tr>
                                <td>1</td>
                                <td class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img') }}/anim.jpg" alt="avatar"
                                            class="rounded" width="50" height="70"/>
                                    </div>
                                    <div class="ms-2">
                                        {{-- {{ $item->name }} --}}
                                    </div>
                                </td>
                                <td><video src="{{ asset('vid') }}/op.mp4" width="120" height="60" class="border border-warning rounded"></video></td>
                                <td><p>One Piece: Red</p></td>
                                <td>2022</td>
                                <td>13+</td>
                                <td>1j 55m</td>
                                <td>MAPPA</td>
                                <td>Goro Taniguchi</td>
                                <td></td>
                                <td></td>
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
                                        <a href="" class="btn btn-danger ms-1" style="padding: 7px 18px">
                                            <i class="bi bi-ban align-items-center"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        {{-- @endforeach --}}
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
