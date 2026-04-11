@extends('layouts.frame')

@section('title', 'Polije Mart - Add Product')

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
    <form action="{{ route('admin.storeData') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="namaBarang">Nama Produk : </label>
            <input type="text" name="nama_barang" id="namaBarang" required>
        </div>
        <div>
            <label for="deskripsiBarang">Deskirpsi : </label>
            <textarea name="deskripsi" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="stokBarang">Stok : </label>
            <input type="number" name="stok" id="">
        </div>
        <div>
            <label for="kategori">Kategori : </label>
            <select name="kategori_id" id="">
                <option value="">Pilih Kategori</option>
                @foreach ($kategori as $item)
                <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="harga">Harga : </label>
            <input type="number" name="harga" id="">
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