<?php
/**
 * @var CodeIgniter\View\View $this
*/
?>

<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div>
<form action="<?= base_url('/user/' . $user['id']) ?>" method="POST" enctype="multipart/form-data">
<div class="mb-3">
      <label for="foto" class="form-label">Upload Foto</label>
      <img src="<?= $user['foto'] ?? '<default-foto' ?>" width="15%" height="10%" alt="" >
      <input type="file" id="foto" name="foto">
    </div>
  <div class="mb-3">
    <label for="nama" class="form-label">nama</label>
    <input type="text" name="nama" value=<?= $user['nama']?> id="nama">
  </div>
  <div class="mb-3">
    <label for="npm" class="form-label">npm</label>
    <input type="text" name="npm" id="npm" value="<?= $user['npm'] ?>" >
  </div>
  <div class="form-floating">
        <select class="form-select mt-2" aria-label="Default select example" name="kelas">
          <option value="" selected disabled>Pilih Kelas</option>
          <?php
          foreach ($kelas as $item) {
          ?>
            <option value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : '' ?> > 
                <?= $item['nama_kelas'] ?> 
        </option>
          <?php } ?>
        </select>
  </div>
  <input type="hidden" name="_method"value="PUT">
  <?= csrf_field() ?>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</div>
<?= $this->endSection() ?>

