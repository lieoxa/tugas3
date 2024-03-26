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
                    <h4 class="my-auto fw-bolder" style="font-size: 18px">Daftar Akun User</h4>
                </div>
                <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                    <div class="action-btn show-btn" style="display: none">
                        <a href="javascript:void(0)"
                            class="delete-multiple btn-light-danger btn me-2 text-danger d-flex align-items-center font-medium">
                            <i class="ti ti-trash text-danger text-danger me-1 fs-5"></i> Hapus Semua Akun
                        </a>
                    </div>
                    <form class="position-relative">
                        <input type="text" class="form-control product-search ps-5" id="input-search"
                            placeholder="Cari User..." />
                        <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                    </form>
                    {{-- <a href="javascript:void(0)" id="btn-add-contact" class="btn btn-info d-flex align-items-center">
                        <i class="ti ti-users text-white me-1 fs-5"></i> Add Contact
                    </a> --}}
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
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. Tlpn</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($users as $useracc)
                            <tr>
                                <td>{{ $useracc->id }}</td>
                                <td class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('admin') }}/dist/images/profile/user-1.jpg" alt="avatar"
                                            class="rounded-circle" width="35" />
                                    </div>
                                    <div class="ms-2">
                                        {{ $useracc->name }}
                                    </div>
                                </td>
                                <td>{{ $useracc->email }}</td>
                                <td>{{ $useracc->nohp }}</td>
                                <td>{{ $useracc->status }}</td>
                                <td class="px-0">
                                    <div class="action-btn d-flex">
                                        <form action="{{ route('user.destroy', $useracc->id) }}" method="POST">
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

    <script src="{{ asset('admin') }}/dist/js/app.min.js"></script>
    <script src="{{ asset('admin') }}/dist/js/app.init.js"></script>
    <script src="{{ asset('admin') }}/dist/js/app-style-switcher.js"></script>
    <script src="{{ asset('admin') }}/dist/js/sidebarmenu.js"></script>

    <script src="{{ asset('admin') }}/dist/js/custom.js"></script>

    <script src="{{ asset('admin') }}/dist/js/apps/contact.js"></script>
@endpush
