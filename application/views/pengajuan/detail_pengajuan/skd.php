<?php
var_dump($dataSurat);
echo $dataSurat['nama'];
?>

<h1>
</h1>
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
        <?php var_dump($dataSurat) ?>
    </div>
</div>