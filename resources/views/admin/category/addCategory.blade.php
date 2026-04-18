@extends('layouts.frame')

@section('title', 'Polije Mart - Add Category')

@section('content')
<h1>ADD CATEGORY</h1>
<hr>

@if ($errors->any())
<div style="color: red">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<section>
    <form action="{{ route('admin.storeCategory') }}" method="POST" id="submitForm">
        @csrf
        <div>
            <label for="namaKategori">Nama Kategori</label>
            <input type="text" name="nama_kategori" id="" value="{{ old('nama_kategori') }}" required>
        </div>
        <div>
            <button type="submit">TAMBAH KATEGORI</button>
        </div>
    </form>
</section>
@endsection