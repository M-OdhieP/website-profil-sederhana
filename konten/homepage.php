<nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow-sm sticky-md-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Muhamad Odhie Prasetio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    <a class="nav-link" href="#about">About</a>
                    <a class="nav-link" href="#project">Projects</a>
                    <a class="nav-link" href="#contact">Contact</a>

                </div>
            </div>
        </div>

    </nav>



<section class="jumbotron text-center">

<img src="img/odhie.jpg" alt="Muhamad Odhie P" width="200" class="rounded img-thumbnail">

<h1 class="display-4 text-light"><b> Muhamad Odhie Prasetio</b></h1>
<a class="btn bg-danger text-white" style="background-color: #55acee;" href="https://www.linkedin.com/in/muhamad-odhie-prasetio-582103165/" role="button">
<i class="bi bi-linkedin me-2 text-white"></i>LinkedIn</a>
<a class="btn bg-danger text-white" style="background-color: #55acee;" href="https://www.instagram.com/odhietio/" role="button">
<i class="bi bi-instagram me-2 text-white"></i>Instagram</a>
<a class="btn bg-danger text-white" style="background-color: #55acee;" href="odhie.pdf" role="button">
<i class="bi bi-download me-2 text-white"></i>CV</a>


<p class="lead text-white fw-5 fw-bold">Universitas Teknokrat Indonesia<br>Teknik Komputer</p>



<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#ffff" fill-opacity="1"
        d="M0,192L0,96L240,96L240,64L480,64L480,256L720,256L720,192L960,192L960,160L1200,160L1200,256L1440,256L1440,320L1200,320L1200,320L960,320L960,320L720,320L720,320L480,320L480,320L240,320L240,320L0,320L0,320Z">
    </path>
</svg>
</section>
<!-- Akhir Helo page -->

<!-- about -->
<section id="about" class="odhie">

<div class="container">
    <div class="row text-center mb-3">
        <div class="col">
            <h2>About Me</h2>
        </div>
    </div>
    <div class="row justify-content-center fs-5 text-center">
        <div class="col-md-7 mb-3">Saya merupakan Fresh
Graduate S1 Teknik Komputer di
fakultas Teknik dan Ilmu
Komputer Universitas Teknokrat
Indonesia. Saya sangat tertarik
dengan dunia IT khususnya
Web Development, Internet of
Things, dan Embeded System. saat ini saya sedang mempelajari Framework PHP seperti lavarel dan CI terima kasih telah mengunjungi profil website saya</div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#ff7777" fill-opacity="1"
        d="M0,256L0,192L240,192L240,160L480,160L480,256L720,256L720,224L960,224L960,128L1200,128L1200,64L1440,64L1440,320L1200,320L1200,320L960,320L960,320L720,320L720,320L480,320L480,320L240,320L240,320L0,320L0,320Z">
    </path>
</svg>

</section>
<!-- Akhir About -->

<!-- projek -->
<section id="project" class="pinkodhie odhie">
<div class="container">
    <div class="row text-center text-light mb-3">
        <div class="col">
            <h2>My Project</h2>
        </div>
    </div>
    <div class="row justify-content-center">


       
            
<?php
$no=1;  $tampil = mysqli_query($db, "SELECT * FROM projek ORDER BY id");
while($data=mysqli_fetch_array($tampil)) { 
$no_projek = $data['no_projek'];
$judul =  $data['judul'];
$keterangan = $data['keterangan'];
$alat = $data['alat']; ?>




<div class="col-md-4 mb-4">
    <div class="card">

    <div class="hover hover-3 text-white rounded">
    <img src="<?= $no_projek ?>" class="card-img-top" alt="Project <?= $no ?>">
          <div class="hover-overlay"></div>
          <div class="hover-3-content px-5 py-4">
            <p class="hover-3-description small text-uppercase mb-0 fw-light fst-italic">
            <!-- <a href="?tampil=detail&id=< $no_projek ?>" style="color: #ffffff; text-decoration:none">Lihat Selengkapnya<br><i class="bi bi-box-arrow-right"></i></a>       -->
      <?= $alat ?>
        </p>
          </div>
        </div>



        <div class="card-body">
            <p class="card-text">
            <div class="fw-bold text-center"> <?= $judul ?>
            </div>  <?= $keterangan ?>
            <!-- <div class="fw-light fst-italic" > <?= $alat ?></div> -->
         </p>
        </div>
    </div>
</div>
<?php $no++; } ?>                   

    </div>


</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#ffff" fill-opacity="1"
        d="M0,128L0,32L288,32L288,96L576,96L576,192L864,192L864,288L1152,288L1152,256L1440,256L1440,320L1152,320L1152,320L864,320L864,320L576,320L576,320L288,320L288,320L0,320L0,320Z">
    </path>
</svg>
</section>
<!-- akhir Projek -->

<!-- kontak -->
<section id="contact" class="odhie">
<div class="container">
    <div class="row text-center mb-3">
        <div class="col">
            <h2>Contact Me</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="?tampil=pesantampil" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" aria-describedby="nama" placeholder="Nama" name="nama"
                        required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="email" name="email"
                        placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">pesan</label>
                    <textarea class="form-control" id="pesan" rows="3" placeholder="pesan" name="pesan" required></textarea>
                </div>
                <button input type="submit" name="submit" value="Submit" class="btn text-light pinkodhie">Kirim</button>
            </form>
        </div>
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#dc3545" fill-opacity="1"
        d="M0,192L0,256L288,256L288,160L576,160L576,96L864,96L864,128L1152,128L1152,96L1440,96L1440,320L1152,320L1152,320L864,320L864,320L576,320L576,320L288,320L288,320L0,320L0,320Z">
    </path>
</svg>
</section>
