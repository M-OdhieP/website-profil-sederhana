<?php
include "koneksi.php";
define("INDEX",true);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    

    <!-- style odhie -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="hover.css">    

    <title>Odhie portofolio</title>
</head>

<body id="home">

    <!-- Makasih ya udah liat websitenya masih banyak kekuranga, masih harus terus berkembang :)-->

<?php include("konten.php"); ?>	

    <!-- footer -->
    <footer class="bg-danger text-white text-center fs-4 pt-0 pb-3">
        <p>Create with <a href="?tampil=login" class="text-white fw-bold"  style="text-decoration:none"><i class="bi bi-heart-fill"></a></i> by <a href="#" class="text-white fw-bold"  style="text-decoration:none" >odhie</a> </p>
    </footer>
    <!-- akhir Footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>  
</body>

</html>
