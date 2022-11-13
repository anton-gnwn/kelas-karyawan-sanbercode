@extends('layout.master')

@section('title')
    Halaman Detail Genre
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="col-4">
                <label>Nama</label>
                <label>:</label>
                <label>{{ $genre->nama }}</label>
            </div>
        </div>
    </div>
@endsection
