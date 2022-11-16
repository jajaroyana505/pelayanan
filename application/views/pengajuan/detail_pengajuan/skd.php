<?php
// var_dump($dataSurat);
// echo $dataSurat['nama'];
?>

<h3>
    Detail Pengajuan
</h3><br><br>
<div class="row">
    <div class="col-lg-6">
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Nama Lengkap</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?= $dataSurat['nama']; ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">NIK</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?= $dataSurat['nik']; ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Tempat, Tgl Lahir</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">
                            <?= $dataSurat['ttl']; ?>
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Jenias Kelamin</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?= $dataSurat['kelamin']; ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Alamat KTP</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?= $dataSurat['alamat']; ?></p>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Alamat Domisili</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?= $dataSurat['alamat_domisili']; ?></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <!-- <?php var_dump($dataSurat) ?> -->
        <div class="row justify-content-center" style="height: 45rem;">
            <div class="card col-10 ">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner ">
                        <div class="carousel-item active ">
                            <img src="<?= base_url('assets/img/persyaratan/ktp/ktp.jpeg'); ?>" class="d-block w-100" alt="...">

                        </div>
                        <div class="carousel-item h-100">
                            <img src="<?= base_url('assets/img/persyaratan/pengantar/pengantar.jpg'); ?>" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
            <!-- <div class="col-3">
                <button class="btn btn-success">Setujui</button>
            </div> -->
            <!-- <div class="col-8">
                <img src="<?= base_url('assets/img/default.jpg'); ?>" alt="image 1" class="w-100 rounded-3">
            </div> -->
        </div>
    </div>