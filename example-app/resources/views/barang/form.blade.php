@extends('layouts.app')
@section('judul','Tambah Barang')
@section('content')
<form action="{{ route('barang.tambah.simpan') }}" action="POST">
    @csrf
    <div class="row">
        <div class="col-12">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Tambah Barang</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode_barang">Kode Barang</label>
                        <input type="text" class="form-control" id="kode_barang" name="kode_barang">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="kode_barang">
                    </div>
                    <div class="form-group">
                        <label for="katagori_barang">Katagori Barang</label>
                        <input type="text" class="form-control" id="katagori_barang" name="kode_barang">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="kode_barang">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" name="kode_barang">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" name="submit" id="submit" value="submit">simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
