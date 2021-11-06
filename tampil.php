	<?php
	require 'koneksi.php';
	$sql ="SELECT * FROM login";
	$query = mysqli_query($koneksi,$sql);
		?>
			<form action="pencarian.php" method="GET">
				<label>Cari:</label>
				<input type="text" name="cari">
				<input type="submit" value="cari">
			</form>
		<?php 
	echo "<table width:100% border=1 align=center>";
	echo "


		<tr>
			<th>Nama</th>
			<th>Username</th>
			<th>Email</th>
			<th>Password</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Biografi</th>
			</tr>";
		while($data = mysqli_fetch_array($query)){ 
	 ?>
	 		<tr align=justify>
	 			<td><?php echo $data['nama']; ?></td>
	 			<td><?php echo $data['username']; ?></td>
	 			<td><?php echo $data['email']; ?></td>
	 			<td><?php echo $data['password']; ?></td>
	 			<td><?php echo $data['jenis_kelamin']; ?></td>
	 			<td><?php echo $data['agama']; ?></td>
	 			<td><?php echo $data['biografi']; ?></td>
	 		</tr>
	 		<?php }
	 		?>
