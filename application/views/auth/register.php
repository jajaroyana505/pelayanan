<h1>Halaman Registrasi</h1>

<form action="<?= base_url('auth/register'); ?>" method="POST">
    <table>
        <tr>
            <td>
                <label for="nama">Nama Lengkap</label>
            </td>
            <td>
                <input type="text" name="nama" id="nama">
                <?= form_error(
                    'nama',
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
                <input type="password1" name="password1" id="password1">
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
                <input type="password2" name="password2" id="password2">
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