<?php
	session_start();
	include("./koneksi.php");
	$id = $_POST['id'];
	$password = $_POST['password'];
	$cek = mysqli_query($db,"SELECT * FROM userodhie
		WHERE username='$id'
		AND password='$password'");
	$data = mysqli_fetch_array($cek);
	$jumlah = mysqli_num_rows($cek);
if ($jumlah>0) {
	$_SESSION['id'] = $data['username'];
	$_SESSION['password'] = $data['password'];
	
	echo "<meta http-equiv='refresh'
	content='0; url=?tampil=pesanmasuk'>";
}
else {

	echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>GAGAL LOGIN</title>
</head>
<body>
<br><br>
    <h1 style='color: red; text-align: center;'>Login GAGAL</h1>
    <h2 style='text-align: center;'>password atau username salah!! harap coba kembali</h2>
    
</body>
</html>";
	echo "<meta http-equiv='refresh'
	content='4; ?tampil=login'>";

}
?>