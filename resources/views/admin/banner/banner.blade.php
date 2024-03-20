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
        <div class="card card-body px-4 p-2 mb-0 rounded-bottom-0">
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
                    <a href="javascript:void(0)" id="btn-add-contact" class="btn btn-info d-flex align-items-center">Tambah
                        Banner
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
                        {{-- <th>
                            <div class="n-chk align-self-center text-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input primary" id="contact-check-all" />
                                    <label class="form-check-label" for="contact-check-all"></label>
                                    <span class="new-control-indicator"></span>
                                </div>
                            </div>
                        </th> --}}
                        <th>No.</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($banner as $items)

                        <td>{{ $items->id }}</td>
                        <td>{{ $items->gambar }}</td>
                        <td class="px-0">
                            <div class="action-btn d-flex">
                                <button href="javascript:void(0)" class="ms-0 btn btn-danger delete ms-2">
                                    <i class="ti ti-trash fs-5"></i>
                                </button>
                                <a href="" class="btn btn-warning ms-1">
                                    <i class="ti ti-edit"></i>
                                </a>
                            </div>
                        </td>
                        <tr>
                            {{-- <td>{{ $banner->gambar }}</td> --}}
                        {{-- </tr>
                        <!-- start row -->
                        <tr class="search-items">
                            <td>
                                1
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('img') }}/cs.jpg" alt="avatar" class="rounded" width="130" />
                                </div>
                            </td>
                            <td class="px-0">
                                <div class="action-btn d-flex">
                                    <button href="javascript:void(0)" class="ms-0 btn btn-danger delete ms-2">
                                        <i class="ti ti-trash fs-5"></i>
                                    </button>
                                    <a href="" class="btn btn-warning ms-1">
                                        <i class="ti ti-edit"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="search-items">
                            <td>
                                2
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('img') }}/cs1.jpg" alt="avatar" class="rounded" width="130" />
                                </div>
                            </td>
                            <td class="px-0">
                                <div class="action-btn d-flex">
                                    <button href="javascript:void(0)" class="ms-0 btn btn-danger delete ms-2">
                                        <i class="ti ti-trash fs-5"></i>
                                    </button>
                                    <a href="" class="btn btn-warning ms-1">
                                        <i class="ti ti-edit"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="search-items">
                            <td>3</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('img') }}/cs2.jpg" alt="avatar" class="rounded" width="130" />
                                </div>
                            </td>
                            <td class="px-0">
                                <div class="action-btn d-flex">
                                    <button href="javascript:void(0)" class="ms-0 btn btn-danger delete ms-2">
                                        <i class="ti ti-trash fs-5"></i>
                                    </button>
                                    <a href="" class="btn btn-warning ms-1">
                                        <i class="ti ti-edit"></i>
                                    </a>
                                </div>
                            </td>
                        </tr> --}}
                        @endforeach
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

    <script src="{{ asset('admin') }}/dist/js/app.min.js"></script>
    <script src="{{ asset('admin') }}/dist/js/app.init.js"></script>
    <script src="{{ asset('admin') }}/dist/js/app-style-switcher.js"></script>
    <script src="{{ asset('admin') }}/dist/js/sidebarmenu.js"></script>

    <script src="{{ asset('admin') }}/dist/js/custom.js"></script>

    <script src="{{ asset('admin') }}/dist/js/apps/contact.js"></script>
@endpush
