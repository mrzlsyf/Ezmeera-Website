<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-pink topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars" style="color: #EC2C7C"></i>
    </button>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0" style="color: #EC2C7C; font-weight:bolder; margin-top: 19px; margin-left: 8px">@yield('title')</h1>
    </div>

    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"></form>

    <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>

        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal" style="color: #EC2C7C">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2" style="color: #EC2C7C"></i>
        </a>
    </ul>

</nav>
<!-- End of Topbar -->