<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    private $kategori = [
        ['nama' => 'Elektronik'],
        ['nama' => 'Aksesoris Komputer'],
        ['nama' => 'Perangkat Jaringan'],
        ['nama' => 'Software'],
        ['nama' => 'Storage Device'],
        ['nama' => 'Printer & Scanner'],
        ['nama' => 'Gaming Gear'],
        ['nama' => 'Networking Tools'],
        ['nama' => 'Security Device'],
        ['nama' => 'Audio Equipment'],
        ['nama' => 'Video Equipment'],
        ['nama' => 'Server Equipment'],
        ['nama' => 'Mobile Accessories'],
        ['nama' => 'Office Equipment'],
        ['nama' => 'Computer Parts']
];

    public function index()
    {
        // Menyimpan data ke session
        session(['kategori' => $this->kategori]);

        // Kirim data user ke view
        return view("katagori.index", ["kategori" => session('kategori')]);
    }
}
