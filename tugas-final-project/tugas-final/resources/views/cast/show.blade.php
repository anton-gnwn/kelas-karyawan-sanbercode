@extends('layout.master')

@section('title')
    Halaman Detail Cast
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="col-4">
                <label>Nama</label>
                <label>:</label>
                <label>{{ $cast->nama }}</label>
            </div>
            <div class="col-4">
                <label>Umur</label>
                <label>:</label>
                <label>{{ $cast->umur }}</label>
            </div>
            <div class="col-4">
                <label>Bio</label>
                <label>:</label>
                <label>{{ $cast->bio }}</label>
            </div>
        </div>
    </div>
@endsection
