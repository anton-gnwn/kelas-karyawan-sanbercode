@extends('layout.master')

@section('title')
    Halaman List Film
@endsection

@section('content')
    <div class="container">
        @auth
        <div class="row">
            <div class="col-12 mb-3">
                <a href="/film/create" class="btn btn-primary">Tambah Film</a>
            </div>
        </div>
        @endauth
        
        <div class="row">
            @forelse ($films as $film)
                <div class="card mr-3 p-2" style="width: 18rem;">
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

                            <div class="col-12">
                                <a href="/film/{{ $film->id }}/show" class="btn btn-primary">Detail</a>
                                @auth
                                    <a href="/film/{{ $film->id }}/edit" class="btn btn-warning">Edit</a>
                                    <form action="/film/{{ $film->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                @endauth

                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    No Products Found
                </div>
            @endforelse
        </div>
    </div>
@endsection
