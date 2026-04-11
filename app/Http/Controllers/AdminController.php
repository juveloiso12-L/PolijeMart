<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;

class AdminController extends Controller
{
    public function dashboard(){
        $total = Barang::count();
        return view('admin.admin', compact(['total']));
    }

    public function inventory(){
        $barang = Barang::with('kategori')->get();
        $total = Barang::count();
        return view('admin.inventory', compact(['barang', 'total']));
    }

    public function addData(){
        $kategori = Kategori::get();
        return view('admin.addData', compact(['kategori']));
    }

    public function storeData(Request $request){
        $request->validate([
            'nama_barang' => 'required',
            'deskripsi' => 'required|string',
            'kategori_id' => 'required|numeric',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
            'image' => 'nullable|image|max:2048|mimes:png,jpg,jpeg',
        ]);

        $fileName = null;
        if ($request->hasFile('image')) {
            $fileName = $request->file('image')->store('images', 'public');
        }

        Barang::create([
            'nama_barang' => $request->nama_barang,
            'deskripsi' => $request->deskripsi,
            'kategori_id' => $request->kategori_id,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'image' => $fileName,
        ]);
        
        return redirect()->route('admin.inventory')->with('status', 'Data barang berhasil ditambahkan!');
    }
}