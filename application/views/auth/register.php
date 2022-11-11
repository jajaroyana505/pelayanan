<h1>Halaman Registrasi</h1>

<form action="<?= base_url('auth/register'); ?>" method="POST">
    <table>
        <tr>
            <td>
                <label for="nama">Nama Lengkap</label>
            </td>
            <td>
                <input type="text" name="nama" id="nama">
                <br>
                <?= form_error(
                    'nama',
                    '<small class="text-danger pl-3">',
                    '</small>'
                ); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label for="nik">NIK</label>
            </td>
            <td>
                <input type="text" name="nik" id="nik">
                <br>
                <?= form_error(
                    'nik',
                    '<small class="text-danger pl-3">',
                    '</small>'
                ); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label for="tempat_lahir">Tempat Lahir</label>
            </td>
            <td>
                <input type="text" name="tempat_lahir" id="tempat_lahir">
                <br>
                <?= form_error(
                    'tempat_lahir',
                    '<small class="text-danger pl-3">',
                    '</small>'
                ); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label for="tanggal_lahir">Tanggal Lahir</label>
            </td>
            <td>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir">
                <br>
                <?= form_error(
                    'tanggal_lahir',
                    '<small class="text-danger pl-3">',
                    '</small>'
                ); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label for="jenis_kelamin">Jenis Kelamin</label>
            </td>
            <td>
                <input type="text" name="jenis_kelamin" id="jenis_kelmain">
                <br>
                <?= form_error(
                    'jenis_kelamin',
                    '<small class="text-danger pl-3">',
                    '</small>'
                ); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label for="agama">Agama</label>
            </td>
            <td>
                <input type="text" name="agama" id="agama">
                <br>
                <?= form_error(
                    'agama',
                    '<small class="text-danger pl-3">',
                    '</small>'
                ); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label for="alamat">Alamat</label>
            </td>
            <td>
                <input type="text" name="alamat" id="alamat">
                <br>
                <?= form_error(
                    'alamat',
                    '<small class="text-danger pl-3">',
                    '</small>'
                ); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label for="email">email</label>
            </td>
            <td>
                <input type="emial" name="email" id="email">
                <br>
                <?= form_error(
                    'email',
                    '<small class="text-danger pl-3">',
                    '</small>'
                ); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label for="password1">password1</label>
            </td>
            <td>
                <input type="password" name="password1" id="password1">
                <br>
                <?= form_error(
                    'password1',
                    '<small class="text-danger pl-3">',
                    '</small>'
                ); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label for="password2">password2</label>
            </td>
            <td>
                <input type="password" name="password2" id="password2">
                <br>
                <?= form_error(
                    'password2',
                    '<small class="text-danger pl-3">',
                    '</small>'
                ); ?>
            </td>
        </tr>
        <tr>
            <td>
                <a href="<?= base_url('auth'); ?>">Login</a>
            </td>
            <td>
                <button type="submit">Register</button>
            </td>
        </tr>
    </table>
</form>