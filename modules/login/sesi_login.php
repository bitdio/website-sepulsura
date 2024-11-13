<?php
//MEMBUAT SESSION TIME OUT
	//session_start();
	$timeout = 10; // setting timeout dalam menit
	$error="pages/404.php";
	$homepage="../";
	$logout = "index.php"; // redirect halaman logout
	$timeout = $timeout * 60; // menit ke detik
	if(isset($_SESSION['start_session'])){
		$elapsed_time = time()-$_SESSION['start_session'];
		if($elapsed_time >= $timeout){
			mysqli_query($koneksi,"UPDATE user SET status='logout' WHERE userid='".$_SESSION['userid']."'");
			session_destroy();
			echo "<script type='text/javascript'>alert('Sesi telah berakhir');window.location='$logout'</script>";
		}
	}
	$_SESSION['start_session']=time();
	
//cek apakah user aktif sudah login -->
	if($_SESSION['status']!="login"){
		header("location:../login/index.php");
		echo "<script>alert('Anda belum melakukan login, silakan login!');";
	
	//jika user belum diaktifkan maka muncul halaman wait.php
	if(($_SESSION['status']!="login")&&($query_users['aktivasi']!="1")){ header("location:pages/wait.php"); }
	
	} 
?>