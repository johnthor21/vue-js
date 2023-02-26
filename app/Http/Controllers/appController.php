<?php

namespace App\Http\Controllers;

use App\Models\register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class appController extends Controller
{
    public function show()
    {
        return Inertia::render('home');
    }
    public function rpl()
    {
        $data="halo ini dari backend";
        return Inertia::render('about',[
            'datas'=>$data
        ]);

    }
    public function register() {
        return Inertia::render('register');
    }
    public function registerPost(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'nik'=>'required',
            'tlp'=>'required',
            'username'=>'required',
            'password'=>'required',
        ],[
            'nama.required'=>'Nama Wajib di isi',
            'nik.required'=>'Nik Wajib di isi',
            'tlp.required'=>'Nomor handphone Wajib di isi',
            'username.required'=>'Username Wajib di isi',
            'username.required'=>'Password Wajib di isi',
        ]);

        register::create([
            'nama'=>$request->nama,
            'nik'=>$request->nik,
            'tlp'=>$request->tlp,
            'username'=>$request->username,
            'password'=>$request->password,
        ]);
        return to_route('login');

    }
}
