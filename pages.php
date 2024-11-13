<?php
//memilih halaman
	if ($_GET['p']=="home") 
	{
		require "pages/home.php";
	} else if ($_GET['p']=="tentang-kami") 
	{
		require "pages/tentang-kami.php"; 
	} else if ($_GET['p']=="keanggotaan") 
	{
		require "keanggotaan.php";
	} else if ($_GET['p']=="sirkulasi") 
	{
		require "sirkulasi.php";
	} else if ($_GET['p']=="layanan_referensi") 
	{
		require "pages/layanan_referensi.php";
	} else if ($_GET['p']=="koleksi") 
	{
		require "pages/koleksi.php";
	} else if ($_GET['p']=="berita") 
	{
		require "pages/berita.php";
	} else if ($_GET['p']=="form_login") 
	{
		require "pages/form_login.php";
	} 
	else if ($_GET['p']=="login"){
		echo "<script>window.location='pages/login-v2.php';</script>";
	} 
	else if ($_GET['p']=="form_signup"){
		require "pages/form_signup.php";
	} 
	else if ($_GET['p']=="signup") {
		require "pages/register-v2.php";
	}
	else if ($_GET['p']=="admin"){
		echo "<script>window.location='../admin_LTE/index2.php';</script>";
	}
	else{
		require "pages/home.php";
	}
	?>
