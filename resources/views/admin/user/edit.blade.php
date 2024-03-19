@extends('layouts.admin.app')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link id="themeColors" rel="stylesheet" href="{{ asset('admin') }}/dist/css/style.min.css" />
@endsection

@section('content')
    <div class="card card-body px-4 p-2 mb-0 rounded-bottom-0">
        <div class="row">
            <div class="col-md-4 col-xl-3 my-auto">
                <h4 class="my-auto" style="font-size: 18px">Edit Akun</h4>
            </div>
        </div>
    </div>
    <form action="{{ route('index.edit', $users->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- @method('put') --}}
        <div class="card rounded-top-0">
            <div class="card-body row">
                <div class="mb-3 col-md-6">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" value="{{ $users->name }}" id="name">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $users->email }}" id="email">
                </div>
                <div class="mb-3 col-md-12">
                    <label for="nohp" class="form-label">No Hp</label>
                    <input type="text" name="nohp" class="form-control" value="{{ $users->nohp }}" id="nohp">
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary align-items-end">Simpan</button>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
@endpush
