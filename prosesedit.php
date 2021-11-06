<?php 
	include 'koneksi.php';
	if (isset($_POST['submit']))
	{
		$AC		=$_POST['id'];
		$A		=$_POST['nama'];
		$B		=$_POST['username'];
		$C		=$_POST['email'];
		$D		=$_POST['password'];
		$E 		=$_POST['jenis_kelamin'];
		$F		=$_POST['agama'];
		$G		=$_POST['biografi'];
		$update		="UPDATE login SET nama='$A' ,username='$B' ,email='$C' ,password='$D' ,jenis_kelamin='$E' ,agama='$F' ,biografi='$G' WHERE id='$AC'";
		mysqli_query($koneksi, $update);
			{
				echo "Update Data yang anda masukan sukses berhasil";
				echo "<script>alert('Update Data Anda Sukses');
				window.location='tampil.php'</script>";
			}

	}
?>