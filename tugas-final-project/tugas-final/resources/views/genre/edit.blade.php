@extends('layout.master')

@section('title')
    Halaman Edit Genre
@endsection

@section('content')
    <form action="/genre/{{ $genre->id }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Nama Genre</label>
            <input type="text" name="nama" class="form-control" id="" value="{{ $genre->nama }}">
        </div>
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
