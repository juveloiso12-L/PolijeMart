@extends('layouts.sidebar')

@section('title', 'Polije Mart - Inventory')

@section('content')

<h1>INVENTORY PAGES</h1>
<hr>
<section>
    <div>
        <a href="{{ route('admin.addData') }}">Tambah Barang</a>
    </div>
    <div>
        <a href="{{ route('admin.manageCategory') }}">Kelola Kategori</a>
    </div>
    <div>
        <h3>Daftar Barang</h3>
        @if (session('status'))
            <div style="color: green">
                {{ session('status') }}
            </div>
        @endsession
        <table border="1">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>

            @foreach ($barang as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->kode_barang }}</td>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>{{ $item->kategori->nama_kategori ?? 'Tanpa Kategori' }}</td>
                <td>{{ $item->stok }}</td>
                <td>{{ $item->harga }}</td>
                <td><img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->image ? '$item->nama_barang' : 'Tidak ada gambar' }}" width="100px"></td>
                <td>
                    <a href="{{ route('admin.editData', $item->id) }}"><button type="button">EDIT</button></a>
                    
                    <form action="{{ route('admin.destroyData', $item->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" onclick="return confirm('Apakah anda ingin menghapus data ?')">HAPUS</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div>
        <p>Total : {{ $total }}</p>
    </div>
</section>

@endsection