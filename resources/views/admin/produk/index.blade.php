@extends('admin.master.body')

@section('title')
Direktori Produk
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Produk EzmeEra Skincare</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Produk</th>
                        <th>Harga Produk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>FACIAL WASH BRIGHTENING</td>
                        <td>Rp75.000,00</td>
                        <td>
                            <div class="dropdown mb-4">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Opsi
                                </button>
                                <div class="dropdown-menu dropdown-menu-right animated--fade-in" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Edit Produk</a>
                                    <a class="dropdown-item" href="#">Hapus Produk</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="\admission\produk\detail_produk-1">Detail Produk</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>DAILY SUNSCREEN SPF 30</td>
                        <td>Rp80.000,00</td>
                        <td>
                            <div class="dropdown mb-4">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Opsi
                                </button>
                                <div class="dropdown-menu dropdown-menu-right animated--fade-in" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Edit Produk</a>
                                    <a class="dropdown-item" href="#">Hapus Produk</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="\admission\produk\detail_produk-1">Detail Produk</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>FACIAL CLEANSER</td>
                        <td>Rp80.000,00</td>
                        <td>
                            <div class="dropdown mb-4">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Opsi
                                </button>
                                <div class="dropdown-menu dropdown-menu-right animated--fade-in" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Edit Produk</a>
                                    <a class="dropdown-item" href="#">Hapus Produk</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="\admission\produk\detail_produk-1">Detail Produk</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>BRIGHTENING NIGHT CREAM</td>
                        <td>Rp100.000,00</td>
                        <td>
                            <div class="dropdown mb-4">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Opsi
                                </button>
                                <div class="dropdown-menu dropdown-menu-right animated--fade-in" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Edit Produk</a>
                                    <a class="dropdown-item" href="#">Hapus Produk</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="\admission\produk\detail_produk-1">Detail Produk</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection