<!DOCTYPE html>
<html>

<head>
    <title> Web Prog II | Merancang Template sederhana dengan codeigniter </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/CSS/pelayanan.css">
</head>

<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1> SIPEDES</h1>
                <h3> Sistem Pelayanan Desa Paradise </h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url() ?>user/beranda"> Beranda </a></li>
                    <li><a href="<?php echo base_url() ?>user/pengajuan">pengajuan</a></li>
                    <li><a href="<?php echo base_url() ?>user/pengaduan"> Pengaduan </a></li>
                    <li><a href="<?php echo base_url() ?>user"> Profile </a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>