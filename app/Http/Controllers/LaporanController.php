<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    // Private data dummy
    private $laporan = [
        [
            'kode_barang' => 'BRG001',
            'nama_barang' => 'Laptop Asus ROG',
            'kategori' => 'Elektronik',
            'tanggal' => '2024-01-15',
            'jumlah' => 2
        ],
        [
            'kode_barang' => 'BRG002',
            'nama_barang' => 'Mouse Gaming Logitech',
            'kategori' => 'Aksesoris Komputer',
            'tanggal' => '2024-01-16',
            'jumlah' => 5
        ],
        [
            'kode_barang' => 'BRG003',
            'nama_barang' => 'Mechanical Keyboard',
            'kategori' => 'Aksesoris Komputer',
            'tanggal' => '2024-01-17',
            'jumlah' => 3
        ],
        [
            'kode_barang' => 'BRG004',
            'nama_barang' => 'Monitor LG 24inch',
            'kategori' => 'Elektronik',
            'tanggal' => '2024-01-18',
            'jumlah' => 4
        ],
        [
            'kode_barang' => 'BRG005',
            'nama_barang' => 'Printer Epson L3110',
            'kategori' => 'Elektronik',
            'tanggal' => '2024-01-19',
            'jumlah' => 2
        ],
        [
            'kode_barang' => 'BRG006',
            'nama_barang' => 'SSD Samsung 1TB',
            'kategori' => 'Storage Device',
            'tanggal' => '2024-01-20',
            'jumlah' => 3
        ],
        [
            'kode_barang' => 'BRG007',
            'nama_barang' => 'Router TP-Link',
            'kategori' => 'Perangkat Jaringan',
            'tanggal' => '2024-01-21',
            'jumlah' => 2
        ],
        [
            'kode_barang' => 'BRG008',
            'nama_barang' => 'Windows 11 Pro',
            'kategori' => 'Software',
            'tanggal' => '2024-01-22',
            'jumlah' => 4
        ],
        [
            'kode_barang' => 'BRG009',
            'nama_barang' => 'Webcam Logitech C920',
            'kategori' => 'Aksesoris Komputer',
            'tanggal' => '2024-01-23',
            'jumlah' => 1
        ],
        [
            'kode_barang' => 'BRG010',
            'nama_barang' => 'HDD External 2TB',
            'kategori' => 'Storage Device',
            'tanggal' => '2024-01-24',
            'jumlah' => 2
        ],
        [
            'kode_barang' => 'BRG011',
            'nama_barang' => 'Switch Hub 24 Port',
            'kategori' => 'Perangkat Jaringan',
            'tanggal' => '2024-01-25',
            'jumlah' => 1
        ],
        [
            'kode_barang' => 'BRG012',
            'nama_barang' => 'Microsoft Office 2021',
            'kategori' => 'Software',
            'tanggal' => '2024-01-26',
            'jumlah' => 3
        ],
        [
            'kode_barang' => 'BRG013',
            'nama_barang' => 'UPS 1200VA',
            'kategori' => 'Elektronik',
            'tanggal' => '2024-01-27',
            'jumlah' => 2
        ],
        [
            'kode_barang' => 'BRG014',
            'nama_barang' => 'LAN Tester',
            'kategori' => 'Perangkat Jaringan',
            'tanggal' => '2024-01-28',
            'jumlah' => 3
        ],
        [
            'kode_barang' => 'BRG015',
            'nama_barang' => 'Cooling Pad Laptop',
            'kategori' => 'Aksesoris Komputer',
            'tanggal' => '2024-01-29',
            'jumlah' => 4
        ]
    ];

    public function index()
        {
            // Menyimpan data ke session
            session(['laporan' => $this->laporan]);
    
            // Kirim data user ke view
            return view("laporan.index", ["laporan" => session('laporan')]);
        }
}
