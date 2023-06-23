@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Peminjaman Mobil</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Data Peminjaman Mobil</li>
            </ol>
            <a href="/peminjaman/create" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Peminjaman</th>
                                <th>ID User</th>
                                <th>ID Mobil</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Status Mobil</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peminjamanData as $peminjaman)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $peminjaman->nama_peminjaman }}</td>
                                    <td>{{ $peminjaman->user_id }}</td>
                                    <td>{{ $peminjaman->mobil_id }}</td>
                                    <td>{{ $peminjaman->tanggal_peminjaman }}</td>
                                    <td>{{ $peminjaman->tanggal_pengembalian }}</td>
                                    <td>{{ $peminjaman->status_mobil }}</td>
                                    <td>
                                        <a href="/peminjaman/edit/{{ $peminjaman->id }}" class="btn btn-warning">Edit</a>
                                        <a href="/peminjaman/delete/{{ $peminjaman->id }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
