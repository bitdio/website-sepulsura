           <form method="post" action="<?=$_SERVER["PHP_SELF"]?>" >
					<table>
							<tr>
                               <td>Nama</td>
                                <td>:</td>
                                <td><input type="text" id="nama" name="nama"></td>
                            </tr>
							<tr>
                                <td><label for="level">Tipe Pengguna</label></td>
                                <td>:</td>
                                <td>
								<select name="level" id="level">
									<option value="pustakawan">Pustakawan</option>
									<option value="pemustaka">Pemustaka</option>
									<option value="admin">Admin</option>
								</select>
								</td>
                            </tr>
							<tr>
                                <td>Password</td>
                                <td>:</td>
                                <td><input type="password" id="password" name="password"></td>
                            </tr>
							<tr>															
                                <td></td>
                                <td></td>
                                <td><input type="submit" value="Signup" name="submit">  | Sudah punya akun? <a href="index.php">login di sini</a></td>
                            </tr>
						</table>
            </form> 
