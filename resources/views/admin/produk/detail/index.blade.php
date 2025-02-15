@extends('admin.master.body')

@section('title')
Detail Produk 1
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="body table-responsive">
            <table class="table-detail">
                <tbody>
                    <tr>
                        <td>Nama Produk</td>
                        <td>:</td>
                        <td>Facial Wash Brightening</td>
                    </tr>
                    <tr>
                        <td>Deskripi Produk</td>
                        <td>:</td>
                        <td>Sabun wajah untuk membersihkan debu, kotoran, dan sisa make-up.
                            Diperkaya dengan Niacinamide untuk membantu menjadikan kulit wajah menjadi lebih cerah.
                            Sesuai untuk penggunaan kulit normal.</td>
                    </tr>
                    <tr>
                        <td>Komposisi Produk</td>
                        <td>:</td>
                        <td>Aqua DM; Sodium laureth sulfate; Decyl glucoside; coco-betaine; Niacinamide; Cocamide DEA;
                            Glycerin; Lauryl glucoside; PEG-7 glyceryl cocoate; PEG-120 methyl glucose triisostearate;
                            Allantoin; Benzoic acid; Cocamide MEA; Dictyopteris polypodioides extract; Disodiom EDTA;
                            Ethylparaben; Fructose; Glycine; Glycol distearate; Inositol; Lactic acid; Laureth-10;
                            Methylparaben; Parfum; PEG-40 hydrogenated castor oil; Phenoxyethanol; Propylparaben;
                            Sodium benzoate; Sodium lactate; Sodium PCA; Urea;</td>
                    </tr>
                    <tr>
                        <td>Cara Penggunaan</td>
                        <td>:</td>
                        <td>Basahi wajah terlebih dahulu, lalu tuangkan sabun secukupnya pada telapak tangan. Usapkan dan
                            busakan menyeluruh pada wajah. Bilas wajah dengan air bersih.</td>
                    </tr>
                    <tr>
                        <td>Harga Produk</td>
                        <td>:</td>
                        <td>Rp75.000,00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Galeri Produk Facial Wash Brightening</h6>
    </div>
    <div class="card-body">
        <div class="row-gallery">
            <div class="column-gallery">
                <a href="/website/images/product/1_1.jpg" target="_blank">
                    <img src="/website/images/product/1_1.jpg">
                </a>
            </div>
            <div class="column-gallery">
                <a href="/website/images/product/1_2.jpg" target="_blank">
                    <img src="/website/images/product/1_2.jpg">
                </a>
            </div>
            <div class="column-gallery">
                <a href="/website/images/product/2_3.jpg" target="_blank">
                    <img src="/website/images/product/2_3.jpg">
                </a>
            </div>
            <div class="column-gallery">
                <a href="/website/images/product/2_4.jpg" target="_blank">
                    <img src="/website/images/product/2_4.jpg">
                </a>
            </div>
            <div class="column-gallery">
                <a href="/website/images/product/3_5.jpg" target="_blank">
                    <img src="/website/images/product/3_5.jpg">
                </a>
            </div>
            <div class="column-gallery">
                <a href="/website/images/product/3_6.jpg" target="_blank">
                    <img src="/website/images/product/3_6.jpg">
                </a>
            </div>
            <div class="column-gallery">
                <a href="/website/images/product/4_7.jpg" target="_blank">
                    <img src="/website/images/product/4_7.jpg">
                </a>
            </div>
            <div class="column-gallery">
                <a href="/website/images/product/4_8.jpg" target="_blank">
                    <img src="/website/images/product/4_8.jpg">
                </a>
            </div>
        </div>
    </div>
</div>
@endsection