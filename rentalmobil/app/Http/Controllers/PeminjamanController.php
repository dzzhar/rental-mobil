<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    function index()
    {
        $peminjamanData = Peminjaman::get();
        return view('pages.peminjaman.index', compact('peminjamanData'));
    }

    function store(Request $request)
    {
        $peminjamanData = $request->validate([
            'user_id' => 'required',
            'mobil_id' => 'required',
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian' => 'required',
            'nama_peminjaman' => 'required',
            'status_mobil' => 'required',
        ]);

        Peminjaman::create($peminjamanData);
        return redirect()->to('/peminjaman');
    }

    function create()
    {
        return view('pages.peminjaman.create');
    }

    function update($id, Request $request)
    {
        $validasiUser = $request->validate([
            'user_id' => 'required',
            'mobil_id' => 'required',
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian' => 'required',
            'nama_peminjaman' => 'required',
            'status_mobil' => 'required',
        ]);

        Peminjaman::find($id)->update($validasiUser);
        return redirect()->to('/peminjaman');
    }

    function edit($id)
    {
        $peminjamanData = Peminjaman::find($id);
        return view('pages.peminjaman.edit', compact('peminjamanData'));
    }

    function delete($id)
    {
        $peminjamanData = Peminjaman::find($id)->delete();
        return redirect()->to('/peminjaman');
    }
}
