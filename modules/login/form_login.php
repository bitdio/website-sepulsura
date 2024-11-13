<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="nama" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="submit" value="Login"> | Belum punya akun? <a href="index.php?p=daftar">daftar di sini</a></td>
			</tr>
		</table>			
</form>