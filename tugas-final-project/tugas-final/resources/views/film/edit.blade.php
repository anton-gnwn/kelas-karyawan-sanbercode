@extends('layout.master')

@section('title')
    Halaman Update Film
@endsection

@section('content')
    <form action="/film/{{ $film->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Judul Film</label>
            <input type="text" name="judul" class="form-control" id="" value="{{ $film->judul }}">
        </div>
        @error('judul')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>Ringkasan</label>
            <textarea id="" name="ringkasan" cols="30" rows="10" class="form-control">{!! $film->ringkasan !!}</textarea>
        </div>
        @error('ringkasan')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>Tahun Film</label>
            <input type="number" name="tahun" class="form-control" id="" value="{{ $film->tahun }}">
        </div>
        @error('tahun')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>Poster</label>
            <input type="file" name="poster" class="form-control">
        </div>
        @error('poster')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>Genre</label>
            <select name="genres_id" class="form-control">
                {{-- <option value="#">Pilih Genre</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->nama }}</option>
                @endforeach --}}

                <option value="{{ $film->genres_id }}" selected>{{ $film->genre->nama }}</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->nama }}</option>
                @endforeach
            </select>
        </div>
        @error('poster')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
