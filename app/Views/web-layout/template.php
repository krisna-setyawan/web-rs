<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/75168c59f4.js" crossorigin="anonymous"></script>

    <!-- Boxicons -->
    <link href="boxicons/css/boxicons.min.css" rel="stylesheet">

    <title><?= $nama['value'] ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko&family=Ubuntu&display=swap" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


    <style>
        body {
            font-family: 'Ubuntu', sans-serif;
        }

        #btn-back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
        }

        .carousel-item {
            background-size: cover;
        }

        @media only screen and (max-width: 800px) {
            .div-caraousel-mobile {
                padding-top: 30px;
                padding-bottom: 15px;
                padding-left: 10px;
                padding-right: 10px;
                display: block;
            }

            .div-caraousel {
                display: none;
            }
        }

        @media only screen and (min-width: 800px) {
            .div-caraousel-mobile {
                display: none;
            }

            .div-caraousel {
                padding-top: 43px;
                padding-bottom: 30px;
                padding-left: 50px;
                padding-right: 50px;
                display: block;
            }
        }
    </style>
</head>

<body>
    <!-- Back to top button -->
    <button type="button" class="btn btn-floating btn-lg text-white" style="background-color: #05595B; font-size: 17px;" id="btn-back-to-top" data-bs-toggle="modal" data-bs-target="#modal-hubungi-kami">
        Hubungi <br> kami &nbsp;&nbsp;<i class="fa-solid fa-phone-flip"></i>
    </button>


    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
    </div>


    <!-- NAVBAR -->
    <nav id="header" class="navbar fixed-top navbar-expand-lg navbar-dark" style=" background-color: #1FAB89;">
        <div class="container">
            <img class="me-3" src="assets/img/header/logo.png" alt="" width="40px">
            <a class="navbar-brand" href="#">
                <?= $nama['value'] ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse fs-4" id="navbarNav" style="font-family: 'Teko', sans-serif;">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link" style="color: #D7FBE8;" href="#"> Beranda</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" style="color: #D7FBE8;" href="#"> Profil</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" style="color: #D7FBE8;" href="#"> Pelayanan</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" style="color: #D7FBE8;" href="#artikel"> Artikel Kesehatan</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" style="color: #D7FBE8;" href="#berita"> Event & Berita</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" style="color: #D7FBE8;" href="#"> Informasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVBAR -->


    <?= $this->renderSection('content') ?>



    <!-- FOOTER -->
    <footer class="text-lg-start text-light mt-5" style="background-color: #1FAB89;">
        <section class=" py-3">
            <div class="container text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-5 mx-auto mb-4">
                        <h3 style="font-family: 'Teko', sans-serif; letter-spacing: 1px;">RSK &nbsp;Budi &nbsp;Rahayu
                            &nbsp;Blitar</h3>
                        <p>
                            Jl. Ahmad Yani No 18<br>
                            Kecamatan Kepanjen Kidul, Kota Blitar<br>
                            Provinsi Jawa Timur, Indonesia <br><br>
                            Phone: (0342) 801066, 807802<br>
                            Email: rskbr@budirahayu.com<br>
                        </p>
                    </div>

                    <div class="col-md-2 mb-4">
                        <h6 class="text-uppercase">Link Terkait</h6>
                        <hr class="mb-2 mt-0 d-inline-block mx-auto bg-white" style="width: 60px; height: 3px" />
                        <p>
                            <a href="http://budirahayu.com/daftar-online" class="text-light text-decoration-none">Daftar
                                Online</a>
                        </p>
                        <p>
                            <a href="http://budirahayu.com/telemedicine" class="text-light text-decoration-none">Telemedicine</a>
                        </p>
                        <p>
                            <a href="#" class="text-light text-decoration-none">BrandFlow</a>
                        </p>
                        <p>
                            <a href="#" class="text-light text-decoration-none">Bootstrap Angular</a>
                        </p>
                    </div>

                    <div class="col-md-3 mb-4">
                        <h6 class="text-uppercase">Sosial Media</h6>
                        <hr class="mb-2 mt-0 d-inline-block mx-auto" style="width: 60px; height: 3px" />
                        <p>
                            <a href="#" class="text-decoration-none text-light facebook"><i class="bx bxl-facebook"></i>
                                Facebook
                            </a>
                        </p>
                        <p>
                            <a href="#" class="text-decoration-none text-light instagram"><i class="bx bxl-instagram"></i>
                                Instagram
                            </a>
                        </p>
                        <p>
                            <a href="#" class="text-decoration-none text-light google-plus"><i class="bx bxl-whatsapp"></i>
                                Whatsapp
                            </a>
                        </p>
                        <p>
                            <a href="#" class="text-decoration-none text-light youtube"><i class="bx bxl-youtube"></i>
                                Youtube
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            Copyright © 2022 RSK Budi Rahayu Blitar
        </div>
    </footer>
    <!-- FOOTER -->




    <!-- Modal -->
    <div class="modal fade" id="modal-hubungi-kami" tabindex="-1" aria-labelledby="label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="label">Hubungi Kami</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-success"><i class="fa-brands fa-whatsapp"></i>
                            Customer Service
                        </a>
                        <a href="#" class="btn btn-success"><i class="fa-brands fa-whatsapp"></i>
                            Instalasi Gawat Darurat
                        </a>
                        <a href="#" class="btn btn-success"><i class="fa-brands fa-whatsapp"></i>
                            Radiologi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        //Get the button
        let mybutton = document.getElementById("btn-back-to-top");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                mybutton.style.display = "block";
                mybutton.style.zIndex = "5";
            } else {
                mybutton.style.display = "none";
            }
        }
    </script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>