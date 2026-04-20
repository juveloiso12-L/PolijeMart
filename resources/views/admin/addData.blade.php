@extends('layouts.sidebar')

@section('title', 'Add Product - Polije Mart')

@section('content')

<h1>ADD PRODUCT PAGES</h1>
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
    <form action="{{ route('admin.storeData') }}" method="POST" enctype="multipart/form-data" id="submitForm">
        @csrf
        <div>
            <label for="kodeBarang">Kode Barang : </label>
            <input type="text" name="kode_barang" id="" value="{{ old('kode_barang') }}" required> 
        </div>
        <div>
            <label for="namaBarang">Nama Produk : </label>
            <input type="text" name="nama_barang" id="" value="{{ old('nama_barang') }}" required>
        </div>
        <div>
            <label for="deskripsiBarang">Deskirpsi : </label>
            <textarea name="deskripsi" id="" cols="30" rows="10" required>{{ old('deskripsi') }}</textarea>
        </div>
        <div>
            <label for="stokBarang">Stok : </label>
            <input type="number" name="stok" id="" value="{{ old('stok') }}">
        </div>
        <div>
            <label for="kategori">Kategori : </label>
            <select name="kategori_id" id="" required>
                <option value="">Pilih Kategori</option>
                @foreach ($kategori as $item)
                <option value="{{ $item->id }}" {{ old('kategori_id') == $item->id ? 'selected' : '' }}>{{ $item->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="harga">Harga : </label>
            <input type="number" name="harga" id="" value="{{ old('harga') }}">
        </div>
        <div>
            <label for="gambar">Gambar : </label>
            <input type="file" name="image" id="">
        </div>
        <div>
            <button type="submit">KIRIM</button>
        </div>
    </form>
</section>

@endsection