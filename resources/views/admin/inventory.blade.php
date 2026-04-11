@extends('layouts.frame')

@section('title', 'Polije Mart - Inventory')

@section('content')

<h1>INVENTORY PAGES</h1>
<hr>
<section>
    <div>
        <a href="{{ route('admin.addData') }}">Tambah Barang</a>
    </div>
    <div>
        <h3>Daftar Barang</h3>
        <table border="1">
            <tr>
                <th>No</th>
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
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>{{ $item->kategori->nama_kategori ?? 'Tanpa Kategori' }}</td>
                <td>{{ $item->stok }}</td>
                <td>{{ $item->harga }}</td>
                <td><img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->nama_barang }}" width="100px"></td>
            </tr>
            @endforeach
        </table>
    </div>
    <div>
        <p>Total : {{ $total }}</p>
    </div>
</section>

@endsection