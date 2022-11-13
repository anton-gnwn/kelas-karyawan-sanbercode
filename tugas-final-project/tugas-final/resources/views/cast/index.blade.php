@extends('layout.master')

@section('title')
    Halaman List Cast
@endsection

@section('content')
    <div class="table">
        @auth
            <a href="/cast/create" class="btn btn-primary mb-3">Tambah Cast</a>
        @endauth
        <table class="table col-12">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Bio</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($casts as $cast)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $cast->nama }}</td>
                        <td>{{ $cast->umur }}</td>
                        <td>{{ $cast->bio }}</td>
                        <td>
                            @auth
                            <a href="/cast/{{ $cast->id }}/edit" class="btn btn-warning">Edit</a> 
                            <form action="/cast/{{ $cast->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form> 
                            @endauth
                            <a href="/cast/{{ $cast->id }}/show" class="btn btn-warning">Detail</a>
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
