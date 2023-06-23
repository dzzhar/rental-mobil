@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Peminjaman Mobil</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Edit Data Peminjaman Mobil</li>
            </ol>
            <a href="/peminjaman" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/peminjaman/update/{{ $peminjamanData->id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">ID User</label>
                        <input type="text" value="{{ $peminjamanData->user_id }}" class="form-control" name="user_id"
                            required><br>
                        <label for="">ID Mobil</label>
                        <input type="text" value="{{ $peminjamanData->mobil_id }}" class="form-control" name="merk_id"
                            required><br>
                        <label for="">Nama Peminjaman</label>
                        <input type="text" value="{{ $peminjamanData->nama_peminjaman }}" class="form-control"
                            name="nama_peminjaman" required><br>
                        <label for="">Tanggal Peminjaman</label>
                        <input type="date" value="{{ $peminjamanData->tanggal_peminjaman }}" class="form-control"
                            name="tanggal_peminjaman" required><br>
                        <label for="">Tanggal Pengembalian</label>
                        <input type="text" value="{{ $peminjamanData->tanggal_pengembalian }}" class="form-control"
                            name="tanggal_pengembalian" required><br>
                        <label for="">Status Mobil</label>
                        <input type="text" value="{{ $peminjamanData->status_mobil }}" class="form-control"
                            name="status_mobil" required>
                    </div>
                    <div class="form-group mt-3">
                        <button class="form-control btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
