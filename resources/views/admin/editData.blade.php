@extends('layouts.frame')

@section('title', 'Polije Mart - Edit Product')

@section('content')

<h1>EDIT PRODUCT PAGES</h1>
<hr>

@if ($errors->any())
    <div style="color: red; margin-bottom: 15px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<section>
    <form action="{{ route('admin.updateData', $barang->id) }}" method="POST" enctype="multipart/form-data" id="submitForm">
        @csrf
        @method('PUT')

        <div>
            <label for="kodeBarang">Kode Barang : </label>
            <input type="text" name="kode_barang" id="" value="{{ old('kode_barang', $barang->kode_barang) }}" required>
        </div>
        <div>
            <label for="namaBarang">Nama Produk : </label>
            <input type="text" name="nama_barang" id="namaBarang" value="{{ old('nama_barang', $barang->nama_barang ) }}" required>
        </div>
        <div>
            <label for="deskripsiBarang">Deskirpsi : </label>
            <textarea name="deskripsi" id="" cols="30" rows="10" required>{{ $barang->deskripsi }}</textarea>
        </div>
        <div>
            <label for="stokBarang">Stok : </label>
            <input type="number" name="stok" id="" value="{{ old('stok', $barang->stok) }}" required>
        </div>
        <div>
            <label for="kategori">Kategori : </label>
            <select name="kategori_id" id="" required>
                <option value="">Pilih Kategori</option>
                @foreach ($kategori as $item)
                <option value="{{ $item->id}}" {{ old('kategori_id', $barang->kategori_id) == $item->id ? 'selected' : '' }} >{{ $item->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="harga">Harga : </label>
            <input type="number" name="harga" id="" value="{{ old('harga', $barang->harga) }}" required>
        </div>
        <div>
            <label for="gambar">Gambar : </label>
            @if($barang->image)
                <div>
                    <img src="{{ asset('storage/' . $barang->image) }}" alt="{{ $barang->nama_barang }}" width="150px">
                </div>
            @endif
            <input type="file" name="image" id="">
        </div>
        <div>
            <button type="submit">UPDATE</button>
        </div>
    </form>
</section>

@endsection