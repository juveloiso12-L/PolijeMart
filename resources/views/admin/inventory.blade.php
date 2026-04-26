@extends('layouts.sidebar')

@section('title', 'Inventory - Polije Mart')

@section('content')

{{-- <head>
    <style type="text/tailwindcss">
        *{
            border: 1px solid red;
        }
    </style>
</head> --}}

<div class="w-4/5 mx-auto">
    <div class="flex justify-between mt-10">
        <div>
            <h1 class="font-bold text-3xl">INVENTORY</h1>
            <span class="text-xl font-semibold">TOTAL : {{ $total }} ITEM</span>
        </div>
        <div class="flex items-center gap-3">
            <div class="">
                <form action="{{ route('admin.inventory') }}" method="GET" class="flex items-center gap-3">
                    <input type="text" name="search" value="{{ request('search') }}" id="" class="p-2 border-3 outline-none border-gray-300 hover:border-blue-400 active:border-blue-600 focus:border-blue-500 rounded-lg">
                    <button class="bg-gray-300 p-2 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10.397 3a7.397 7.397 0 1 0 0 14.795a7.397 7.397 0 0 0 0-14.795m-6.41 7.397a6.411 6.411 0 1 1 12.821 0a6.411 6.411 0 0 1-12.822 0" />
                            <path fill="currentColor" d="M16.838 15.792a.74.74 0 1 0-1.046 1.046l3.945 3.945a.74.74 0 1 0 1.046-1.046z" />
                        </svg>
                    </button>
                </form>
            </div>
            <div>
                <a href="{{ route('admin.addData') }}" class="bg-[#15C11B] p-2 text-white rounded-lg hover:bg-[#0f8f14] active:bg-[#15C11B] transition-colors cursor-pointer flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z" />
                    </svg>
                    <span>TAMBAH PRODUK</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="w-4/5 mx-auto rounded-lg my-5 overflow-hidden shadow-xl">
    <table class="w-full text-white">
        <thead class="bg-[#069bc0]">
            <tr>
                <td class="p-4 font-bold">NO</td>
                <td class="p-4 font-bold">KODE</td>
                <td class="p-4 font-bold">NAMA</td>
                <td class="p-4 font-bold">DESKRIPSI</td>
                <td class="p-4 font-bold">STOK</td>
                <td class="p-4 font-bold">KATEGORI</td>
                <td class="p-4 font-bold">HARGA</td>
                <td class="p-4 font-bold">GAMBAR</td>
                <td class="p-4 font-bold">AKSI</td>
            </tr>
        </thead>
        <tbody class="text-black">
            @foreach($barang as $item)
            <tr class="border-b border-gray-300 hover:bg-gray-50 transition-colors p-5">
                <td class="p-4">{{ $barang->firstItem() + $loop->index }}</td>
                <td class="p-4">{{ $item->kode_barang }}</td>
                <td class="p-4">{{ $item->nama_barang }}</td>
                <td class="p-4">{{ $item->deskripsi }}</td>
                <td class="p-4">{{ $item->stok }}</td>
                <td class="p-4">{{ $item->kategori->nama_kategori ?? 'Tanpa Kategori' }}</td>
                <td class="p-4">{{ number_format($item->harga, 2, ',', '.') }}</td>
                <td class="p-4"><img src="{{ asset('storage/' . $item->image ) }}" alt="{{ $item->image ? "$item->nama_barang" : "Tidak ada gambar" }}" width="150px"></td>
                <td class="px-4 ">
                    <div class="flex gap-2 justify-center items-center">
                        <a href="{{ route('admin.editData', $item->id) }}" class="bg-blue-600 flex gap-1 p-2 items-center hover:bg-blue-700 active:bg-blue-600 transition-colors rounded-md text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor" d="m14.06 9l.94.94L5.92 19H5v-.92zm3.6-6c-.25 0-.51.1-.7.29l-1.83 1.83l3.75 3.75l1.83-1.83c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29m-3.6 3.19L3 17.25V21h3.75L17.81 9.94z" />
                            </svg>
                            <span class="font-semibold text-sm">Edit</span>
                        </a>
                        <a href="{{ route('admin.showData', $item->id) }}" class="bg-gray-600 flex gap-1 p-2 items-center hover:bg-gray-700 active:bg-gray-600 transition-colors rounded-md text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0" />
                                    <path d="M2 12c1.6-4.097 5.336-7 10-7s8.4 2.903 10 7c-1.6 4.097-5.336 7-10 7s-8.4-2.903-10-7" />
                                </g>
                            </svg>
                            <span class="font-semibold text-sm">Show</span>
                        </a>
                        <form action="{{ route('admin.destroyData', $item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="bg-red-600 flex gap-1 p-2 items-center hover:bg-red-700 active:bg-red-600 transition-colors rounded-md text-white cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <g fill="currentColor">
                                        <path fill-rule="evenodd" d="M17 5V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v1H4a1 1 0 0 0 0 2h1v11a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V7h1a1 1 0 1 0 0-2zm-2-1H9v1h6zm2 3H7v11a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1z" clip-rule="evenodd" />
                                        <path d="M9 9h2v8H9zm4 0h2v8h-2z" />
                                    </g>
                                </svg>
                                <span class="font-semibold text-sm">Delete</span>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    <div>
        {{ $barang->links() }}
    </div>
</div>


@endsection