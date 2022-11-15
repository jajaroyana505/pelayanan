<h1>Buat pengajuan</h1>

<form action="<?= base_url('pengajuan/buat_pengajuan'); ?>" method="POST">

    <table>
        <?php foreach ($penduduk as $row) : ?>
            <tr>
                <td>NIK</td>
                <input type="text" name="id" value="<?= $row->id; ?>" hidden>
                <td><input type="text" name="nik" value="<?= $row->nik; ?>" disabled></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?= $row->nama; ?>" disabled></td>
            </tr>
            <tr>
                <td>Jens Kelamin</td>
                <td><input type="text" name="jenis_kelamin" value="<?= $row->jenis_kelamin; ?>" disabled></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempat_lahir" value="<?= $row->tempat_lahir; ?>" disabled></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggal_lahir" value="<?= $row->tanggal_lahir; ?>" disabled></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><input type="text" name="agama" value="<?= $row->agama; ?>" disabled></td>
            </tr>
            <tr>
                <td>Alamat KTP</td>
                <td><input type="text-area" name="alamat" value="<?= $row->alamat; ?>" disabled></td>
            </tr>
            <tr>
                <th>Alamat Domisili</th>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>RT</td>
                <td><input type="text" name="rt"></td>
            </tr>
            <tr>
                <td>RW</td>
                <td><input type="text" name="rw"></td>
            </tr>
            <tr>
                <td>Dusun</td>
                <td><input type="text" name="dusun"></td>
            </tr>
            <tr>
                <th>Persyaratan</th>
            </tr>
            <tr>
                <td>persyaratan</td>
                <td><input type="file" name="persyaratan" id=""></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit">

                </td>
            </tr>
            <tr>
                <input type="text" name="kode" value="SKD" hidden>
                <input type="text" name="nama_surat" value="Surat Keterangan Domisili" hidden>
            </tr>

        <?php endforeach; ?>

    </table>
</form>