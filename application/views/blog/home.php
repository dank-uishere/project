<!doctype html>
<html lang="en">

<head>
  <?php $this->load->view('blog/partials/header'); ?>
  <?php $this->load->view('blog/partials/style'); ?>
</head>

<body>
  <?php $this->load->view('blog/partials/navbar'); ?>
  <div class="container">
    <h1>Ini Halaman "Home"</h1>
    <?php for ($card = 1; $card <= 3; $card++): ?>
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">
            <?= $card; ?>.This Is Home Card
          </h5>
          <p class="card-text">Hello World</p>
          <a href="#" class="btn btn-success">Go somewhere</a>
        </div>
      </div>
    <?php endfor; ?>
  </div>
  <?php $this->load->view('blog/partials/script'); ?>
</body>

</html>