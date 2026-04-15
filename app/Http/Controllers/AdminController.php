<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\HttpCache\Store;

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
            'image' => 'nullable|image|max:2048|mimes:png,jpg,jpeg,webp',
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

    public function editData($id){
        $barang = Barang::findOrFail($id);
        $kategori = Kategori::get();
        return view('admin.editData', compact(['barang', 'kategori']));
        // $barang = Barang::find($id);
        // if($barang){
        //     $kategori = Kategori::get();
        //     return view('admin.editData', compact(['barang', 'kategori']));
        // } else{
        //     return "Barang dengan $id tidak ditemukan";
        // }
    }

    public function updateData(Request $request, $id){
        $request->validate([
            'nama_barang' => 'required',
            'deskripsi' => 'required|string',
            'kategori_id' => 'required|numeric',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
            'image' => 'nullable|image|max:2048|mimes:png,jpg,jpeg',
        ]);

        $barang = Barang::findOrFail($id);
        $fileName = $barang->image;

        if($request->hasFile('image')){
            if($barang->image){
                Storage::disk('public')->delete($barang->image);
            }
            $fileName = $request->file('image')->store('images', 'public');
        }

        $barang->update([
            'nama_barang' => $request->nama_barang,
            'deskripsi' => $request->deskripsi,
            'kategori_id' => $request->kategori_id,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'image' => $fileName,
        ]);

        return redirect()->route('admin.inventory')->with('status', 'Data berhasil di update !');

    }

    public function destroyData($id){
        
        $barang = Barang::findOrFail($id);
        if($barang->image){
            Storage::disk('public')->delete($barang->image);
        }
        $barang->delete();
        return redirect()->route('admin.inventory')->with('status', 'Data berhasil dihapus!');
    }

    // CONTROLLER UNTUK MENAMBAH KATEGORI
    public function manageCategory(){
        $kategori = Kategori::all();
        return view('admin.category.category', compact(['kategori']));
    }

    public function addCategory(){
        return "
            <h1>Halaman masih proses pembuatan</h1><br>
            <span>By : Ahmad Nuzulur Rozaq | ANR_2006</span>
        ";
    }
}