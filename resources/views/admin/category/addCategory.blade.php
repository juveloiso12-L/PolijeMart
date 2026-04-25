@extends('layouts.sidebar')

@section('title', 'Add Category - Polije Mart')

@section('content')

<section class="mx-auto w-1/2 mt-4 mb-10">
    <form action="{{ route('admin.storeCategory') }}" method="POST" id="submitForm">
        @csrf

        <div class="flex flex-col gap-3 mb-3">
            <label for="namaBarang" class="text-xl">Nama Kategori : </label>
            <input type="text" name="nama_kategori" id="" value="{{ old('nama_kategori') }}" required class="p-2 border-3 outline-none 
            @error('kode_barang')
                border-red-600 hover:border-red-400 active:border-red-600 focus:border-red-500
            @else
                border-gray-300 hover:border-blue-400 active:border-blue-600 focus:border-blue-500
            @enderror
            rounded-md transition-colors">
        </div>
        @error('nama_kategori')
            <p class="text-red-500 text-xs mt-1 ml-2 mb-2 font-medium">{{ $message }}</p>
        @enderror
        <div class="flex justify-end gap-5 items-center">
            <div class="flex gap-3">
                <a href="{{ route('admin.manageCategory') }}" class="border-2 border-blue-400 w-32 p-3 rounded-full text-blue-500 font-bold hover:bg-[#0092c7] hover:text-white active:bg-[#006083] cursor-pointer transition-colors focus:outline-2 focus:outline-blue-500 focus:outline-offset-2 text-center">
                    KEMBALI
                </a>
            </div>
            <div class="flex justify-end gap-3">
                <button type="submit" class="bg-[#00b0f0] w-32 p-3 rounded-full text-white font-bold hover:bg-[#0092c7] active:bg-[#006083] cursor-pointer transition-colors focus:outline-2 focus:outline-blue-500 focus:outline-offset-2">KIRIM</button>
            </div>
        </div>
    </form>
</section>

@endsection