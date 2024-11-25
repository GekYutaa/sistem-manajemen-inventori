@extends('master')
@section('title', 'User')
@section('content')
    <h1>Informasi Pengguna</h1>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userdata as $dt)
            <tr>
                <td>{{ $dt['username'] }}</td>
                <td>{{ $dt['nama'] }}</td>
                <td>{{ $dt['email'] }}</td>
            </tr>
        @endforeach        
        </tbody>
    </table>
@endsection