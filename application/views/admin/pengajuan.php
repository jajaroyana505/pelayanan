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
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pengajuan as $peng) : ?>
            <tr>
                <th><?= date('d F Y', $peng->tanggal); ?></th>
                <td><?= $peng->nama; ?></td>
                <td><?= $peng->nama_surat; ?></td>
                <td>
                    <?php
                    if ($peng->status == 1) {
                        echo "terverivikasi";
                    } else {
                        echo "menunggu";
                    }
                    ?>
                </td>
                <td>
                    <a href="<?= base_url(); ?>pengajuan/detail_pengajuan/<?= $peng->id; ?>" class="btn btn-primary">Detail</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>