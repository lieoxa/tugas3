@extends('layouts.admin.app')

@section('styles')
    <link rel="shortcut icon" type="image/png" href="{{ asset('admin') }}/dist/images/logos/favicon.ico" />
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
                    <h4 class="fw-semibold mb-8">Contact</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted " href="./index.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{ asset('admin') }}/dist/images/breadcrumb/ChatBc.png" alt=""
                            class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="widget-content searchable-container list">
        <!-- --------------------- start Contact ---------------- -->
        <div class="card card-body px-4 p-2 mb-0 rounded-bottom-0">
            <div class="row">
                <div class="col-md-4 col-xl-3 my-auto">
                    <h4 class="my-auto" style="font-size: 18px">Tabel Akun</h4>
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
        {{-- <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center">
                        <h5 class="modal-title">Contact</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="add-contact-box">
                            <div class="add-contact-content">
                                <form id="addContactModalTitle">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3 contact-name">
                                                <input type="text" id="c-name" class="form-control"
                                                    placeholder="Nama" />
                                                <span class="validation-text text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3 contact-email">
                                                <input type="text" id="c-email" class="form-control"
                                                    placeholder="Email" />
                                                <span class="validation-text text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3 contact-phone">
                                                <input type="text" id="c-phone" class="form-control"
                                                    placeholder="Phone" />
                                                <span class="validation-text text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="btn-add" class="btn btn-success rounded-pill px-4">Rumi</button>
                        <button id="btn-edit" class="btn btn-success rounded-pill px-4">Save</button>
                        <button class="btn btn-danger rounded-pill px-4" data-bs-dismiss="modal"> Batal </button>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="card card-body rounded-top-0">
            <div class="table-responsive">
                <table class="table search-table align-middle text-nowrap">
                    <thead class="header-item">
                        <th>
                            <div class="n-chk align-self-center text-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input primary" id="contact-check-all" />
                                    <label class="form-check-label" for="contact-check-all"></label>
                                    <span class="new-control-indicator"></span>
                                </div>
                            </div>
                        </th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. Tlpn</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                            <tr>
                                <td>
                                    <div class="n-chk align-self-center text-center">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input contact-chkbox primary"
                                                id="checkbox1" />
                                            <label class="form-check-label" for="checkbox1"></label>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->nohp }}</td>
                                <td>
                                    <div class="action-btn">
                                        <a href="{{ route('index.edit', $item->id) }}" class="text-info edit">
                                            <i class="ti ti-edit fs-5"></i>
                                        </a>
                                        <button href="javascript:void(0)" class="text-dark delete ms-2 border-0 bg-transparent">
                                            <i class="ti ti-trash text-danger fs-5"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        <!-- start row -->
                        {{-- <tr class="search-items">
                            <td>
                                <div class="n-chk align-self-center text-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input contact-chkbox primary"
                                            id="checkbox1" />
                                        <label class="form-check-label" for="checkbox1"></label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('admin') }}/dist/images/profile/user-1.jpg" alt="avatar"
                                        class="rounded-circle" width="35" />
                                    <div class="ms-3">
                                        <div class="user-meta-info">
                                            <h6 class="user-name mb-0" data-name="Emma Adams">Emma Adams</h6>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="usr-email-addr" data-email="adams@mail.com">adams@mail.com</span>
                            </td>
                            <td>
                                <span class="usr-ph-no" data-phone="+1 81234567">+62 81234567</span>
                            </td>
                            <td>
                                <div class="action-btn">
                                    <a href="javascript:void(0)" class="text-info edit">
                                        <i class="ti ti-edit fs-5"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                                        <i class="ti ti-trash text-danger fs-5"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr class="search-items">
                            <td>
                                <div class="n-chk align-self-center text-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input contact-chkbox primary"
                                            id="checkbox2" />
                                        <label class="form-check-label" for="checkbox2"></label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('admin') }}/dist/images/profile/user-2.jpg" alt="avatar"
                                        class="rounded-circle" width="35" />
                                    <div class="ms-3">
                                        <div class="user-meta-info">
                                            <h6 class="user-name mb-0" data-name="Olivia Allen">Olivia Allen</h6>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="usr-email-addr" data-email="allen@mail.com">allen@mail.com</span>
                            </td>
                            <td>
                                <span class="usr-ph-no" data-phone="+91 (125) 450-1500">+91 (125) 450-1500</span>
                            </td>
                            <td>
                                <div class="action-btn">
                                    <a href="javascript:void(0)" class="text-info edit">
                                        <i class="ti ti-edit fs-5"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                                        <i class="ti ti-trash text-danger fs-5"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr class="search-items">
                            <td>
                                <div class="n-chk align-self-center text-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input contact-chkbox primary"
                                            id="checkbox3" />
                                        <label class="form-check-label" for="checkbox3"></label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('admin') }}/dist/images/profile/user-3.jpg" alt="avatar"
                                        class="rounded-circle" width="35" />
                                    <div class="ms-3">
                                        <div class="user-meta-info">
                                            <h6 class="user-name mb-0" data-name="Isabella Anderson"> Isabella Anderson
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="usr-email-addr" data-email="anderson@mail.com">anderson@mail.com</span>
                            </td>
                            <td>
                                <span class="usr-ph-no" data-phone="+91 (100) 154-1254">+91 (100) 154-1254</span>
                            </td>
                            <td>
                                <div class="action-btn">
                                    <a href="javascript:void(0)" class="text-info edit">
                                        <i class="ti ti-edit fs-5"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                                        <i class="ti ti-trash text-danger fs-5"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr class="search-items">
                            <td>
                                <div class="n-chk align-self-center text-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input contact-chkbox primary"
                                            id="checkbox4" />
                                        <label class="form-check-label" for="checkbox4"></label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('admin') }}/dist/images/profile/user-4.jpg" alt="avatar"
                                        class="rounded-circle" width="35" />
                                    <div class="ms-3">
                                        <div class="user-meta-info">
                                            <h6 class="user-name mb-0" data-name="Amelia Armstrong"> Amelia Armstrong
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="usr-email-addr" data-email="armstrong@mail.com">armstrong@mail.com</span>
                            </td>
                            <td>
                                <span class="usr-ph-no" data-phone="+91 (154) 199- 1540">+91 (154) 199- 1540</span>
                            </td>
                            <td>
                                <div class="action-btn">
                                    <a href="javascript:void(0)" class="text-info edit">
                                        <i class="ti ti-edit fs-5"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                                        <i class="ti ti-trash text-danger fs-5"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr class="search-items">
                            <td>
                                <div class="n-chk align-self-center text-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input contact-chkbox primary"
                                            id="checkbox5" />
                                        <label class="form-check-label" for="checkbox5"></label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('admin') }}/dist/images/profile/user-5.jpg" alt="avatar"
                                        class="rounded-circle" width="35" />
                                    <div class="ms-3">
                                        <div class="user-meta-info">
                                            <h6 class="user-name mb-0" data-name="Emily Atkinson"> Emily Atkinson </h6>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="usr-email-addr" data-email="atkinson@mail.com">atkinson@mail.com</span>
                            </td>
                            <td>
                                <span class="usr-ph-no" data-phone="+91 (900) 150- 1500">+91 (900) 150- 1500</span>
                            </td>
                            <td>
                                <div class="action-btn">
                                    <a href="javascript:void(0)" class="text-info edit">
                                        <i class="ti ti-edit fs-5"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                                        <i class="ti ti-trash text-danger fs-5"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr class="search-items">
                            <td>
                                <div class="n-chk align-self-center text-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input contact-chkbox primary"
                                            id="checkbox6" />
                                        <label class="form-check-label" for="checkbox6"></label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('admin') }}/dist/images/profile/user-1.jpg" alt="avatar"
                                        class="rounded-circle" width="35" />
                                    <div class="ms-3">
                                        <div class="user-meta-info">
                                            <h6 class="user-name mb-0" data-name="Sofia Bailey">Sofia Bailey</h6>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="usr-email-addr" data-email="bailey@mail.com">bailey@mail.com</span>
                            </td>
                            <td>
                                <span class="usr-ph-no" data-phone="+91 (001) 160- 1845">+91 (001) 160- 1845</span>
                            </td>
                            <td>
                                <div class="action-btn">
                                    <a href="javascript:void(0)" class="text-info edit">
                                        <i class="ti ti-edit fs-5"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                                        <i class="ti ti-trash text-danger fs-5"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="search-items">
                            <td>
                                <div class="n-chk align-self-center text-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input contact-chkbox primary"
                                            id="checkbox7" />
                                        <label class="form-check-label" for="checkbox7"></label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('admin') }}/dist/images/profile/user-2.jpg" alt="avatar"
                                        class="rounded-circle" width="35" />
                                    <div class="ms-3">
                                        <div class="user-meta-info">
                                            <h6 class="user-name mb-0" data-name="Victoria Sharma"> Victoria Sharma </h6>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="usr-email-addr" data-email="sharma@mail.com">sharma@mail.com</span>
                            </td>
                            <td>
                                <span class="usr-ph-no" data-phone="+91 (110) 180- 1600">+91 (110) 180- 1600</span>
                            </td>
                            <td>
                                <div class="action-btn">
                                    <a href="javascript:void(0)" class="text-info edit">
                                        <i class="ti ti-edit fs-5"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                                        <i class="ti ti-trash text-danger fs-5"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="search-items">
                            <td>
                                <div class="n-chk align-self-center text-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input contact-chkbox primary"
                                            id="checkbox8" />
                                        <label class="form-check-label" for="checkbox8"></label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('admin') }}/dist/images/profile/user-3.jpg" alt="avatar"
                                        class="rounded-circle" width="35" />
                                    <div class="ms-3">
                                        <div class="user-meta-info">
                                            <h6 class="user-name mb-0" data-name="Penelope Baker"> Penelope Baker </h6>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="usr-email-addr" data-email="baker@mail.com">baker@mail.com</span>
                            </td>
                            <td>
                                <span class="usr-ph-no" data-phone="+91 (405) 483- 4512">+91 (405) 483- 4512</span>
                            </td>
                            <td>
                                <div class="action-btn">
                                    <a href="javascript:void(0)" class="text-info edit">
                                        <i class="ti ti-edit fs-5"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                                        <i class="ti ti-trash text-danger fs-5"></i>
                                    </a>
                                </div>
                            </td>
                        </tr> --}}
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
