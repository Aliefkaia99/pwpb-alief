<?php
	require'koneksi.php';
$id 		=$_GET['id'];
$sql_hapus	="DELETE FROM login WHERE id ='$id'";
$hapus 		=mysqli_query($koneksi, $sql_hapus);
header("location:tampil.php");
	?>
