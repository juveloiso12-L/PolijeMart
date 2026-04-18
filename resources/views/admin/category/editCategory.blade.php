@extends('layouts.frame')

@section('title', 'Polije Mart - Edit Category')

@section('content')

<h1>EDIT CATEGORY</h1>
<hr>

@if ($errors->any()){
    <div style="color: red">
        <ul>
            @foreach ($errors->all() as $error )
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
}
@endif

<section>
    <form action="{{ route('admin.updateCategory', $kategori->id) }}" method="POST" id="submitForm">
        @csrf
        @method('PUT')
        <div>
            <label for="namaKategori">Nama Kategori : </label>
            <input type="text" name="nama_kategori" id="" value="{{ old('nama_kategori', $kategori->nama_kategori) }}">
        </div>
        <div>
            <button type="submit">UPDATE</button>
        </div>
    </form>
</section>
@endsection