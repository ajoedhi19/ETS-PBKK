<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\produk;
use Illuminate\Contracts\Support\ValidatedData;

class BarangController extends Controller
{
    public function index()
    {
        return view('dashboard.barang.index',[
            'produks' => produk::all()
        ]);
    }
    public function show(produk $produk)
    {
        return $produk;
    }
    public function destroy(produk $produk)
    {
        produk::destroy($produk->id);

        return redirect ('/dashboard/barang')->with('succes', "Berhasil hapus");
    }
}