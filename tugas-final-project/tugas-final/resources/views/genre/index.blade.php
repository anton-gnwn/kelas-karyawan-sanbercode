@extends('layout.master')

@section('title')
    Halaman List Genre
@endsection

@section('content')
    <div class="table">
        <a href="/genre/create" class="btn btn-primary mb-3">Tambah Genre</a>
        <table class="table col-12">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($genres as $genre)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $genre->nama }}</td>
                        <td>
                            <a href="/genre/{{ $genre->id }}/show" class="btn btn-primary">Detail</a>
                            <a href="/genre/{{ $genre->id }}/edit" class="btn btn-warning">Edit</a> 
                            <form action="/genre/{{ $genre->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form> 
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>Data masih kosong</td>
                    </tr>
                @endforelse


            </tbody>
        </table>
    </div>
@endsection
