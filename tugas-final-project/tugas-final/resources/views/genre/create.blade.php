@extends('layout.master')

@section('title')
    Halaman Create Genre
@endsection

@section('content')
    <form action="/genre" method="post">
        @csrf
        <div class="form-group">
            <label>Nama Genre</label>
            <input type="text" name="nama" class="form-control" id="">
        </div>
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
