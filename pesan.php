<?php
include "koneksi.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    $insert = mysqli_query($db,"INSERT INTO `pesan`(`nama`, `email`, `pesan`) VALUES ('$nama','$email','$pesan')");

    if(!$insert)
    {
      
    }
    else
    {
?>
<section class="jumbotron text-center">
<h1 class="display-4 text-light"><b>Haiii <?= $nama ?></b></h1>

  <p class="lead text-white fw-5">Pesan anda telah terkirim dan terima kasih telah mengunjungi website saya <i class="bi bi-heart-fill text-white"></i>  <i class="bi bi-heart-fill text-white"></i>  <i class="bi bi-heart-fill text-white"></i></p>




<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#ffff" fill-opacity="1"
        d="M0,192L0,96L240,96L240,64L480,64L480,256L720,256L720,192L960,192L960,160L1200,160L1200,256L1440,256L1440,320L1200,320L1200,320L960,320L960,320L720,320L720,320L480,320L480,320L240,320L240,320L0,320L0,320Z">
    </path>
</svg>
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#dc3545" fill-opacity="1"
        d="M0,192L0,256L288,256L288,160L576,160L576,96L864,96L864,128L1152,128L1152,96L1440,96L1440,320L1152,320L1152,320L864,320L864,320L576,320L576,320L288,320L288,320L0,320L0,320Z">
    </path>
</svg>
<?php        
        
     
        
        echo "<meta http-equiv='refresh' content='5; url=index.php'>";
    }
}

mysqli_close($db); // Close connection
?>


