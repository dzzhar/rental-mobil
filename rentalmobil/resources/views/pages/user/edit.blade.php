@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">User</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Edit Data User</li>
            </ol>
            <a href="/user" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/user/update/{{ $userData->id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" value="{{ $userData->name }}" name="name"
                            required><br>
                        <label for="">Email</label>
                        <input type="text" class="form-control" value="{{ $userData->email }}" name="email"
                            required><br>
                        <label for="">Contact</label>
                        <input type="text" class="form-control" value="{{ $userData->contact }}" name="contact"
                            required><br>
                        <label for="">Password</label>
                        <input type="text" class="form-control" value="{{ $userData->password }}" name="password"
                            required><br>
                    </div>
                    <div class="form-group mt-3">
                        <button class="form-control btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
