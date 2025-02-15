@extends('admin.master.body')

@section('title')
Biodata Customer 1
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="body table-responsive">
            <table>
                <tr>
                    <td rowspan="10" width="100px">
                        <img src="/website/images/home/testimoni/maya.jpg" width="200px" style="display: block;border-radius: 50%;border-color:white;margin-right:30px" border="2px">
                    </td>
                </tr>
                <tr>
                    <td><b>Nama Lengkap</b></td>
                    <td>:</td>
                    <td>Maya Ida Safitri</td>
                </tr>
                <tr>
                    <td><b>Nama Panggilan</b></td>
                    <td>:</td>
                    <td>maya</td>
                </tr>
                <tr>
                    <td><b>Tanggal Lahir</b></td>
                    <td>:</td>
                    <td>01 Juli 1999</td>
                </tr>
                <tr>
                    <td><b>Alamat</b></td>
                    <td>:</td>
                    <td>Gumelar RT 01 RW 01</td>
                </tr>
                <tr>
                    <td><b>Nomor Telepon</b></td>
                    <td>:</td>
                    <td>081234567890</td>
                </tr>
                <tr>
                    <td><b>E-Mail</b></td>
                    <td>:</td>
                    <td>maya@gmail.com</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection