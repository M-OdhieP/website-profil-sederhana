<?php
session_start();
if ($_SESSION['id'] == '') {
    echo "<meta http-equiv='refresh'
	content='0; url=?tampil=login'>";
}
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
                    <a class="nav-link active" aria-current="page" href="logout.php">Home</a>

                </div>
            </div>
        </div>

    </nav>




<section class="jumbotron text-center">

<h1 class="display-4 text-light"><b>Pesan Masuk</b></h1>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#ffff" fill-opacity="1"
        d="M0,192L0,96L240,96L240,64L480,64L480,256L720,256L720,192L960,192L960,160L1200,160L1200,256L1440,256L1440,320L1200,320L1200,320L960,320L960,320L720,320L720,320L480,320L480,320L240,320L240,320L0,320L0,320Z">
    </path>
</svg>
</section>



<div class="table-responsive">
<table id="example" width="100%" cellspacing="0" class="data table table-bordered table-striped table-hover" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php

$no=1;
$tampil = mysqli_query($db,"SELECT * FROM pesan ORDER BY id DESC");
while($data=mysqli_fetch_array($tampil)) {
    $id = $data['id'];  
    $nama = $data['nama']; 
    $email = $data['email']; 
    $pesan = $data['pesan']; 

?>

            <tr>
                <td><?php echo $no; ?> 
                </td>
                <td><?= $nama ?></td>
                <td><?= $email ?></td>
                <td><?= $pesan ?></td>

                <td>
                <a onclick="return confirm('yakin ingin menghapus pesan ini ?')" href="?tampil=hapuspesan&id=<?php echo
                $data['id']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
                </td>
            </tr>             </tr> <?php $no++; } ?>
        </tbody>
        <tfoot>
            <tr>
                 <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Aksi</th>


        </tfoot>
    </table>
    </div>	

    <script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>  