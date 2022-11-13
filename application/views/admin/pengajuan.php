<h3>Pengajuan</h3>

<?php
var_dump($pengajuan);
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Tangal</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Surat</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pengajuan as $row) : ?>
            <tr>
                <th><?= $row->tanggal; ?></th>
                <td><?= $row->nama; ?></td>
                <td>
                    <?php
                    $kode = $row->kode_surat;
                    if ($kode == 'SKD') {
                        echo 'Surat Keterangan Domisili';
                    } else if ($kode == 'SIK') {
                        echo 'Surat Izin Keramaian';
                    } else if ($kode == 'SKU') {
                        echo 'Surat Izin Usaha';
                    }
                    ?>
                </td>
                <td>
                    <a href="<?= $row->id; ?>">Detail</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>