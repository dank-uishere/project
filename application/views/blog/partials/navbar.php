<?php 
$uri1 = $this->uri->segment(1);
$uri2 = $this->uri->segment(2);
?>
<nav class="navbar navbar-expand-lg bg-gradient" style=" background-color: darkcyan;">
  <div class="container-fluid">
    <a class="navbar-brand mb-0 h1" href="<?=base_url('blog/home');?>">Dank_u</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php if ($uri1 == '' && $uri2 == '' or $uri1 == 'blog' && $uri2 == 'home') {echo 'active';}?>" aria-current="page" href="<?=base_url('blog/home');?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($uri1 == 'blog' && $uri2 == 'about') {echo 'active';}?>" aria-current="page" href="<?=base_url('blog/about');?>">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($uri1 == 'blog' && $uri2 == 'article') {echo 'active';}?>" aria-current="page" href="<?=base_url('blog/article');?>">Article</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($uri1 == 'blog' && $uri2 == 'contact') {echo 'active';}?>" aria-current="page" href="<?=base_url('blog/contact');?>">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($uri1 == 'blog' && $uri2 == 'faq') {echo 'active';}?>" aria-current="page" href="<?=base_url('blog/faq');?>">FAQ</a>
        </li>
      </ul>  
</nav>