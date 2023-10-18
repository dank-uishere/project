<?php
foreach ($data_siswa->result() as $dat) {
}
?>
<!doctype html>
<html lang="en">

<head>
  <?php $this->load->view('blog/partials/header'); ?>
  <?php $this->load->view('blog/partials/style'); ?>
</head>

<body>
  <?php $this->load->view('blog/partials/navbar'); ?>
  <div class="container">
    <h1>
      <?= $title; ?>
    </h1>
    <a href="<?= base_url('data/siswa'); ?>" class="btn btn-danger mb-3">Kembali</a>
    <form method="post" action="<?= base_url('data/siswa_update'); ?>">
      <input type="hidden" name="id" value="<?= $dat->id; ?>">
      <div class="form-group">
        <label for="">Nama Siswa</label>
        <input type="text" name="nama-siswa" class="form-control" value="<?php echo $dat->nama_siswa; ?>" required>
      </div>
      <div class="form-group">
        <label for="">Nama Julukan</label>
        <input type="text" name="julukan-siswa" class="form-control" value="<?php echo $dat->julukan; ?>" required>
      </div>
      <button type="submit" class="btn btn-success mt-3">Submit</button>
    </form>

  </div>
  <?php $this->load->view('blog/partials/script'); ?>
</body>

</html>