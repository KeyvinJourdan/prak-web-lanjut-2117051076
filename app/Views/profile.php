<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <center><img src="<?= base_url('assets/foto.jpg')?>" width="300px" height="450px" alt="" ><br></center>
    <div><center>
        <table>
        <div class="outlined-box">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $nama ?></td>
            </tr><br>
        </div>
        <div class="outlined-box">
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?= $kelas ?></td>
            </tr><br>
        </div>
        <div class="outlined-box">
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td><?= $npm ?></td>
            </tr>
        </div>
        </table>
        </center>
    </div>
    </center>
</body>
</html>