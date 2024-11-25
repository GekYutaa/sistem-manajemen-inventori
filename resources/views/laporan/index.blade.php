@extends('master')
@section('title', 'Laporan')
@section('content')
    <h1>Laporan Pengelolaan Barang</h1>
    <table>
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporan as $l)
            <tr>
                <td>{{ $l['kode_barang'] }}</td>
                <td>{{ $l['nama_barang'] }}</td>
                <td>{{ $l['kategori'] }}</td>
                <td>{{ $l['tanggal'] }}</td>
                <td>{{ $l['jumlah'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
