<h1>Halaman Index</h1>
<h3>Hallo , </h3>
<h3>Selamat datang</h3>


<table>
    <tr>
        <td colspan="3">
            <img src="<?= base_url('assets/img/'); ?><?= $user['image']; ?>" alt="" width="100">
        </td>
    </tr>

    <tr>
        <td>Email</td>
        <td>:</td>
        <td><?= $user['email'] ?></td>
    </tr>
</table>
<br>
<a href="<?= base_url('auth/logout'); ?>">Logout</a>