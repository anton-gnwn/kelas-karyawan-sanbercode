@extends('layout.master')

@section('title')
    Halaman List Cast
@endsection

@section('content')
    <div class="table">
        <a href="/cast/create" class="btn btn-primary mb-3">Tambah Cast</a>
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
                            <a href="/cast/{{ $cast->id }}/edit" class="btn btn-warning">Edit</a> |
                            <form action="/cast/{{ $cast->id }}" method="post" class="d-inline">
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
