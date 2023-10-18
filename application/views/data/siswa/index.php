<!doctype html>
<html lang="en">

<head>
  <?php $this->load->view('blog/partials/header'); ?>
  <?php $this->load->view('blog/partials/style'); ?>
</head>

<body>
  <?php $this->load->view('blog/partials/navbar'); ?>
  <div class="container">
    <h1>Data Nama Siswa</h1>
    <a href="<?= base_url('data/siswa_add');?>" class="btn btn-success mb-3">Tambah Siswa</a>
    <table class="table table-bordered table-responsive-xl">
      <tr>
        <th width="7px">No</th>
        <th>Nama Siswa</th>
        <th>Julukan</th>
        <th width="2" nowrap>Aksi</th>
      </tr>
      <?php $number=1; foreach ($name_data->result() as $dt) { ?>
      <tr>
        <td><?= $number++;?>.</td>
        <td><?= $dt->nama_siswa;?></td>
        <td><?= $dt->julukan;?></td>
        <td nowrap> 
          <a href="<?= base_url();?>data/siswa_edit/<?= $dt->id;?>">Edit</a>
          <a href="<?= base_url();?>data/siswa_remove/<?= $dt->id;?>">Remove</a>
        </td>
      </tr>
        <?php } ?>
    </table>
  </div>
  <?php $this->load->view('blog/partials/script'); ?>
</body>

</html>