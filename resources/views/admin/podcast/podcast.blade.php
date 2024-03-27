@extends('layouts.admin.app')

@section('styles')
    <link rel="shortcut icon" type="image/png" href="{{ asset('admin') }}/dist/images/logos/favicon.ico" />
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
    <!-- --------------------------------------------------- -->
    <style>
        * {
            font-family: 'Ubuntu';
        }

        .published {
            color: rgb(0, 192, 0);
            font-weight: bolder;
        }

        .Unpublish {
            color: red;
            font-weight: bolder;
        }

        .btn.disabled {
            background-color: black;
            /* Warna latar belakang hitam saat dinonaktifkan */
            color: white;
            /* Warna teks putih saat dinonaktifkan */
            cursor: not-allowed;
            /* Mengubah kursor menjadi not-allowed saat dinonaktifkan */
        }
    </style>
    <!-- --------------------------------------------------- -->
    <link id="themeColors" rel="stylesheet" href="{{ asset('admin') }}/dist/css/style.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection

@section('content')
    <div class="widget-content searchable-container list">
        <!-- --------------------- start Contact ---------------- -->
        @if (count($podcast) > 0)
        <div class="card card-body px-4 p-2 mb-3">
            <div class="row">
                <div class="col-md-4 col-xl-3 my-auto">
                    <h4 class="my-auto fw-medium" style="font-size: 18px">Daftar Podcast</h4>
                </div>
                <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                    <a data-bs-toggle="modal" data-bs-target="#create" class="btn btn-warning d-flex align-items-center"
                        style="padding: 7px 16px 7px 10px;">
                        <i class="ti ti-plus fs-5"></i>Tambah Podcast
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
                        <th>Channel</th>
                        <th>Host</th>
                        <th>Thumbnail</th>
                        <th>Video</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($podcast as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->judul }}</td>
                                <td>{{ $item->channel }}</td>
                                <td>{{ $item->host }}</td>
                                <td>{{ $item->thumbnail }}</td>
                                <td>{{ $item->video }}</td>
                                <td><span
                                        class="usr-status-kost @if ($item->status == 'Publish') published @else Unpublish @endif">{{ $item->status }}</span>
                                </td>
                                <td class="px-0">
                                    <div class="action-btn d-flex">
                                        <form action="{{ route('broadcast.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="ms-0 btn btn-outline-danger ms-2">
                                                <i class="ti ti-trash fs-5"></i>
                                            </button>
                                        </form>
                                        <a href="{{ route('broadcast.edit', $item->id) }}"
                                            class="btn btn-outline-warning ms-1" style="padding: 7px 18px">
                                            <i class="bi bi-pencil-square"></i></a>
                                        <button href="" class="btn btn-outline-success ms-1"
                                            style="padding: 7px 18px" data-bs-toggle="modal" data-bs-target="#detail">
                                            <i class="bi bi-eye"></i></button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <div class="justify-content-center">
                <div class="text-center">
                    <img src="img/empty-banner.png" width="300" style="margin-top: 120px; opacity: 0.5;"><br>
                    <h6 class="fw-medium">Tidak Ada Podcast!</h6>
                    <a data-bs-toggle="modal" data-bs-target="#create"
                        class="btn btn-warning justify-content-center mt-1 align-items-center"
                        style="padding: 7px 16px 7px 10px;">
                        <i class="bi bi-plus fs-5" style="vertical-align: -0.1em;"></i>Tambah Film
                    </a>
                </div>
            </div>
        </div>
        @endif
    </div>
    <div class="modal fade" id="create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" x-data="{ judul: '', channel: '', host: '', thumbnail: '', status: '', deskripsi: '',  video: '' }">
            <form action="{{ route('broadcast.store') }}" class="row" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content px-2">
                    <div class="modal-header d-flex align-items-center">
                        <h5 class="modal-title">Tambah Podcast</h5>
                    </div>
                    <div class="modal-body">
                        <div class="add-contact-box">
                            <div class="add-contact-content">
                                <form id="addContactModalTitle">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3 contact-email">
                                                <label for="">
                                                    <h6>Judul <span class="text-danger">*</span></h6>
                                                </label>
                                                <input name="judul" id="judul" type="text" x-model="judul"
                                                    class="form-control input-with-bg required" placeholder="Ketik...">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3 contact-email">
                                                <label for="">
                                                    <h6>Video <span class="text-danger">*</span></h6>
                                                </label>
                                                <input name="video" id="video" type="url" x-model="video"
                                                    class="form-control input-with-bg required" placeholder="Ketik URL...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3 contact-phone">
                                                <label for="">
                                                    <h6>Channel <span class="text-danger">*</span></h6>
                                                </label>
                                                <input name="channel" id="channel" type="text" class="form-control"
                                                    x-model="channel" placeholder="Ketik...">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3 contact-name">
                                                <label for="">
                                                    <h6>Host <span class="text-danger">*</span></h6>
                                                </label>
                                                <input name="host" id="host" type="text" class="form-control"
                                                    x-model="host" onchange="previewImage()" placeholder="Ketik...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3 contact-location">
                                                <label for="">
                                                    <h6>Thumbnail <span class="text-danger">*</span></h6>
                                                </label>
                                                <input name="thumbnail" id="thumbnail" x-model="thumbnail"
                                                    type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3 contact-occupation">
                                                <label for="">
                                                    <h6>Status <span class="text-danger">*</span></h6>
                                                </label>
                                                <select name="status" class="form-select mr-sm-2" x-model="status"
                                                    id="status">
                                                    <option value="">Pilih...</option>
                                                    <option value="Publish">Publish</option>
                                                    <option value="Unpublish">Unpublish</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3 contact-occupation">
                                                <label for="">
                                                    <h6>Deskripsi<span class="text-danger">*</span></h6>
                                                </label>
                                                <textarea class="d-block rounded px-1" name="deskripsi" id="" cols="70" x-model="deskripsi"
                                                    style="height: 78px; resize: none;"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="img-profil mb-2">
                            <img class="mx-auto rounded" id="preview" src="#" alt="Preview" height="150"
                                width="266.66" style="display: none;">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn rounded-2 px-3" style="background: #838383; color: white;"
                            data-bs-dismiss="modal">Batal</button>
                        <button type="submit" id="btn-add" class="btn rounded-2 px-3"
                            style="background: #838383; color: white;"
                            :class="judul && channel && host && thumbnail && status && deskripsi && video ? null : 'disabled'">Tambah</button>
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
