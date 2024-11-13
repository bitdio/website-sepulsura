<html>
<head>
	<title>Form Login - Universitas Sebelas Maret</title>
</head>
<body>
	<h2>Praktik Login DASPRO 2024</h2>
	
<!-- cek pesan notifikasi -->
<?php
// menghubungkan dengan koneksi
require '../../config/database.php';
require '../../config/proses.php';

//kondisi jika user sudah login	
	if (isset($_SESSION['userid'])) {
		echo "Anda sudah login, <a href='?act=logout&userid=".$_SESSION['userid']."'>logout?</a>";
	} else {
//kondisi jika user sudah login
?>

	<br/>
	
<?php
//pemilihan form login atau daftar
	if($_GET['p']=="daftar"){ 
	require "form_signup.php";
	} else {
	require "form_login.php";
	} 
		}
	?>
</body>
</html>