<?php

$tampil = mysqli_query($db, "SELECT * FROM projek WHERE no_projek='$_GET[id]'");
$data=mysqli_fetch_array($tampil);
$no_projek = $data['no_projek'];
$judul =  $data['judul'];
$keterangan = $data['keterangan'];
$alat = $data['alat'];
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow-sm sticky-md-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Muhamad Odhie Prasetio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
</div></div></div>
</nav>



<section class="jumbotron text-center">

<h1 class="display-4 text-light"><b><?= $judul ?></b></h1>

<p class="lead text-white fw-5 fw-bold"><?= $alat ?></p>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#ffff" fill-opacity="1"
        d="M0,192L0,96L240,96L240,64L480,64L480,256L720,256L720,192L960,192L960,160L1200,160L1200,256L1440,256L1440,320L1200,320L1200,320L960,320L960,320L720,320L720,320L480,320L480,320L240,320L240,320L0,320L0,320Z">
    </path>
</svg>
</section>  
<center>
<div id="carouselExampleIndicators" class="carousel slide col-md-5 mb-4" data-ride="carousel" id="img">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?= $no_projek ?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= $no_projek ?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= $no_projek ?>" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"><</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">></span>
  </a>
</div>
</center>
    <div class="row justify-content-center fs-5 text-center">
        <div class="col-md-7 mb-3">
          <?= $keterangan ?>
        </div>
</div>

                        
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#dc3545" fill-opacity="1"
        d="M0,192L0,256L288,256L288,160L576,160L576,96L864,96L864,128L1152,128L1152,96L1440,96L1440,320L1152,320L1152,320L864,320L864,320L576,320L576,320L288,320L288,320L0,320L0,320Z">
    </path>
</svg>
