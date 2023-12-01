<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?= $_SESSION['data']['nama_costumer'] ?> <sup><?= $_SESSION['data']['role'] ?></sup></div>
            </a>

            <?php

            if ($_SESSION['data']['role'] == 'admin') { ?>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item <?= $halaman == 'Home' ? 'active' : ''; ?>">
                    <a class="nav-link" href="../views/home.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Home</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Addons
                </div>

                <li class="nav-item <?= $halaman == 'Barang' ? 'active' : ''; ?>">
                    <a class="nav-link" href="../views/barang.php">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Barang</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            <?php } elseif ($_SESSION['data']['role'] == 'user') { ?>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item <?= $halaman == 'Home User' ? 'active' : ''; ?>">
                    <a class="nav-link" href="../views/home_user.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Home</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Addons
                </div>

                <!-- Nav Item - Tables -->
                <li class="nav-item <?= $halaman == 'Barang User' ? 'active' : ''; ?>">
                    <a class="nav-link" href="../views/barang_user.php">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Tables</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            <?php } ?>



        </ul>
        <!-- End of Sidebar -->