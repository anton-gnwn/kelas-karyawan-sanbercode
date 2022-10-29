@extends('layout.master')

@section('title')
    Halaman Update Cast
@endsection

@section('content')
    <form action="/cast/{{ $cast->id }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Nama</label>
            <input type="nama" name="nama" class="form-control" id="" value="{{ $cast->nama }}">
        </div>
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Umur</label>
            <input type="umur" name="umur" class="form-control" id="" value="{{ $cast->umur }}">
        </div>
        @error('umur')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Bio</label>
            <textarea name="bio" id="" name="bio" cols="30" rows="10" class="form-control">{{ $cast->bio }}</textarea>
        </div>
        @error('bio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
