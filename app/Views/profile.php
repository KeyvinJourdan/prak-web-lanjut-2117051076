<?php
/**
 * @var CodeIgniter\View\View $this
*/
?>

<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div>
<center><h1> Biodata Diri Mahasiswa </h1></center> <br>
        <center>
        <img src="<?= $user['foto'] ?>" width="15%" height="10%" alt="" >
        </center>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    <center>
        <table>
<tr>
    <td>Nama</td>
    <td>:</td>
    <td><?=$user['nama'] ?></td>
</tr>
<tr>
    <td>Kelas</td>
    <td>:</td>
    <td><?=$user['nama_kelas'] ?></td>
</tr>
<tr>
    <td>NPM</td>
    <td>:</td>
    <td><?=$user['npm'] ?></td>
</tr>
</table>
</center>

</div>
<?= $this->endSection() ?>


    
        