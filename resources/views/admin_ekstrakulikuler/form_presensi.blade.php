@extends('admin_ekstrakulikuler.layout.app')

@section('heading', 'Buat Presensi')

@section('main_content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="">
              @csrf
                <div class="row">
                    <div class="col-md-9">
                        <div class="mb-3">
                            <label for="eventName" class="form-label">Nama Event</label>
                            <input type="text" class="form-control" id="eventName">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="text" class="form-control" id="tanggal">
                        </div>
                        <div class="mb-3">
                            <label for="jamMulai" class="form-label">Jam Mulai</label>
                            <input type="text" class="form-control" id="jamMulai">
                        </div>
                        <div class="mb-3">
                            <label for="tempat" class="form-label">Tempat</label>
                            <input type="text" class="form-control" id="tempat">
                        </div>

                        <button type="submit" class="btn btn-primary">Buat Presensi</button>
            </form>
        </div>
    </div>

@endsection
