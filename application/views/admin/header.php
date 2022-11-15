<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/CSS/pelayanan.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title><?= $judul; ?></title>
</head>

<body>

    <nav class="navbar bg-success ">


        <div class="container container-fluid">
            <img src="<?= base_url('assets/img/logo.png'); ?>" alt="Logo" width="90" height="80" class="d-inline-block align-text-top">
            <div class="text-center text-light">
                <h1 class="fs-1  " href="#">
                    SIPEDES
                </h1>
                <!-- <p>
                    <span class="fs-4">Sistem Pelayanan Desa Cicinde Selatan</span><br>
                    <span class="">Kecamatan Banyusari - Kabupaten Karawang</span>
                </p> -->
            </div>

            <nav class="nav text-light">
                <a class="nav-link text-light" href="<?= base_url('admin'); ?>">Dashboard</a>
                <a class="nav-link text-light" href="<?= base_url('admin/pengajuan'); ?>">Pengajuan</a>
                <a class="nav-link text-light" href="<?= base_url('admin/pengaduan'); ?>">Pengaduan</a>
                <a class="nav-link text-light" href="<?= base_url('admin/profile'); ?>">Profile</a>

            </nav>


        </div>

    </nav>
    <div class="container">