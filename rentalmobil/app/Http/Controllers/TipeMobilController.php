<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipeMobil; //Memanggil nama model

class TipeMobilController extends Controller
{
    //Menampilkan Data
    function index()
    {
        $tipeMobilData = TipeMobil::get(); //Memanggilkan database 
        return view('pages.tipemobil.index', compact('tipeMobilData')); //Untuk menampilkan pages 
    }

    //Menambahkan Data
    function store(Request $request)
    {
        //Validasi Data yang masuk
        $tipeMobilData = $request->validate([
            'tipe' => 'required',
        ]);
        //Simpan kedalam database
        TipeMobil::create($tipeMobilData);
        //Mengalihkan ke halaman awal
        return redirect()->to('/tipemobil');
    }

    function create()
    {
        return view('pages.tipemobil.create');
    }

    //Update Data
    function update($id, Request $request)
    {
        //Validasi Data
        $validasiTipeMobil = $request->validate([
            'tipe' => 'required',
        ]);
        //Update Data
        // $tipeMobilData = TipeMobil::find($id);
        // $tipeMobilData->update($validasiTipeMobil);
        TipeMobil::find($id)->update($validasiTipeMobil);
        //Redirect ke halaman utama
        return redirect()->to('/tipemobil');
    }

    function edit($id)
    {
        $tipeMobilData = TipeMobil::find($id);
        return view('pages.tipemobil.edit', compact('tipeMobilData'));
    }

    //Menghapus Data
    function delete($id)
    {
        $tipeMobilData = TipeMobil::find($id);
        $tipeMobilData->delete();
        //atau bisa juga $tipeMobilData = TipeMobil::find($id)->delete();

        return redirect()->to('/tipemobil');
    }
}
