@extends('admin.master.body')

@section('title')
Tambah Produk
@endsection

@section('content')
<!-- Page Heading -->
<form class="user">
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="exampleInputNama" placeholder="Nama Produk" name="nama_produk">
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="exampleInputDeskripsi" placeholder="Deskripsi" name="deskripsi_produk">
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="exampleInputKomposisi" placeholder="Komposisi" name="komposisi_produk">
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="exampleInputPenggunaan" placeholder="Cara Penggunaan" name="penggunaan_produk">
    </div>
    <div class="form-group">
        <input type="number" class="form-control form-control-user" id="exampleInputHarga" placeholder="Harga Produk" name="harga_produk">
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Foto Produk</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" accept=".jpg">
    </div>
    <br>
    <button type="button" class="btn btn-primary btn-user btn-block" data-toggle="modal" data-target="#exampleModalCenter">
        Simpan
    </button>
</form>
@endsection