<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EzmeERA || Skincare</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="/website/images/fav-icon/icon.png">

    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="/website/css/style.css">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="/website/css/responsive.css">
</head>

<body>
    <div class="main-page-wrapper">

        @include('website.master.header')
        @yield('content')
        @include('website.master.footer')

        <!-- =============================================
				Loading Transition
			============================================== -->
        <div id="loader-wrapper">
            <div id="preloader_1">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <!-- Whatsapp Button -->
        <div class="popup" onclick="myFunction()"><i class="fa fa-whatsapp" aria-hidden="true"></i>
            <span class="popuptext" id="myPopup">
                <!--no +6281953425449 asli-->
                <a href="https://api.whatsapp.com/send?phone=+6281953425449&text=Halo,%20Saya%20tertarik%20dengan%20produk%20EzmeEraSkincare." class="float-wa" target="_blank">
                    CS
                </a>
                <br>
                <!--no +6281228983737 asli-->
                <a href="https://api.whatsapp.com/send?phone=+6281228983737&text=Halo,%20Saya%20tertarik%20dengan%20produk%20EzmeEraSkincare." class="float-wa" target="_blank">
                    CS 1
                </a>
                <br>
                <!--no +6281296112830 asli-->
                <a href="https://api.whatsapp.com/send?phone=+6281296112830&text=Halo,%20Saya%20tertarik%20dengan%20produk%20EzmeEraSkincare." class="float-wa" target="_blank">
                    CS 2
                </a>
            </span>
        </div>

        <!-- Js File_________________________________ -->

        <script>
            // When the user clicks on div, open the popup
            function myFunction() {
                var popup = document.getElementById("myPopup");
                popup.classList.toggle("show");
            }
        </script>

        <!-- j Query -->
        <script type="text/javascript" src="/website/vendor/jquery.2.2.3.min.js"></script>

        <!-- Bootstrap JS -->
        <script type="text/javascript" src="/website/vendor/bootstrap/bootstrap.min.js"></script>

        <!-- Vendor js _________ -->

        <!-- revolution -->
        <script src="/website/vendor/revolution/jquery.themepunch.tools.min.js"></script>
        <script src="/website/vendor/revolution/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="/website/vendor/revolution/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="/website/vendor/revolution/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="/website/vendor/revolution/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="/website/vendor/revolution/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="/website/vendor/revolution/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="/website/vendor/revolution/revolution.extension.video.min.js"></script>

        <!-- Google map js -->
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZ8VrXgGZ3QSC-0XubNhuB2uKKCwqVaD0&callback=goMap" type="text/javascript"></script> <!-- Gmap Helper -->
        <script src="/website/vendor/gmaps.min.js"></script>
        <!-- owl.carousel -->
        <script type="text/javascript" src="/website/vendor/owl-carousel/owl.carousel.min.js"></script>
        <!-- mixitUp -->
        <script type="text/javascript" src="/website/vendor/jquery.mixitup.min.js"></script>
        <!-- Progress Bar js -->
        <script type="text/javascript" src="/website/vendor/skills-master/jquery.skills.js"></script>
        <!-- Validation -->
        <script type="text/javascript" src="/website/vendor/contact-form/validate.js"></script>
        <script type="text/javascript" src="/website/vendor/contact-form/jquery.form.js"></script>


        <!-- Theme js -->
        <script type="text/javascript" src="/website/js/theme.js"></script>
        <script type="text/javascript" src="/website/js/map-script.js"></script>

    </div> <!-- /.main-page-wrapper -->
</body>

</html>