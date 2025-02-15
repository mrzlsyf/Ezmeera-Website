@extends('website.master.body')

@section('content')
<!--
=====================================================
	Theme Inner page Banner
=====================================================
-->
<section class="inner-page-banner">
    <div class="opacity">
        <div class="container">
            <h2>CONTACT US</h2>
            <ul>
                <li><a href="/">Home</a></li>
                <li>/</li>
                <li>Contact Us</li>
            </ul>
        </div> <!-- /.container -->
    </div> <!-- /.opacity -->
</section> <!-- /.inner-page-banner -->



<!--
=====================================================
	Contact Section
=====================================================
-->
<div id="contact-section">
    <div class="container">
        <div class="clear-fix contact-address-content">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="left-side">
                    <div class="theme-title">
                        <h2 style="text-align: left;">Contact Info</h2>
                    </div>
                    <ul>
                        <li>
                            <div class="icon tran3s round-border p-color-bg"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <h6>Alamat</h6>
                            <p>Jalan Pemuda no 18 Purwokerto, Kabupaten Banyumas Jawa Tengah</p>
                        </li>
                        <li>
                            <div class="icon tran3s round-border p-color-bg"><i class="fa fa-phone" aria-hidden="true"></i></div>
                            <h6>Phone</h6>
                            <p>0819-5342-5449</p>
                        </li>
                        <li>
                            <div class="icon tran3s round-border p-color-bg"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                            <h6>Email</h6>
                            <p>cs@ezmeera.com</p>
                        </li>
                    </ul>
                </div> <!-- /.left-side -->
            </div> <!-- /.col- -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="map-area">
                    <div class="theme-title">
                        <h2 style="text-align: left;">OUR LOCATION</h2>
                    </div>
                    <div id="map"></div>
                    <br><br>
                </div> <!-- /.map-area -->
            </div> <!-- /.col- -->
        </div> <!-- /.contact-address-content -->
    </div> <!-- /.container -->
</div> <!-- /#contact-section -->
@endsection