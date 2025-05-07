<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function LoginForm(){
        return view('Login');
    }
    public function cekLogin(Request $request){
        $request->validate([
            'username' => 'required|min:3',
            'password' => 'required|min:3',
        ]);
        session(['username' => $request->username]);
        return view('Dashboard', ['username' => $request->username]);
    }

    public function Dashboard() {
        $username = session('username');
        return view('Dashboard', compact('username'));
    }
    public function Profile() {
        $username = session('username');
        return view('Profile', compact('username'));
    }
    public function Pengelolaan(){
        $bungas = [
            [
                'nama' => 'Mawar Merah',
                'stok' => 25,
                'jumlah_pembeli' => 123,
                'gambar' => 'bunga1.jpg'
            ],
            [
                'nama' => 'Mawar Putih',
                'stok' => 20,
                'jumlah_pembeli' => 103,
                'gambar' => 'bunga2.jpg'
            ],
            [
                'nama' => 'Tulip Ungu',
                'stok' => 43,
                'jumlah_pembeli' => 13,
                'gambar' => 'bunga3.jpg'
            ],
            [
                'nama' => 'Mawar Pink',
                'stok' => 19,
                'jumlah_pembeli' => 167,
                'gambar' => 'bunga4.jpg'
            ],
            [
                'nama' => 'Mawar Broken White',
                'stok' => 34,
                'jumlah_pembeli' => 113,
                'gambar' => 'bunga5.jpg'
            ],
            [
                'nama' => 'Tulip Pink',
                'stok' => 25,
                'jumlah_pembeli' => 135,
                'gambar' => 'bunga7.jpg'
            ],
        ];
        return view('Pengelolaan',compact('bungas'));
    }
}
