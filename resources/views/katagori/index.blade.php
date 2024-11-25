@extends('master')
@section('title', 'Kategori')
@section('content')
    <h1>Daftar Kategori Barang</h1>
    <table class="small-table">
        <thead>
            <tr>
                <th>Nama Barang</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategori as $kt)
            <tr>
                <td>{{ $kt['nama'] }}</td>
            </tr>
        @endforeach        
        </tbody>
    </table>
@endsection