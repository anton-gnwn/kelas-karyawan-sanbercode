@extends('layout.master')

@section('title')
    Halaman Create Cast
@endsection

@section('content')
    <form action="/cast" method="post">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input type="nama" name="nama" class="form-control" id="">
        </div>
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Umur</label>
            <input type="umur" name="umur" class="form-control" id="">
        </div>
        @error('umur')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Bio</label>
            <textarea name="bio" id="" name="bio" cols="30" rows="10" class="form-control"></textarea>
        </div>
        @error('bio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
