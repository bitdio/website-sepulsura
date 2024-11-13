<?php
// menghubungkan dengan koneksi
include 'koneksi.php';

//kondisi untuk mengaktifkan kerja tombol Signup
if($_POST['submit']=="Signup"){
$simpan="INSERT INTO `user` (`userid`, `nama`, `level`, `password`, `tgl_daftar`) VALUES (NULL, '".$_POST['nama']."', '".$_POST['level']."', '".$_POST['password']."', current_timestamp())";
    if(mysqli_query($koneksi, $simpan)) {
      // notifikasi berhasil
      echo "<script>alert('Data berhasil tersimpan, anda bisa login sekarang!')</script>";
    } else {
      // notifikasi gagal
      echo "Data gagal disimpan di database!";
    }
	
//kondisi untuk mengaktifkan kerja tombol Login
 } else if($_POST['submit']=="Login"){ 

// menangkap data yang dikirim dari form login
$nama = $_POST['nama'];
$password = $_POST['password'];
 
// menyeleksi data users dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from user where nama='$nama' and password='$password'");
$user = mysqli_fetch_array($data);

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
//mengupdate status menjadi login
$update="UPDATE `user` SET `status`='login' WHERE `userid`='".$user['userid']."'";
mysqli_query($koneksi, $update);
	$_SESSION['nama'] = $nama;
	$_SESSION['userid'] = $user['userid'];
	$_SESSION['level'] = $user['level'];
	$_SESSION['status'] = "login";
	header("location:admin/");
	
}else{
	header("location:index.php?pesan=gagal");
 }
 }

//menangkap dan menampilkan pesan	
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan']=="logout"){
			echo "Anda telah berhasil LOGOUT!";
		}else if($_GET['pesan']=="belum_login"){
			echo "Anda harus login untuk mengakses halaman admin!";
		}
	}
//menangkap dan menampilkan pesan

//mengaktifkan fungsi logout
if($_GET['act']=="logout"){

//mengupdate status menjadi logout
$update="UPDATE `user` SET `status`='logout' WHERE `userid`='".$_GET['userid']."'";
mysqli_query($koneksi, $update);

// menghapus semua session
session_destroy();
// mengalihkan halaman sambil mengirim pesan logout
header("location:index.php?pesan=logout");
}
//mengaktifkan fungsi logout
?>