<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    private $barang = [
        [
            'kode' => 'BRG001',
            'nama' => 'Laptop Asus ROG',
            'kategori' => 'Elektronik',
            'harga' => 15000000,
            'stok' => 5
        ],
        [
            'kode' => 'BRG002',
            'nama' => 'Mouse Gaming Logitech',
            'kategori' => 'Aksesoris Komputer',
            'harga' => 750000,
            'stok' => 15
        ],
        [
            'kode' => 'BRG003',
            'nama' => 'Mechanical Keyboard',
            'kategori' => 'Aksesoris Komputer',
            'harga' => 1200000,
            'stok' => 8
        ],
        [
            'kode' => 'BRG004',
            'nama' => 'Monitor LG 24inch',
            'kategori' => 'Elektronik',
            'harga' => 2500000,
            'stok' => 10
        ],
        [
            'kode' => 'BRG005',
            'nama' => 'Printer Epson L3110',
            'kategori' => 'Elektronik',
            'harga' => 2300000,
            'stok' => 6
        ],
        [
            'kode' => 'BRG006',
            'nama' => 'SSD Samsung 1TB',
            'kategori' => 'Storage Device',
            'harga' => 1800000,
            'stok' => 12
        ],
        [
            'kode' => 'BRG007',
            'nama' => 'Router TP-Link',
            'kategori' => 'Perangkat Jaringan',
            'harga' => 450000,
            'stok' => 7
        ],
        [
            'kode' => 'BRG008',
            'nama' => 'Windows 11 Pro',
            'kategori' => 'Software',
            'harga' => 3500000,
            'stok' => 20
        ],
        [
            'kode' => 'BRG009',
            'nama' => 'Webcam Logitech C920',
            'kategori' => 'Aksesoris Komputer',
            'harga' => 1500000,
            'stok' => 9
        ],
        [
            'kode' => 'BRG010',
            'nama' => 'HDD External 2TB',
            'kategori' => 'Storage Device',
            'harga' => 1200000,
            'stok' => 11
        ],
        [
            'kode' => 'BRG011',
            'nama' => 'Switch Hub 24 Port',
            'kategori' => 'Perangkat Jaringan',
            'harga' => 2800000,
            'stok' => 4
        ],
        [
            'kode' => 'BRG012',
            'nama' => 'Microsoft Office 2021',
            'kategori' => 'Software',
            'harga' => 2000000,
            'stok' => 15
        ],
        [
            'kode' => 'BRG013',
            'nama' => 'UPS 1200VA',
            'kategori' => 'Elektronik',
            'harga' => 1600000,
            'stok' => 6
        ],
        [
            'kode' => 'BRG014',
            'nama' => 'LAN Tester',
            'kategori' => 'Perangkat Jaringan',
            'harga' => 250000,
            'stok' => 8
        ],
        [
            'kode' => 'BRG015',
            'nama' => 'Cooling Pad Laptop',
            'kategori' => 'Aksesoris Komputer',
            'harga' => 350000,
            'stok' => 13
        ]
    ];
    public function index()
        {
            // Menyimpan data ke session
            session(['barang' => $this->barang]);
    
            // Kirim data user ke view
            return view("barang.index", ["barang" => session('barang')]);
        }
}
