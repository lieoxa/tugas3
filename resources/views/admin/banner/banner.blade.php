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
        <!-- --------------------- start Contact ---------------- -->
        <div class="card card-body px-4 p-2 mb-3">
            <div class="row">
                <div class="col-md-4 col-xl-3 my-auto">
                    <h4 class="my-auto" style="font-size: 18px">Daftar Banner</h4>
                </div>
                <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                    <div class="action-btn show-btn" style="display: none">
                        <a href="javascript:void(0)"
                            class="delete-multiple btn-light-danger btn me-2 text-danger d-flex align-items-center font-medium">
                            <i class="ti ti-trash text-danger text-danger me-1 fs-5"></i> Hapus Semua Akun
                        </a>
                    </div>
                    {{-- <form class="position-relative">
                        <input type="text" class="form-control product-search ps-5" id="input-search"
                            placeholder="Cari User..." />
                        <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                    </form> --}}
                    {{-- <a style="padding: 7px 16px 7px 10px;" href="{{ route('banner.create') }}" id="btn-add-contact"
                        class="btn btn-info d-flex align-items-center"><i class="bi bi-plus fs-5"></i> Tambah
                    </a> --}}
                    <a href="javascript:void(0)" id="btn-add-contact" class="btn btn-warning d-flex align-items-center"
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
                        <th>Lokasi</th>
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
                                <td>{{ $items->status }}</td>
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
                                    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header d-flex align-items-center">
                                                    <h5 class="modal-title">Tambah Banner</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
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
                                                                            <div class="mb-3 contact-name">
                                                                                <label for="">
                                                                                    <h6>Gambar</h6>
                                                                                </label>
                                                                                <input name="gambar" id="gambar"
                                                                                    type="file"
                                                                                    value="{{ $items->gambar }}"
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mb-3 contact-email">
                                                                                <label for="">
                                                                                    <h6>Nama</h6>
                                                                                </label>
                                                                                <input name="nama" id="nama"
                                                                                    type="text" class="form-control"
                                                                                    value="{{ $items->nama }}"
                                                                                    placeholder="Ketik...">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="mb-3 contact-phone">
                                                                                <label for="">
                                                                                    <h6>Tanggal Film</h6>
                                                                                </label>
                                                                                <input name="tglfilm" id="tglfilm"
                                                                                    type="date" class="form-control"
                                                                                    value="{{ $items->tglfilm }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mb-3 contact-location">
                                                                                <label for="">
                                                                                    <h6>Jam Film</h6>
                                                                                </label>
                                                                                <input name="jamfilm" id="jamfilm"
                                                                                    type="time" class="form-control"
                                                                                    value="{{ $items->jamfilm }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3 contact-occupation">
                                                                                <label for="">
                                                                                    <h6>Lokasi</h6>
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
                                                        <button id="btn-add"
                                                            class="btn btn-warning rounded-3 px-4">Simpan</button>
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
        </div>
    </div>
    <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form action="{{ route('banner.store') }}" class="row" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center">
                        <h5 class="modal-title">Tambah Banner</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="add-contact-box">
                            <div class="add-contact-content">
                                <form id="addContactModalTitle">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3 contact-name">
                                                <label for="">
                                                    <h6>Gambar</h6>
                                                </label>
                                                <input name="gambar" id="gambar" type="file"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3 contact-email">
                                                <label for="">
                                                    <h6>Nama</h6>
                                                </label>
                                                <input name="nama" id="nama" type="text" class="form-control"
                                                    placeholder="Ketik...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3 contact-phone">
                                                <label for="">
                                                    <h6>Tanggal Film</h6>
                                                </label>
                                                <input name="tglfilm" id="tglfilm" type="date"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3 contact-location">
                                                <label for="">
                                                    <h6>Jam Film</h6>
                                                </label>
                                                <input name="jamfilm" id="jamfilm" type="time"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3 contact-occupation">
                                                <label for="">
                                                    <h6>Lokasi</h6>
                                                </label>
                                                <select name="lokasi" class="form-select mr-sm-2"
                                                    id="inlineFormCustomSelect">
                                                    <option selected>Pilih...</option>
                                                    <option value="Utama">Utama</option>
                                                    <option value="Search">Search</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="btn-add" class="btn btn-warning rounded-3 px-4">Tambah</button>
                        {{-- <button id="btn-edit" class="btn btn-success rounded-pill px-4">Save</button>
                    <button class="btn btn-danger rounded-pill px-4" data-bs-dismiss="modal"> Discard </button> --}}
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
@endpush
