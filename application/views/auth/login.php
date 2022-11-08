<h1>login</h1>
<?= $this->session->flashdata('pesan'); ?>
<form action="<?= base_url('auth'); ?>" method="POST">
    <table>
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
                <label for="password">password</label>
            </td>
            <td>
                <input type="password" name="password" id="password">
                <?= form_error(
                    'password',
                    '<small class="text-danger pl-3">',
                    '</small>'
                ); ?>
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>
                <button type="submit">Login</button>
            </td>
        </tr>
    </table>
    <br><br>
    <a href="<?= base_url('auth/register'); ?>">Registrasi</a>
</form>