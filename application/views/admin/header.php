<!DOCTYPE html>
<html>

<head>
    <title> Web Prog II | Merancang Template sederhana dengan codeigniter </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/CSS/pelayanan.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
                    <li><a href="<?php echo base_url() ?>admin">Dhasboard </a></li>
                    <li><a href="<?php echo base_url() ?>admin/pengajuan">Pengajuan</a></li>
                    <li><a href="<?php echo base_url() ?>admin/pengaduan">Pengaduan </a></li>
                    <li><a href="<?php echo base_url() ?>admin/profile">Profile </a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>