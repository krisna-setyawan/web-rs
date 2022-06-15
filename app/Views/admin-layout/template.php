<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Administrator</title>

    <link href="template-admin/css/datatable-style.css" rel="stylesheet" />
    <link href="template-admin/css/styles.css" rel="stylesheet" />

    <script src="template-admin/js/font-awesome-all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

    <!-- NAVBAR -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-success">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">RSK Budi Rahayu</a>

        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

        <!-- Navbar-->
        <ul class="navbar-nav ms-auto me-0 me-md-3">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- NAVBAR -->


    <div id="layoutSidenav">
        <!-- SIDEBAR -->
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Pengaturan Website</div>
                        <a class="nav-link" href="header">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-circle-notch"></i></div>
                            Header
                        </a>
                        <a class="nav-link" href="corousel-desktop">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-circle-notch"></i></div>
                            Corousel Desktop
                        </a>
                        <a class="nav-link" href="corousel-mobile">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-circle-notch"></i></div>
                            Corousel Mobile
                        </a>
                        <a class="nav-link" href="shortcut">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-circle-notch"></i></div>
                            Shortcut
                        </a>
                        <a class="nav-link" href="sambutan-dir">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-circle-notch"></i></div>
                            Sambutan Direktur
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Masuk sebagai :</div>
                    Administrator
                </div>
            </nav>
        </div>
        <!-- SIDEBAR -->


        <!-- CONTENT -->
        <div id="layoutSidenav_content">


            <?= $this->renderSection('content') ?>


            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; RSK Budi Rahayu 2022</div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- CONTENT -->
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <script src="template-admin/js/scripts.js"></script>
    <script src="template-admin/assets/demo/simple-datatables@latest.js" crossorigin="anonymous"></script>
    <script src="template-admin/js/datatables-simple-demo.js"></script>
</body>

</html>