@extends('layout.master')

@section('title')
    Halaman Detail Film
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="card mr-3 p-2" style="width: auto">
                <img src="{{ Storage::url($film->poster) }}" class="card-img-top w-100" alt="...">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-12 mb-2">
                            <h5 class="text-center" style="font-weight: 700">{{ $film->judul }}</h5>
                        </div>
                        <div class="col-12 mb-2">
                            <p class="rounded-pill btn btn-dark" style="font-size: 13px">{{ $film->genre->nama }}</p>
                            <p class="rounded-pill btn btn-dark" style="font-size: 13px">{{ $film->tahun }}</p>
                        </div>
                        <div class="col-12 mb-4">
                            <p class="card-text" style="font-weight: 400">{{ $film->ringkasan }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <form action="#">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Komentar</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
@endsection
