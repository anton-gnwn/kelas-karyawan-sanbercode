@extends('layout.master')

@section('title')
    Selamat Datang
@endsection

@section('content')
    <h1>Selamat Datang! {{ $namaDepan }} {{ $namaBelakang }}</h1>
    <h2>Terima kasih telah bergabung di SanberBook. Social Media kita bersama!</h2>
@endsection
