@extends('layouts.sidebar')

@section('title', 'Polije Mart - Manage Category')

@section('content')
<h1>MANAGE CATEGORY</h1>
<hr>
<section>
    <div>
        <a href="{{ route('admin.addCategory') }}">Tambah Kategori</a>
    </div>
    @if(session('status'))
        <div style="color: green">
            {{ session('status') }}
        </div>
    @endif
    <h3>DAFTAR KATEGORI</h3>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        @foreach($kategori as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama_kategori }}</td>
            <td>
                <a href="{{ route('admin.editCategory', $item->id) }}"><button type="button">EDIT</button></a>

                <form action="{{ route('admin.destroyCategory') }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" onclick="return confirm('Apakah anda ingin menghapus data kategori ?')">HAPUS</button>
                </form>
            </td>
            
        </tr>
        @endforeach
    </table>
</section>
@endsection