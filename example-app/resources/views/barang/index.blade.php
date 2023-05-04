@extends('layouts.app')
@section('judul','Barang')

@section('content')
<div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="{{ route('barang.tambah') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>katagori</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no=1)
                        @foreach ($barang as $row)
                        <tr>
                            <th>{{ $no++ }}</th>
                            <th>{{ $row->kode_barang }}</th>
                            <th>{{ $row->nama_barang }}</th>
                            <th>{{ $row->katagori_barang }}</th>
                            <th>{{ $row->harga }}</th>
                            <th>{{ $row->jumlah }}</th>
                            <th>
                                <a href="{{ route('barang.edit', $row->id) }}"class="btn btn-warning">Edit</a>
                                <a href="{{ route('barang.hapus', $row->id) }}"class="btn btn-danger">hapus</a>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
