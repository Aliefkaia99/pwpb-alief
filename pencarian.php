<?php
	require "koneksi.php";
	if (isset($_GET['cari'])) 
	{
		$cari = $_GET['cari'];
		echo "<b> Hasil Pencarian : ".$cari."<b>";
	}
	?>
		<table border=1 align=center>
			<tr>
				<th>Nama</th>
				<th>Username</th>
				<th>Email</th>
				<th>Password</th>
				<th>Jenis Kelamin</th>
				<th>Agama</th>
				<th>Biografi</th>
			</tr>
<?php
	if(isset($_GET['cari']))
	{
		$cari	= $_GET['cari'];
		$ok		= "SELECT * FROM contact WHERE 
			nama like '%cari%'				OR 
			username like '%cari%'			OR 
			email like '%cari%' 			OR 
			jenis_kelamin like '%cari%'		OR
			agama like '%cari%'";
		$data	= mysqli_query ($koneksi, $ok);
		WHILE($d=mysqli_fetch_array($data))
			{ ?>
				<tr>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['username']; ?></td>
					<td><?php echo $d['email']; ?></td>
					<td><?php echo $d['password']; ?></td>
					<td><?php echo $d['jenis_kelamin']; ?></td>
					<td><?php echo $d['agama']; ?></td>
					<td><?php echo $d['biografi']; ?></td>
				</tr>
?>php
		}
	} ?>
</table>