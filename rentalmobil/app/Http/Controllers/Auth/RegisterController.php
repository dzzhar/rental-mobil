<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //memanggil form
    function index()
    {
        return view('pages.auth.register');
    }

    //memproses register pengguna
    function register(Request $request)
    {
        //validasi data memastikan data yang masuk sesuai dengan yg diinginkan
        $validatedUser = $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        //proses registrasi pengguna
        $userData = new User;
        $userData->name = $request->name;
        $userData->contact = $request->contact;
        $userData->email = $request->email;
        $userData->password = bcrypt($request->password);
        $userData->save();

        //redirect
        return redirect()->to('/login')->with('Success', 'Registrasi Berhasil');
    }
}
