@extends('master')
@section('title', 'Barang')
@section('content')
    <h1>Daftar Barang Inventori</h1>
    <table>
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $brg)
            <tr>
                <td>{{ $brg['kode'] }}</td>
                <td>{{ $brg['nama'] }}</td>
                <td>{{ $brg['kategori'] }}</td>
                <td>{{ $brg['harga'] }}</td>
                <td>{{ $brg['stok'] }}</td>
            </tr>
            @endforeach        
        </tbody>
    </table>
@endsection