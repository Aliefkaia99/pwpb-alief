<?php
		include 'koneksi.php';
		if (isset($_POST['submit']))
		{
			$nama		=$_POST['nama'];
			$username	=$_POST['username'];
			$email		=$_POST['email'];
			$password	=$_POST['password'];
			$jenis_kelamin =$_POST['jenis_kelamin'];
			$agama		=$_POST['agama'];
			$biografi	=$_POST['biografi'];


			$input				= "INSERT INTO login(nama,username,email,password,jenis_kelamin,agama,biografi) values('$nama','$username','$email','$password','$jenis_kelamin','$agama','$biografi')";
			mysqli_query($koneksi, $input);
			{ 
				echo "input data yang anda masukan sukses berhasil";
				echo "<script>alert('Data yang anda input sukses');window.location='formulir.html'</script>";
		}
	}
	?>