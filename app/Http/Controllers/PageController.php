<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->input('username');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->input('username');

        $menus = [
            ['id' => 1, 'nama' => 'Kopi Kapal Api', 'kategori' => 'Minuman', 'harga' => 'Rp 5.000', 'status' => 'Tersedia'],
            ['id' => 2, 'nama' => 'Sour Dough', 'kategori' => 'Pastry', 'harga' => 'Rp 22.000', 'status' => 'Tersedia'],
            ['id' => 3, 'nama' => 'Matcha Latte', 'kategori' => 'Minuman', 'harga' => 'Rp 20.000', 'status' => 'Habis'],
            ['id' => 4, 'nama' => 'Kopi Gula Aren', 'kategori' => 'Minuman', 'harga' => 'Rp 25.000', 'status' => 'Tersedia'],
            ['id' => 5, 'nama' => 'Nasi Goreng', 'kategori' => 'Makanan', 'harga' => 'Rp 28.000', 'status' => 'Tersedia'],
        ];

        return view('pengelolaan', compact('username', 'menus'));
    }

    public function profile(Request $request)
    {
        $username = $request->input('username');
        return view('profile', compact('username'));
    }
}