<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
		<?php require "koneksi.php";
		$id = $_GET['id'];
		$ambildata =mysqli_query($koneksi, "select * from login where id='$id'");
		$yuk = mysqli_fetch_array($ambildata);
				
			
		?>
		<form action="prosesedit.php" method="POST">
			<fieldset>
				<legend>Registrasi</legend>
				<p>
					<label>Nama:</label>
					<input type="text" name="nama" value="<?php echo $yuk['nama'] ?>" />
				</p>
					<input type="hidden" name="id" value="<?php echo $yuk['id'] ?>" />
				<p>
					<label>Username:</label>
					<input type="text" name="username" value="<?php echo $yuk['username'] ?>" />
				</p>
				<p>
					<label>Email:</label>
					<input type="email" name="email" value="<?php echo $yuk['email'] ?>" />
				</p>
				<p>
					<label>Password:</label>
					<input type="password" name="password" value="<?php echo $yuk['password'] ?>" />
				</p>
				<p>
					<label>Jenis kelamin:</label>
					<label><input type="radio" name="jenis_kelamin" value="laki-laki" checked/> Laki-laki</label>
					<label>
						<input type="radio" name="jenis_kelamin" value="perempuan" checked/> Perempuan
					</label>
				</p>
				<p>
					<label>Agama:</label>
					<select name="agama">
						<option value="Islam">Islam</option>
						<option value="Kristen">Kristen</option>
						<option value="hindu">hindu</option>
						<option value="budha">budha</option>
					</select>
				</p>
				<p>
					<label>Biografi</label>
					<textarea name="bqiografi"><?php echo $yuk['biografi'] ?></textarea>
				</p>
				<p>
					<input type="submit" name="submit" value="Update data">
				</p>
			</fieldset>
		</form>
</html>