<?php
if (!defined("INDEX")) die("---");
if (isset($_GET['tampil'])) $tampil = $_GET['tampil']; else $tampil = "homepage";
?>
<div class="box">
<?php
if ($tampil == "homepage")	include("konten/homepage.php");

elseif($tampil == "pesantampil") include("pesan.php");
elseif($tampil == "detail") include("konten/detail.php");
elseif($tampil == "pesanmasuk") include("konten/pesanmasuk.php");
elseif($tampil == "hapuspesan") include("konten/hapuspesan.php");
elseif($tampil == "login") include("konten/login.php");
elseif($tampil == "clogin") include("konten/ceklogin.php");

else echo "Halaman tidak ditemukan";
?>
</div>
