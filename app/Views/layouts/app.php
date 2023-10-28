<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/css.css') ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('/kelas')?>">Kelas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('/user')?>">User</a>
    </li>
  </ul>
</nav>
    <?= $this->renderSection('content') ?>
</body>
</html>