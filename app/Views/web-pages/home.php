<?= $this->extend('web-layout/template') ?>

<?= $this->section('content') ?>
<!-- CARAOUSEL -->
<!-- FOR DESKTOP -->
<div class="div-caraousel">
    <section class="" style="padding-top: 80px;">
        <div id="mycarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="assets/img/corousel/slide1.jpg" class="d-block w-100 rounded" alt="slide1">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="assets/img/corousel/slide2.jpg" class="d-block w-100 rounded" alt="slide2">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="assets/img/corousel/slide3.jpg" class="d-block w-100 rounded" alt="slide3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#mycarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mycarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
</div>

<!-- FOR MOBILE -->
<div class="div-caraousel-mobile">
    <section class="" style="padding-top: 87px;">
        <div id="mycarousel-mobile" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="assets/img/corousel/slide-mobile1.jpg" class="d-block w-100 rounded" alt="slide-mobile1">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="assets/img/corousel/slide-mobile2.jpg" class="d-block w-100 rounded" alt="slide-mobile2">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="assets/img/corousel/slide-mobile3.jpg" class="d-block w-100 rounded" alt="slide-mobile3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#mycarousel-mobile" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mycarousel-mobile" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
</div>
<!-- CARAOUSEL -->




<!-- CARDS -->
<section class="container p-3">
    <div class="row">
        <div class="col-lg-3 mb-4">
            <div class="card shadow border-success pt-4" style="border-radius: 5px;">
                <div class="text-center">
                    <img src="assets/img/shortcut/<?= $sc_layanan['img'] ?>" alt="" style="background-color: gray; height: 150px; border-top-left-radius: 5px; border-top-right-radius: 5px;">
                </div>
                <div class=" card-body">
                    <h5 class="card-title text-center">Layanan</h5>
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-outline-success fw-bold"><i class="fa-solid fa-eye"></i>
                            Lihat
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-4">
            <div class="card shadow border-success pt-4" style="border-radius: 5px;">
                <div class="text-center">
                    <img src="assets/img/shortcut/<?= $sc_dokter['img'] ?>" alt="" style="background-color: gray; height: 150px; border-top-left-radius: 5px; border-top-right-radius: 5px;">
                </div>
                <div class=" card-body">
                    <h5 class="card-title text-center">Dokter</h5>
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-outline-success fw-bold"><i class="fa-solid fa-eye"></i>
                            Lihat
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-4">
            <div class="card shadow border-success pt-4" style="border-radius: 5px;">
                <div class="text-center">
                    <img src="assets/img/shortcut/<?= $sc_daftaronline['img'] ?>" alt="" style="background-color: gray; height: 150px; border-top-left-radius: 5px; border-top-right-radius: 5px;">
                </div>
                <div class=" card-body">
                    <h5 class="card-title text-center">Daftar Online</h5>
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-outline-success fw-bold"><i class="fa-solid fa-eye"></i>
                            Lihat
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-4">
            <div class="card shadow border-success pt-4" style="border-radius: 5px;">
                <div class="text-center">
                    <img src="assets/img/shortcut/<?= $sc_telemedicine['img'] ?>" alt="" style="background-color: gray; height: 150px; border-top-left-radius: 5px; border-top-right-radius: 5px;">
                </div>
                <div class=" card-body">
                    <h5 class="card-title text-center">Telemedicine</h5>
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-outline-success fw-bold"><i class="fa-solid fa-eye"></i>
                            Lihat
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CARDS -->




<!-- SAMBUTAN DIREKTUR -->
<section class="container p-3 mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-4 text-center mb-4">
            <div class="bg-image hover-zoom">
                <img class="shadow rounded-circle" src="assets/img/sambutan-direktur/<?= $foto_direktur['value'] ?>" alt="direktur" style="width: 330px;">
            </div>
        </div>
        <div class="col-lg-7 mb-4">
            <div class="col text-center text-secondary">
                <h2>Sambutan Direktur</h2>
                <p class="lead">
                    <?= $nama_direktur['value'] ?>
                </p>
            </div>
            <blockquote class="blockquote" style="text-align: justify;">
                <p> <?= substr($sambutan['value'], 0, 400)  ?> .... </p>
            </blockquote>
            <button class="btn btn-success">Lihat selengkapnya <i class="fa-solid fa-arrow-right-long"></i></button>
        </div>
    </div>
</section>
<!-- SAMBUTAN DIREKTUR -->




<!-- POLIKLINIK -->
<section class="container p-3 mt-5">
    <div class="row mb-0">
        <h4>Poliklinik</h4>
        <hr style="height: 5px; background-color: #FF5F00;">
    </div>
    <div class="row shadow py-2 px-0">

        <div class="col-lg">
            <a class="text-decoration-none text-white" href="">
                <div class="rounded" style="min-height: 120px; background-color: gray;">
                    <img src="" alt="">
                </div>
                <h5 class="mt-2 text-center text-secondary mt-0">Spesialis Saraf</h5>
            </a>
        </div>

        <div class="col-lg">
            <a class="text-decoration-none text-white" href="">
                <div class="rounded" style="min-height: 120px; background-color: gray;">
                    <img src="" alt="">
                </div>
                <h5 class="mt-2 text-center text-secondary mt-0">Spesialis THT</h5>
            </a>
        </div>

        <div class="col-lg">
            <a class="text-decoration-none text-white" href="">
                <div class="rounded" style="min-height: 120px; background-color: gray;">
                    <img src="" alt="">
                </div>
                <h5 class="mt-2 text-center text-secondary mt-0">Spesialis Mata</h5>
            </a>
        </div>

        <div class="col-lg">
            <a class="text-decoration-none text-white" href="">
                <div class="rounded" style="min-height: 120px; background-color: gray;">
                    <img src="" alt="">
                </div>
                <h5 class="mt-2 text-center text-secondary mt-0">Spesialis Bedah</h5>
            </a>
        </div>

        <div class="col-lg">
            <a class="text-decoration-none text-white" href="">
                <div class="text-wrap rounded" style="min-height: 120px; background-color: gray;">
                    <h5 class="text-center pt-4">Lihat <br> selengkapnya <br> <b class="fs-4"> + </b></h5>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- POLIKLINIK -->




<!-- ARTIKEL KESEHATAN -->
<section class="container p-3 mt-5" id="artikel">
    <div class="row mb-0">
        <h4>Artikel Kesehatan</h4>
        <hr style="height: 5px; background-color: #FF5F00;">
    </div>
    <div class="row shadow">

        <div class="col-lg-5 mb-3">
            <a class="text-decoration-none" href="">
                <div class="carousel-item active">
                    <div style="min-height: 250px; background-color: gray;">
                        <!-- <img src="" class="d-block w-100" alt="artikel"> -->
                    </div>
                    <div class="carousel-caption d-md-block">
                        <h5>Pentingnya kesehatan mata di masa pandemi</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-7">
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <a class="text-decoration-none" href="">
                        <div class="carousel-item active">
                            <div style="min-height: 195px; background-color: gray;">
                                <!-- <img src="" class="d-block w-100" alt="artikel"> -->
                            </div>
                            <div class="carousel-caption d-md-block">
                                <h5>Cara mencegah batuk pilek di musim hujan</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 mb-3">
                    <a class="text-decoration-none" href="">
                        <div class="carousel-item active">
                            <div style="min-height: 195px; background-color: gray;">
                                <!-- <img src="" class="d-block w-100" alt="artikel"> -->
                            </div>
                            <div class="carousel-caption d-md-block">
                                <h5>Tips dan Trick menurunkan berat badan</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="d-grid gap-2">
                    <a href="#" class="btn btn-outline-success fw-bold"><i class="fa-solid fa-magnifying-glass"></i>
                        Lihat
                        Artikel
                        Lainnya</a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ARTIKEL KESEHATAN -->




<!-- EVENT & BERITA -->
<section class="container shadow p-3 mt-5" id="berita">
    <div class="row mb-0">
        <h4>Event & Berita</h4>
        <hr style="height: 5px; background-color: #FF5F00;">
    </div>
    <div class="row">

        <div class="col-lg-4 mb-3">
            <a class="text-decoration-none" href="">
                <div class="carousel-item active">
                    <div style="min-height: 270px; background-color: gray;">
                        <!-- <img src="" class="d-block w-100" alt="artikel"> -->
                    </div>
                    <div class="carousel-caption d-md-block">
                        <h5>Sistem Parkir Baru</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 mb-3">
            <a class="text-decoration-none" href="">
                <div class="carousel-item active">
                    <div style="min-height: 270px; background-color: gray;">
                        <!-- <img src="" class="d-block w-100" alt="artikel"> -->
                    </div>
                    <div class="carousel-caption d-md-block">
                        <h5>Jadwal Vaksin Minggu ini</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 mb-3">
            <a class="text-decoration-none" href="">
                <div class="carousel-item active">
                    <div style="min-height: 270px; background-color: gray;">
                        <!-- <img src="" class="d-block w-100" alt="artikel"> -->
                    </div>
                    <div class="carousel-caption d-md-block">
                        <h5>Piagam Penghargaan dari Dinas Kesehatan</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="d-grid gap-2">
            <a href="#" class="btn btn-outline-success fw-bold"><i class="fa-solid fa-magnifying-glass"></i> Lihat
                Berita
                Lainnya</a>
        </div>
    </div>
</section>
<!-- EVENT & BERITA -->

<?= $this->endSection() ?>