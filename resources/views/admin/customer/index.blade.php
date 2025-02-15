@extends('admin.master.body')

@section('title')
Direktori Customer
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Customer EzmeEra Skincare</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Customer</th>
                        <th>Testimoni</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Maya Ida Safitri</td>
                        <td>Seneng banget. akhirnya ketemu sama krim yang bagus banget.</td>
                        <td>
                            <a href="/admission/customer/biodata_customer-1" class="btn btn-primary btn-icon-split">
                                <span class="text">Biodata Customer</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Tesa Nur Safitri</td>
                        <td>Alhamdulillah setelah pemakaian paket Ezmeera jalan 3 bulan, bekas jerawat aku hempas kak. Senenge banget
                            akhirnya nemu yang pas.</td>
                        <td>
                            <a href="/admission/customer/biodata_customer-1" class="btn btn-primary btn-icon-split">
                                <span class="text">Biodata Customer</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Feni</td>
                        <td>Ahamdulillah kak, mantap banget pakai produk ezmeera almeera skincare. Jerawat ku membaik, bekas
                            jerawatnya memudar pokoknya lov banget.</td>
                        <td>
                            <a href="/admission/customer/biodata_customer-1" class="btn btn-primary btn-icon-split">
                                <span class="text">Biodata Customer</span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection