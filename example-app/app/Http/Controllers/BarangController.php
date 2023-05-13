<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index() {
        $barang = Barang::get();
        return view('barang.index',['barang'=>$barang],compact('barang'));
    }

    public function tambah() {
        return view('barang.form');
    }

    public function simpan(Request $request) {
        $data = [
            'kode_barang' => $request ->kode_barang,
            'nama_barang' => $request ->nama_barang,
            'katagori_barang' => $request ->katagori_barang,
            'harga' => $request ->harga,
            'jumlah' => $request ->jumlah,
        ];

        Barang::create($request->except('_token','submit'));
        return redirect()->route('barang');
    }

    public function hapus($id){
        $barang = barang::find($id);
        $barang->delete();
        return redirect()->route('barang');
    }

}
