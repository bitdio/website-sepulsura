	<!-- cek apakah sudah login -->
	<?php
	include "../koneksi.php";
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	
	//memanggil seluruh data dalam tabel database daspro
	$data = mysqli_query($koneksi,"select * from user where userid='".$_SESSION['userid']."'");
	$user = mysqli_fetch_array($data);
	$nama = $user['nama'];
	$level = $user['level'];
	?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo strtoupper($level); ?> - Universitas Sebelas Maret</title>
</head>
<body>
	<h2>Hi <?php echo $nama; ?>!</h2>
	<br/>
	Welcome to Daspro Project! you are logged in as <b><?php echo strtoupper($level); ?>! </b>
	<br>

	<?php
	if ($_SESSION['level']== "admin") {
	?>
	 
	<br/> status:<b> <?php echo strtoupper($_SESSION['status']); ?> </b>
	
	<p>
	<table border="1">
		<tr>
			<td>NAMA</td>
			<td>LEVEL</td>
			<td>STATUS</td>
			<td>AKSI</td>
		</tr>

<?php
$sql_user = mysqli_query($koneksi, "SELECT * FROM user order by userid DESC;");
	foreach ($sql_user as $data_user){
?>
		<tr>
			<td><?php echo $data_user['nama']; ?></td>
			<td><?php echo $data_user['level']; ?></td>
			<td><?php echo $data_user['status']; ?></td>
			<td>edit</td>
		</tr>

<?php } ?>

	</table>
	</p>
	
	<?php
	} else { ?>
	<br/> nama: <?php echo $user['nama']; ?>
	<br/> level: <?php echo $user['level']; ?> 
	<br/> password: <?php echo $user['password']; ?> 
	<br/> status: <?php echo $_SESSION['status']; ?> 
	<br/> tanggal daftar: <?php echo $user['tgl_daftar']; ?> 
	<br/>
	<br/>
	<?php } ?>
	<br><a href="../?act=logout&userid=<?php echo $user['userid']; ?>">LOGOUT</a>
 
</body>
</html>